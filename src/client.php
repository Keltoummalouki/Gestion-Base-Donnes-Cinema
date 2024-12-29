<?php
    class Client extends Member{

        public function __construct($id, $name, $email, $password)  {
            parent::__construct($id, $name, $email, $password); 
        }

        public function reserverTicket(){

        }

        public function consulterHistory(){

        }

    }
?>