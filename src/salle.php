<?php
    class Film{
        private $id;
        private $name;
        private $capacity;

        public function getId(){
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }

        public function getCapacity(){
            return $this->capacity;
        }

        public function setId(){
            $this->id = $id;
        }

        public function setName(){
            $this->name = $name;
        }

        public function setCapacity(){
            $this->capacity = $capacity;
        }

        function __construct($id,$name,$capacity){
            $this->id = $id;
            $this->name = $name;
            $this->capacity = $capacity;
        }
    }
?>