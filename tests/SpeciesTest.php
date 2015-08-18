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

        function test_getName()
        {
            //Arrange
            $name = "dog";
            $fur = true;
            $wings = false;
            $legs = 4;

            /* We don't need to pass a 5th parameter (id). Species constructor
             * will assume we don't want to assign one and will give it default
             * value of null. */
            $test_species = new Species($name, $fur, $wings, $legs);

            //Act
            $result = $test_species->getName();

            //Assert
            $this->assertEquals($name, $result);

        }

        function test_getFur()
        {
            //Arrange
            $name = "salamander";
            $fur = false;
            $wings = false;
            $legs = 4;
            $test_species = new Species($name, $fur, $wings, $legs);

            //Act
            $result = $test_species->getFur();

            //Assert
            $this->assertEquals($fur, $result);

        }

        function test_getWings()
        {
            //Arrange
            $name = "pigeon";
            $fur = false;
            $wings = true;
            $legs = 2;
            $test_species = new Species($name, $fur, $wings, $legs);

            //Act
            $result = $test_species->getWings();

            //Assert
            $this->assertEquals($wings, $result);

        }

        function test_getLegs()
        {
            //Arrange
            $name = "spider";
            $fur = false;
            $wings = false;
            $legs = 8;
            $test_species = new Species($name, $fur, $wings, $legs);

            //Act
            $result = $test_species->getLegs();

            //Assert
            $this->assertEquals($legs, $result);

        }

        function test_save()
        {
            //Arrange
            $name = "pig";
            $fur = false;
            $wings = false;
            $legs = 4;
            $test_species = new Species($name, $fur, $wings, $legs);
            $test_species->save();

            //Act
            $result = Species::getAll();

            //Assert
            $this->assertEquals($test_species, $result[0]);
        }



    }
?>
