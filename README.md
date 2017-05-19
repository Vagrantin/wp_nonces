
[![PHP](https://img.shields.io/badge/php-v7-blue.svg)]()
[![MySQL](https://img.shields.io/badge/mysql-v5.6-blue.svg)]()
[![PHPUnit](https://img.shields.io/badge/PHPUnit-v6.1-blue.svg)]()

[![Travis](https://img.shields.io/badge/Build-passing-brightgreen.svg)]()


# wp-nonce testing 
**using WordPressDev Composer Fork**

The purpose of this project is to test and validate Wordpress WP-nonces using phpunit test.
For this purpose I took the party to us WordPress Dev environement to perform those tests.

## SETUP
 Several way to install this package either using git or composer

### Composer 
 Once you have installed composer following the procedure available [here](https://getcomposer.org/doc/00-intro.md), you can 

1. Grab the composer.json from my git repository [wp-nonce-package](https://github.com/Vagrantin/wp_nonce_package).
2. Or create a composer.json file and write down manualy those informations:

```
{
  "minimum-stability": "dev",
  "require-dev": {
      "vagrantin/wp-nonce": "^1.0"
  },
  "require": {
  }
}

```
* Now you can run `composer update` this will trigger the install of the package.
* Then you **have** to go to the `vendor/vagrantin/wp-nonce/` directory to perform all the following steps.


**From here we consider that you are in the `vendor/vagrantin/wp-nonce/` directory for all the next steps** 

## PHPUnit Test  
 * The PHPUnit test files are in the *Test/* folder, named `nonceTest.php`


## WP-NONCE

 * The wp-nonce demo file is in the `src/wp-content/plugins/` folder named `wp_nonce_demo.php`



### Wordpress
 * Because those tests are based on Wordpress Dev environement, we have to setup a mysql database, it has to be a new database has those tests are destructive.

1. Setup and create a test Database in mysql.
2. Use wp-tests-config-sample.php to create a wp-tests-config.php file, so Wordpress Dev can access this newly created database.


### Run the Tests

* run `phpunit`
