# GetSmtpTemplateOverview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the template | 
**name** | **string** | Name of the template | 
**subject** | **string** | Subject of the template | 
**is_active** | **bool** | Status of template (true&#x3D;active, false&#x3D;inactive) | 
**test_sent** | **bool** | Status of test sending for the template (true&#x3D;test email has been sent, false&#x3D;test email has not been sent) | 
**sender** | [**\Swagger\Client\Model\GetSmtpTemplateOverviewSender**](GetSmtpTemplateOverviewSender.md) |  | [optional] 
**reply_to** | **string** | Email defined as the \&quot;Reply to\&quot; for the template | 
**to_field** | **string** | Customisation of the \&quot;to\&quot; field for the template | 
**tag** | **string** | Tag of the template | 
**html_content** | **string** | HTML content of the template | 
**created_at** | [**\DateTime**](\DateTime.md) | Creation UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**modified_at** | [**\DateTime**](\DateTime.md) | Last modification UTC date-time of the template (YYYY-MM-DDTHH:mm:ss.SSSZ) | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


