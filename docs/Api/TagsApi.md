# Samsara\Php\Client\TagsApi

All URIs are relative to *https://api.samsara.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTag**](TagsApi.md#createtag) | **POST** /tags | Create a tag
[**deleteTagById**](TagsApi.md#deletetagbyid) | **DELETE** /tags/{id} | Delete a tag
[**getAllTags**](TagsApi.md#getalltags) | **GET** /tags | List all tags
[**getTagById**](TagsApi.md#gettagbyid) | **GET** /tags/{id} | Retrieve a tag
[**putTagById**](TagsApi.md#puttagbyid) | **PUT** /tags/{id} | Update a tag

# **createTag**
> \Samsara\Php\Client\Model\InlineResponse2009 createTag($body)

Create a tag

Create a new tag for the organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\TagUpdate(); // \Samsara\Php\Client\Model\TagUpdate | 

try {
    $result = $apiInstance->createTag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\TagUpdate**](../Model/TagUpdate.md)|  | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTagById**
> deleteTagById($id)

Delete a tag

Permanently deletes a tag.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Unique identifier for the tag.

try {
    $apiInstance->deleteTagById($id);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTagById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the tag. |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllTags**
> \Samsara\Php\Client\Model\InlineResponse2008 getAllTags($limit, $after)

List all tags

Return all of the tags for an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 789; // int | The limit for how many objects will be in the response. Default and max for this value is 512 objects.
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.

try {
    $result = $apiInstance->getAllTags($limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getAllTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit for how many objects will be in the response. Default and max for this value is 512 objects. | [optional]
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagById**
> \Samsara\Php\Client\Model\InlineResponse2009 getTagById($id)

Retrieve a tag

Fetch a tag by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Unique identifier for the tag.

try {
    $result = $apiInstance->getTagById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the tag. |

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTagById**
> \Samsara\Php\Client\Model\InlineResponse2009 putTagById($id, $body)

Update a tag

Update a tag with a new name and new members. This API call would replace all old members of a tag with new members specified in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Unique identifier for the tag.
$body = new \Samsara\Php\Client\Model\TagUpdate(); // \Samsara\Php\Client\Model\TagUpdate | 

try {
    $result = $apiInstance->putTagById($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->putTagById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the tag. |
 **body** | [**\Samsara\Php\Client\Model\TagUpdate**](../Model/TagUpdate.md)|  | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

