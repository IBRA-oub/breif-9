<?php


class Assurance{
    private $Assurance_ID;
    private $Name; 
    private $Logo;
    
    public function __construct( $Name, $Logo){
        
        $this->Name = $Name;
        $this->Logo = $Logo;
    }

    public function getAssurance_ID(){
        return $this->Assurance_ID;
        
    }
    public function setAssurance_ID($Assurance_ID){
        $this->Assurance_ID = $Assurance_ID;
    }
    public function getName(){
        return $this->Name;
        
    }
    public function setName($Name){
        $this->Name = $Name;
    }

    public function getLogo(){
        return $this->Logo;
        
    }
    public function setLogo($Logo){
        $this->Logo = $Logo;
    }

    
}




?>