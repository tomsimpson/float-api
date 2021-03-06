# float-sdk
Float API for PHP (https://www.float.com/)

## Installation
You can install this library via [Composer](https://getcomposer.org/download/):

`composer require 6by6/float-api`

Edit composer.json to include

    "repositories":
    [
            {
                "type": "vcs",
                "url": "https://github.com/tomsimpson/float-api"
            }
    ],

Run `Composer Update`

## Get Started


### Step 1
We're using the jms/serializer annotations for this project which need to be registered
before they can be used. Depending on your platform there may be an existing solution (for 
example, Symfony has JMSSerializerBundle). There is further information regarding configuration 
[here](http://jmsyst.com/libs/serializer/master/configuration). 

If you want to get setup quickly though, we've included the following shortcut.

```php
\SixBySix\FloatPM\Package::registerAnnotations();
```


### Step 2
You'll need to grab your API key from Float ([find out how here](http://support.float.com/knowledge_base/topics/do-you-have-an-api-2)). 

```php
use SixBySix\FloatPM;

FloatPM\FloatClient::setApiKey("INSERT_YOUR_API_KEY");
```
 

### Step 3
You're ready to go.

```php
use SixBySix\FloatPM\Entity\Person;
use SixBySix\FloatPM\Entity\Project;
use SixBySix\FloatPM\Entity\Task;

$people = Person::getAll();

$projects = Project::getAllActive();

$task = Task::getById(123);


```


## Entities
We have covered the following entities:


## Changelist

### v0.0.2
- Changed 'Float' to 'FloatPM' as PHP 7.2 uses 'Float' as a special class name [Cannot use SixBySix\Float as Float because 'Float' is a special class name]

### v0.0.1
- First commit
- Added read-only access to the following entities
    - Account
    - Client
    - Department
    - Holiday
    - Milestone
    - Person (People)
    - Project 
    - Task

