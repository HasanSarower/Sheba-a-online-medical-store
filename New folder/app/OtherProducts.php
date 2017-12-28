<html>
<?php require_once "../service/otherProd_service.php"; ?>
<?php
    $searchKey = $searchBy = "";  
    $searchBySelected = array("Any"=>null, "pro_name"=>null, "pro_id"=>null);
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey = trim($_POST['search']);
        $searchBy = $_POST['search_by'];
        $searchBySelected[$searchBy] = "selected";
        
        if($searchBy == "pro_name")
            $Products = getProductByName($searchKey);
        else if($searchBy == "pro_id")
            $Product = getProductById($searchKey);
        else{
            $Product = getProductByIdOrName($searchKey);
        }
    }
    else {
        $Product = getAllProduct();

    }
?>
<hr/>

<body>
	<fieldset>
		 <legend>List of Products</legend>
		  <form method="POST">
		  		<input type="submit" value="SEARCH"/>
                <input name="search" value="<?= $searchKey ?>"/> By
                <select name="search_by">
                    <option <?= $searchBySelected["Any"] ?>>Any</option>
                    <option <?= $searchBySelected["pro_name"] ?>>Name</option>
                    <option <?= $searchBySelected["pro_id"] ?>>Id</option>
                </select>
		  </form>

		<table width="80%" height="80%" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th colspan="4"></th>
        </tr>
      <?php if (count($Product) == 0) { ?>
            <tr><td colspan="5">NO RECORD FOUND</td></tr>
        <?php } ?>

        <?php foreach ($Product as $Product) { ?>
            <tr>
                <td><?= $Product['pro_id'] ?></td>
                <td><?= $Product['pro_name'] ?></td>
                <td><?= $Product['pro_quan'] ?></td>
				<td><?= $Product['pro_price'] ?></td>
                <td><a href="buy_product.php?pro_id=<?= $Product['pro_id'] ?>">buy</a></td>
            </tr>
        <?php }
         ?>
        </table>
	</fieldset>
</body>
</html>
