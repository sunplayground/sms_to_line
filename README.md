# sms_to_line
inspired from Apple Continuity Feature, this project works with MacroDroid app in Android, to send SMS to line bot so users can read SMS on PC, iPad without having a mobile phone.

#installation
clone this repository to your server, then change access token, channel secret, user id in webhooks.php, verify.php, sms.php.

all token will be available when you apply for line bot API

#usage
just forward all sms content to http://localhost/sms.php?value=true&text=[SMS content]&from=[Contact in SMS]
I've add parameter value=true to prevent false positive from search engine when there are bots access to URL.
