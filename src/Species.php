<?php
    class Species
    {
        private $id;
        private $name;
        private $fur;
        private $wings;
        private $legs;

        // Getters and Setters
        function getId();
        function getName();
        function setName();
        function getFur();
        function getWings();
        function getLegs();

        function save();
        static function getAll();
        static function deleteAll();
        static function find($search_name);

    }
?>
