# DriverCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_settings** | [**\Samsara\Php\Client\Model\DriverBaseCarrierSettings**](DriverBaseCarrierSettings.md) |  | [optional] 
**current_vehicle_id** | **string** | ID of vehicle that driver is currently assigned to. | [optional] 
**eld_adverse_weather_exemption_enabled** | **bool** | Flag indicating this driver may use Adverse Weather exemptions in ELD logs. | [optional] [default to false]
**eld_big_day_exemption_enabled** | **bool** | Flag indicating this driver may use Big Day exemption in ELD logs. | [optional] [default to false]
**eld_day_start_hour** | **int** | &#x60;0&#x60; indicating midnight-to-midnight ELD driving hours, &#x60;12&#x60; to indicate noon-to-noon driving hours. | [optional] [default to 0]
**eld_exempt** | **bool** | Flag indicating this driver is exempt from the Electronic Logging Mandate. | [optional] [default to false]
**eld_exempt_reason** | **string** | Reason that this driver is exempt from the Electronic Logging Mandate (see eldExempt). | [optional] 
**eld_pc_enabled** | **bool** | Flag indicating this driver may select the Personal Conveyance duty status in ELD logs. | [optional] [default to false]
**eld_ym_enabled** | **bool** | Flag indicating this driver may select the Yard Move duty status in ELD logs. | [optional] [default to false]
**external_ids** | [**\Samsara\Php\Client\Model\ExternalIds**](ExternalIds.md) |  | [optional] 
**license_number** | **string** | Driver&#x27;s state issued license number. The combination of this number and &#x60;licenseState&#x60; must be unique. | [optional] 
**license_state** | **string** | Abbreviation of state that issued driver&#x27;s license. | [optional] 
**locale** | **string** | Locale override (uncommon). These are specified by ISO 3166-2 country codes for supported locales. | [optional] 
**name** | **string** | Driver&#x27;s name. | 
**notes** | **string** | Notes about the driver. | [optional] 
**password** | **string** | Password that the driver can use to login to the Samsara driver app. | 
**phone** | **string** | Phone number of the driver. | [optional] 
**static_assigned_vehicle_id** | **string** | ID of vehicle that the driver is permanently assigned to. (uncommon). | [optional] 
**tag_ids** | **string[]** | IDs of tags the driver is associated with. | [optional] 
**timezone** | **string** | Home terminal timezone, in order to indicate what time zone should be used to calculate the ELD logs. | [optional] 
**username** | **string** | Driver&#x27;s login username into the driver app. The username may not contain spaces or the &#x27;@&#x27; symbol. The username must be unique. | 
**vehicle_group_tag_id** | **string** | Tag ID which determines which vehicles a driver will see when selecting vehicles. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

