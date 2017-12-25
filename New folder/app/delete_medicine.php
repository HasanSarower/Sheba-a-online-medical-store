<html>
		<head>
			<title>delete medicine</title>
		</head>
		<body>
		<fieldset>This is message box
            <?php require_once "../service/medicine_service.php";?>
            
            <?php
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    if(isset($_GET['id'])){
                    $medicineId = trim($_GET['id']);
                    $medicine = 
                }
            }
                


            ?> 

        </fieldset>
<br />
<fieldset>
    <legend><b>Delete Medicine</b></legend>
    <form method="post">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="130"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Delete Medicine</td>
                <td>:</td>
                <td><input name="medName" type="text"></td>
                <td>by
                    <select>
                    <option>Name</option>
                    <option>Id</option>
                </select></td>		
            </tr>		           
        </table>
        <hr/>
        <input type="Submit" value="delete"/>
        <a href="retrieve.php">Preview data</a>
    </form>
</fieldset>
<a href="add_delete_meds.php">Back</a>
		</body>
</html>