<?php

$_method = $SERVER['REQUEST_METHOD'];

//Process only when process is POST

(queryText serch in column A)
(fulfillmentText search in column B, then column D)
default:false
	'fulfillmentText' = "Sorry, I didn't get that. PLease may you ask me something else."
	break;

if($_method = "POST"){
	POST https://app.zohocreator.eu/georgeororke/gin-testing#Report:Sheet1_Report'

	Headers:
	//user defined heaters
	Content-type: application/json

	'responseId': ''
	'session': 'projects/projectId/agent/sessions/session_number'
	'queryResult': {
		'queryText': 'input query'
		'parameters': {
			'param': 'given-name'
		
		},
		'allRequiredParamsPresent': true,
		'fulfillmentText1': "Text defined in column B was matched"
		'fulfillmentText1Present': true,
		'fulfillmentMessages': [
			{
				'text': {
					'text': [
						"text defined in column B was matched"
					]
				}
			}
		],
		'allRequiredParamsPresent': true,
		'fulfillmentText1Present': false,
		'fulfillmentText2': "Text defined in column D was matched"
		'fulfillmentText2Present': true,
		'fulfillmentMessages': [
			{
				'text': {
					;'text': [
						"text defined in column D was matched"
					]
				}
			}
		],
		'allRequiredParamsPresent': true,
		'fulfillmentText2Present': false,
		'fulfillmentText3': "default"
		'fulfillmentMessages': [
			{
				'text': {
					'text': [
						"default"
					]
				}
			}
		],
		'allRequiredParamsPresent': false,
		'fulfillmentText3': "default"
		'fulfillmentMessages': [
			{
				'text': {
					'text': [
						"default"
					]
				}
			}
		],
		'outputContexts': [
			{
				'name': 'projects/projectId/agent/sessions/session_number'
				'lifespanCount': 5,
				'parameters': {
					'param': 'param value'
				}
			}
		],
		'intent': {
			'name': 'projects/projectId/agent/sessions/session_number'
			'displayName': 'Matched Intent Name'
		},
		'intentDetectionConfidence': 1,
		'diagnosticInfo': {},
		'languagecode': 'en'
	},
	'originalDetectIntentRequest': {}
	
	$response->speech = "";
	$response->displayText = "";
	$response->source = "webhook";
}

?>