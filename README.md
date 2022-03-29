> # Qase TMS PHP client
>
> Auto-generated code based on our [OpenAPI specification][api].

## How to integrate

```bash
$ composer require qase/api
```

## Example of usage

```php
use GuzzleHttp\Client;
use Qase\Client\Api\RunsApi;
use Qase\Client\Configuration;
use Qase\Client\Model\RunCreate;

$config = Configuration::getDefaultConfiguration()
    ->setHost(getenv('QASE_API_BASE_URL'))
    ->setApiKey('Token', getenv('QASE_API_TOKEN'));

$runApi = new RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$run = $runApi->createRun(getenv('QASE_PROJECT_CODE'), new RunCreate([
    'title' => sprintf('PHPUnit [%F]', microtime(true)),
    'is_autotest' => true,
]));
```

<!-- references -->

[api]: https://github.com/qase-tms/specs
