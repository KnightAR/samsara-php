# Samsara\Php\Client\TripsApi

All URIs are relative to *https://api.samsara.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1getFleetTrips**](TripsApi.md#v1getFleetTrips) | **GET** /v1/fleet/trips | Get vehicle trips


# **v1getFleetTrips**
> \Samsara\Php\Client\Model\V1TripResponse v1getFleetTrips($vehicle_id, $start_ms, $end_ms)

Get vehicle trips

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get historical trips data for specified vehicle. This method returns a set of historical trips data for the specified vehicle in the specified time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\TripsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vehicle_id = 789; // int | Vehicle ID to query.
$start_ms = 56; // int | Beginning of the time range, specified in milliseconds UNIX time. Limited to a 90 day window with respect to startMs and endMs
$end_ms = 56; // int | End of the time range, specified in milliseconds UNIX time.

try {
    $result = $apiInstance->v1getFleetTrips($vehicle_id, $start_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TripsApi->v1getFleetTrips: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_id** | **int**| Vehicle ID to query. |
 **start_ms** | **int**| Beginning of the time range, specified in milliseconds UNIX time. Limited to a 90 day window with respect to startMs and endMs |
 **end_ms** | **int**| End of the time range, specified in milliseconds UNIX time. |

### Return type

[**\Samsara\Php\Client\Model\V1TripResponse**](../Model/V1TripResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

