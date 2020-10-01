<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Sentry\State\Scope;
use Throwable;
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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $throwable) {
            $this->sendToSentry($throwable);
        });
    }

    private function sendToSentry(Throwable $throwable)
    {
        if (!app()->bound('sentry')) {
            return;
        }

        $sentry = app('sentry');

        if (auth()->check()) {
            try {
                $user = auth()->user();
                configureScope(function (Scope $scope) use ($user) : void {
                    $scope->setUser([
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email
                    ]);
                });
            } catch (Throwable $_) {
                //
            }
        }

        $sentry->captureException($throwable);
    }
}