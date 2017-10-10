[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/MicrosoftWebLangModel/functions?utm_source=RapidAPIGitHub_MicrosoftWebLangModelFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# MicrosoftWebLangModel Package
Automate a variety of standard natural language processing tasks using state-of-the-art language modeling APIs
* Domain: [azure.microsoft.com](https://azure.microsoft.com/en-us/services/cognitive-services/web-language-model/)
* Credentials: key

## How to get credentials: 
1. Sign in [portal.azure.com](https://azure.microsoft.com/en-us/services/cognitive-services/web-language-model/).
2. Click create button.
3. Navigate to Keys - tab.

## Custom datatypes: 
   |Datatype|Description|Example
   |--------|-----------|----------
   |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
   |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
   |List|Simple array|```["123", "sample"]``` 
   |Select|String with predefined values|```sample```
   |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## MicrosoftWebLangModel.calculateConditionalProbability
Calculate the conditional probability that a particular word will follow a given sequence of words.

| Field| Type       | Description
|------|------------|----------
| key  | Credentials| Subscription key which provides access to this API. 
| model| Select     | Which model to use, supported value: title/anchor/query/body
| order| Select     | The order of N-gram. If not specified, use default value 5 .Supported value: 1, 2, 3, 4, 5. 
| body | JSON       | Query object

## MicrosoftWebLangModel.calculateJointProbability
Calculate the joint probability that a particular sequence of words will appear together.

| Field| Type       | Description
|------|------------|----------
| key  | Credentials| Subscription key which provides access to this API. 
| model| Select     | Which model to use, supported value: title/anchor/query/body
| order| Select     | The order of N-gram. If not specified, use default value 5 .Supported value: 1, 2, 3, 4, 5. 
| body | JSON       | Query object

## MicrosoftWebLangModel.generateNextWords
Get the list of words (completions) most likely to follow a given sequence of words.

| Field                     | Type       | Description
|---------------------------|------------|----------
| key                       | Credentials| Subscription key which provides access to this API. 
| model                     | Select     | Which model to use, supported value: title/anchor/query/body
| words                     | List       | Words from which to generate the list of words likely to follow. The words should be separated by spaces.
| order                     | Select     | The order of N-gram. If not specified, use default value 5 .Supported value: 1, 2, 3, 4, 5. 
| maxNumOfCandidatesReturned| Number     | Max number of candidates would be returned. If not specified, use default value 5. 

## MicrosoftWebLangModel.breakIntoWords
Insert spaces into a string of words lacking spaces, like a hashtag or part of a URL. Punctuation or exotic characters can prevent a string from being broken, so it’s best to limit input strings to lower-case, alpha-numeric characters.

| Field                     | Type       | Description
|---------------------------|------------|----------
| key                       | Credentials| Subscription key which provides access to this API. 
| model                     | Select     | Which model to use, supported value: title/anchor/query/body
| text                      | String     | The line of text to break into words. If spaces are present, they will be interpreted as hard breaks and maintained, except for leading or trailing spaces, which will be trimmed.
| order                     | Select     | The order of N-gram. If not specified, use default value 5 .Supported value: 1, 2, 3, 4, 5. 
| maxNumOfCandidatesReturned| Number     | Max number of candidates would be returned. If not specified, use default value 5.

## MicrosoftWebLangModel.listAvailableModels
List models available currently.

| Field    | Type       | Description
|----|------------|----------
| key| Credentials| Subscription key which provides access to this API. 

