 <?php
    class Film{
        private $id;
        private $price;
        private $date;
        private $seatNumber;

        public function getId(){
            return $this->id;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getDate(){
            return $this->date;
        }

        public function getSeatNumber(){
            return $this->seatNumber;
        }

        public function setId(){
            $this->id = $id;
        }

        public function setPrice(){
            $this->price = $price;
        }

        public function setDate(){
            $this->date = $date;
        }

        public function setSeatNumber(){
            $this->seatNumber = $seatNumber;
        }

        function __construct($id,$price,$date,$seatNumber){
            $this->id = $id;
            $this->price = $price;
            $this->date = $date;
            $this->seatNumber = $seatNumber;
        }

    }
?>