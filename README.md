
[![PHP](https://img.shields.io/badge/php-v7-blue.svg)]()
[![MySQL](https://img.shields.io/badge/mysql-v5.6-blue.svg)]()
[![PHPUnit](https://img.shields.io/badge/PHPUnit-v6.1-blue.svg)]()

[![Travis](https://img.shields.io/badge/Build-passing-brightgreen.svg)]()


# wp-nonce testing 
**using WordPressDev Composer Fork**

The purpose of this project is to test and validate Wordpress WP-nonces using phpunit test.
For this purpose I took the party to us WordPress Dev environement to perform those tests.

## **PHPUnit Test**
 * Find the PHPUnit Test files in *Test/* folder, it's called `nonceTest.php`


## WP-NONCE

* Find the wp-nonce demo files in the `src/wp-content/plugins/` folder it's called `wp_nonce_demo.php`


## SETUP

## Wordpress
* Because the test are based on Wordpress Dev environement, we need to setup a mysql db

1 - Setup and create a test Database in mysql
2 - Use wp-tests-config-sample.php to create a wp-tests-config.php file


** Run the Tests**

* run `phpunit`
