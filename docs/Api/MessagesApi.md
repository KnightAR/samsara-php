# Samsara\Php\Client\MessagesApi

All URIs are relative to *https://api.samsara.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1createMessages**](MessagesApi.md#v1createMessages) | **POST** /v1/fleet/messages | Send a message to a list of driver ids.
[**v1getMessages**](MessagesApi.md#v1getMessages) | **GET** /v1/fleet/messages | Get all messages.


# **v1createMessages**
> \Samsara\Php\Client\Model\InlineResponse20010 v1createMessages($create_messages)

Send a message to a list of driver ids.

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Send a message to a list of driver ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_messages = new \Samsara\Php\Client\Model\CreateMessages(); // \Samsara\Php\Client\Model\CreateMessages | Text to send to a list of driverIds.

try {
    $result = $apiInstance->v1createMessages($create_messages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->v1createMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_messages** | [**\Samsara\Php\Client\Model\CreateMessages**](../Model/CreateMessages.md)| Text to send to a list of driverIds. |

### Return type

[**\Samsara\Php\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getMessages**
> \Samsara\Php\Client\Model\InlineResponse2009 v1getMessages($end_ms, $duration_ms)

Get all messages.

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get all messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$end_ms = 789; // int | Time in unix milliseconds that represents the end of time range of messages to return. Used in combination with durationMs. Defaults to now.
$duration_ms = 789; // int | Time in milliseconds that represents the duration before endMs to query. Defaults to 24 hours.

try {
    $result = $apiInstance->v1getMessages($end_ms, $duration_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->v1getMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_ms** | **int**| Time in unix milliseconds that represents the end of time range of messages to return. Used in combination with durationMs. Defaults to now. | [optional]
 **duration_ms** | **int**| Time in milliseconds that represents the duration before endMs to query. Defaults to 24 hours. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

