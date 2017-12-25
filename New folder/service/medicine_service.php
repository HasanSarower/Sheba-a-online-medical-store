<?php require_once "../data/medicine_data_access.php"; ?>
<?php
	function addMedicine($medicine)
	{
		return addMedicineToDb($medicine);
	}
	function editMedicine($medicine)
	{
        return editMedicineToDb($medicine);
    }
    function removeMedicine($medicineId){
        return removeMedicineFromDb($medicineId);
    }
     function getAllMedicines(){
        return getAllMedicinesFromDb();
    }
    function getMedicineById($medicineId){
        return getMedicineByIdFromDb($medicineId);
    }
    function getMedicinesByName($meDName){
        return getMedicinesByNameFromDb($meDName);
    }
    function getMedicinesByIdOrName($key){
        return getByMedicineNameOrIdFromDb($key);
    }
    function getMedicineByIndication($Indication){
    	return getMedicineByIndicationFromDb($Indication);
    }
    function getMedicineByGeneric($Generic){
    	return getMedicineByGenericFromDb($Generic);
    }

?>