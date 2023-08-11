<?php

return [
    'secret_id' => env('AWS_SECRET_MANAGER_NAME'),
    'aws_secret_key_id' => env('AWS_ACCESS_KEY_ID'),
    'aws_secret_access_key' => env('AWS_SECRET_ACCESS_KEY'),
    'aww_default_region' => env('AWS_DEFAULT_REGION')
];
