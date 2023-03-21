<?php
    class Vehicule{
        private $nomVehicule;
        private $nbRoues;
        private $vitesse;


        public function __construct($nameV,$wheels,$speed){
            $this->nomVehicule = $nameV;
            $this->nbRoues = $wheels;
            $this->vitesse = $speed;

        }

        public function getNomV(){
            return $this->nomVehicule;
        }
        
        public function getRoues(){
            return $this->nbRoues;
        }
        
        public function getVit(){
            return $this->vitesse;
        }


        public function setNomV($nameV){
            $this->nomVehicule=$nameV;
        }
        
        public function setRoues($wheels){
            $this->nbRoues=$wheels;
        }
        
        public function setVit($speed){
            $this->vitesse=$speed;
        }

        public function detect(){
            if($this->nbRoues == 4){
                echo "C'est une voiture !";
            }else{
                echo "C'est une moto !";
            }
        }
    }
    

?>