# V1VehicleSafetyScoreResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**crash_count** | **int** | Crash event count | [optional] 
**harsh_accel_count** | **int** | Harsh acceleration event count | [optional] 
**harsh_braking_count** | **int** | Harsh braking event count | [optional] 
**harsh_events** | [**\Samsara\Php\Client\Model\V1SafetyReportHarshEvent[]**](V1SafetyReportHarshEvent.md) |  | [optional] 
**harsh_turning_count** | **int** | Harsh turning event count | [optional] 
**safety_score** | **int** | Safety Score | [optional] 
**safety_score_rank** | **string** | Safety Score Rank | [optional] 
**time_over_speed_limit_ms** | **int** | Amount of time driven over the speed limit in milliseconds | [optional] 
**total_distance_driven_meters** | **int** | Total distance driven in meters | [optional] 
**total_harsh_event_count** | **int** | Total harsh event count | [optional] 
**total_time_driven_ms** | **int** | Amount of time driven in milliseconds | [optional] 
**vehicle_id** | **int** | Vehicle ID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

