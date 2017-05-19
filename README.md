
[![PHP](https://img.shields.io/badge/php-v7-blue.svg)]()
[![MySQL](https://img.shields.io/badge/mysql-v5.6-blue.svg)]()
[![PHPUnit](https://img.shields.io/badge/PHPUnit-v6.1-blue.svg)]()

[![Build Pass](https://img.shields.io/badge/Build-passing-brightgreen.svg)]()


# wp-nonce testing 
**using WordPressDev Composer Fork**

The purpose of this project is to test and validate Wordpress WP-nonces using phpunit test.
for the sake of not re-inventing the wheel, I took the party to use WordPress Dev environement to perform those tests.

## PHPUnit Test  

 * Find the PHPUnit Test files in *Test/* folder, named `nonceTest.php`


## WP-NONCE

 * Find the wp-nonce demo files in the `src/wp-content/plugins/` folder it's called `wp_nonce_demo.php`


## SETUP

### Wordpress
 * Because those tests are based on Wordpress Dev environement, we have to setup a mysql database. And because those tests are destructive it's highly recommended to create a **new** database, has you will loose data from the corresponding database for sure.

1. Setup and create a test Database in mysql,this can be done following this [Getting Starded](https://dev.mysql.com/doc/mysql-getting-started/en/) guide. 
2. Make a copy of wp-tests-config-sample.php to create a wp-tests-config.php file and fullfill the database name, the login and password of the database you have just created, and any other information you may need depending of you environement. 


### Run the Tests ###

* run `phpunit`
