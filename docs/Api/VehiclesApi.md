# Samsara\Php\Client\VehiclesApi

All URIs are relative to *https://api.samsara.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVehicleById**](VehiclesApi.md#getVehicleById) | **GET** /fleet/vehicles/{id} | Retrieve a vehicle
[**getVehicleLocations**](VehiclesApi.md#getVehicleLocations) | **GET** /fleet/vehicles/locations | List most recent vehicle locations
[**getVehicleLocationsFeed**](VehiclesApi.md#getVehicleLocationsFeed) | **GET** /fleet/vehicles/locations/feed | Follow a real-time feed of vehicle locations
[**getVehicleLocationsHistory**](VehiclesApi.md#getVehicleLocationsHistory) | **GET** /fleet/vehicles/locations/history | Get historical vehicle locations
[**getVehicleStatsFeed**](VehiclesApi.md#getVehicleStatsFeed) | **GET** /fleet/vehicles/stats/feed | Follow a real-time feed of vehicle stats
[**getVehicleStatsHistory**](VehiclesApi.md#getVehicleStatsHistory) | **GET** /fleet/vehicles/stats/history | Get historical vehicle stats
[**getVehicleStatsSnapshot**](VehiclesApi.md#getVehicleStatsSnapshot) | **GET** /fleet/vehicles/stats | List most recent vehicle stats
[**listVehiclesKondo**](VehiclesApi.md#listVehiclesKondo) | **GET** /fleet/vehicles | List all vehicles
[**updateVehicleById**](VehiclesApi.md#updateVehicleById) | **PATCH** /fleet/vehicles/{id} | Update a vehicle


# **getVehicleById**
> \Samsara\Php\Client\Model\InlineResponse2003 getVehicleById($id)

Retrieve a vehicle

Get information about a specific vehicle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\VehiclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the vehicle. This can either be the Samsara-specified ID, or an external ID. External IDs are customer specified key-value pairs created in the POST or PATCH requests of this resource. To specify an external ID as part of a path parameter, use the following format: `key:value`. For example, `maintenanceId:250020`

try {
    $result = $apiInstance->getVehicleById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehiclesApi->getVehicleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the vehicle. This can either be the Samsara-specified ID, or an external ID. External IDs are customer specified key-value pairs created in the POST or PATCH requests of this resource. To specify an external ID as part of a path parameter, use the following format: &#x60;key:value&#x60;. For example, &#x60;maintenanceId:250020&#x60; |

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVehicleLocations**
> \Samsara\Php\Client\Model\VehicleLocationsSnapshotResponse getVehicleLocations($after, $tag_ids, $vehicle_ids)

List most recent vehicle locations

Returns last known location for all vehicles (Samsara Vehicle Gateways). This can be optionally filtered by tags or specific vehicle IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\VehiclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.
$tag_ids = array("tag_ids_example"); // string[] | A comma-separated list of tag IDs. Example: `tagIds=1234,5678`
$vehicle_ids = array("vehicle_ids_example"); // string[] | A comma-separated list of vehicle IDs. Example: `vehicleIds=1234,5678`

try {
    $result = $apiInstance->getVehicleLocations($after, $tag_ids, $vehicle_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehiclesApi->getVehicleLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| A comma-separated list of tag IDs. Example: &#x60;tagIds&#x3D;1234,5678&#x60; | [optional]
 **vehicle_ids** | [**string[]**](../Model/string.md)| A comma-separated list of vehicle IDs. Example: &#x60;vehicleIds&#x3D;1234,5678&#x60; | [optional]

### Return type

[**\Samsara\Php\Client\Model\VehicleLocationsSnapshotResponse**](../Model/VehicleLocationsSnapshotResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVehicleLocationsFeed**
> \Samsara\Php\Client\Model\VehicleLocationsListResponse getVehicleLocationsFeed($after, $tag_ids, $vehicle_ids)

Follow a real-time feed of vehicle locations

Follow a continuous feed of all vehicle locations from Samsara Vehicle Gateways.  Your first call to this endpoint will provide you with the most recent location for each vehicle and a `pagination` object that contains an `endCursor`.  You can provide the `endCursor` to the `after` parameter of this endpoint to get location updates since that `endCursor`.   If `hasNextPage` is `false`, no updates are readily available yet. Each stat type has a different refresh rate, but in general we'd suggest waiting a minimum of 5 seconds before requesting updates.  See [this guide](https://developers.samsara.com/docs/vehicle-locations#section-follow-a-real-time-feed-of-vehicle-locations) for more details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\VehiclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.
$tag_ids = array("tag_ids_example"); // string[] | A comma-separated list of tag IDs. Example: `tagIds=1234,5678`
$vehicle_ids = array("vehicle_ids_example"); // string[] | A comma-separated list of vehicle IDs. Example: `vehicleIds=1234,5678`

try {
    $result = $apiInstance->getVehicleLocationsFeed($after, $tag_ids, $vehicle_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehiclesApi->getVehicleLocationsFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| A comma-separated list of tag IDs. Example: &#x60;tagIds&#x3D;1234,5678&#x60; | [optional]
 **vehicle_ids** | [**string[]**](../Model/string.md)| A comma-separated list of vehicle IDs. Example: &#x60;vehicleIds&#x3D;1234,5678&#x60; | [optional]

### Return type

[**\Samsara\Php\Client\Model\VehicleLocationsListResponse**](../Model/VehicleLocationsListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVehicleLocationsHistory**
> \Samsara\Php\Client\Model\VehicleLocationsListResponse getVehicleLocationsHistory($start_time, $end_time, $after, $tag_ids, $vehicle_ids)

Get historical vehicle locations

Returns all known vehicle location changes during the given time range for all vehicles (Samsara Vehicle Gateways). This can be optionally filtered by tags or specific vehicle IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\VehiclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A start time in RFC 3339 format. Millisecond precision and timezones are supported. (Examples: 2019-06-13T19:08:25Z, 2019-06-13T19:08:25.455Z, OR 2015-09-15T14:00:12-04:00).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | An end time in RFC 3339 format. Millisecond precision and timezones are supported. (Examples: 2019-06-13T19:08:25Z, 2019-06-13T19:08:25.455Z, OR 2015-09-15T14:00:12-04:00).
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.
$tag_ids = array("tag_ids_example"); // string[] | A comma-separated list of tag IDs. Example: `tagIds=1234,5678`
$vehicle_ids = array("vehicle_ids_example"); // string[] | A comma-separated list of vehicle IDs. Example: `vehicleIds=1234,5678`

try {
    $result = $apiInstance->getVehicleLocationsHistory($start_time, $end_time, $after, $tag_ids, $vehicle_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehiclesApi->getVehicleLocationsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | **\DateTime**| A start time in RFC 3339 format. Millisecond precision and timezones are supported. (Examples: 2019-06-13T19:08:25Z, 2019-06-13T19:08:25.455Z, OR 2015-09-15T14:00:12-04:00). |
 **end_time** | **\DateTime**| An end time in RFC 3339 format. Millisecond precision and timezones are supported. (Examples: 2019-06-13T19:08:25Z, 2019-06-13T19:08:25.455Z, OR 2015-09-15T14:00:12-04:00). |
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| A comma-separated list of tag IDs. Example: &#x60;tagIds&#x3D;1234,5678&#x60; | [optional]
 **vehicle_ids** | [**string[]**](../Model/string.md)| A comma-separated list of vehicle IDs. Example: &#x60;vehicleIds&#x3D;1234,5678&#x60; | [optional]

### Return type

[**\Samsara\Php\Client\Model\VehicleLocationsListResponse**](../Model/VehicleLocationsListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVehicleStatsFeed**
> \Samsara\Php\Client\Model\VehicleStatsListResponse getVehicleStatsFeed($types, $after, $tag_ids, $vehicle_ids)

Follow a real-time feed of vehicle stats

Follow a continuous feed of all vehicle stats from Samsara Vehicle Gateways.  Your first call to this endpoint will provide you with the most recent stats for each vehicle and a `pagination` object that contains an `endCursor`.  You can provide the `endCursor` to the `after` parameter of this endpoint to get vehicle stat updates since that `endCursor`.  If `hasNextPage` is `false`, no updates are readily available yet. Each stat type has a different refresh rate, but in general we'd suggest waiting a minimum of 5 seconds before requesting updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\VehiclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$types = "types_example"; // string | The stat type you want this endpoint to return information on. Currently only one stat type is accepted per request.  - `engineStates`: The state of the engine (`Off`, `On`, `Idle`). - `fuelPercents`: The engine fuel level in percentage points (e.g. `99`, `50`, etc). - `obdOdometerMeters`: The odometer reading according to on-board diagnostics. If Samsara does not have diagnostic coverage for a particular vehicle, the value for this stat type will be omitted. In these cases, we recommend using `gpsOdometerMeters`. - `gpsOdometerMeters`: The odometer reading according to GPS calculations. This calculation is based off GPS distance traveled and a manual odometer offset for a given vehicle, specified by the user in Samsara's dashboard UI or through the `odometerMeters` field in the [PATCH /fleet/vehicles/{id}](#operation/updateVehicleById) endpoint. `gpsOdometerMeters` is equal to the manual offset plus the GPS distance traveled since the offset was set. The value for this stat type will be omitted if a manual offset is not provided for a given vehicle. - `obdEngineSeconds`: The cumulative number of seconds the engine has run according to on-board diagnostics.
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.
$tag_ids = array("tag_ids_example"); // string[] | A comma-separated list of tag IDs. Example: `tagIds=1234,5678`
$vehicle_ids = array("vehicle_ids_example"); // string[] | A comma-separated list of vehicle IDs. Example: `vehicleIds=1234,5678`

try {
    $result = $apiInstance->getVehicleStatsFeed($types, $after, $tag_ids, $vehicle_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehiclesApi->getVehicleStatsFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **types** | **string**| The stat type you want this endpoint to return information on. Currently only one stat type is accepted per request.  - &#x60;engineStates&#x60;: The state of the engine (&#x60;Off&#x60;, &#x60;On&#x60;, &#x60;Idle&#x60;). - &#x60;fuelPercents&#x60;: The engine fuel level in percentage points (e.g. &#x60;99&#x60;, &#x60;50&#x60;, etc). - &#x60;obdOdometerMeters&#x60;: The odometer reading according to on-board diagnostics. If Samsara does not have diagnostic coverage for a particular vehicle, the value for this stat type will be omitted. In these cases, we recommend using &#x60;gpsOdometerMeters&#x60;. - &#x60;gpsOdometerMeters&#x60;: The odometer reading according to GPS calculations. This calculation is based off GPS distance traveled and a manual odometer offset for a given vehicle, specified by the user in Samsara&#39;s dashboard UI or through the &#x60;odometerMeters&#x60; field in the [PATCH /fleet/vehicles/{id}](#operation/updateVehicleById) endpoint. &#x60;gpsOdometerMeters&#x60; is equal to the manual offset plus the GPS distance traveled since the offset was set. The value for this stat type will be omitted if a manual offset is not provided for a given vehicle. - &#x60;obdEngineSeconds&#x60;: The cumulative number of seconds the engine has run according to on-board diagnostics. |
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| A comma-separated list of tag IDs. Example: &#x60;tagIds&#x3D;1234,5678&#x60; | [optional]
 **vehicle_ids** | [**string[]**](../Model/string.md)| A comma-separated list of vehicle IDs. Example: &#x60;vehicleIds&#x3D;1234,5678&#x60; | [optional]

### Return type

[**\Samsara\Php\Client\Model\VehicleStatsListResponse**](../Model/VehicleStatsListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVehicleStatsHistory**
> \Samsara\Php\Client\Model\VehicleStatsListResponse getVehicleStatsHistory($start_time, $end_time, $types, $after, $tag_ids, $vehicle_ids)

Get historical vehicle stats

Returns all known vehicle stats changes during the given time range for all vehicles (Samsara Vehicle Gateways). This can be optionally filtered by tags or specific vehicle IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\VehiclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A start time in RFC 3339 format. Millisecond precision and timezones are supported. (Examples: 2019-06-13T19:08:25Z, 2019-06-13T19:08:25.455Z, OR 2015-09-15T14:00:12-04:00).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | An end time in RFC 3339 format. Millisecond precision and timezones are supported. (Examples: 2019-06-13T19:08:25Z, 2019-06-13T19:08:25.455Z, OR 2015-09-15T14:00:12-04:00).
$types = "types_example"; // string | The stat type you want this endpoint to return information on. Currently only one stat type is accepted per request.  - `engineStates`: The state of the engine (`Off`, `On`, `Idle`). - `fuelPercents`: The engine fuel level in percentage points (e.g. `99`, `50`, etc). - `obdOdometerMeters`: The odometer reading according to on-board diagnostics. If Samsara does not have diagnostic coverage for a particular vehicle, the value for this stat type will be omitted. In these cases, we recommend using `gpsOdometerMeters`. - `gpsOdometerMeters`: The odometer reading according to GPS calculations. This calculation is based off GPS distance traveled and a manual odometer offset for a given vehicle, specified by the user in Samsara's dashboard UI or through the `odometerMeters` field in the [PATCH /fleet/vehicles/{id}](#operation/updateVehicleById) endpoint. `gpsOdometerMeters` is equal to the manual offset plus the GPS distance traveled since the offset was set. The value for this stat type will be omitted if a manual offset is not provided for a given vehicle. - `obdEngineSeconds`: The cumulative number of seconds the engine has run according to on-board diagnostics.
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.
$tag_ids = array("tag_ids_example"); // string[] | A comma-separated list of tag IDs. Example: `tagIds=1234,5678`
$vehicle_ids = array("vehicle_ids_example"); // string[] | A comma-separated list of vehicle IDs. Example: `vehicleIds=1234,5678`

try {
    $result = $apiInstance->getVehicleStatsHistory($start_time, $end_time, $types, $after, $tag_ids, $vehicle_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehiclesApi->getVehicleStatsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_time** | **\DateTime**| A start time in RFC 3339 format. Millisecond precision and timezones are supported. (Examples: 2019-06-13T19:08:25Z, 2019-06-13T19:08:25.455Z, OR 2015-09-15T14:00:12-04:00). |
 **end_time** | **\DateTime**| An end time in RFC 3339 format. Millisecond precision and timezones are supported. (Examples: 2019-06-13T19:08:25Z, 2019-06-13T19:08:25.455Z, OR 2015-09-15T14:00:12-04:00). |
 **types** | **string**| The stat type you want this endpoint to return information on. Currently only one stat type is accepted per request.  - &#x60;engineStates&#x60;: The state of the engine (&#x60;Off&#x60;, &#x60;On&#x60;, &#x60;Idle&#x60;). - &#x60;fuelPercents&#x60;: The engine fuel level in percentage points (e.g. &#x60;99&#x60;, &#x60;50&#x60;, etc). - &#x60;obdOdometerMeters&#x60;: The odometer reading according to on-board diagnostics. If Samsara does not have diagnostic coverage for a particular vehicle, the value for this stat type will be omitted. In these cases, we recommend using &#x60;gpsOdometerMeters&#x60;. - &#x60;gpsOdometerMeters&#x60;: The odometer reading according to GPS calculations. This calculation is based off GPS distance traveled and a manual odometer offset for a given vehicle, specified by the user in Samsara&#39;s dashboard UI or through the &#x60;odometerMeters&#x60; field in the [PATCH /fleet/vehicles/{id}](#operation/updateVehicleById) endpoint. &#x60;gpsOdometerMeters&#x60; is equal to the manual offset plus the GPS distance traveled since the offset was set. The value for this stat type will be omitted if a manual offset is not provided for a given vehicle. - &#x60;obdEngineSeconds&#x60;: The cumulative number of seconds the engine has run according to on-board diagnostics. |
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| A comma-separated list of tag IDs. Example: &#x60;tagIds&#x3D;1234,5678&#x60; | [optional]
 **vehicle_ids** | [**string[]**](../Model/string.md)| A comma-separated list of vehicle IDs. Example: &#x60;vehicleIds&#x3D;1234,5678&#x60; | [optional]

### Return type

[**\Samsara\Php\Client\Model\VehicleStatsListResponse**](../Model/VehicleStatsListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVehicleStatsSnapshot**
> object getVehicleStatsSnapshot($types, $after, $tag_ids, $vehicle_ids)

List most recent vehicle stats

Returns last known stats for all vehicles. This can be optionally filtered by tags or specific vehicle IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\VehiclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$types = "types_example"; // string | The stat type you want this endpoint to return information on. Currently only one stat type is accepted per request.  - `engineStates`: The state of the engine (`Off`, `On`, `Idle`). - `fuelPercents`: The engine fuel level in percentage points (e.g. `99`, `50`, etc). - `obdOdometerMeters`: The odometer reading according to on-board diagnostics. If Samsara does not have diagnostic coverage for a particular vehicle, the value for this stat type will be omitted. In these cases, we recommend using `gpsOdometerMeters`. - `gpsOdometerMeters`: The odometer reading according to GPS calculations. This calculation is based off GPS distance traveled and a manual odometer offset for a given vehicle, specified by the user in Samsara's dashboard UI or through the `odometerMeters` field in the [PATCH /fleet/vehicles/{id}](#operation/updateVehicleById) endpoint. `gpsOdometerMeters` is equal to the manual offset plus the GPS distance traveled since the offset was set. The value for this stat type will be omitted if a manual offset is not provided for a given vehicle. - `obdEngineSeconds`: The cumulative number of seconds the engine has run according to on-board diagnostics.
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.
$tag_ids = array("tag_ids_example"); // string[] | A comma-separated list of tag IDs. Example: `tagIds=1234,5678`
$vehicle_ids = array("vehicle_ids_example"); // string[] | A comma-separated list of vehicle IDs. Example: `vehicleIds=1234,5678`

try {
    $result = $apiInstance->getVehicleStatsSnapshot($types, $after, $tag_ids, $vehicle_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehiclesApi->getVehicleStatsSnapshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **types** | **string**| The stat type you want this endpoint to return information on. Currently only one stat type is accepted per request.  - &#x60;engineStates&#x60;: The state of the engine (&#x60;Off&#x60;, &#x60;On&#x60;, &#x60;Idle&#x60;). - &#x60;fuelPercents&#x60;: The engine fuel level in percentage points (e.g. &#x60;99&#x60;, &#x60;50&#x60;, etc). - &#x60;obdOdometerMeters&#x60;: The odometer reading according to on-board diagnostics. If Samsara does not have diagnostic coverage for a particular vehicle, the value for this stat type will be omitted. In these cases, we recommend using &#x60;gpsOdometerMeters&#x60;. - &#x60;gpsOdometerMeters&#x60;: The odometer reading according to GPS calculations. This calculation is based off GPS distance traveled and a manual odometer offset for a given vehicle, specified by the user in Samsara&#39;s dashboard UI or through the &#x60;odometerMeters&#x60; field in the [PATCH /fleet/vehicles/{id}](#operation/updateVehicleById) endpoint. &#x60;gpsOdometerMeters&#x60; is equal to the manual offset plus the GPS distance traveled since the offset was set. The value for this stat type will be omitted if a manual offset is not provided for a given vehicle. - &#x60;obdEngineSeconds&#x60;: The cumulative number of seconds the engine has run according to on-board diagnostics. |
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| A comma-separated list of tag IDs. Example: &#x60;tagIds&#x3D;1234,5678&#x60; | [optional]
 **vehicle_ids** | [**string[]**](../Model/string.md)| A comma-separated list of vehicle IDs. Example: &#x60;vehicleIds&#x3D;1234,5678&#x60; | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listVehiclesKondo**
> \Samsara\Php\Client\Model\VehicleListResponse listVehiclesKondo($limit, $after, $tag_ids)

List all vehicles

Returns a list of all vehicles in an organization, ordered by vehicle ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\VehiclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 512; // int | The limit for how many objects will be in the response. Default and max for this value is 512 objects.
$after = "after_example"; // string | If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results.
$tag_ids = array("tag_ids_example"); // string[] | A comma-separated list of tag IDs. Example: `tagIds=1234,5678`

try {
    $result = $apiInstance->listVehiclesKondo($limit, $after, $tag_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehiclesApi->listVehiclesKondo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit for how many objects will be in the response. Default and max for this value is 512 objects. | [optional] [default to 512]
 **after** | **string**| If specified, this should be the endCursor value from the previous page of results. When present, this request will return the next page of results that occur immediately after the previous page of results. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| A comma-separated list of tag IDs. Example: &#x60;tagIds&#x3D;1234,5678&#x60; | [optional]

### Return type

[**\Samsara\Php\Client\Model\VehicleListResponse**](../Model/VehicleListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVehicleById**
> \Samsara\Php\Client\Model\InlineResponse2003 updateVehicleById($id, $vehicle_patch_body)

Update a vehicle

Patches the given vehicle object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\VehiclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the vehicle. This can either be the Samsara-specified ID, or an external ID.
$vehicle_patch_body = new \Samsara\Php\Client\Model\VehiclePatch(); // \Samsara\Php\Client\Model\VehiclePatch | Fields that can be patched on a vehicle.

try {
    $result = $apiInstance->updateVehicleById($id, $vehicle_patch_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehiclesApi->updateVehicleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the vehicle. This can either be the Samsara-specified ID, or an external ID. |
 **vehicle_patch_body** | [**\Samsara\Php\Client\Model\VehiclePatch**](../Model/VehiclePatch.md)| Fields that can be patched on a vehicle. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

