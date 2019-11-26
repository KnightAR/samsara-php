# UserCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auth_type** | **string** | The authentication type the user uses to authenticate. To use SAML this organization must have a configured SAML integration. | 
**email** | **string** | The email address of this user. This cannot be changed after creation. | 
**name** | **string** | The first and last name of the user. | 
**roles** | [**\Samsara\Php\Client\Model\UserRoleInput[]**](UserRoleInput.md) | The roles for this user. Users must have at least a single role to be a part of an organization. Roles without an associated &#x60;tagId&#x60; are considered \&quot;Organization Level\&quot; roles and will apply to the user at the organization level. Each user can only have one \&quot;Organization Level\&quot; role. Roles with a &#x60;tagId&#x60; will be roles specific to that tag. Users can only have one role per tag. Users can have different roles at the organization and tag level, and users can have different roles for different tags. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

