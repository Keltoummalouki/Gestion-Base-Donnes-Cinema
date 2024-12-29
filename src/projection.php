<?php
    class projection{
        private $id;
        private $date;
        private $time;

        public function getId(){
            return $this->id;
        }

        public function getDate(){
            return $this->date;
        }

        public function getTime(){
            return $this->time;
        }

        public function setId(){
            $this->id = $id;
        }

        public function setDate(){
            $this->date = $date;
        }

        public function setTime(){
            $this->time = $time;
        }

        function __construct($id,$date,$time){
            $this->id = $id;
            $this->date = $date;
            $this->time = $time;
        }

    }
?>