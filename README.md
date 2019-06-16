# SPINEN's ConnectWise PHP Client

[![Latest Stable Version](https://poser.pugx.org/spinen/connectwise-php-client/v/stable)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Total Downloads](https://poser.pugx.org/spinen/connectwise-php-client/downloads)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Latest Unstable Version](https://poser.pugx.org/spinen/connectwise-php-client/v/unstable)](https://packagist.org/packages/spinen/connectwise-php-client)
[![License](https://poser.pugx.org/spinen/connectwise-php-client/license)](https://packagist.org/packages/spinen/connectwise-php-client)

PHP client for the RESTful ConnectWise APIs.

We solely use [Laravel](http://www.laravel.com) for our applications, so there are some Laravel specific files that you
can use if you are using this client in a Laravel application. We have tried to make sure that you can use the client
outside of Laravel, and have some documentation about it below.

## Build Status

| Branch | Status | Coverage | Code Quality |
| ------ | :----: | :------: | :----------: |
| Develop | [![Build Status](https://travis-ci.org/spinen/connectwise-php-client.svg?branch=develop)](https://travis-ci.org/spinen/connectwise-php-client) | [![Code Coverage](https://scrutinizer-ci.com/g/spinen/connectwise-php-client/badges/coverage.png?b=develop)](https://scrutinizer-ci.com/g/spinen/connectwise-php-client/?branch=develop) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/connectwise-php-client/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/spinen/connectwise-php-client/?branch=develop) |
| Master | [![Build Status](https://travis-ci.org/spinen/connectwise-php-client.svg?branch=master)](https://travis-ci.org/spinen/connectwise-php-client) | [![Code Coverage](https://scrutinizer-ci.com/g/spinen/connectwise-php-client/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/spinen/connectwise-php-client/?branch=master) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/connectwise-php-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/spinen/connectwise-php-client/?branch=master) |

## Note about the integration
We are using the "Member Impersonation" model where you set up an integrator username & password with access to the
"Member API", which makes all calls to ConnectWise performed under the permission of the user (member id) of the
application.

We make all of our ConnectWise users' member ID equal to their email (i.e. joe.doe@spinen.com has
a member ID of joedoe in connectwise) [NOTE: The "." was removed from joe.doe as ConnectWise does not allow periods in the
member ID]. By following this convention, we can infer the member ID from the logged in user's email address in our
applications. We have included a trait that you can use on the User model that will perform the logic above.

As of 2019.3, they require a `clientId` when connecting to the API, so you will need to register for one here...

[https://developer.connectwise.com/ClientID](https://developer.connectwise.com/ClientID)

## Models

The responses are cast into models with the properties cast into the types as defined in the Swagger documentation.  You can review the models in the `src/Models` folder.  There is a property named `casts` on each model that instructs the factory on how to cast the properties from the response.  If the `casts` property is empty, then the properties are not defined in the swagger, so an array is returned.

## Relationships

Some of the responses have links to the related resource.  If a property has a relationship, you can call it as a method, and the additional calls are automatically made & returned.  The value is stored in place of the original data, so once it is loaded it is cached.

```
$ psysh
Psy Shell v0.8.18 (PHP 7.2.17 — cli) by Justin Hileman

>>> // Using "$member" object for this example
>>> get_class($member) // Verify that it is a "Member"
=> "Spinen\ConnectWise\Models\v2019_3\System\Member"
>>> get_class($member->defaultLocation) // On load, the "defaultLocation" is a "SystemLocationReference" object
=> "Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference"
>>> get_class($member->defaultLocation()) // Call it as a method to load the relationship
=> "Spinen\ConnectWise\Models\v2019_3\System\Location"
>>> get_class($member->defaultLocation) // Now it is cached as a "Location" object
=> "Spinen\ConnectWise\Models\v2019_3\System\Location"
```

There are may also be "related" properties in the "_info" property that you can have the system load for you

```
$ psysh
Psy Shell v0.8.18 (PHP 7.2.17 — cli) by Justin Hileman

>>> // Using "$company" object for this example
>>> get_class($company) // Verify that it is a "Company"
=> "Spinen\ConnectWise\Models\v2018_6\Company\Company"
>>> $company->_info // Look for potential relations
=> Spinen\ConnectWise\Models\v2018_6\Company\Metadata {#5678
     +"lastUpdated": "2019-05-20T18:12:38Z",
     +"updatedBy": "someone",
     +"dateEntered": "2006-06-21T16:04:59Z",
     +"enteredBy": "someone",
     +"contacts_href": "https://some.host/v4_6_release/apis/3.0/company/contacts?conditions=company/id=250",
     +"agreements_href": "https://some.host/v4_6_release/apis/3.0/finance/agreements?conditions=company/id=250",
     +"tickets_href": "https://some.host/v4_6_release/apis/3.0/service/tickets?conditions=company/id=250",
     +"opportunities_href": "https://some.host/v4_6_release/apis/3.0/sales/opportunities?conditions=company/id=250",
     +"activities_href": "https://some.host/v4_6_release/apis/3.0/sales/activities?conditions=company/id=250",
     +"projects_href": "https://some.host/v4_6_release/apis/3.0/project/projects?conditions=company/id=250",
     +"configurations_href": "https://some.host/v4_6_release/apis/3.0/company/configurations?conditions=company/id=250",
     +"orders_href": "https://some.host/v4_6_release/apis/3.0/sales/orders?conditions=company/id=250",
     +"documents_href": "https://some.host/v4_6_release/apis/3.0/system/documents?recordType=Company&recordId=250",
     +"sites_href": "https://some.host/v4_6_release/apis/3.0/company/companies/250/sites",
     +"teams_href": "https://some.host/v4_6_release/apis/3.0/company/companies/250/teams",
     +"reports_href": "https://some.host/v4_6_release/apis/3.0/company/companies/250/managementSummaryReports",
     +"notes_href": "https://some.host/v4_6_release/apis/3.0/company/companies/250/notes",
   }
>>> isset($company->agreements) // Not loaded before the call
=> false
>>> $company->agreements // Client goes to get "agreements" from the $company->_info->agreements_fref URI
=> Spinen\ConnectWise\Support\Collection {#6123
     // Removed to make example shorter
   }
>>> isset($company->agreements) // Cachec & loaded for next call
=> true
```

## Install

Install the ConnectWise PHP Client:

```bash
$ composer require spinen/connectwise-php-client
```

## Laravel Configuration and Usage

### For >= Laravel 5.5, you are done with the installation

The package uses the [auto registration feature](https://laravel.com/docs/5.8/packages#package-discovery) of Laravel 5.

### For < Laravel 5.5, you have to register the Service Provider

1. Add the provider to ```config/app.php```

```php
    'providers' => [
        # other providers omitted
        Spinen\ConnectWise\Laravel\ServiceProvider::class,
    ],
```

2. [Optional] Add the alias to ```config/app.php```

```php
    'aliases' => [
        # other aliases omitted
        'ConnectWise' => Spinen\ConnectWise\Laravel\Facades\ConnectWise::class,
    ],
```

### Configuration

1. Add the following to ```config/services.php```...

```php
    'connectwise' =>  [
        'client_id' => env('CW_CLIENT_ID'),
        'company_id' => env('CW_COMPANY_ID'),
        // Optional member id to use if there is not a logged in user
        'default_member_id' => env('CW_DEFAULT_MEMBER_ID'),
        'integrator' => env('CW_INTEGRATOR'),
        'password' => env('CW_PASSWORD'),
        'url' => env('CW_URL'),
        // Optional version of the API models to use
        //'version' => '' // default is the latest supported
    ],
```

2. Add the appropriate values to your ```.env```...

```bash
CW_CLIENT_ID=<the-client-id>
CW_COMPANY_ID=<company_id>
CW_DEFAULT_MEMBER_ID=<default_member_id>
CW_INTEGRATOR=<integrator username>
CW_PASSWORD=<integrator password>
CW_URL=https://<FQDN to ConnectWise server>
```

3. Use the ```ConnectWiseMemberIdFromEmail``` trait on the User model, which is located at ```Spinen\ConnectWise\Laravel\ConnectWiseMemberIdFromEmail```, if your ConnectWise member_id is a match to your email as described above.  If you do not follow that convention, then you can define your own ```getConnectWiseMemberIdAttribute``` accessor on the User model or just add a ```connect_wise_member_id``` column to your user table that you populate with the appropriate values.

### Usage

Here is an example of getting the system information...

As of version 3.1.0, the response is either a Laravel collection of models or a single model. You can see the models in ```src/Models```.  They all extend ```Spinen\ConnectWise\Support```, so you can see the methods that they provide.

```
$ php artisan tinker
Psy Shell v0.8.0 (PHP 7.0.14 — cli) by Justin Hileman
>>> Auth::loginUsingId(1); // If not useing the default member id
=> App\User {#983
     id: "1",
     first_name: "Joe",
     last_name: "Doe",
     email: "joe.doe@domain.tld",
     admin: "0",
     created_at: "2017-01-02 18:30:47",
     updated_at: "2017-01-12 22:22:39",
     logged_in_at: "2017-01-12 22:22:39",
     deleted_at: null,
   }
>>> $cw = app('Spinen\ConnectWise\Api\Client');
=> Spinen\ConnectWise\Api\Client {#934}
>>> $info = $cw->get('system/info');
=> Spinen\ConnectWise\Models\v2019_3\System\Info {#1008}
>>> $info->toArray();
=> [
     "version" => "v2016.6.43325",
     "isCloud" => false,
     "serverTimeZone" => "Eastern Standard Time",
   ]
>>> $info->toJson()
=> "{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"}"
>>> $info->isCloud
=> false
>>> $info['isCloud'];
=> false
```

Same call using the facade...

```
$ php artisan tinker
Psy Shell v0.8.0 (PHP 7.0.14 — cli) by Justin Hileman
>>> Auth::loginUsingId(1);  // If not useing the default member id
=> App\User {#983
     id: "1",
     first_name: "Joe",
     last_name: "Doe",
     email: "joe.doe@domain.tld",
     admin: "0",
     created_at: "2017-01-02 18:30:47",
     updated_at: "2017-01-12 22:22:39",
     logged_in_at: "2017-01-12 22:22:39",
     deleted_at: null,
   }
>>> ConnectWise::get('system/info');
=> Spinen\ConnectWise\Models\v2019_3\System\Info {#1005}
>>> ConnectWise::get('system/info')->toArray();
=> [
        "version" => "v2018.6.59996",
        "isCloud" => false,
        "serverTimeZone" => "Eastern Standard Time",
        "licenseBits" => [
          // ... All of the properties
        ],
        "cloudRegion" => "NA",
      ]
>>> ConnectWise::get('system/info')->toJson();
=> "{"version":"v2018.6.59996",...}"
>>> ConnectWise::get('system/info')->isCloud;
=> false
>>> ConnectWise::get('system/info')['isCloud'];
=> false
>>>
```

## Non-Laravel Usage

To use the client outside of Laravel, you just need to new-up the objects...

```
$ psysh
Psy Shell v0.8.18 (PHP 7.2.17 — cli) by Justin Hileman

>>> // New-up objects
>>> $token = (new Spinen\ConnectWise\Api\Token())->setCompanyId('<company_id>')->setMemberId('<member_id>');
=> Spinen\ConnectWise\Api\Token {#208}
>>> $guzzle = new GuzzleHttp\Client();
=> GuzzleHttp\Client {#196}
>>> $resolver = new Spinen\ConnectWise\Support\ModelResolver();
=> Spinen\ConnectWise\Support\ModelResolver {#201}
>>> $client = (new Spinen\ConnectWise\Api\Client($token, $guzzle, $resolver))->setClientId('<the-client-id>')->setIntegrator('<integrator>')->setPassword('<password>')->setUrl('https://<domain.tld>');
=> Spinen\ConnectWise\Api\Client {#231}
>>> $info = $client->get('system/info');                                                                                                                     => Spinen\ConnectWise\Models\v2019_3\System\Info {#237}
>>> $info->toArray();
=> [
     "version" => "v2018.6.59996",
     "isCloud" => false,
     "serverTimeZone" => "Eastern Standard Time",
     "licenseBits" => [
       // ... All of the properties
     ],
     "cloudRegion" => "NA",
   ]
>>> // Set client to use different version
>>> $client->setVersion('2019.1')
=> Spinen\ConnectWise\Api\Client {#231}
>>> $info = $client->get('system/info');
>>> /// NOTE: the version in the namespace
=> Spinen\ConnectWise\Models\v2019_1\System\Info {#235}
```

## Supported API Model Versions

You can specify the version of the models you want in 1 of 3 ways...

1. The 4th parameter in the `Client` constructor
2. Calling the `setVersion` method on the `client` object
3. [Laravel only] Setting the `version` property in the config

The supported versions are:

* 2018.4
* 2018.5
* 2018.6
* 2019.1
* 2019.2
* 2019.3 `(default)`

You can see the differences of the models by looking at the `casts` property on the individual `models` in `src/Models/<version>` directory.
