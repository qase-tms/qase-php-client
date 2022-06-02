# Qase\Client\RunsApi

All URIs are relative to https://api.qase.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**completeRun()**](RunsApi.md#completeRun) | **POST** /run/{code}/{id}/complete | Complete a specific run.
[**createRun()**](RunsApi.md#createRun) | **POST** /run/{code} | Create a new run.
[**deleteRun()**](RunsApi.md#deleteRun) | **DELETE** /run/{code}/{id} | Delete run.
[**getRun()**](RunsApi.md#getRun) | **GET** /run/{code}/{id} | Get a specific run.
[**getRuns()**](RunsApi.md#getRuns) | **GET** /run/{code} | Get all runs.
[**updateRunPublicity()**](RunsApi.md#updateRunPublicity) | **PATCH** /run/{code}/{id}/public | Update publicity of a specific run.


## `completeRun()`

```php
completeRun($code, $id): \Qase\Client\Model\Response
```

Complete a specific run.

This method allows to complete a specific run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->completeRun($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->completeRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **id** | **int**| Identifier. |

### Return type

[**\Qase\Client\Model\Response**](../Model/Response.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRun()`

```php
createRun($code, $runCreate): \Qase\Client\Model\IdResponse
```

Create a new run.

This method allows to create a run in selected project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$runCreate = new \Qase\Client\Model\RunCreate(); // \Qase\Client\Model\RunCreate

try {
    $result = $apiInstance->createRun($code, $runCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->createRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **runCreate** | [**\Qase\Client\Model\RunCreate**](../Model/RunCreate.md)|  |

### Return type

[**\Qase\Client\Model\IdResponse**](../Model/IdResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRun()`

```php
deleteRun($code, $id): \Qase\Client\Model\IdResponse
```

Delete run.

This method completely deletes a run from repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->deleteRun($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->deleteRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **id** | **int**| Identifier. |

### Return type

[**\Qase\Client\Model\IdResponse**](../Model/IdResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRun()`

```php
getRun($code, $id, $include): \Qase\Client\Model\RunResponse
```

Get a specific run.

This method allows to retrieve a specific run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$include = 'include_example'; // string | Include a list of related entities IDs into response. Should be separated by comma. Possible values: cases, defects

try {
    $result = $apiInstance->getRun($code, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->getRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **id** | **int**| Identifier. |
 **include** | **string**| Include a list of related entities IDs into response. Should be separated by comma. Possible values: cases, defects | [optional]

### Return type

[**\Qase\Client\Model\RunResponse**](../Model/RunResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRuns()`

```php
getRuns($code, $filters, $limit, $offset, $include): \Qase\Client\Model\RunListResponse
```

Get all runs.

This method allows to retrieve all runs stored in selected project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$filters = array('key' => new \Qase\Client\Model\GetRunsFiltersParameter()); // GetRunsFiltersParameter
$limit = 10; // int | A number of entities in result set.
$offset = 0; // int | How many entities should be skipped.
$include = 'include_example'; // string | Include a list of related entities IDs into response. Should be separated by comma. Possible values: cases, defects

try {
    $result = $apiInstance->getRuns($code, $filters, $limit, $offset, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->getRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **filters** | [**GetRunsFiltersParameter**](../Model/.md)|  | [optional]
 **limit** | **int**| A number of entities in result set. | [optional] [default to 10]
 **offset** | **int**| How many entities should be skipped. | [optional] [default to 0]
 **include** | **string**| Include a list of related entities IDs into response. Should be separated by comma. Possible values: cases, defects | [optional]

### Return type

[**\Qase\Client\Model\RunListResponse**](../Model/RunListResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRunPublicity()`

```php
updateRunPublicity($code, $id, $runPublic): \Qase\Client\Model\RunPublicResponse
```

Update publicity of a specific run.

This method allows to update a publicity of specific run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$runPublic = new \Qase\Client\Model\RunPublic(); // \Qase\Client\Model\RunPublic

try {
    $result = $apiInstance->updateRunPublicity($code, $id, $runPublic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->updateRunPublicity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **id** | **int**| Identifier. |
 **runPublic** | [**\Qase\Client\Model\RunPublic**](../Model/RunPublic.md)|  |

### Return type

[**\Qase\Client\Model\RunPublicResponse**](../Model/RunPublicResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
