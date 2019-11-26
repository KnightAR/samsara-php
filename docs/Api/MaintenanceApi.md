# Samsara\Php\Client\MaintenanceApi

All URIs are relative to *https://api.samsara.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1createDvir**](MaintenanceApi.md#v1createdvir) | **POST** /v1/fleet/maintenance/dvirs | Create a DVIR
[**v1getDvirs**](MaintenanceApi.md#v1getdvirs) | **GET** /v1/fleet/maintenance/dvirs | Get DVIRs
[**v1getFleetMaintenanceList**](MaintenanceApi.md#v1getfleetmaintenancelist) | **GET** /v1/fleet/maintenance/list | Get vehicles with engine faults or check lights

# **v1createDvir**
> \Samsara\Php\Client\Model\V1DvirBase v1createDvir($body)

Create a DVIR

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Create a new dvir, marking a vehicle or trailer safe or unsafe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\Body2(); // \Samsara\Php\Client\Model\Body2 | DVIR creation body

try {
    $result = $apiInstance->v1createDvir($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->v1createDvir: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\Body2**](../Model/Body2.md)| DVIR creation body |

### Return type

[**\Samsara\Php\Client\Model\V1DvirBase**](../Model/V1DvirBase.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getDvirs**
> \Samsara\Php\Client\Model\V1DvirListResponse v1getDvirs($end_ms, $duration_ms)

Get DVIRs

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get DVIRs for the org within provided time constraints

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$end_ms = 56; // int | Time in millis until the last dvir log.
$duration_ms = 56; // int | Time in millis which corresponds to the duration before the end_ms.

try {
    $result = $apiInstance->v1getDvirs($end_ms, $duration_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->v1getDvirs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_ms** | **int**| Time in millis until the last dvir log. |
 **duration_ms** | **int**| Time in millis which corresponds to the duration before the end_ms. |

### Return type

[**\Samsara\Php\Client\Model\V1DvirListResponse**](../Model/V1DvirListResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getFleetMaintenanceList**
> \Samsara\Php\Client\Model\InlineResponse20014 v1getFleetMaintenanceList()

Get vehicles with engine faults or check lights

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get list of the vehicles with any engine faults or check light data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1getFleetMaintenanceList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->v1getFleetMaintenanceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Samsara\Php\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

