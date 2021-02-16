<?php


    namespace App\Transformers;


    class Json
    {

        public static function response($error = null, $message = null)
        {
            return
                [
                    'error' => $error,
                    'message' => $message
                ];
        }

    }
