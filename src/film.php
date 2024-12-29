<?php
    class Film{
        private $id;
        private $title;
        private $genre;
        private $releaseDate;
        private $duration;


        public function getId(){
            return $this->id;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function getreleaseDate(){
            return $this->releaseDate;
        }

        public function getduration(){
            return $this->duration;
        }

        public function setId(){
            $this->id = $id;
        }

        public function setTitle(){
            $this->title = $title;
        }

        public function setGenre(){
            $this->genre = $genre;
        }

        public function setreleaseDate(){
            $this->releaseDate = $releaseDate;
        }

        public function duration(){
            $this->duration = $duration;
        }

        function __construct($id,$title,$genre,$releaseDate,$duration){
            $this->id = $id;
            $this->title = $title;
            $this->genre = $genre;
            $this->releaseDate = $releaseDate;

        }







    }
?>