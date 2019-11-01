# GetContactDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the contact for which you requested the details | 
**id** | **int** | ID of the contact for which you requested the details | 
**email_blacklisted** | **bool** | Blacklist status for email campaigns (true&#x3D;blacklisted, false&#x3D;not blacklisted) | 
**sms_blacklisted** | **bool** | Blacklist status for SMS campaigns (true&#x3D;blacklisted, false&#x3D;not blacklisted) | 
**created_at** | [**\DateTime**](\DateTime.md) | Creation UTC date-time of the contact (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**modified_at** | [**\DateTime**](\DateTime.md) | Last modification UTC date-time of the contact (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**list_ids** | **int[]** |  | 
**list_unsubscribed** | **int[]** |  | [optional] 
**attributes** | **object** | Set of attributes of the contact | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


