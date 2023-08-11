<?php

use Illuminate\Support\Facades\Facade;

class AwsSecretManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AwsSecretManager';
    }
}
