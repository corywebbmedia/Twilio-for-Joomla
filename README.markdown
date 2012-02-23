# Twilio for Joomla

This project takes the [twilio-php library](https://github.com/twilio/twilio-php) and specifically packages it as a standard Joomla library. To register the twilio-php autoloader in your extension, simply load it through `jimport()`:

```php
<?php
defined( '_JEXEC' ) or die;

jimport('twilio.services.twilio');

```

After calling this, you can use the twilio-php library exactly as you would stand-alone:

```php
<?php
defined( '_JEXEC' ) or die;

jimport('twilio.services.twilio');

$sid = "ACXXXXXX"; // Your Account SID from www.twilio.com/user/account
$token = "YYYYYY"; // Your Auth Token from www.twilio.com/user/account

$client = new Services_Twilio($sid, $token);
$call = $client->account->calls->create(
  '9991231234', // From a valid Twilio number
  '8881231234', // Call this number

  // Read TwiML at this URL when a call connects (hold music)
  'http://twimlets.com/holdmusic?Bucket=com.twilio.music.ambient'
);
```

More details and documentaion can be found at https://github.com/twilio/twilio-php.