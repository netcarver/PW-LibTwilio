LibTwilio
=========

Twilio's PHP library wrapped in a ProcessWire module.


Pre-Requisites
--------------

* A valid Twilio account with an active, SMS-enabled, number.
* An installation of ProcessWire.


Installation
------------

* Unzip the master zipfile within your site/modules directoy.
* Go into ProcessWire and refresh the modules list. You should
then be able to install the LibTwilio module.
* On the module's configuration page, enter you Twilio SID, authentication token and phone number.


Usage
-----

Sending an SMS is now simply a case of calling the ```SendSMS()``` method...

    $twilio = $modules->get('LibTwilio');
    $twilio->SendSMS($to_phone_number, $message);

Please note, the method does no sanitization of the outgoing message.
