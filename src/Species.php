<?php
    class Species
    {
        private $name;
        private $fur;
        private $wings;
        private $legs;
        private $id;

        function __construct($name, $fur, $wings, $legs, $id = null)
        {
            $this->name = $name;
            $this->fur = $fur;
            $this->wings = $wings;
            $this->legs = $legs;
            $this->id = $id;
        }

        // Getters and Setters
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function getFur()
        {
            return $this->fur;
        }

        function getWings()
        {
            return $this->wings;
        }

        function getLegs()
        {
            return $this->legs;
        }

        function getId()
        {
            return $this->id;
        }

        // Database storage methods
        // function save();
        // static function getAll();
        // static function deleteAll();
        // static function find($search_name);

    }
?>
