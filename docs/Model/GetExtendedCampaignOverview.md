# GetExtendedCampaignOverview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**test_sent** | **bool** | Retrieved the status of test email sending. (true&#x3D;Test email has been sent  false&#x3D;Test email has not been sent) | 
**header** | **string** | Header of the campaign | 
**footer** | **string** | Footer of the campaign | 
**sender** | **object** |  | 
**reply_to** | **string** | Email defined as the \&quot;Reply to\&quot; of the campaign | 
**to_field** | **string** | Customisation of the \&quot;to\&quot; field of the campaign | 
**html_content** | **string** | HTML content of the campaign | 
**share_link** | **string** | Link to share the campaign on social medias | [optional] 
**tag** | **string** | Tag of the campaign | 
**created_at** | [**\DateTime**](\DateTime.md) | Creation UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**modified_at** | [**\DateTime**](\DateTime.md) | UTC date-time of last modification of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ) | 
**inline_image_activation** | **bool** | Status of inline image. inlineImageActivation &#x3D; false means image can’t be embedded, &amp; inlineImageActivation &#x3D; true means image can be embedded, in the email. | [optional] 
**mirror_active** | **bool** | Status of mirror links in campaign. mirrorActive &#x3D; false means mirror links are deactivated, &amp; mirrorActive &#x3D; true means mirror links are activated, in the campaign | [optional] 
**recurring** | **bool** | FOR TRIGGER ONLY ! Type of trigger campaign.recurring &#x3D; false means contact can receive the same Trigger campaign only once, &amp; recurring &#x3D; true means contact can receive the same Trigger campaign several times | [optional] 
**sent_date** | [**\DateTime**](\DateTime.md) | Sent UTC date-time of the campaign (YYYY-MM-DDTHH:mm:ss.SSSZ). Only available if &#39;status&#39; of the campaign is &#39;sent&#39; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


