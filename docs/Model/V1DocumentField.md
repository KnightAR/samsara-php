# V1DocumentField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_time_value** | **string** | Value of this field if this document field has valueType: ValueType_DateTime. | [optional] 
**multiple_choice_value** | [**\Swagger\Client\Model\V1DocumentFieldCreateMultipleChoiceValue[]**](V1DocumentFieldCreateMultipleChoiceValue.md) | Value of this field if this document field has valueType: ValueType_MultipleChoice. Array of objects containing two fields: the string value of the multiple choice option and a boolean representing whether or not the choice was selected | [optional] 
**number_value** | **double** | Value of this field if this document field has valueType: ValueType_Number. | [optional] 
**photo_value** | [**\Swagger\Client\Model\V1DocumentFieldCreatePhotoValue[]**](V1DocumentFieldCreatePhotoValue.md) | Value of this field if this document field has valueType: ValueType_Photo. Array of photo objects where each object contains a URL for a photo. | [optional] 
**string_value** | **string** | Value of this field if this document field has valueType: ValueType_String. | [optional] 
**value_type** | **string** | Determines the type of this field and what type of value this field has. It should be either ValueType_Number, ValueType_String, ValueType_Photo, ValueType_MultipleChoice or ValueType_DateTime. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


