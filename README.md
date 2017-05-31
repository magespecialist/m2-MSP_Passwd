# MSP Passwd

Simple digest auth module for Magento 2.<br />
It will display a digest auth login windows to protect your **staging/preview** environment.<br />
It can be also used to provide an **additional security layer** to your Magento backend.<br />

You can have **different username and password** for fronted and backend.

> Member of **MSP Security Suite**
>
> See: https://github.com/magespecialist/m2-MSP_Security_Suite

Did you lock yourself out from Magento backend? <a href="https://github.com/magespecialist/m2-MSP_Passwd#emergency-commandline-disable">click here.</a>

## Installing on Magento2:

**1. Install using composer**

From command line: 

`composer require msp/passwd`<br />
`php bin/magento setup:upgrade`

**2. Enable and configure from your Magento backend config**

<img src="https://raw.githubusercontent.com/magespecialist/m2-MSP_Passwd/master/screenshots/config.png" />

## Digest auth screenshot

<img src="https://raw.githubusercontent.com/magespecialist/m2-MSP_Passwd/master/screenshots/auth.png" />

## Emergency commandline disable:

If you messed up with passwd you can disable it from command-line:

`php bin/magento msp:security:passwd:disable`

This will disable digest auth for **backend access**.
