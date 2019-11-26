# Samsara\Php\Client\DocumentsApi

All URIs are relative to *https://api.samsara.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1createDriverDocument**](DocumentsApi.md#v1createdriverdocument) | **POST** /v1/fleet/drivers/{driver_id}/documents | Create a document
[**v1getDriverDocumentByIdAndDriverId**](DocumentsApi.md#v1getdriverdocumentbyidanddriverid) | **GET** /v1/fleet/drivers/{driver_id}/documents/{document_id} | Fetches a document
[**v1getDriverDocumentTypesByOrgId**](DocumentsApi.md#v1getdriverdocumenttypesbyorgid) | **GET** /v1/fleet/drivers/document_types | Fetch document types
[**v1getDriverDocumentsByOrgId**](DocumentsApi.md#v1getdriverdocumentsbyorgid) | **GET** /v1/fleet/drivers/documents | Fetch all documents

# **v1createDriverDocument**
> \Samsara\Php\Client\Model\V1Document v1createDriverDocument($body, $driver_id)

Create a document

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Create a document for the given driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\V1DocumentCreate(); // \Samsara\Php\Client\Model\V1DocumentCreate | To create a document for a given document type, the document type's uuid needs to be passed in to documentTypeUuid. The list of fields passed in should match the document type’s list of field types in the correct order. In other words, a field's valueType and value (i.e. only one of: stringValue, numberValue, or photoValue) at index _i_ should match with the document field type’s valueType at index _i_.
$driver_id = 789; // int | ID of the driver for whom the document is created. Must contain only digits 0-9.

try {
    $result = $apiInstance->v1createDriverDocument($body, $driver_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->v1createDriverDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\V1DocumentCreate**](../Model/V1DocumentCreate.md)| To create a document for a given document type, the document type&#x27;s uuid needs to be passed in to documentTypeUuid. The list of fields passed in should match the document type’s list of field types in the correct order. In other words, a field&#x27;s valueType and value (i.e. only one of: stringValue, numberValue, or photoValue) at index _i_ should match with the document field type’s valueType at index _i_. |
 **driver_id** | **int**| ID of the driver for whom the document is created. Must contain only digits 0-9. |

### Return type

[**\Samsara\Php\Client\Model\V1Document**](../Model/V1Document.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getDriverDocumentByIdAndDriverId**
> \Samsara\Php\Client\Model\V1Document v1getDriverDocumentByIdAndDriverId($driver_id, $document_id)

Fetches a document

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetches a single document submission by a specific driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driver_id = 789; // int | ID of the driver who submitted the document. Must contain only digits 0-9.
$document_id = "document_id_example"; // string | ID of document.

try {
    $result = $apiInstance->v1getDriverDocumentByIdAndDriverId($driver_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->v1getDriverDocumentByIdAndDriverId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_id** | **int**| ID of the driver who submitted the document. Must contain only digits 0-9. |
 **document_id** | **string**| ID of document. |

### Return type

[**\Samsara\Php\Client\Model\V1Document**](../Model/V1Document.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getDriverDocumentTypesByOrgId**
> \Samsara\Php\Client\Model\V1DocumentTypes v1getDriverDocumentTypesByOrgId()

Fetch document types

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch all of the document types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1getDriverDocumentTypesByOrgId();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->v1getDriverDocumentTypesByOrgId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Samsara\Php\Client\Model\V1DocumentTypes**](../Model/V1DocumentTypes.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getDriverDocumentsByOrgId**
> \Samsara\Php\Client\Model\V1Documents v1getDriverDocumentsByOrgId($end_ms, $duration_ms, $query_by)

Fetch all documents

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch all of the documents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$end_ms = 789; // int | Time in unix milliseconds that represents the oldest documents to return. Used in combination with durationMs. Defaults to now.
$duration_ms = 789; // int | Time in milliseconds that represents the duration before endMs to query. Defaults to 24 hours.
$query_by = "query_by_example"; // string | Retrieve most recent documents based on either driverCreatedAtMs or serverUpdatedAtMs. If no value is provided, the default is driverCreatedAtMs.

try {
    $result = $apiInstance->v1getDriverDocumentsByOrgId($end_ms, $duration_ms, $query_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->v1getDriverDocumentsByOrgId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_ms** | **int**| Time in unix milliseconds that represents the oldest documents to return. Used in combination with durationMs. Defaults to now. | [optional]
 **duration_ms** | **int**| Time in milliseconds that represents the duration before endMs to query. Defaults to 24 hours. | [optional]
 **query_by** | **string**| Retrieve most recent documents based on either driverCreatedAtMs or serverUpdatedAtMs. If no value is provided, the default is driverCreatedAtMs. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1Documents**](../Model/V1Documents.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

