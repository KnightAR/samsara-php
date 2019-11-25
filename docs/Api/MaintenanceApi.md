# Swagger\Client\MaintenanceApi

All URIs are relative to *https://api.samsara.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1createDvir**](MaintenanceApi.md#v1createDvir) | **POST** /v1/fleet/maintenance/dvirs | Create a DVIR
[**v1getDvirs**](MaintenanceApi.md#v1getDvirs) | **GET** /v1/fleet/maintenance/dvirs | Get DVIRs
[**v1getFleetMaintenanceList**](MaintenanceApi.md#v1getFleetMaintenanceList) | **GET** /v1/fleet/maintenance/list | Get vehicles with engine faults or check lights


# **v1createDvir**
> \Swagger\Client\Model\V1DvirBase v1createDvir($create_dvir_param)

Create a DVIR

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Create a new dvir, marking a vehicle or trailer safe or unsafe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_dvir_param = new \Swagger\Client\Model\CreateDvirParam(); // \Swagger\Client\Model\CreateDvirParam | DVIR creation body

try {
    $result = $apiInstance->v1createDvir($create_dvir_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->v1createDvir: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_dvir_param** | [**\Swagger\Client\Model\CreateDvirParam**](../Model/CreateDvirParam.md)| DVIR creation body |

### Return type

[**\Swagger\Client\Model\V1DvirBase**](../Model/V1DvirBase.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getDvirs**
> \Swagger\Client\Model\V1DvirListResponse v1getDvirs($end_ms, $duration_ms)

Get DVIRs

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get DVIRs for the org within provided time constraints

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Swagger\Client\Model\V1DvirListResponse**](../Model/V1DvirListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getFleetMaintenanceList**
> \Swagger\Client\Model\InlineResponse2008 v1getFleetMaintenanceList()

Get vehicles with engine faults or check lights

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get list of the vehicles with any engine faults or check light data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MaintenanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

