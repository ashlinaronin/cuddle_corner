<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Species.php";
    //require_once "src/Friend.php";

    $server = 'mysql:host=localhost;dbname=cuddle_corner_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class SpeciesTest extends PHPUnit_Framework_TestCase
    {
        // protected methods are available to all classes that extend the current
        // class, including the parent class
        // protected function tearDown()
        // {
        //     Species::deleteAll();
        //     Friend::deleteAll();
        // }


    }
?>
