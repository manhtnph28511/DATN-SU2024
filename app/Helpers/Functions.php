<?php

function ApiResponse($success =  true, $statusCode = 200, $message = '', $data = null)
{
    if ($success) {
        return response()->json([
            'success' => $success,
            'message' => $message,
            'status' => $statusCode,
            'data' => $data
        ], $statusCode);
    }
    return response()->json([
        'success' => $success,
        'status' => $statusCode,
        'message' => $message,
    ], $statusCode);
}
