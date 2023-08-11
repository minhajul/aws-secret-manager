# AWS Secret Manager for Laravel

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require minhajul/aws-secret-manager
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="aws-secret-manager-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="aws-secret-manager-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="aws-secret-manager-views"
```

## Usage

```php
$awsSecretManager = new Minhajul\AwsSecretManager();
echo $awsSecretManager->echoPhrase('Hello, Minhajul!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Md Minhajul Islam](https://github.com/minhajul)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
