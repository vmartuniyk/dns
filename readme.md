# Retrieve DNS records

This package contains a class that can fetch DNS records.

```php
use Vmartuniyk\Dns\Dns;

$dns = new Dns();

$dns->getAllDnsRecords('gmail.com'); 

```

## Installation

You can install the package via composer:

```bash
composer require vmartuniyk/dns
```

## Usage


```php
use Vmartuniyk\Dns\Dns;

$dns = new Dns();

$data = $dns->getAllDnsRecords('gmail.com'); // returns all available dns records

print_r($data);

```

### Testing

``` bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.