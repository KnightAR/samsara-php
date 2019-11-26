# Samsara\Php\Client\AddressesApi

All URIs are relative to *https://api.samsara.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddress**](AddressesApi.md#createaddress) | **POST** /addresses | Create an address
[**deleteAddressById**](AddressesApi.md#deleteaddressbyid) | **DELETE** /addresses/{id} | Delete an address
[**getAddressById**](AddressesApi.md#getaddressbyid) | **GET** /addresses/{id} | Retrieve an address
[**getAddresses**](AddressesApi.md#getaddresses) | **GET** /addresses | List all addresses
[**updateAddressById**](AddressesApi.md#updateaddressbyid) | **PATCH** /addresses/{id} | Update an address

# **createAddress**
> \Samsara\Php\Client\Model\InlineResponse2001 createAddress($body)

Create an address

Creates a new address in the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\AddressCreate(); // \Samsara\Php\Client\Model\AddressCreate | The address to create.

try {
    $result = $apiInstance->createAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\AddressCreate**](../Model/AddressCreate.md)| The address to create. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

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
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressById**
> \Samsara\Php\Client\Model\InlineResponse2001 getAddressById($id)

Retrieve an address

Returns a specific address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[**\Samsara\Php\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddresses**
> \Samsara\Php\Client\Model\InlineResponse200 getAddresses($limit, $after, $tag_ids)

List all addresses

Returns a list of all addresses in an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 789; // int | The limit for how many objects will be in the response. Default and max for this value is 512 objects.
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
 **limit** | **int**| The limit for how many objects will be in the response. Default and max for this value is 512 objects. | [optional]
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| A comma-separated list of tag IDs. Example: &#x60;tagIds&#x3D;1234,5678&#x60; | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddressById**
> \Samsara\Php\Client\Model\InlineResponse2001 updateAddressById($id, $body)

Update an address

Update a specific address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Unique Samsara ID for the address
$body = new \Samsara\Php\Client\Model\AddressPatch(); // \Samsara\Php\Client\Model\AddressPatch | The address fields to update.

try {
    $result = $apiInstance->updateAddressById($id, $body);
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
 **body** | [**\Samsara\Php\Client\Model\AddressPatch**](../Model/AddressPatch.md)| The address fields to update. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

