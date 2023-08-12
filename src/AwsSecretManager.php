<?php

namespace Minhajul\AwsSecretManager;

use Aws\Exception\AwsException;
use Aws\SecretsManager\SecretsManagerClient;

class AwsSecretManager
{
    public $client;

    public function __construct()
    {
        $this->client = new SecretsManagerClient([
            'region' => config('aws-secret-manager.aww_default_region'),
        ]);
    }

    public function getSecretKey(string $key)
    {
        try {
            $result = $this->client->getSecretValue([
                'SecretId' => $key,
                'VersionStage' => "AWSCURRENT",
            ]);

            if (isset($result['SecretString'])) {
                $secret = $result['SecretString'];
            } else {
                $secret = base64_decode($result['SecretBinary']);
            }

            return json_decode($secret, true);

        } catch (AwsException $e) {
            $error = $e->getAwsErrorCode();
            if ($error == 'DecryptionFailureException') {
                // Secrets Manager can't decrypt the protected secret text using the provided AWS KMS key.
                // Handle the exception here, and/or rethrow as needed.
                throw $e;
            }
            if ($error == 'InternalServiceErrorException') {
                // An error occurred on the server side.
                // Handle the exception here, and/or rethrow as needed.
                throw $e;
            }
            if ($error == 'InvalidParameterException') {
                // You provided an invalid value for a parameter.
                // Handle the exception here, and/or rethrow as needed.
                throw $e;
            }
            if ($error == 'InvalidRequestException') {
                // You provided a parameter value that is not valid for the current state of the resource.
                // Handle the exception here, and/or rethrow as needed.
                throw $e;
            }
            if ($error == 'ResourceNotFoundException') {
                // We can't find the resource that you asked for.
                // Handle the exception here, and/or rethrow as needed.
                throw $e;
            }
        }

        throw new ('Nothing found with the given key');
    }
}
