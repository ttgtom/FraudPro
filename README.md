# FraudPro
Anti-Fraud Modules for Web Developers
Developer: Thomas(@ttgtom)
Structuring Parts:

Contributor provider requirements:
+ MYSQL SERVER
+ PHP 5.0 - Beyond
+ PHPMail

FraudPro Merchant usage:
(Requires Key access)
Files:
+ fraudpro-detect.php (Create a folder in your www directory.)
Call this file in your registration page
<?php
include('/fraudprotection/fraudpro-detect.php');
?>
+ fraudpro-detail.php (Get FULL detail report of anyone who's black listed.)
+ fp-log.php (log every new fraud entry to fraud.log)
