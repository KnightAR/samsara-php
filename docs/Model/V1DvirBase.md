# V1DvirBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author_signature** | [**\Samsara\Php\Client\Model\V1DvirBaseAuthorSignature**](V1DvirBaseAuthorSignature.md) |  | [optional] 
**defects_corrected** | **bool** | Signifies if the defects on the vehicle corrected after the DVIR is done. | [optional] 
**defects_need_not_be_corrected** | **bool** | Signifies if the defects on this vehicle can be ignored. | [optional] 
**id** | **int** | The id of this DVIR record. | [optional] 
**inspection_type** | **string** | Inspection type of the DVIR. | [optional] 
**mechanic_notes** | **string** | The mechanics notes on the DVIR. | [optional] 
**mechanic_or_agent_signature** | [**\Samsara\Php\Client\Model\V1DvirBaseMechanicOrAgentSignature**](V1DvirBaseMechanicOrAgentSignature.md) |  | [optional] 
**next_driver_signature** | [**\Samsara\Php\Client\Model\V1DvirBaseNextDriverSignature**](V1DvirBaseNextDriverSignature.md) |  | [optional] 
**odometer_miles** | **int** | The odometer reading in miles for the vehicle when the DVIR was done. | [optional] 
**started_at_ms** | **int** | Timestamp when driver began filling out this DVIR, in UNIX milliseconds. | [optional] 
**time_ms** | **int** | Timestamp of when this DVIR was signed &amp; completed, in UNIX milliseconds. | [optional] 
**trailer_defects** | [**\Samsara\Php\Client\Model\V1DvirDefectBase[]**](V1DvirDefectBase.md) | Defects registered for the trailer which was part of the DVIR. | [optional] 
**trailer_id** | **int** | The id of the trailer which was part of the DVIR. | [optional] 
**trailer_name** | **string** | The name of the trailer which was part of the DVIR. | [optional] 
**vehicle** | [**\Samsara\Php\Client\Model\V1DvirBaseVehicle**](V1DvirBaseVehicle.md) |  | [optional] 
**vehicle_condition** | **string** | The condition of vechile on which DVIR was done. | [optional] 
**vehicle_defects** | [**\Samsara\Php\Client\Model\V1DvirDefectBase[]**](V1DvirDefectBase.md) | Defects registered for the vehicle which was part of the DVIR. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

