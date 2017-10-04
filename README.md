# SPINEN's ConnectWise PHP Client

[![Latest Stable Version](https://poser.pugx.org/spinen/connectwise-php-client/v/stable)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Total Downloads](https://poser.pugx.org/spinen/connectwise-php-client/downloads)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Latest Unstable Version](https://poser.pugx.org/spinen/connectwise-php-client/v/unstable)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Dependency Status](https://www.versioneye.com/php/spinen:connectwise-php-client/badge.svg)](https://www.versioneye.com/php/spinen:connectwise-php-client)
[![License](https://poser.pugx.org/spinen/connectwise-php-client/license)](https://packagist.org/packages/spinen/connectwise-php-client)

PHP client for the RestFull ConnectWise APIs. This package used to be based on the SOAP APIs & had 3 separate 
repositories, but as of this version there is only this one.

We solely use [Laravel](http://www.laravel.com) for our applications, so there is some Laravel specific files that you 
can use if you are using this client in a Laravel application. We have tried to make sure that you can use the client
outside of Laravel, and have some documentation about it below.

## Note about the integration
We are using the "Member Impersonation" model where you setup an integrator username & password with access to the 
"Member API", which makes all calls to ConnectWise performed under the permission of the user (member id) of the 
application. 

We make all of our ConnectWise users' member ID equal to their email (i.e. joe.doe@spinen.com has
a member ID of joedoe in connectwise) [NOTE: The "." was removed from joe.doe as ConnectWise does not allow dots in the
member ID]. By following this convention, we can infer the member ID from the logged in user's email address in our
applications. We have included a trait that you can use on the User model that will preform the logic above.

## Laravel Configuration and Usage

### Configuration

1. Add the following to ```config/services.php```...

```php
    'connectwise' =>  [
        'company_id' => env('CW_COMPANY_ID'),
        // Optional member id to use if there is not a logged in user
        'default_member_id' => env('CW_DEFAULT_MEMBER_ID'),
        'integrator' => env('CW_INTEGRATOR'),
        'password' => env('CW_PASSWORD'),
        'url' => env('CW_URL'),
    ],
```

2. Add the appropriate values to your ```.env```...

```bash
CW_COMPANY_ID=<company_id>
CW_DEFAULT_MEMBER_ID=<default_member_id>
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

5. Use the ```ConnectWiseMemberIdFromEmail``` trait on the User model, which is located at ```Spinen\ConnectWise\Laravel\ConnectWiseMemberIdFromEmail```, if your ConnectWise member_id is a match to your email as described above.  If you do not follow that convention, then you can define your own ```getConnectWiseMemberIdAttribute``` accessor on the User model or just add a ```connect_wise_member_id``` column to your user table that you populate with the appropriate values.

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
=> Spinen\ConnectWise\Models\System\Info {#1008}
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
=> Spinen\ConnectWise\Models\System\Info {#1005}
>>> ConnectWise::get('system/info')->toArray();
=> [
     "version" => "v2016.6.43325",
     "isCloud" => false,
     "serverTimeZone" => "Eastern Standard Time",
   ]
>>> ConnectWise::get('system/info')->toJson();
=> "{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"}"
>>> ConnectWise::get('system/info')->isCloud;
=> false
>>> ConnectWise::get('system/info')['isCloud'];
=> false
>>>
```

## Non-Laravel Usage

To use the client outside of Laravel, you just need to new-up the objects...
 
```
$ php -a
Interactive shell

php > // Autoload classes
php > require 'vendor/autoload.php';
php > // New-up objects
php > $token = new Spinen\ConnectWise\Api\Token();
php > $guzzle = new GuzzleHttp\Client();
php > $resolver = new Spinen\ConnectWise\Support\ModelResolver();
php > $client = new Spinen\ConnectWise\Api\Client($token, $guzzle, $resolver);
php > // Now set your configs
php > $token->setCompanyId('<company_id>')->setMemberId('<member_id>');
php > $client->setIntegrator('<integrator>')->setPassword('<password>')->setUrl('https://<domain.tld>');
php > $info = $client->get('system/info');
php > var_export($info, false);
Spinen\ConnectWise\Models\System\Info::__set_state(array(
   'casts' =>
  array (
    'version' => 'string',
    'isCloud' => 'boolean',
    'serverTimeZone' => 'string',
  ),
   'attributes' =>
  array (
    'version' => 'v2016.6.43325',
    'isCloud' => false,
    'serverTimeZone' => 'Eastern Standard Time',
  ),
))
php > var_export($info->toArray(), false);
array (
  'version' => 'v2016.6.43325',
  'isCloud' => false,
  'serverTimeZone' => 'Eastern Standard Time',
)
php > var_export($info->tojson(), false);
'{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"}'
php > var_export($info->isCloud, false);
false
php > var_export($info['isCloud'], false);
false
php >
```
