# Driver

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_settings** | [**\Samsara\Php\Client\Model\DriverBaseCarrierSettings**](DriverBaseCarrierSettings.md) |  | [optional] 
**eld_adverse_weather_exemption_enabled** | **bool** | Flag indicating this driver may use Adverse Weather exemptions in ELD logs. | [optional] 
**eld_big_day_exemption_enabled** | **bool** | Flag indicating this driver may use Big Day exemption in ELD logs. | [optional] 
**eld_day_start_hour** | **int** | &#x60;0&#x60; indicating midnight-to-midnight ELD driving hours, &#x60;12&#x60; to indicate noon-to-noon driving hours. | [optional] 
**eld_exempt** | **bool** | Flag indicating this driver is exempt from the Electronic Logging Mandate. | [optional] 
**eld_exempt_reason** | **string** | Reason that this driver is exempt from the Electronic Logging Mandate (see eldExempt). | [optional] 
**eld_pc_enabled** | **bool** | Flag indicating this driver may select the Personal Conveyance duty status in ELD logs. | [optional] [default to false]
**eld_ym_enabled** | **bool** | Flag indicating this driver may select the Yard Move duty status in ELD logs. | [optional] [default to false]
**external_ids** | [**\Samsara\Php\Client\Model\ExternalIds**](ExternalIds.md) |  | [optional] 
**is_deactivated** | **bool** | A boolean that indicates whether or not this driver is deactivated. | [optional] 
**license_number** | **string** | Driver&#x27;s state issued license number. The combination of this number and &#x60;licenseState&#x60; must be unique. | [optional] 
**license_state** | **string** | Abbreviation of state that issued driver&#x27;s license. | [optional] 
**locale** | **string** | Locale override (uncommon). | [optional] 
**name** | **string** | Driver&#x27;s name. | [optional] 
**notes** | **string** | Notes about the driver. | [optional] 
**phone** | **string** | Driver&#x27;s phone number. | [optional] 
**timezone** | **string** | Home terminal timezone, in order to indicate what time zone should be used to calculate the ELD logs. | [optional] 
**username** | **string** | Driver&#x27;s login username into the driver app. The username may not contain spaces or the &#x27;@&#x27; symbol. The username must be unique. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

