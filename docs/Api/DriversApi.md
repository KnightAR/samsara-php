# Samsara\Php\Client\DriversApi

All URIs are relative to *https://api.samsara.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDriver**](DriversApi.md#createDriver) | **POST** /fleet/drivers | Create a driver
[**getDriverById**](DriversApi.md#getDriverById) | **GET** /fleet/drivers/{id} | Retrieve a driver
[**getDrivers**](DriversApi.md#getDrivers) | **GET** /fleet/drivers | List all drivers
[**updateDriverById**](DriversApi.md#updateDriverById) | **PATCH** /fleet/drivers/{id} | Update a driver


# **createDriver**
> \Samsara\Php\Client\Model\InlineResponse2002 createDriver($driver)

Create a driver

Add a driver to the organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$driver = new \Samsara\Php\Client\Model\DriverCreate(); // \Samsara\Php\Client\Model\DriverCreate | The driver to create.

try {
    $result = $apiInstance->createDriver($driver);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->createDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver** | [**\Samsara\Php\Client\Model\DriverCreate**](../Model/DriverCreate.md)| The driver to create. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDriverById**
> \Samsara\Php\Client\Model\InlineResponse2002 getDriverById($id)

Retrieve a driver

Get information about a driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the driver. This can either be the Samsara-specified ID, or an external ID. External IDs are customer specified key-value pairs created in the POST or PATCH requests of this resource. To specify an external ID as part of a path parameter, use the following format: `key:value`. For example, `payrollId:ABFS18600`

try {
    $result = $apiInstance->getDriverById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->getDriverById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the driver. This can either be the Samsara-specified ID, or an external ID. External IDs are customer specified key-value pairs created in the POST or PATCH requests of this resource. To specify an external ID as part of a path parameter, use the following format: &#x60;key:value&#x60;. For example, &#x60;payrollId:ABFS18600&#x60; |

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDrivers**
> object getDrivers($is_deactivated, $limit, $after, $tag_ids)

List all drivers

Get all drivers in organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$is_deactivated = true; // bool | If value is true, only drivers that are deactivated will appear in the response. This parameter will default to false if not provided (fetching only active drivers).
$limit = 512; // int | The limit for how many objects will be in the response. Default and max for this value is 512 objects.
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.
$tag_ids = array("tag_ids_example"); // string[] | A comma-separated list of tag IDs. Example: `tagIds=1234,5678`

try {
    $result = $apiInstance->getDrivers($is_deactivated, $limit, $after, $tag_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->getDrivers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_deactivated** | **bool**| If value is true, only drivers that are deactivated will appear in the response. This parameter will default to false if not provided (fetching only active drivers). | [optional]
 **limit** | **int**| The limit for how many objects will be in the response. Default and max for this value is 512 objects. | [optional] [default to 512]
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| A comma-separated list of tag IDs. Example: &#x60;tagIds&#x3D;1234,5678&#x60; | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDriverById**
> \Samsara\Php\Client\Model\InlineResponse2002 updateDriverById($id, $driver)

Update a driver

Update a specific driver's information. This can also be used to activate or de-activate a given driver

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the driver. This can either be the Samsara-specified ID, or an external ID. External IDs are customer specified key-value pairs created in the POST or PATCH requests of this resource. To specify an external ID as part of a path parameter, use the following format: `key:value`. For example, `payrollId:ABFS18600`
$driver = new \Samsara\Php\Client\Model\DriverUpdate(); // \Samsara\Php\Client\Model\DriverUpdate | Updates to the driver properties.

try {
    $result = $apiInstance->updateDriverById($id, $driver);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->updateDriverById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the driver. This can either be the Samsara-specified ID, or an external ID. External IDs are customer specified key-value pairs created in the POST or PATCH requests of this resource. To specify an external ID as part of a path parameter, use the following format: &#x60;key:value&#x60;. For example, &#x60;payrollId:ABFS18600&#x60; |
 **driver** | [**\Samsara\Php\Client\Model\DriverUpdate**](../Model/DriverUpdate.md)| Updates to the driver properties. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

