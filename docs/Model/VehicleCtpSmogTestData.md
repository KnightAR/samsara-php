# VehicleCtpSmogTestData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comm_protocol** | **string** | CAN bus communication protocol as detected by the vehicle gateway. | [optional] 
**device_firmware** | **string** | CTP firmware version as reported by the vehicle gateway. | [optional] 
**dlc_pin_voltage_milli_volts** | **int** | Positive battery voltage as detected by the vehicle gateway reported in millivolts. | [optional] 
**dlc_pin_voltage_milli_volts_valid** | **bool** | Indicates DlcPinVoltageMilliVolts was successfully read from the CAN bus. | [optional] 
**link_id** | **string** | Device serial number. | [optional] 
**remote_obd_test_records** | [**\Samsara\Php\Client\Model\RemoteObdTestRecords[]**](RemoteObdTestRecords.md) | Contains all of the specific OBD data collected for a single ECU present on a vehicle. There can can be multiple ECUs on a vehicle. | [optional] 
**test_date_time** | [**\Samsara\Php\Client\Model\Time**](Time.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

