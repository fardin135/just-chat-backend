<?php

namespace App\Traits;

trait ApiResponses
{
    public function success($message = 'Success', $data = null, $status_code = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $status_code);
    }

    public function error($message = 'Error', $data = null, $status_code = 400)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $status_code);
    }

    public function notFound($message = 'Resource not found', $data = null, $status_code = 404)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $status_code);
    }

    public function unauthorized($message = 'Unauthorized', $data = null, $status_code = 401)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $status_code);
    }

    public function validationError($message = 'Validation Error', $errors, $status_code = 422)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $errors
        ], $status_code);
    }

    public function serverError($message = 'Server Error', $data = null, $status_code = 500)
    {
        return $this->error($message, $status_code, $data);
    }


    public function customResponse($message = 'Custom Response', $data, $status_code = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $status_code);
    }

    public function forbidden($message = 'Forbidden', $data = null, $status_code = 403)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $status_code);
    }

    public function showData($data = null)
    {
        return response()->json([
            'status' => 'success',
            'data' => $data
        ], 200);
    }
}
