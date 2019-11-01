# GetCampaignOverview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the campaign | 
**name** | **string** | Name of the campaign | 
**subject** | **string** | Subject of the campaign. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;false&#x60; | [optional] 
**type** | **string** | Type of campaign | 
**status** | **string** | Status of the campaign | 
**scheduled_at** | [**\DateTime**](\DateTime.md) | UTC date-time on which campaign is scheduled (YYYY-MM-DDTHH:mm:ss.SSSZ) | [optional] 
**ab_testing** | **bool** | Status of A/B Test for the campaign. abTesting &#x3D; false means it is disabled, &amp; abTesting &#x3D; true means it is enabled. | [optional] 
**subject_a** | **string** | Subject A of the ab-test campaign. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**subject_b** | **string** | Subject B of the ab-test campaign. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**split_rule** | **int** | The size of your ab-test groups. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**winner_criteria** | **string** | Criteria for the winning version. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**winner_delay** | **int** | The duration of the test in hours at the end of which the winning version will be sent. Only available if &#x60;abTesting&#x60; flag of the campaign is &#x60;true&#x60; | [optional] 
**send_at_best_time** | **bool** | It is true if you have chosen to send your campaign at best time, otherwise it is false | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


