<?php

require_once('../../Models/dataBase.php');
require_once('../../Models/Assurance.php');
require_once('InterfaceAssurance.php');

class ServiceAssurance extends DataBase implements InterfaceAssurance{
    public function addAssurance(Assurance $assurance){
        $pdo = $this->connection();
        
        $Name = $assurance->getName();
        $Logo = $assurance->getLogo();

        $sql = "INSERT INTO Assurance (Name,logo) VALUES (:Name,:Logo);";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':Name',$Name);
        $stmt->bindParam(':Logo',$Logo);

        $stmt->execute();
        
    }

    function updateAssurance(Assurance $assurance){
        $pdo = $this->connection();
        
        $Name = $assurance->getName();
        $Logo = $assurance->getLogo();
        $id = $assurance->getAssurance_ID();

        $sql = "UPDATE assurance SET Name = :Name, Logo = :Logo WHERE Assurance_ID = :id";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':Name',$Name);
        $stmt->bindParam(':Logo',$Logo);

        $stmt->execute();
    }

     public function deleteAssurance($id){
   

        $pdo = $this->connection();
       
        $sql = "DELETE FROM assurance WHERE Assurance_ID = :id";
       
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
       
        $DeletASSur= $stmt->execute();
        return  $DeletASSur;
       
       }

    public function displayAssurance(){
        $pdo = $this->connection();

        $sql = "SELECT * FROM Assurance";
        
        $data = $pdo->query($sql);
        $aSSurs = $data->fetchAll(PDO::FETCH_ASSOC);

        return $aSSurs;
    }

    function displayAssuranceById($id){
        $pdo=$this->connection();
    $sql="SELECT * FROM Assurance WHERE Assurance_ID=$id";
    
    $data = $pdo->query($sql);
    $AssuranceById = $data->fetchAll(PDO::FETCH_ASSOC);
    return $AssuranceById;
    }
}
 

?>