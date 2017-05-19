
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

### Git
 Simply git clone or download this repository, and then go to the Wordpress steps.

### Composer 
 Using composer, once you have installed composer following the procedure available [here](https://getcomposer.org/doc/00-intro.md), you can 

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
* Then you **have** to go to the `vendor/vagrantin/wp-nonce/ directory` to perform all the following steps.


**From here we consider that you are in the vendor/vagrantin/wp-nonce/ directory for all the next steps** 

## PHPUnit Test  
 * The PHPUnit Test files in *Test/* folder, it's called `nonceTest.php`


## WP-NONCE

 * The wp-nonce demo files in the `src/wp-content/plugins/` folder it's called `wp_nonce_demo.php`




### Wordpress
 * Because the test are based on Wordpress Dev environement, we need to setup a mysql db

1. Setup and create a test Database in mysql
2. Use wp-tests-config-sample.php to create a wp-tests-config.php file


### Run the Tests

* run `phpunit`
