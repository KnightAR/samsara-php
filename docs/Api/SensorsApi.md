# Samsara\Php\Client\SensorsApi

All URIs are relative to *https://api.samsara.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1getSensors**](SensorsApi.md#v1getsensors) | **POST** /v1/sensors/list | Get all sensors
[**v1getSensorsCargo**](SensorsApi.md#v1getsensorscargo) | **POST** /v1/sensors/cargo | Get cargo status
[**v1getSensorsDoor**](SensorsApi.md#v1getsensorsdoor) | **POST** /v1/sensors/door | Get door status
[**v1getSensorsHistory**](SensorsApi.md#v1getsensorshistory) | **POST** /v1/sensors/history | Get sensor history
[**v1getSensorsHumidity**](SensorsApi.md#v1getsensorshumidity) | **POST** /v1/sensors/humidity | Get humidity
[**v1getSensorsTemperature**](SensorsApi.md#v1getsensorstemperature) | **POST** /v1/sensors/temperature | Get temperature

# **v1getSensors**
> \Samsara\Php\Client\Model\InlineResponse20019 v1getSensors($body)

Get all sensors

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get sensor objects. This method returns a list of the sensor objects in the Samsara Cloud and information about them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\SensorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\Body6(); // \Samsara\Php\Client\Model\Body6 | Group ID

try {
    $result = $apiInstance->v1getSensors($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorsApi->v1getSensors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\Body6**](../Model/Body6.md)| Group ID | [optional]

### Return type

[**\Samsara\Php\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getSensorsCargo**
> \Samsara\Php\Client\Model\V1CargoResponse v1getSensorsCargo($body)

Get cargo status

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get cargo monitor status (empty / full) for requested sensors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\SensorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | Group ID and list of sensor IDs to query.

try {
    $result = $apiInstance->v1getSensorsCargo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorsApi->v1getSensorsCargo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Group ID and list of sensor IDs to query. |

### Return type

[**\Samsara\Php\Client\Model\V1CargoResponse**](../Model/V1CargoResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getSensorsDoor**
> \Samsara\Php\Client\Model\V1DoorResponse v1getSensorsDoor($body)

Get door status

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get door monitor status (closed / open) for requested sensors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\SensorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | Group ID and list of sensor IDs to query.

try {
    $result = $apiInstance->v1getSensorsDoor($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorsApi->v1getSensorsDoor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Group ID and list of sensor IDs to query. |

### Return type

[**\Samsara\Php\Client\Model\V1DoorResponse**](../Model/V1DoorResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getSensorsHistory**
> \Samsara\Php\Client\Model\V1SensorHistoryResponse v1getSensorsHistory($body)

Get sensor history

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get historical data for specified sensors. This method returns a set of historical data for the specified sensors in the specified time range and at the specified time resolution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\SensorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\Body5(); // \Samsara\Php\Client\Model\Body5 | Group ID, time range and resolution, and list of sensor ID, field pairs to query.

try {
    $result = $apiInstance->v1getSensorsHistory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorsApi->v1getSensorsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\Body5**](../Model/Body5.md)| Group ID, time range and resolution, and list of sensor ID, field pairs to query. |

### Return type

[**\Samsara\Php\Client\Model\V1SensorHistoryResponse**](../Model/V1SensorHistoryResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getSensorsHumidity**
> \Samsara\Php\Client\Model\V1HumidityResponse v1getSensorsHumidity($body)

Get humidity

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get humidity for requested sensors. This method returns the current relative humidity for the requested sensors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\SensorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | Group ID and list of sensor IDs to query.

try {
    $result = $apiInstance->v1getSensorsHumidity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorsApi->v1getSensorsHumidity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Group ID and list of sensor IDs to query. |

### Return type

[**\Samsara\Php\Client\Model\V1HumidityResponse**](../Model/V1HumidityResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getSensorsTemperature**
> \Samsara\Php\Client\Model\V1TemperatureResponse v1getSensorsTemperature($body)

Get temperature

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Get temperature for requested sensors. This method returns the current ambient temperature (and probe temperature if applicable) for the requested sensors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\SensorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | Group ID and list of sensor IDs to query.

try {
    $result = $apiInstance->v1getSensorsTemperature($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorsApi->v1getSensorsTemperature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| Group ID and list of sensor IDs to query. |

### Return type

[**\Samsara\Php\Client\Model\V1TemperatureResponse**](../Model/V1TemperatureResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

