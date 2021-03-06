# V1DispatchJobCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination_address** | **string** | The address of the job destination, as it would be recognized if provided to maps.google.com. Optional if a valid destination address ID is provided. | [optional] 
**destination_address_id** | **int** | ID of the job destination associated with an address book entry. Optional if valid values are provided for destination address and latitude/longitude. If a valid destination address ID is provided, address/latitude/longitude will be used from the address book entry. Name of the address book entry will only be used if the destination name is not provided. | [optional] 
**destination_lat** | **double** | Latitude of the destination in decimal degrees. Optional if a valid destination address ID is provided. | [optional] 
**destination_lng** | **double** | Longitude of the destination in decimal degrees. Optional if a valid destination address ID is provided. | [optional] 
**destination_name** | **string** | The name of the job destination. If provided, it will take precedence over the name of the address book entry. | [optional] 
**notes** | **string** | Notes regarding the details of this job, maximum of 2000 characters; newline characters (&#x27;\\n&#x27;)can be used for formatting. | [optional] 
**scheduled_arrival_time_ms** | **int** | The time at which the assigned driver is scheduled to arrive at the job destination. | 
**scheduled_departure_time_ms** | **int** | The time at which the assigned driver is scheduled to depart from the job destination. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

