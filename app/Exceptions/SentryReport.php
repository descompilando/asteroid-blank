<?php

namespace App\Exceptions;

use Illuminate\Support\Arr;
use Sentry\State\Scope;
use Throwable;
use function Sentry\configureScope;

class SentryReport
{
    static $dontReport = [

    ];

    private static function shouldReport(Throwable $exception)
    {
        return is_null(Arr::first(self::$dontReport, function ($type) use ($exception) {
            return $exception instanceof $type;
        }));
    }

    public static function report(Throwable $exception)
    {
        if (!self::shouldReport($exception) or !app()->bound('sentry')) {
            return;
        }

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

        $sentry->captureException($exception);
    }
}