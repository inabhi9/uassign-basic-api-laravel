Simple Laravel REST API
------------------------------

## Aims
Retrieve ‘question’ records from a database and display the formatted results.

The record(s) should be manipulated inside the Laravel Eloquent object (Actually https://github.com/jenssegers/laravel-mongodb Eloquent extension model).

The required responses are:

* index - Multiple records, don’t implement a filter just display all
* show - Single record

Responses are ajax to http://jsonapi.org/ standard.

Assume no authentication.

Do not worry about the content of the records, just use test data based on object type.

Object Specs
Question model:

* ID: MongoDB ID, String
* TITLE: String, String
* AUTHOR: String, String
* DESCRIPTION: String, String
* STARTDATE: Date, DateTime
* ENDDATE: Date, DateTime
* STATUS: Integer, Integer
* QUESTIONID: String, String


## Syntax
4 spaces, no tabs
Remember to reformat when copy/pasting code
Fully declare class & method type static, public, private, abstract… 
Follow pear standards http://pear.php.net/manual/en/standards.php
80 char/line limit for readability
Heavily comment all your work

## Tests
We will test the system by making API calls, example calls and responses are given below:


Request: `/questions`
Response:
```
{
    "status": 1,
    "questions": [
        {
            "ID": X
            "TITLE": X
            "AUTHOR": X
            "DESCRIPTION": X
            "STARTDATE": X
            "ENDDATE": X
            "STATUS": X
            "QUESTIONID": X
        },
        {
            "ID": X
            "TITLE": X
            "AUTHOR": X
            "DESCRIPTION": X
            "STARTDATE": X
            "ENDDATE": X
            "STATUS": X
            "QUESTIONID": X
        }
    ]
}
```
Request: `/questions/{QuestionID}`
Response:
```
{
    "status": 1,
    "question": {
        "ID": X
        "TITLE": X
        "AUTHOR": X
        "DESCRIPTION": X
        "STARTDATE": X
        "ENDDATE": X
        "STATUS": X
        "QUESTIONID": X
    }
}
```