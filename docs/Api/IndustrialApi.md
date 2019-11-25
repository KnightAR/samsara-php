# Samsara\Php\Client\IndustrialApi

All URIs are relative to *https://api.samsara.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVisionRunsByCamera**](IndustrialApi.md#getVisionRunsByCamera) | **GET** /v1/industrial/vision/runs/{camera_id} | Fetch runs by camera
[**v1getAllDataInputs**](IndustrialApi.md#v1getAllDataInputs) | **GET** /v1/industrial/data | Get industrial data
[**v1getCameras**](IndustrialApi.md#v1getCameras) | **GET** /v1/industrial/vision/cameras | Fetch industrial cameras
[**v1getDataInput**](IndustrialApi.md#v1getDataInput) | **GET** /v1/industrial/data/{data_input_id} | Get industrial data from a specific device
[**v1getMachines**](IndustrialApi.md#v1getMachines) | **POST** /v1/machines/list | Get machines
[**v1getMachinesHistory**](IndustrialApi.md#v1getMachinesHistory) | **POST** /v1/machines/history | Get machine history
[**v1getVisionLatestRunCamera**](IndustrialApi.md#v1getVisionLatestRunCamera) | **GET** /v1/industrial/vision/run/camera/{camera_id} | Fetch the latest run for a camera or program
[**v1getVisionProgramsByCamera**](IndustrialApi.md#v1getVisionProgramsByCamera) | **GET** /v1/industrial/vision/cameras/{camera_id}/programs | Fetch industrial camera programs
[**v1getVisionRuns**](IndustrialApi.md#v1getVisionRuns) | **GET** /v1/industrial/vision/runs | Fetch runs
[**v1getVisionRunsByCameraAndProgram**](IndustrialApi.md#v1getVisionRunsByCameraAndProgram) | **GET** /v1/industrial/vision/runs/{camera_id}/{program_id}/{started_at_ms} | Fetch runs by camera and program


# **getVisionRunsByCamera**
> \Samsara\Php\Client\Model\V1VisionRunsByCameraResponse getVisionRunsByCamera($camera_id, $duration_ms, $end_ms)

Fetch runs by camera

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch runs by camera.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$camera_id = 789; // int | The camera_id should be valid for the given accessToken.
$duration_ms = 789; // int | DurationMs is a required param. This works with the EndMs parameter. Indicates the duration in which the visionRuns will be fetched
$end_ms = 789; // int | EndMs is an optional param. It will default to the current time.

try {
    $result = $apiInstance->getVisionRunsByCamera($camera_id, $duration_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->getVisionRunsByCamera: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **camera_id** | **int**| The camera_id should be valid for the given accessToken. |
 **duration_ms** | **int**| DurationMs is a required param. This works with the EndMs parameter. Indicates the duration in which the visionRuns will be fetched |
 **end_ms** | **int**| EndMs is an optional param. It will default to the current time. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1VisionRunsByCameraResponse**](../Model/V1VisionRunsByCameraResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getAllDataInputs**
> \Samsara\Php\Client\Model\InlineResponse20011 v1getAllDataInputs($start_ms, $end_ms)

Get industrial data

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch all of the data inputs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_ms = 789; // int | Timestamp in unix milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. defaults to nowMs.
$end_ms = 789; // int | Timestamp in unix milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. Defaults to nowMs.

try {
    $result = $apiInstance->v1getAllDataInputs($start_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->v1getAllDataInputs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_ms** | **int**| Timestamp in unix milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. defaults to nowMs. | [optional]
 **end_ms** | **int**| Timestamp in unix milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. Defaults to nowMs. | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getCameras**
> \Samsara\Php\Client\Model\V1VisionCamerasResponse v1getCameras()

Fetch industrial cameras

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch all cameras.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1getCameras();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->v1getCameras: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Samsara\Php\Client\Model\V1VisionCamerasResponse**](../Model/V1VisionCamerasResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getDataInput**
> \Samsara\Php\Client\Model\V1DataInputHistoryResponse v1getDataInput($data_input_id, $start_ms, $end_ms)

Get industrial data from a specific device

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch datapoints from a given data input.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_input_id = 789; // int | ID of the data input. Must contain only digits 0-9.
$start_ms = 789; // int | Timestamp in unix milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. defaults to nowMs.
$end_ms = 789; // int | Timestamp in unix milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. Defaults to nowMs.

try {
    $result = $apiInstance->v1getDataInput($data_input_id, $start_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->v1getDataInput: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_input_id** | **int**| ID of the data input. Must contain only digits 0-9. |
 **start_ms** | **int**| Timestamp in unix milliseconds representing the start of the period to fetch, inclusive. Used in combination with endMs. defaults to nowMs. | [optional]
 **end_ms** | **int**| Timestamp in unix milliseconds representing the end of the period to fetch, inclusive. Used in combination with startMs. Defaults to nowMs. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1DataInputHistoryResponse**](../Model/V1DataInputHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getMachines**
> \Samsara\Php\Client\Model\InlineResponse20012 v1getMachines()

Get machines

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get machine objects. This method returns a list of the machine objects in the Samsara Cloud and information about them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1getMachines();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->v1getMachines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Samsara\Php\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getMachinesHistory**
> \Samsara\Php\Client\Model\V1MachineHistoryResponse v1getMachinesHistory($history_param)

Get machine history

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get historical data for machine objects. This method returns a set of historical data for all machines

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$history_param = new \Samsara\Php\Client\Model\HistoryParam(); // \Samsara\Php\Client\Model\HistoryParam | Time range to query for events

try {
    $result = $apiInstance->v1getMachinesHistory($history_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->v1getMachinesHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **history_param** | [**\Samsara\Php\Client\Model\HistoryParam**](../Model/HistoryParam.md)| Time range to query for events |

### Return type

[**\Samsara\Php\Client\Model\V1MachineHistoryResponse**](../Model/V1MachineHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getVisionLatestRunCamera**
> \Samsara\Php\Client\Model\V1VisionRunByCameraResponse v1getVisionLatestRunCamera($camera_id, $program_id, $started_at_ms, $include, $limit)

Fetch the latest run for a camera or program

Fetch the latest run for a camera or program by default. If startedAtMs is supplied, fetch the specific run that corresponds to that start time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$camera_id = 789; // int | The camera_id should be valid for the given accessToken.
$program_id = 789; // int | The configured program's ID on the camera.
$started_at_ms = 789; // int | EndMs is an optional param. It will default to the current time.
$include = "include_example"; // string | Include is a filter parameter. Accepts 'pass', 'reject' or 'no_read'.
$limit = 789; // int | Limit is an integer value from 1 to 1,000.

try {
    $result = $apiInstance->v1getVisionLatestRunCamera($camera_id, $program_id, $started_at_ms, $include, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->v1getVisionLatestRunCamera: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **camera_id** | **int**| The camera_id should be valid for the given accessToken. |
 **program_id** | **int**| The configured program&#39;s ID on the camera. | [optional]
 **started_at_ms** | **int**| EndMs is an optional param. It will default to the current time. | [optional]
 **include** | **string**| Include is a filter parameter. Accepts &#39;pass&#39;, &#39;reject&#39; or &#39;no_read&#39;. | [optional]
 **limit** | **int**| Limit is an integer value from 1 to 1,000. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1VisionRunByCameraResponse**](../Model/V1VisionRunByCameraResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getVisionProgramsByCamera**
> \Samsara\Php\Client\Model\V1ProgramsForTheCameraResponse v1getVisionProgramsByCamera($camera_id)

Fetch industrial camera programs

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch configured programs on the camera.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$camera_id = 789; // int | The camera_id should be valid for the given accessToken.

try {
    $result = $apiInstance->v1getVisionProgramsByCamera($camera_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->v1getVisionProgramsByCamera: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **camera_id** | **int**| The camera_id should be valid for the given accessToken. |

### Return type

[**\Samsara\Php\Client\Model\V1ProgramsForTheCameraResponse**](../Model/V1ProgramsForTheCameraResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getVisionRuns**
> \Samsara\Php\Client\Model\V1VisionRunsResponse v1getVisionRuns($duration_ms, $end_ms)

Fetch runs

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch runs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$duration_ms = 789; // int | DurationMs is a required param. This works with the EndMs parameter. Indicates the duration in which the visionRuns will be fetched
$end_ms = 789; // int | EndMs is an optional param. It will default to the current time.

try {
    $result = $apiInstance->v1getVisionRuns($duration_ms, $end_ms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->v1getVisionRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **duration_ms** | **int**| DurationMs is a required param. This works with the EndMs parameter. Indicates the duration in which the visionRuns will be fetched |
 **end_ms** | **int**| EndMs is an optional param. It will default to the current time. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1VisionRunsResponse**](../Model/V1VisionRunsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getVisionRunsByCameraAndProgram**
> \Samsara\Php\Client\Model\V1VisionRunsByCameraAndProgramResponse v1getVisionRunsByCameraAndProgram($camera_id, $program_id, $started_at_ms, $include)

Fetch runs by camera and program

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch runs by camera and program.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Samsara\Php\Client\Api\IndustrialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$camera_id = 789; // int | The camera_id should be valid for the given accessToken.
$program_id = 789; // int | The configured program's ID on the camera.
$started_at_ms = 789; // int | Started_at_ms is a required param. Indicates the start time of the run to be fetched.
$include = "include_example"; // string | Include is a filter parameter. Accepts 'pass', 'reject' or 'no_read'.

try {
    $result = $apiInstance->v1getVisionRunsByCameraAndProgram($camera_id, $program_id, $started_at_ms, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustrialApi->v1getVisionRunsByCameraAndProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **camera_id** | **int**| The camera_id should be valid for the given accessToken. |
 **program_id** | **int**| The configured program&#39;s ID on the camera. |
 **started_at_ms** | **int**| Started_at_ms is a required param. Indicates the start time of the run to be fetched. |
 **include** | **string**| Include is a filter parameter. Accepts &#39;pass&#39;, &#39;reject&#39; or &#39;no_read&#39;. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1VisionRunsByCameraAndProgramResponse**](../Model/V1VisionRunsByCameraAndProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

