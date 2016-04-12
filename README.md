# Personal Finance

*Warning!*
*This application is meant as a proof-of-concept for technologies and development methods*
*Thus this application is not meant for production use, although the end goal is usable software*

The goal is to start with these technologies:
* PHP 7
* [Zend Expressive](https://github.com/zendframework/zend-expressive)
* PHPUnit
* Behat/Mink/Selenium
* Vagrant
* Doctrine for ORM and DBAL
* Monolog for Logging
* DB2 LUW and IBM i DB2
* Phing and ZsClient for deployment
* Travis CI, PHPCI, and Jenkins for CI builds
* Ionic for mobile app client
* AngularJS 2 for single page web app
* OAuth2 for client authentication
* Electron for native desktop client application

...and use these methodologies:
* Event driven architecture
* Hexagonal architecture
* Domain-Driven Design
* Test-Driven Development
* Behavioral-Driven Development

...to produce these features:
* Use envelope system for managing personal finances
* Upload transactions via csv file
* Enter transactions manually
* Tag/Label transactions
* Fill buckets
* Every debit results in a deduction from at least one bucket

## Development

1. Clone the project locally
2. Install project dependencies
```
composer installAll
```
3. Start web server
```
composer serve
```
