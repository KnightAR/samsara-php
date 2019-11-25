# Samsara\Php\Client\SafetyApi

All URIs are relative to *https://api.samsara.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1getDriverSafetyScore**](SafetyApi.md#v1getDriverSafetyScore) | **GET** /v1/fleet/drivers/{driverId}/safety/score | Fetch driver safety score
[**v1getVehicleHarshEvent**](SafetyApi.md#v1getVehicleHarshEvent) | **GET** /v1/fleet/vehicles/{vehicleId}/safety/harsh_event | Fetch harsh events
[**v1getVehicleSafetyScore**](SafetyApi.md#v1getVehicleSafetyScore) | **GET** /v1/fleet/vehicles/{vehicleId}/safety/score | Fetch vehicle safety scores


# **v1getDriverSafetyScore**
> \Samsara\Php\Client\Model\V1DriverSafetyScoreResponse v1getDriverSafetyScore($driver_id, $start_ms, $end_ms)

Fetch driver safety score

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch the safety score for the driver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\SafetyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$driver_id = 789; // int | ID of the driver. Must contain only digits 0-9.
$start_ms = 789; // int | Timestamp in milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. Total duration (endMs - startMs) must be greater than or equal to 1 hour.
$end_ms = 789; // int | Timestamp in milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. Total duration (endMs - startMs) must be greater than or equal to 1 hour.

try {
    $result = $apiInstance->v1getDriverSafetyScore($driver_id, $start_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafetyApi->v1getDriverSafetyScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_id** | **int**| ID of the driver. Must contain only digits 0-9. |
 **start_ms** | **int**| Timestamp in milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. Total duration (endMs - startMs) must be greater than or equal to 1 hour. |
 **end_ms** | **int**| Timestamp in milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. Total duration (endMs - startMs) must be greater than or equal to 1 hour. |

### Return type

[**\Samsara\Php\Client\Model\V1DriverSafetyScoreResponse**](../Model/V1DriverSafetyScoreResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getVehicleHarshEvent**
> \Samsara\Php\Client\Model\V1VehicleHarshEventResponse v1getVehicleHarshEvent($vehicle_id, $timestamp)

Fetch harsh events

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch harsh event details for a vehicle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\SafetyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vehicle_id = 789; // int | ID of the vehicle. Must contain only digits 0-9.
$timestamp = 789; // int | Timestamp in milliseconds representing the timestamp of a harsh event.

try {
    $result = $apiInstance->v1getVehicleHarshEvent($vehicle_id, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafetyApi->v1getVehicleHarshEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_id** | **int**| ID of the vehicle. Must contain only digits 0-9. |
 **timestamp** | **int**| Timestamp in milliseconds representing the timestamp of a harsh event. |

### Return type

[**\Samsara\Php\Client\Model\V1VehicleHarshEventResponse**](../Model/V1VehicleHarshEventResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getVehicleSafetyScore**
> \Samsara\Php\Client\Model\V1VehicleSafetyScoreResponse v1getVehicleSafetyScore($vehicle_id, $start_ms, $end_ms)

Fetch vehicle safety scores

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch the safety score for the vehicle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\SafetyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vehicle_id = 789; // int | ID of the vehicle. Must contain only digits 0-9.
$start_ms = 789; // int | Timestamp in milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. Total duration (endMs - startMs) must be greater than or equal to 1 hour.
$end_ms = 789; // int | Timestamp in milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. Total duration (endMs - startMs) must be greater than or equal to 1 hour.

try {
    $result = $apiInstance->v1getVehicleSafetyScore($vehicle_id, $start_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafetyApi->v1getVehicleSafetyScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_id** | **int**| ID of the vehicle. Must contain only digits 0-9. |
 **start_ms** | **int**| Timestamp in milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. Total duration (endMs - startMs) must be greater than or equal to 1 hour. |
 **end_ms** | **int**| Timestamp in milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. Total duration (endMs - startMs) must be greater than or equal to 1 hour. |

### Return type

[**\Samsara\Php\Client\Model\V1VehicleSafetyScoreResponse**](../Model/V1VehicleSafetyScoreResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

