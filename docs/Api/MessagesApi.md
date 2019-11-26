# Samsara\Php\Client\MessagesApi

All URIs are relative to *https://api.samsara.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1createMessages**](MessagesApi.md#v1createmessages) | **POST** /v1/fleet/messages | Send a message to a list of driver ids.
[**v1getMessages**](MessagesApi.md#v1getmessages) | **GET** /v1/fleet/messages | Get all messages.

# **v1createMessages**
> \Samsara\Php\Client\Model\InlineResponse20016 v1createMessages($body)

Send a message to a list of driver ids.

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Send a message to a list of driver ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\Body3(); // \Samsara\Php\Client\Model\Body3 | Text to send to a list of driverIds.

try {
    $result = $apiInstance->v1createMessages($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->v1createMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\Body3**](../Model/Body3.md)| Text to send to a list of driverIds. |

### Return type

[**\Samsara\Php\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getMessages**
> \Samsara\Php\Client\Model\InlineResponse20015 v1getMessages($end_ms, $duration_ms)

Get all messages.

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get all messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[**\Samsara\Php\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

