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
        function save()
        {
            $statement = $GLOBALS['DB']->exec(
                "INSERT INTO species (name, fur, wings, legs) VALUES (
                    '{$this->getName()}',
                    {$this->getFur()},
                    {$this->getWings()},
                    {$this->getLegs()});"
            );
            $this->id = $GLOBALS['DB']->lastInsertId();

        }

        static function getAll()
        {
            $db_species = $GLOBALS['DB']->query("SELECT * FROM species;");
            $all_species = array();

            foreach ($db_species as $species) {
                $name = $species['name'];
                $fur = $species['fur'];
                $wings = $species['wings'];
                $legs = $species['legs'];
                $id = $species['id'];
                $new_species = new Species($name, $fur, $wings, $legs, $id);
                array_push($all_species, $new_species);
            }

            return $all_species;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM species;");
        }


        // static function find($search_name);

    }
?>
