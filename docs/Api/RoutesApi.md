# Samsara\Php\Client\RoutesApi

All URIs are relative to *https://api.samsara.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1createDispatchRoute**](RoutesApi.md#v1createdispatchroute) | **POST** /v1/fleet/dispatch/routes | Create a new route
[**v1deleteDispatchRouteById**](RoutesApi.md#v1deletedispatchroutebyid) | **DELETE** /v1/fleet/dispatch/routes/{route_id} | Delete a route
[**v1fetchAllDispatchRoutes**](RoutesApi.md#v1fetchalldispatchroutes) | **GET** /v1/fleet/dispatch/routes | Get all routes
[**v1fetchAllRouteJobUpdates**](RoutesApi.md#v1fetchallroutejobupdates) | **GET** /v1/fleet/dispatch/routes/job_updates | Get route updates
[**v1getDispatchRouteById**](RoutesApi.md#v1getdispatchroutebyid) | **GET** /v1/fleet/dispatch/routes/{route_id} | Get a route
[**v1getDispatchRouteHistory**](RoutesApi.md#v1getdispatchroutehistory) | **GET** /v1/fleet/dispatch/routes/{route_id}/history | Get route history
[**v1updateDispatchRouteById**](RoutesApi.md#v1updatedispatchroutebyid) | **PUT** /v1/fleet/dispatch/routes/{route_id} | Update a route

# **v1createDispatchRoute**
> \Samsara\Php\Client\Model\V1DispatchRoute v1createDispatchRoute($body)

Create a new route

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Create a new dispatch route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\V1DispatchRouteCreate(); // \Samsara\Php\Client\Model\V1DispatchRouteCreate | 

try {
    $result = $apiInstance->v1createDispatchRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->v1createDispatchRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\V1DispatchRouteCreate**](../Model/V1DispatchRouteCreate.md)|  |

### Return type

[**\Samsara\Php\Client\Model\V1DispatchRoute**](../Model/V1DispatchRoute.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1deleteDispatchRouteById**
> v1deleteDispatchRouteById($route_id)

Delete a route

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Delete a dispatch route and its associated jobs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_id = 789; // int | ID of the dispatch route. Must contain only digits 0-9.

try {
    $apiInstance->v1deleteDispatchRouteById($route_id);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->v1deleteDispatchRouteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of the dispatch route. Must contain only digits 0-9. |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1fetchAllDispatchRoutes**
> \Samsara\Php\Client\Model\V1DispatchRoutes v1fetchAllDispatchRoutes($end_time, $duration)

Get all routes

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch all of the dispatch routes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$end_time = 789; // int | Time in unix milliseconds that represents the oldest routes to return. Used in combination with duration. Defaults to now.
$duration = 789; // int | Time in milliseconds that represents the duration before end_time to query. Defaults to 24 hours.

try {
    $result = $apiInstance->v1fetchAllDispatchRoutes($end_time, $duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->v1fetchAllDispatchRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_time** | **int**| Time in unix milliseconds that represents the oldest routes to return. Used in combination with duration. Defaults to now. | [optional]
 **duration** | **int**| Time in milliseconds that represents the duration before end_time to query. Defaults to 24 hours. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1DispatchRoutes**](../Model/V1DispatchRoutes.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1fetchAllRouteJobUpdates**
> \Samsara\Php\Client\Model\V1allRouteJobUpdates v1fetchAllRouteJobUpdates($sequence_id, $include)

Get route updates

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch all updates to a job including route data in the last 24 hours or subsequent to an sequence ID. Returns a maximum of 500 job updates. If more than 500 job updates are available, another request made with the prior request's sequence_id will return the next set of available job updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_id = "sequence_id_example"; // string | Sequence ID from the response payload of the last request. Defaults to fetching updates from last 24 hours.
$include = "include_example"; // string | Optionally set include=route to include route object in response payload.

try {
    $result = $apiInstance->v1fetchAllRouteJobUpdates($sequence_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->v1fetchAllRouteJobUpdates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence_id** | **string**| Sequence ID from the response payload of the last request. Defaults to fetching updates from last 24 hours. | [optional]
 **include** | **string**| Optionally set include&#x3D;route to include route object in response payload. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1allRouteJobUpdates**](../Model/V1allRouteJobUpdates.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getDispatchRouteById**
> \Samsara\Php\Client\Model\V1DispatchRoute v1getDispatchRouteById($route_id)

Get a route

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch a dispatch route by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_id = 789; // int | ID of the dispatch route. Must contain only digits 0-9.

try {
    $result = $apiInstance->v1getDispatchRouteById($route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->v1getDispatchRouteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of the dispatch route. Must contain only digits 0-9. |

### Return type

[**\Samsara\Php\Client\Model\V1DispatchRoute**](../Model/V1DispatchRoute.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1getDispatchRouteHistory**
> \Samsara\Php\Client\Model\V1DispatchRouteHistory v1getDispatchRouteHistory($route_id, $start_time, $end_time)

Get route history

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Fetch the history of a dispatch route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_id = 789; // int | ID of the route with history. Must contain only digits 0-9.
$start_time = 789; // int | Timestamp representing the start of the period to fetch, inclusive. Used in combination with end_time. Defaults to 0.
$end_time = 789; // int | Timestamp representing the end of the period to fetch, inclusive. Used in combination with start_time. Defaults to nowMs.

try {
    $result = $apiInstance->v1getDispatchRouteHistory($route_id, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->v1getDispatchRouteHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of the route with history. Must contain only digits 0-9. |
 **start_time** | **int**| Timestamp representing the start of the period to fetch, inclusive. Used in combination with end_time. Defaults to 0. | [optional]
 **end_time** | **int**| Timestamp representing the end of the period to fetch, inclusive. Used in combination with start_time. Defaults to nowMs. | [optional]

### Return type

[**\Samsara\Php\Client\Model\V1DispatchRouteHistory**](../Model/V1DispatchRouteHistory.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1updateDispatchRouteById**
> \Samsara\Php\Client\Model\V1DispatchRoute v1updateDispatchRouteById($body, $route_id)

Update a route

<n class=\"warning\"> <nh> <i class=\"fa fa-exclamation-circle\"></i> This endpoint is still on our legacy API. </nh> </n>  Update the dispatch route. Allowable updates include adding or removing jobs, and changing job locations and times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Samsara\Php\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Samsara\Php\Client\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Samsara\Php\Client\Model\V1DispatchRouteUpdate(); // \Samsara\Php\Client\Model\V1DispatchRouteUpdate | 
$route_id = 789; // int | ID of the dispatch route. Must contain only digits 0-9.

try {
    $result = $apiInstance->v1updateDispatchRouteById($body, $route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->v1updateDispatchRouteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Samsara\Php\Client\Model\V1DispatchRouteUpdate**](../Model/V1DispatchRouteUpdate.md)|  |
 **route_id** | **int**| ID of the dispatch route. Must contain only digits 0-9. |

### Return type

[**\Samsara\Php\Client\Model\V1DispatchRoute**](../Model/V1DispatchRoute.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

