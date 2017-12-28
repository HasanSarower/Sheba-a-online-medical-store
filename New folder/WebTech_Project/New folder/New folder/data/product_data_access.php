<?php require_once "data_access.php"; ?>
<?php
	function addProductToDb($Product)
	{
		$sql = "INSERT INTO product (pro_id,pro_name,pro_quan,pro_price) VALUES ('$Product[pro_id]','$Product[pro_name]','$Product[pro_quan]','$Product[pro_price]')";
		 $result = executeSQL($sql);
        return $result;
	}

     function addOrderToDb($order){
        $sql = "INSERT INTO order_report (orderId, orderName, orderQuantity, orderCost) VALUES (NULL, '$order[medName]', '$order[quantity]', '$order[total_q]')";
        $result = executeSQL($sql);
        return $result;
    }

	function editProductToDb($Product)
	{
		$sql = "UPDATE product SET med_name='$Product[medName]', indication='$Product[indication]',generic='$Product[generic]', price='$Product[price]', quantity='$Product[quantity]' WHERE id=$Product[id]";
        $result = executeSQL($sql);
        return $result;
	}
	function removeProductFromDb($ProductID)
	{
		$sql = "DELETE FROM product WHERE id=$ProductID";
        $result = executeSQL($sql);
        return $result;
	}
	 function getAllProductFromDb(){
        $sql = "SELECT * FROM product";        
        $result = executeSQL($sql);
        
        $Products = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $Products[$i] = $row;
        }
        
        return $Products;
    }
     function getProductByIdFromDb($ProductId){
        $sql = "SELECT * FROM product WHERE pro_id=$ProductId";        
        $result = executeSQL($sql);
        
        $Product = mysqli_fetch_assoc($result);
        
        return $Product;
    } 
    function getProductsByNameFromDb($meDName){
        $sql = "SELECT * FROM product WHERE pro_name LIKE '%$meDName%'";
        $result = executeSQL($sql);
        
        $Products = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $Products[$i] = $row;
        }
        
        return $Products;
    }
    function getByProductNameOrIdFromDb($key){
        $sql = "SELECT * FROM product WHERE pro_name LIKE '%$key%' OR pro_id LIKE '%$key%'";
        $result = executeSQL($sql);
        
        $Products = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $Product[$i] = $row;
        }
        return $Product;
    }
    function getProductByIndicationFromDb($Indication){
        $sql = "SELECT * FROM product WHERE indication=$Indication";        
        $result = executeSQL($sql);
        
        $Product = mysqli_fetch_assoc($result);
        
        return $Product;
    }
    function getProductByGenericFromDb($Generic){
        $sql = "SELECT * FROM product WHERE generic=$Generic";        
        $result = executeSQL($sql);
        
        $Product = mysqli_fetch_assoc($result);
        
        return $Product;
    }
function getMedByCountFromDb(){
        $sql = "SELECT * FROM product ORDER BY sell_count DESC ";        
        $result = executeSQL($sql);
		
		$persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $person;
    }
?>
