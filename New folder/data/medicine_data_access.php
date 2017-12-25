<?php require_once "data_access.php"; ?>
<?php
	function addMedicineToDb($medicine)
	{
		$sql = "INSERT INTO medicine (id,med_name,indication,generic) VALUES (NULL,'$medicine[medName]','$medicine[indication]','$medicine[generic]')";
		 $result = executeSQL($sql);
        return $result;
	}
	function editMedicineToDb($medicine)
	{
		$sql = "UPDATE medicine SET med_name='$medicine[medName]', indication='$medicine[indication]',generic='$medicine[generic]' WHERE id=$medicine[id]";
        $result = executeSQL($sql);
        return $result;
	}
	function removeMedicineFromDb($medicineID)
	{
		$sql = "DELETE FROM medicine WHERE med_name='$medicine[medName]', indication='$medicine[indication]',generic='$medicine[generic]' WHERE id=$medicine[id]";
        $result = executeSQL($sql);
        return $result;
	}
	 function getAllMedicinesFromDb(){
        $sql = "SELECT * FROM medicine";        
        $result = executeSQL($sql);
        
        $medicines = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $medicines[$i] = $row;
        }
        
        return $medicines;
    }
     function getMedicineByIdFromDb($medicineId){
        $sql = "SELECT * FROM medicine WHERE id=$medicineId";        
        $result = executeSQL($sql);
        
        $medicine = mysqli_fetch_assoc($result);
        
        return $medicine;
    } 
    function getMedicinesByNameFromDb($meDName){
        $sql = "SELECT * FROM medicine WHERE med_name LIKE '%$meDName%'";
        $result = executeSQL($sql);
        
        $medicines = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $medicines[$i] = $row;
        }
        
        return $medicines;
    }
    function getByMedicineNameOrIdFromDb($key){
        $sql = "SELECT * FROM medicine WHERE med_name LIKE '%$key%' OR id LIKE '%$key%'";
        $result = executeSQL($sql);
        
        $medicines = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $medicines[$i] = $row;
        }
        return $medicines;
    }
    function getMedicineByIndicationFromDb($Indication){
        $sql = "SELECT * FROM medicine WHERE indication=$Indication";        
        $result = executeSQL($sql);
        
        $medicine = mysqli_fetch_assoc($result);
        
        return $medicine;
    }
    function getMedicineByGenericFromDb($Generic){
        $sql = "SELECT * FROM medicine WHERE generic=$Generic";        
        $result = executeSQL($sql);
        
        $medicine = mysqli_fetch_assoc($result);
        
        return $medicine;
    }
?>