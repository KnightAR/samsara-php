# V1DvirDefectBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | The comment describing the type of DVIR defect. | [optional] 
**defect_type** | **string** | The type of DVIR defect. Possible values: [&#x60;AIR_COMPRESSOR&#x60;, &#x60;AIR_CONDITIONER&#x60;, &#x60;AIR_LINES&#x60;, &#x60;BATTERY&#x60;, &#x60;BELTS_HOSES&#x60;, &#x60;BRAKE_ACCESSORIES&#x60;, &#x60;BRAKE_CHECK&#x60;, &#x60;BRAKE_CONNECTIONS&#x60;, &#x60;BRAKES&#x60;, &#x60;CLUTCH&#x60;, &#x60;COUPLING_DEVICES&#x60;, &#x60;DEFROSTER_HEATER&#x60;, &#x60;DOORS&#x60;, &#x60;DRIVE_LINE&#x60;, &#x60;EMERGENCY_DOOR_AND_BUZZER&#x60;, &#x60;ENGINE&#x60;, &#x60;ENTRANCE_STEPS&#x60;, &#x60;EXHAUST&#x60;, &#x60;FIFTH_WHEEL&#x60;, &#x60;FIRST_AID_KIT&#x60;, &#x60;FLUID_LEVELS&#x60;, &#x60;FRAME_ASSEMBLY&#x60;, &#x60;FRONT_AXLE&#x60;, &#x60;FUEL_TANKS&#x60;, &#x60;HORN&#x60;, &#x60;INTERIOR_AND_FLOOR&#x60;, &#x60;LANDING_GEAR&#x60;, &#x60;LIGHTS&#x60;, &#x60;MIRRORS&#x60;, &#x60;MUFFLER&#x60;, &#x60;OIL_PRESSURE&#x60;, &#x60;OTHER&#x60;, &#x60;RADIATOR&#x60;, &#x60;REAR_END&#x60;, &#x60;REFLECTORS&#x60;, &#x60;ROOF&#x60;, &#x60;SAFETY_EQUIPMENT&#x60;, &#x60;STARTER&#x60;, &#x60;STEERING&#x60;, &#x60;STOP_ARM_CONTROL&#x60;, &#x60;STOP_ARM&#x60;, &#x60;SUSPENSION&#x60;, &#x60;TIRE_CHAINS&#x60;, &#x60;TIRES&#x60;, &#x60;TRANSMISSION&#x60;, &#x60;TRIP_RECORDER&#x60;, &#x60;WHEELS_RIMS&#x60;, &#x60;WINDOWS&#x60;, &#x60;WINDSHIELD_WIPERS&#x60;, &#x60;UNSET&#x60;] | [optional] 
**id** | **int** | The id of this defect. | [optional] 
**resolved** | **bool** | Signifies if this defect is resolved. | [optional] 
**resolved_at** | **int** | Timestamp when this defect was resolved, in UNIX milliseconds.  Will not be returned if the defect is unresolved. | [optional] 
**resolved_by_driver_id** | **int** | ID of the driver who resolved this defect. Will not be returned if the defect is unresolved or resolvedByMechanicId is returned. | [optional] 
**resolved_by_mechanic_id** | **int** | ID of the mechanic who resolved this defect. Will not be returned if the defect is unresolved or resolvedByDriverId is returned. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

