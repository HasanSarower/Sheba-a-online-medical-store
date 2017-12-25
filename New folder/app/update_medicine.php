<?php require_once "../service/medicine_service.php"; ?>
<?php
	$medName = $id = $indiCation = $generic = "";
?>
<?php
	 if($_SERVER['REQUEST_METHOD']=="POST"){
		$id=$_POST['id'];
        $medName=trim($_POST['medName']);
        $indiCation=trim($_POST['indication']);
        $generic=trim($_POST['generic']);	 	

        $medicine['id'] = $id;
        $medicine['medName'] = $medName;
        $medicine['indication'] = $indiCation;
        $medicine['generic'] = $generic;
	 

	  if(editMedicine($medicine)==true){
                echo "<script>
                        alert('Record Updated');
                        document.location='retrieve.php';
                     </script>";
                die();
            }
            else{
                echo "Internal Error<hr/>";
                die();
            }
        }
?>
<fieldset>
    <legend>UPDATE</legend>
    <form method="post">
        <table border="0" cellspacing="0" cellpadding="3">
    
            <tr>
                <td>Id</td>
                <td><input name="id" value="<?= $id ?>"/></td>
                
            </tr>
            <tr>
                <td>Medicine Name</td>
                <td><input name="medName" value="<?= $medName ?>"/></td>
                
            </tr>
            <tr>
                <td>Indication</td>
                <td><input name="indication" value="<?= $indiCation ?>"/></td>
                
            </tr>
            <tr>
                <td>Generic</td>
                <td><input name="generic" value="<?= $generic ?>"/></td>
                
            </tr>
        </table>
        <hr/>
        <input type="submit" value="SAVE" /><br/>
        <a href="add_delete_meds.php">Back</a>
    </form>
</fieldset>