# Qase\Client\CasesApi

All URIs are relative to https://api.qase.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCase()**](CasesApi.md#createCase) | **POST** /case/{code} | Create a new test case.
[**deleteCase()**](CasesApi.md#deleteCase) | **DELETE** /case/{code}/{id} | Delete test case.
[**getCase()**](CasesApi.md#getCase) | **GET** /case/{code}/{id} | Get a specific test case.
[**getCases()**](CasesApi.md#getCases) | **GET** /case/{code} | Get all test cases.
[**updateCase()**](CasesApi.md#updateCase) | **PATCH** /case/{code}/{id} | Update test case.


## `createCase()`

```php
createCase($code, $testCaseCreate): \Qase\Client\Model\IdResponse
```

Create a new test case.

This method allows to create a new test case in selected project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\CasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$testCaseCreate = new \Qase\Client\Model\TestCaseCreate(); // \Qase\Client\Model\TestCaseCreate

try {
    $result = $apiInstance->createCase($code, $testCaseCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasesApi->createCase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **testCaseCreate** | [**\Qase\Client\Model\TestCaseCreate**](../Model/TestCaseCreate.md)|  |

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

## `deleteCase()`

```php
deleteCase($code, $id): \Qase\Client\Model\IdResponse
```

Delete test case.

This method completely deletes a test case from repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\CasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->deleteCase($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasesApi->deleteCase: ', $e->getMessage(), PHP_EOL;
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

## `getCase()`

```php
getCase($code, $id): \Qase\Client\Model\TestCaseResponse
```

Get a specific test case.

This method allows to retrieve a specific test case.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\CasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->getCase($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasesApi->getCase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **id** | **int**| Identifier. |

### Return type

[**\Qase\Client\Model\TestCaseResponse**](../Model/TestCaseResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCases()`

```php
getCases($code, $search, $milestoneId, $suiteId, $severity, $priority, $type, $behavior, $automation, $status, $limit, $offset): \Qase\Client\Model\TestCaseListResponse
```

Get all test cases.

This method allows to retrieve all test cases stored in selected project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\CasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$search = 'search_example'; // string | Provide a string that will be used to search by name.
$milestoneId = 56; // int | ID of milestone.
$suiteId = 56; // int | ID of test suite.
$severity = 'severity_example'; // string | A list of severity values separated by comma. Possible values: undefined, blocker, critical, major, normal, minor, trivial
$priority = 'priority_example'; // string | A list of priority values separated by comma. Possible values: undefined, high, medium, low
$type = 'type_example'; // string | A list of type values separated by comma. Possible values: other, functional smoke, regression, security, usability, performance, acceptance
$behavior = 'behavior_example'; // string | A list of behavior values separated by comma. Possible values: undefined, positive negative, destructive
$automation = 'automation_example'; // string | A list of values separated by comma. Possible values: is-not-automated, automated to-be-automated
$status = 'status_example'; // string | A list of values separated by comma. Possible values: actual, draft deprecated
$limit = 10; // int | A number of entities in result set.
$offset = 0; // int | How many entities should be skipped.

try {
    $result = $apiInstance->getCases($code, $search, $milestoneId, $suiteId, $severity, $priority, $type, $behavior, $automation, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasesApi->getCases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **search** | **string**| Provide a string that will be used to search by name. | [optional]
 **milestoneId** | **int**| ID of milestone. | [optional]
 **suiteId** | **int**| ID of test suite. | [optional]
 **severity** | **string**| A list of severity values separated by comma. Possible values: undefined, blocker, critical, major, normal, minor, trivial | [optional]
 **priority** | **string**| A list of priority values separated by comma. Possible values: undefined, high, medium, low | [optional]
 **type** | **string**| A list of type values separated by comma. Possible values: other, functional smoke, regression, security, usability, performance, acceptance | [optional]
 **behavior** | **string**| A list of behavior values separated by comma. Possible values: undefined, positive negative, destructive | [optional]
 **automation** | **string**| A list of values separated by comma. Possible values: is-not-automated, automated to-be-automated | [optional]
 **status** | **string**| A list of values separated by comma. Possible values: actual, draft deprecated | [optional]
 **limit** | **int**| A number of entities in result set. | [optional] [default to 10]
 **offset** | **int**| How many entities should be skipped. | [optional] [default to 0]

### Return type

[**\Qase\Client\Model\TestCaseListResponse**](../Model/TestCaseListResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCase()`

```php
updateCase($code, $id, $testCaseUpdate): \Qase\Client\Model\IdResponse
```

Update test case.

This method updates a test case.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\Client\Api\CasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$testCaseUpdate = new \Qase\Client\Model\TestCaseUpdate(); // \Qase\Client\Model\TestCaseUpdate

try {
    $result = $apiInstance->updateCase($code, $id, $testCaseUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CasesApi->updateCase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of project, where to search entities. |
 **id** | **int**| Identifier. |
 **testCaseUpdate** | [**\Qase\Client\Model\TestCaseUpdate**](../Model/TestCaseUpdate.md)|  |

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
