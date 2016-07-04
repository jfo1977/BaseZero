<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

/**
 * This file defines configuration for running this module's unit tests.
 * Modules are usually located inside a ZF2 application, so a sane default
 * for ZEND_FRAMEWORK_PATH is the vendor folder in the application.
 *
 * If testing outside of a ZF2 application, do not edit this file. Instead,
 * create a TestConfiguration.php file that will be used in it's place.
 * TestConfiguration.php is ignored by git so that environment specific
 * configuration is not committed.
 *
 * Never commit plaintext passwords to the source code repository.
 */

define('ZF2_PATH', realpath(__DIR__ . '/../../../vendor/zendframework/zendframework/library/'));

/**
 * The bootstrap supports several more options, however most modules will
 * not need to define these.
 */

// Override the module name (usually because the namespace is something besides the root foldername)
// define('MODULE_NAME', 'SomeModuleName');

// Add additional paths where additional modules can be found
// $additionalModulePaths = array(
//     '/usr/share/lib/php/',
//     'SomeVendor' => realpath('/path/for/some/vendor/library'),
// );

// Add dependencies, for example a vendor may create several modules that all depend on a common library
// $moduleDependencies = array('SomeVendor');