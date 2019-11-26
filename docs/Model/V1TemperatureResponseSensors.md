# V1TemperatureResponseSensors

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ambient_temperature** | **int** | Currently reported ambient temperature in millidegrees celsius. | [optional] 
**ambient_temperature_time** | **string** | The timestamp of reported ambient temperature, specified in RFC 3339 time. | [optional] 
**id** | **int** | ID of the sensor. | [optional] 
**name** | **string** | Name of the sensor. | [optional] 
**probe_temperature** | **int** | Currently reported probe temperature in millidegrees celsius. If no probe is connected, this parameter will not be reported. | [optional] 
**probe_temperature_time** | **string** | The timestamp of reported probe temperature, specified in RFC 3339 time. | [optional] 
**trailer_id** | **int** | ID of the trailer associated with the sensor for the data point. If no trailer is connected, this parameter will not be reported. | [optional] 
**vehicle_id** | **int** | ID of the vehicle associated with the sensor for the data point. If no vehicle is connected, this parameter will not be reported. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

