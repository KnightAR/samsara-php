# V1VehicleHarshEventResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**download_forward_video_url** | **string** | URL for downloading the forward facing video | [optional] 
**download_inward_video_url** | **string** | URL for downloading the inward facing video | [optional] 
**download_tracked_inward_video_url** | **string** | URL for downloading the tracked inward facing video | [optional] 
**harsh_event_type** | **string** | Type of the harsh event. One of: [Crash, Harsh Acceleration, Harsh Braking, Harsh Turn, ROP Engine, ROP Brake, YC Engine, YC Brake, Harsh Event] | 
**incident_report_url** | **string** | URL of the associated incident report page | 
**is_distracted** | **bool** | Whether the driver was deemed distracted during this harsh event | [optional] 
**location** | [**\Samsara\Php\Client\Model\V1VehicleHarshEventResponseLocation**](V1VehicleHarshEventResponseLocation.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

