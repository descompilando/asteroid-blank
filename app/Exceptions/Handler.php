<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Sentry\State\Scope;
use Throwable;
use Tymon\JWTAuth\Facades\JWTAuth;
use function Sentry\configureScope;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param Exception $exception
     * @return void
     * @throws Exception
     */
    public function report(Throwable $exception)
    {
        if (app()->bound('sentry')) {
            $sentry = app('sentry');
            $params = array('id' => null);

            if (auth()->check()) {
                try {
                    $user = auth()->user();

                    $params['id'] = $user->id;
                    $params['name'] = $user->name;
                    $params['email'] = $user->email;

                    configureScope(function (Scope $scope) use ($params) : void {
                        $scope->setUser($params);
                    });
                } catch (Throwable $throwable) { }
            }

            if ($this->shouldReport($exception))
                $sentry->captureException($exception);
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  Request  $request
     * @param  Exception  $exception
     * @return Response
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $request->expectsJson()
            ? response()->json(['error' => "Sessão expirou"], 401)
            : redirect()->guest($exception->redirectTo() ?? route('auth'));
    }
}
