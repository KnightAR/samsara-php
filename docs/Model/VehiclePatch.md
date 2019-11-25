# VehiclePatch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aux_input_type1** | **string** | The type of aux input that this vehicle has connected to port 1. Setting to \&quot;none\&quot; will remove the configured aux input. | [optional] 
**aux_input_type2** | **string** | The type of aux input that this vehicle has connected to port 2. Setting to \&quot;none\&quot; will remove the configured aux input. | [optional] 
**engine_hours** | **int** | Current engine hours value of the vehicle. This is typically pulled automatically from the vehicle, but can be manually overridden when it&#39;s not read automatically. | [optional] 
**external_ids** | [**\Samsara\Php\Client\Model\ExternalIds**](ExternalIds.md) |  | [optional] 
**harsh_acceleration_setting_type** | **string** | Enumeration of the harsh acceleration setting types. This setting influences the accelereation sensitivity from which a harsh event is triggered. If set to &#x60;off&#x60;, then no acceleration based harsh events are triggered for the vehicle. | [optional] 
**license_plate** | **string** | License plate number for the vehicle. | [optional] 
**name** | **string** | Name of the vehicle. | [optional] 
**notes** | **string** | Notes about a vehicle with a maximum of 255 characters. | [optional] 
**odometer_meters** | **int** | Current odometer value of the vehicle. This is typically pulled automatically from the vehicle, but can be manually overridden when it&#39;s not read automatically. | [optional] 
**static_assigned_driver_id** | **string** | ID of driver assigned to the vehicle for static vehicle assignments. An empty string explicitly unsets the assignment. (uncommon). | [optional] 
**tag_ids** | **string[]** | An array of IDs of tags to associate with this vehicle. | [optional] 
**vin** | **string** | A vehicle identification number. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


