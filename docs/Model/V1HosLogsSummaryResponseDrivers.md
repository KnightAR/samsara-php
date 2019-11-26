# V1HosLogsSummaryResponseDrivers

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_duty_status_code** | **string** | The Hours of Service status type. | [optional] 
**cycle_remaining** | **int** | The amount of remaining cycle time (in ms). | [optional] 
**cycle_tomorrow** | **int** | The amount of cycle time (in ms) available tomorrow. | [optional] 
**drive_ms_today** | **float** | The amount of driving time today (in ms). | [optional] 
**driver_id** | **int** | ID of the driver. | [optional] 
**driver_name** | **string** | Name of the driver. | [optional] 
**driving_in_violation_cycle** | **int** | The amount of driving time in violation in this cycle (in ms). | [optional] 
**driving_in_violation_today** | **int** | The amount of driving time in violation today (in ms). | [optional] 
**on_duty_ms_today** | **float** | The amount of on duty time today (in ms). | [optional] 
**pending_drive_ms_today** | **float** | The amount of driving time today for pending logs (in ms). | [optional] 
**pending_on_duty_ms_today** | **float** | The amount of on duty time today for pending logs (in ms). | [optional] 
**shift_drive_remaining** | **int** | The amount of remaining shift drive time (in ms). | [optional] 
**shift_remaining** | **int** | The amount of remaining shift time (in ms). | [optional] 
**time_in_current_status** | **int** | The amount of time (in ms) that the driver has been in the current &#x60;dutyStatus&#x60;. | [optional] 
**time_until_break** | **int** | The amount of time (in ms) remaining until the driver cannot drive without a rest break. | [optional] 
**vehicle_name** | **string** | Name of the vehicle. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

