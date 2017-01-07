# SPINEN's ConnectWise PHP Client

[![Latest Stable Version](https://poser.pugx.org/spinen/connectwise-php-client/v/stable)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Total Downloads](https://poser.pugx.org/spinen/connectwise-php-client/downloads)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Latest Unstable Version](https://poser.pugx.org/spinen/connectwise-php-client/v/unstable)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Dependency Status](https://www.versioneye.com/php/spinen:connectwise-php-client/0.1.1/badge.svg)](https://www.versioneye.com/php/spinen:connectwise-php-client/0.1.1)
[![License](https://poser.pugx.org/spinen/connectwise-php-client/license)](https://packagist.org/packages/spinen/connectwise-php-client)

PHP client for the RestFull ConnectWise API's.  This package used to be based on the SOAP API's & had 3 separate 
repositories, but as of this version there is on this one.

We are using the "Member Impersonation" model where you setup an integrator username & password with access to the 
"Member API", which makes all calls to ConnectWise performed under the permission of the user (member id) of the 
application.  We make all of our users in ConnnectWise member id equal to their email user (i.e. joe.doe@spinen.com has
member id of joedoe in connectwise) [NOTE: The "." was removed from joe.doe as ConnectWise does not allow dots in the
member id].  By following this convention, we can infer the member id from the logged in user's email address in our
applications.

We solely use [Laravel](http://www.laravel.com) for our applications, so there is some Laravel specific files that you 
can use if you are using this client in a Laravel application.  We have tried to make sure that you can use the client
outside of Laravel, and have some documentation about it below.

## Laravel Configuration and Usage

### Configuration

1. Add the following to ```config/services.php```...

```php
    'connectwise' =>  [
        'company_id' => env('CW_COMPANY_ID'),
        'integrator' => env('CW_INTEGRATOR'),
        'password' => env('CW_PASSWORD'),
        'url' => env('CW_URL'),
    ],
```

2. Add the appropriate values to ```.env```...

```bash
CW_COMPANY_ID=<company_id>
CW_INTEGRATOR=<integrator username>
CW_PASSWORD=<integrator password>
CW_URL=https://<FQDN to ConnectWise server>
```

3. Add the provider to ```config/app.php```

```php
'providers' => [
    # other providers omitted
    Spinen\ConnectWise\Laravel\ServiceProvider::class,
],
```

4. [Optional] Add the alias to ```config/app.php```

```php
'aliases' => [
    # other aliases omitted
    'ConnectWise' => Spinen\ConnectWise\Laravel\Facades\ConnectWise::class,
],
```

### Usage

## Non-Laravel Usage
