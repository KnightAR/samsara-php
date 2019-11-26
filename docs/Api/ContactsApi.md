# Samsara\Php\Client\ContactsApi

All URIs are relative to *https://api.samsara.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContact**](ContactsApi.md#createcontact) | **POST** /contacts | Create a contact
[**deleteContactById**](ContactsApi.md#deletecontactbyid) | **DELETE** /contacts/{id} | Delete a contact
[**getContactById**](ContactsApi.md#getcontactbyid) | **GET** /contacts/{id} | Retrieve a contact
[**getContacts**](ContactsApi.md#getcontacts) | **GET** /contacts | List all contacts
[**updateContactById**](ContactsApi.md#updatecontactbyid) | **PATCH** /contacts/{id} | Update a contact

# **createContact**
> \Samsara\Php\Client\Model\InlineResponse2003 createContact($body)

Create a contact

Add a contact to the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\ContactInput(); // \Samsara\Php\Client\Model\ContactInput | Add a contact.

try {
    $result = $apiInstance->createContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\ContactInput**](../Model/ContactInput.md)| Add a contact. |

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactById**
> deleteContactById($id)

Delete a contact

Delete the given contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Unique identifier for the contact.

try {
    $apiInstance->deleteContactById($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the contact. |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactById**
> \Samsara\Php\Client\Model\InlineResponse2003 getContactById($id)

Retrieve a contact

Get a specific contact's information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Unique identifier for the contact.

try {
    $result = $apiInstance->getContactById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the contact. |

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \Samsara\Php\Client\Model\InlineResponse2002 getContacts($limit, $after)

List all contacts

Returns a list of all contacts in an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 789; // int | The limit for how many objects will be in the response. Default and max for this value is 512 objects.
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.

try {
    $result = $apiInstance->getContacts($limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit for how many objects will be in the response. Default and max for this value is 512 objects. | [optional]
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactById**
> \Samsara\Php\Client\Model\InlineResponse2003 updateContactById($id, $body)

Update a contact

Update a specific contact's information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Unique identifier for the contact.
$body = new \Samsara\Php\Client\Model\ContactInput(); // \Samsara\Php\Client\Model\ContactInput | Updates to the contact.

try {
    $result = $apiInstance->updateContactById($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the contact. |
 **body** | [**\Samsara\Php\Client\Model\ContactInput**](../Model/ContactInput.md)| Updates to the contact. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

