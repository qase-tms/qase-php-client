# # CustomFieldCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  |
**entity** | **int** | Possible values: 0 - case; 1 - run; 2 - defect; |
**type** | **int** | Possible values: 0 - number; 1 - string; 2 - text; 3 - selectbox; 4 - checkbox; 5 - radio; 6 - multiselect; 7 - url; 8 - user; 9 - datetime; |
**value** | [**\Qase\Client\Model\CustomFieldCreateValueInner[]**](CustomFieldCreateValueInner.md) | Required if type one of: 3 - selectbox; 5 - radio; 6 - multiselect; | [optional]
**placeholder** | **string** |  | [optional]
**defaultValue** | **string** |  | [optional]
**isFilterable** | **bool** |  | [optional]
**isVisible** | **bool** |  | [optional]
**isRequired** | **bool** |  | [optional]
**projectsCodes** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
