# Qase\Client\ResultsApi

All URIs are relative to https://api.qase.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createResult()**](ResultsApi.md#createResult) | **POST** /result/{code}/{id} | Create test run result. |
| [**createResultBulk()**](ResultsApi.md#createResultBulk) | **POST** /result/{code}/{id}/bulk | Bulk create test run result. |
| [**deleteResult()**](ResultsApi.md#deleteResult) | **DELETE** /result/{code}/{id}/{hash} | Delete test run result. |
| [**getResult()**](ResultsApi.md#getResult) | **GET** /result/{code}/{hash} | Get test run result by code. |
| [**getResults()**](ResultsApi.md#getResults) | **GET** /result/{code} | Get all test run results. |
| [**updateResult()**](ResultsApi.md#updateResult) | **PATCH** /result/{code}/{id}/{hash} | Update test run result. |


## `createResult()`

```php
createResult($code, $id, $resultCreate): \Qase\Client\Model\CreateResult200Response
```

Create test run result.

This method allows to create test run result by Run Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$resultCreate = new \Qase\Client\Model\ResultCreate(); // \Qase\Client\Model\ResultCreate

try {
    $result = $apiInstance->createResult($code, $id, $resultCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->createResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **id** | **int**| Identifier. | |
| **resultCreate** | [**\Qase\Client\Model\ResultCreate**](../Model/ResultCreate.md)|  | |

### Return type

[**\Qase\Client\Model\CreateResult200Response**](../Model/CreateResult200Response.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createResultBulk()`

```php
createResultBulk($code, $id, $resultCreateBulk): \Qase\Client\Model\Response
```

Bulk create test run result.

This method allows to create a lot of test run result at once.  If you try to send more than 2,000 results in a single bulk request, you will receive an error with code 413 - Payload Too Large.  If there is no free space left in your team account, when attempting to upload an attachment, e.g., through reporters, you will receive an error with code 507 - Insufficient Storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$resultCreateBulk = new \Qase\Client\Model\ResultCreateBulk(); // \Qase\Client\Model\ResultCreateBulk

try {
    $result = $apiInstance->createResultBulk($code, $id, $resultCreateBulk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->createResultBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **id** | **int**| Identifier. | |
| **resultCreateBulk** | [**\Qase\Client\Model\ResultCreateBulk**](../Model/ResultCreateBulk.md)|  | |

### Return type

[**\Qase\Client\Model\Response**](../Model/Response.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResult()`

```php
deleteResult($code, $id, $hash): \Qase\Client\Model\HashResponse
```

Delete test run result.

This method allows to delete test run result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$hash = 'hash_example'; // string | Hash.

try {
    $result = $apiInstance->deleteResult($code, $id, $hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->deleteResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **id** | **int**| Identifier. | |
| **hash** | **string**| Hash. | |

### Return type

[**\Qase\Client\Model\HashResponse**](../Model/HashResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResult()`

```php
getResult($code, $hash): \Qase\Client\Model\ResultResponse
```

Get test run result by code.

This method allows to retrieve a specific test run result by Hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$hash = 'hash_example'; // string | Hash.

try {
    $result = $apiInstance->getResult($code, $hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->getResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **hash** | **string**| Hash. | |

### Return type

[**\Qase\Client\Model\ResultResponse**](../Model/ResultResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResults()`

```php
getResults($code, $status, $run, $caseId, $member, $api, $fromEndTime, $toEndTime, $limit, $offset): \Qase\Client\Model\ResultListResponse
```

Get all test run results.

This method allows to retrieve all test run results stored in selected project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$status = 'status_example'; // string | A single test run result status. Possible values: in_progress, passed, failed, blocked, skipped, invalid.
$run = 'run_example'; // string | A list of run IDs separated by comma.
$caseId = 'caseId_example'; // string | A list of case IDs separated by comma.
$member = 'member_example'; // string | A list of member IDs separated by comma.
$api = True; // bool
$fromEndTime = 'fromEndTime_example'; // string | Will return all results created after provided datetime. Allowed format: `Y-m-d H:i:s`.
$toEndTime = 'toEndTime_example'; // string | Will return all results created before provided datetime. Allowed format: `Y-m-d H:i:s`.
$limit = 10; // int | A number of entities in result set.
$offset = 0; // int | How many entities should be skipped.

try {
    $result = $apiInstance->getResults($code, $status, $run, $caseId, $member, $api, $fromEndTime, $toEndTime, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->getResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **status** | **string**| A single test run result status. Possible values: in_progress, passed, failed, blocked, skipped, invalid. | [optional] |
| **run** | **string**| A list of run IDs separated by comma. | [optional] |
| **caseId** | **string**| A list of case IDs separated by comma. | [optional] |
| **member** | **string**| A list of member IDs separated by comma. | [optional] |
| **api** | **bool**|  | [optional] |
| **fromEndTime** | **string**| Will return all results created after provided datetime. Allowed format: &#x60;Y-m-d H:i:s&#x60;. | [optional] |
| **toEndTime** | **string**| Will return all results created before provided datetime. Allowed format: &#x60;Y-m-d H:i:s&#x60;. | [optional] |
| **limit** | **int**| A number of entities in result set. | [optional] [default to 10] |
| **offset** | **int**| How many entities should be skipped. | [optional] [default to 0] |

### Return type

[**\Qase\Client\Model\ResultListResponse**](../Model/ResultListResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateResult()`

```php
updateResult($code, $id, $hash, $resultUpdate): \Qase\Client\Model\HashResponse
```

Update test run result.

This method allows to update test run result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$hash = 'hash_example'; // string | Hash.
$resultUpdate = new \Qase\Client\Model\ResultUpdate(); // \Qase\Client\Model\ResultUpdate

try {
    $result = $apiInstance->updateResult($code, $id, $hash, $resultUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->updateResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **id** | **int**| Identifier. | |
| **hash** | **string**| Hash. | |
| **resultUpdate** | [**\Qase\Client\Model\ResultUpdate**](../Model/ResultUpdate.md)|  | |

### Return type

[**\Qase\Client\Model\HashResponse**](../Model/HashResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
