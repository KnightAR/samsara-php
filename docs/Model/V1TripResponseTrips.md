# V1TripResponseTrips

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset_ids** | **int[]** | List of associated asset IDs | [optional] 
**codriver_ids** | **int[]** | List of codriver IDs | [optional] 
**distance_meters** | **int** | Length of the trip in meters. | [optional] 
**driver_id** | **int** | ID of the driver. | [optional] 
**end_address** | [**\Samsara\Php\Client\Model\V1TripResponseEndAddress**](V1TripResponseEndAddress.md) |  | [optional] 
**end_coordinates** | [**\Samsara\Php\Client\Model\V1TripResponseEndCoordinates**](V1TripResponseEndCoordinates.md) |  | [optional] 
**end_location** | **string** | Geocoded street address of start (latitude, longitude) coordinates. | [optional] 
**end_ms** | **int** | End of the trip in UNIX milliseconds. Ongoing trips are indicated by an endMs value of 9223372036854775807. | [optional] 
**end_odometer** | **int** | Odometer reading (in meters) at the end of the trip. | [optional] 
**fuel_consumed_ml** | **int** | Amount in milliliters of fuel consumed on this trip. | [optional] 
**start_address** | [**\Samsara\Php\Client\Model\V1TripResponseStartAddress**](V1TripResponseStartAddress.md) |  | [optional] 
**start_coordinates** | [**\Samsara\Php\Client\Model\V1TripResponseStartCoordinates**](V1TripResponseStartCoordinates.md) |  | [optional] 
**start_location** | **string** | Geocoded street address of start (latitude, longitude) coordinates. | [optional] 
**start_ms** | **int** | Beginning of the trip in UNIX milliseconds. | [optional] 
**start_odometer** | **int** | Odometer reading (in meters) at the beginning of the trip. | [optional] 
**toll_meters** | **int** | Length in meters trip spent on toll roads. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


