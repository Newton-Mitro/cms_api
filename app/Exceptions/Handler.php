<?php

namespace App\Exceptions;

use Exception;
use Throwable;
use ParseError;
use PDOException;
use ErrorException;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\JsonEncodingException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class Handler extends ExceptionHandler {
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register() {
        $this->renderable(function (Exception $exception, $request) {
            if ($request->expectsJson()) {
                if ($exception instanceof ModelNotFoundException) {
                    return response()->json([
                        "data" => null,
                        "message" => 'Model not found',
                        'errors' => null,
                    ], Response::HTTP_NOT_FOUND);
                }

                if ($exception instanceof NotFoundHttpException) {
                    return response()->json([
                        "data" => null,
                        "message" => $exception->getMessage(),
                        'errors' => null,
                    ], Response::HTTP_NO_CONTENT);
                }

                if ($exception instanceof AccessDeniedHttpException) {
                    return response()->json([
                        "data" => null,
                        "message" => 'You do not have enough permission',
                        'errors' => null,
                    ], Response::HTTP_UNAUTHORIZED);
                }

                if ($exception instanceof PDOException) {
                    return response()->json([
                        "data" => null,
                        "message" => $exception->errorInfo[2],
                        'errors' => null
                    ], Response::HTTP_NOT_FOUND);
                }

                if ($exception instanceof JsonEncodingException) {
                    return response()->json([
                        "data" => null,
                        "message" => $exception->getMessage(),
                        'errors' => null,
                    ], Response::HTTP_NOT_FOUND);
                }

                if ($exception instanceof ErrorException) {
                    return response()->json([
                        "data" => null,
                        "message" => $exception->getMessage(),
                        'errors' => null,
                    ], Response::HTTP_NOT_FOUND);
                }

                if ($exception instanceof ParseError) {
                    return response()->json([
                        "data" => null,
                        "message" => $exception->getMessage(),
                        'errors' => null,
                    ], Response::HTTP_NOT_FOUND);
                }
            }
        });
    }
}
