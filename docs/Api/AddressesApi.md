# Samsara\Php\Client\AddressesApi

All URIs are relative to *https://api.samsara.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddress**](AddressesApi.md#createAddress) | **POST** /addresses | Create an address
[**deleteAddressById**](AddressesApi.md#deleteAddressById) | **DELETE** /addresses/{id} | Delete an address
[**getAddressById**](AddressesApi.md#getAddressById) | **GET** /addresses/{id} | Retrieve an address
[**getAddresses**](AddressesApi.md#getAddresses) | **GET** /addresses | List all addresses
[**updateAddressById**](AddressesApi.md#updateAddressById) | **PATCH** /addresses/{id} | Update an address


# **createAddress**
> \Samsara\Php\Client\Model\InlineResponse200 createAddress($address)

Create an address

Creates a new address in the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = new \Samsara\Php\Client\Model\AddressCreate(); // \Samsara\Php\Client\Model\AddressCreate | The address to create.

try {
    $result = $apiInstance->createAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | [**\Samsara\Php\Client\Model\AddressCreate**](../Model/AddressCreate.md)| The address to create. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddressById**
> deleteAddressById($id)

Delete an address

Delete a specific address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique Samsara ID for the address

try {
    $apiInstance->deleteAddressById($id);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteAddressById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique Samsara ID for the address |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressById**
> \Samsara\Php\Client\Model\InlineResponse200 getAddressById($id)

Retrieve an address

Returns a specific address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique Samsara ID for the address

try {
    $result = $apiInstance->getAddressById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique Samsara ID for the address |

### Return type

[**\Samsara\Php\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddresses**
> object getAddresses($limit, $after, $tag_ids)

List all addresses

Returns a list of all addresses in an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 512; // int | The limit for how many objects will be in the response. Default and max for this value is 512 objects.
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.
$tag_ids = array("tag_ids_example"); // string[] | A comma-separated list of tag IDs. Example: `tagIds=1234,5678`

try {
    $result = $apiInstance->getAddresses($limit, $after, $tag_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **updateAddressById**
> \Samsara\Php\Client\Model\InlineResponse200 updateAddressById($id, $address)

Update an address

Update a specific address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique Samsara ID for the address
$address = new \Samsara\Php\Client\Model\AddressPatch(); // \Samsara\Php\Client\Model\AddressPatch | The address fields to update.

try {
    $result = $apiInstance->updateAddressById($id, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->updateAddressById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique Samsara ID for the address |
 **address** | [**\Samsara\Php\Client\Model\AddressPatch**](../Model/AddressPatch.md)| The address fields to update. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

