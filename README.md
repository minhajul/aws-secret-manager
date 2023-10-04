# AWS Secret Manager for Laravel

Easy implementation of AWS secret manager just to get the key value pair of specific secret id.

## Installation

You can install the package via composer:

```bash
composer require minhajul/aws-secret-manager
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="aws-secret-manager-config"
```

This is the contents of the published config file:

```php
return [
    'aws_secret_key_id' => env('AWS_ACCESS_KEY_ID'),
    'aws_secret_access_key' => env('AWS_SECRET_ACCESS_KEY'),
    'aww_default_region' => env('AWS_DEFAULT_REGION')
];
```

## Usage

```php
use Minhajul\AwsSecretManager\AwsSecretManager;

$awsSecretManager = new AwsSecretManager();
dd($awsSecretManager->getSecretKey('local_encryption_key'));
```

## Testing

```bash
composer test
```

## Credits
- [Md Minhajul Islam](https://github.com/minhajul)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
