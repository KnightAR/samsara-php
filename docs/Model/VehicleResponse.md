# VehicleResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aux_input_type1** | **string** | The type of aux input that this vehicle has connected to port 1. Setting to \&quot;none\&quot; will remove the configured aux input. | [optional] 
**aux_input_type2** | **string** | The type of aux input that this vehicle has connected to port 2. Setting to \&quot;none\&quot; will remove the configured aux input. | [optional] 
**external_ids** | [**\Samsara\Php\Client\Model\ExternalIds**](ExternalIds.md) |  | [optional] 
**harsh_acceleration_setting_type** | **string** | Enumeration of the harsh acceleration setting types. This setting influences the acceleration sensitivity from which a harsh event is triggered. If set to &#x60;off&#x60;, then no acceleration based harsh events are triggered for the vehicle. | [optional] 
**id** | **string** | Unique Samsara ID for the vehicle. | 
**license_plate** | **string** | The license plate of this vehicle. | [optional] 
**make** | **string** | Vehicle&#x27;s manufacturing make. | [optional] 
**model** | **string** | Vehicle&#x27;s manufacturing model. | [optional] 
**name** | **string** | Name of the vehicle. | [optional] 
**notes** | **string** | Notes about a vehicle. Samsara supports a maximum of 255 chars. | [optional] 
**static_assigned_driver** | [**\Samsara\Php\Client\Model\DriverTinyResponse**](DriverTinyResponse.md) |  | [optional] 
**tags** | [**\Samsara\Php\Client\Model\TagTinyResponse[]**](TagTinyResponse.md) | An array of all tag mini-objects that are associated with the given vehicle. | [optional] 
**vin** | **string** | A vehicle identification number. | [optional] 
**year** | **string** | Vehicle&#x27;s manufacturing year. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

