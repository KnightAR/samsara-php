# Samsara\Php\Client\HoursOfServiceApi

All URIs are relative to *https://api.samsara.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1getFleetDriversHosDailyLogs**](HoursOfServiceApi.md#v1getfleetdrivershosdailylogs) | **POST** /v1/fleet/drivers/{driver_id}/hos_daily_logs | Get daily HOS logs for a specific driver
[**v1getFleetHosAuthenticationLogs**](HoursOfServiceApi.md#v1getfleethosauthenticationlogs) | **GET** /v1/fleet/hos_authentication_logs | Get HOS signin and signout
[**v1getFleetHosLogs**](HoursOfServiceApi.md#v1getfleethoslogs) | **POST** /v1/fleet/hos_logs | Get HOS logs for a specific driver
[**v1getFleetHosLogsSummary**](HoursOfServiceApi.md#v1getfleethoslogssummary) | **GET** /v1/fleet/hos_logs_summary | Get current HOS status for all drivers

# **v1getFleetDriversHosDailyLogs**
> \Samsara\Php\Client\Model\V1DriverDailyLogResponse v1getFleetDriversHosDailyLogs($driver_id, $body)

Get daily HOS logs for a specific driver

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get summarized daily HOS charts for a specified driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\HoursOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driver_id = 789; // int | ID of the driver with HOS logs.
$body = new \Samsara\Php\Client\Model\Body(); // \Samsara\Php\Client\Model\Body | 

try {
    $result = $apiInstance->v1getFleetDriversHosDailyLogs($driver_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursOfServiceApi->v1getFleetDriversHosDailyLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_id** | **int**| ID of the driver with HOS logs. |
 **body** | [**\Samsara\Php\Client\Model\Body**](../Model/Body.md)|  | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1DriverDailyLogResponse**](../Model/V1DriverDailyLogResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getFleetHosAuthenticationLogs**
> \Samsara\Php\Client\Model\V1HosAuthenticationLogsResponse v1getFleetHosAuthenticationLogs($driver_id, $start_ms, $end_ms)

Get HOS signin and signout

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get the HOS (hours of service) signin and signout logs for the specified driver. The response includes 4 fields that are now deprecated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\HoursOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driver_id = 789; // int | Driver ID to query.
$start_ms = 789; // int | Beginning of the time range, specified in milliseconds UNIX time.
$end_ms = 789; // int | End of the time range, specified in milliseconds UNIX time.

try {
    $result = $apiInstance->v1getFleetHosAuthenticationLogs($driver_id, $start_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursOfServiceApi->v1getFleetHosAuthenticationLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_id** | **int**| Driver ID to query. |
 **start_ms** | **int**| Beginning of the time range, specified in milliseconds UNIX time. |
 **end_ms** | **int**| End of the time range, specified in milliseconds UNIX time. |

### Return type

[**\Samsara\Php\Client\Model\V1HosAuthenticationLogsResponse**](../Model/V1HosAuthenticationLogsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getFleetHosLogs**
> \Samsara\Php\Client\Model\V1HosLogsResponse v1getFleetHosLogs($body)

Get HOS logs for a specific driver

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get the HOS (hours of service) logs for the specified driver. This method returns all the HOS statuses that the driver was in during this time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\HoursOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\Body1(); // \Samsara\Php\Client\Model\Body1 | 

try {
    $result = $apiInstance->v1getFleetHosLogs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursOfServiceApi->v1getFleetHosLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\Body1**](../Model/Body1.md)|  |

### Return type

[**\Samsara\Php\Client\Model\V1HosLogsResponse**](../Model/V1HosLogsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getFleetHosLogsSummary**
> \Samsara\Php\Client\Model\V1HosLogsSummaryResponse v1getFleetHosLogsSummary($after, $limit)

Get current HOS status for all drivers

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get the current HOS status for all drivers. Note that this includes inactive as well as active drivers. You may need to upgrade your API token to version 2019-07-31 or later to leverage response pagination. [See here](https://kb.samsara.com/hc/en-us/articles/360026132972-Upgrading-API-Tokens)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\HoursOfServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$after = "after_example"; // string | Pagination parameter indicating the cursor position to continue returning results after. Used in conjunction with the 'limit' parameter.
$limit = 1.2; // float | Pagination parameter indicating the number of results to return in this request. Used in conjunction with 'after'.

try {
    $result = $apiInstance->v1getFleetHosLogsSummary($after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HoursOfServiceApi->v1getFleetHosLogsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **string**| Pagination parameter indicating the cursor position to continue returning results after. Used in conjunction with the &#x27;limit&#x27; parameter. | [optional]
 **limit** | **float**| Pagination parameter indicating the number of results to return in this request. Used in conjunction with &#x27;after&#x27;. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1HosLogsSummaryResponse**](../Model/V1HosLogsSummaryResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

