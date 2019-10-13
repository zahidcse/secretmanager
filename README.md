Laravel package for get Secret Value from AWS SecretManager
# Installation 
Open Your Terminal and run the following command on your laravel installaing directory 
```bash
composer require zahidcse/secretmanager
```
If not work   add
```bash
"zahidcse/secretmanager": "*" 
```
to your root composer.json file and run 
```bash
composer update
```
# How does it work
If you have Proper Access management (IAM) roles for your EC2 instances
# How to use
 ```php
 Use Zahidcse\Secretmanager\AwsSecrets;
 $str = "ApiKey";
 $result = AwsSecrets::getSecret($str);
 print_r($result);
    

 ```
 
 If Not Proper Role then we have to add the 
 ```bash
 AWS_KEY
 AWS_SECRET_KEY
 ```
 in your .env file and call the secretManager like this
 ```php 
 $result = AwsSecrets::getSecret($str,1);
 
 ```


