# Qase\Client\DefectsApi

All URIs are relative to https://api.qase.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDefect()**](DefectsApi.md#createDefect) | **POST** /defect/{code} | Create a new defect.
[**deleteDefect()**](DefectsApi.md#deleteDefect) | **DELETE** /defect/{code}/{id} | Delete defect.
[**getDefect()**](DefectsApi.md#getDefect) | **GET** /defect/{code}/{id} | Get a specific defect.
[**getDefects()**](DefectsApi.md#getDefects) | **GET** /defect/{code} | Get all defects.
[**resolveDefect()**](DefectsApi.md#resolveDefect) | **PATCH** /defect/{code}/resolve/{id} | Resolve a specific defect.
[**updateDefect()**](DefectsApi.md#updateDefect) | **PATCH** /defect/{code}/{id} | Update defect.
[**updateDefectStatus()**](DefectsApi.md#updateDefectStatus) | **PATCH** /defect/{code}/status/{id} | Update a specific defect status.


## `createDefect()`

```php
createDefect($code, $defectCreate): \Qase\Client\Model\IdResponse
```

Create a new defect.

This method allows to create a defect in selected project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\DefectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$defectCreate = new \Qase\Client\Model\DefectCreate(); // \Qase\Client\Model\DefectCreate

try {
    $result = $apiInstance->createDefect($code, $defectCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefectsApi->createDefect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **defectCreate** | [**\Qase\Client\Model\DefectCreate**](../Model/DefectCreate.md)|  |

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

## `deleteDefect()`

```php
deleteDefect($code, $id): \Qase\Client\Model\IdResponse
```

Delete defect.

This method completely deletes a defect from repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\DefectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->deleteDefect($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefectsApi->deleteDefect: ', $e->getMessage(), PHP_EOL;
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

## `getDefect()`

```php
getDefect($code, $id): \Qase\Client\Model\DefectResponse
```

Get a specific defect.

This method allows to retrieve a specific defect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\DefectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->getDefect($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefectsApi->getDefect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **id** | **int**| Identifier. |

### Return type

[**\Qase\Client\Model\DefectResponse**](../Model/DefectResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefects()`

```php
getDefects($code, $filters, $limit, $offset): \Qase\Client\Model\DefectListResponse
```

Get all defects.

This method allows to retrieve all defects stored in selected project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\DefectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$filters = array('key' => new \Qase\Client\Model\GetDefectsFiltersParameter()); // GetDefectsFiltersParameter
$limit = 10; // int | A number of entities in result set.
$offset = 0; // int | How many entities should be skipped.

try {
    $result = $apiInstance->getDefects($code, $filters, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefectsApi->getDefects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **filters** | [**GetDefectsFiltersParameter**](../Model/.md)|  | [optional]
 **limit** | **int**| A number of entities in result set. | [optional] [default to 10]
 **offset** | **int**| How many entities should be skipped. | [optional] [default to 0]

### Return type

[**\Qase\Client\Model\DefectListResponse**](../Model/DefectListResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resolveDefect()`

```php
resolveDefect($code, $id): \Qase\Client\Model\IdResponse
```

Resolve a specific defect.

This method allows to resolve a specific defect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\DefectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->resolveDefect($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefectsApi->resolveDefect: ', $e->getMessage(), PHP_EOL;
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

## `updateDefect()`

```php
updateDefect($code, $id, $defectUpdate): \Qase\Client\Model\IdResponse
```

Update defect.

This method updates a defect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\DefectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$defectUpdate = new \Qase\Client\Model\DefectUpdate(); // \Qase\Client\Model\DefectUpdate

try {
    $result = $apiInstance->updateDefect($code, $id, $defectUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefectsApi->updateDefect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **id** | **int**| Identifier. |
 **defectUpdate** | [**\Qase\Client\Model\DefectUpdate**](../Model/DefectUpdate.md)|  |

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

## `updateDefectStatus()`

```php
updateDefectStatus($code, $id, $defectStatus): \Qase\Client\Model\Response
```

Update a specific defect status.

This method allows to update a specific defect status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\DefectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$defectStatus = new \Qase\Client\Model\DefectStatus(); // \Qase\Client\Model\DefectStatus

try {
    $result = $apiInstance->updateDefectStatus($code, $id, $defectStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefectsApi->updateDefectStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **id** | **int**| Identifier. |
 **defectStatus** | [**\Qase\Client\Model\DefectStatus**](../Model/DefectStatus.md)|  |

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
