<?php

function insertData($data){

	

	$conn = createConnection();
	$tableName = "TvPrices";

	$productInfoList = $data['productInfoList'];

	if(sizeof($productInfoList) > 0){ // not required;
		foreach ($productInfoList as $list) {

			$prodIdentifier = $list['productBaseInfo']['productIdentifier'];
			$prodAttr = $list['productBaseInfo']['productAttributes'];

			$ItemId = $prodIdentifier['productId'];
			$ItemTitle = $prodAttr['title']; 
			$ItemMRP = $prodAttr['maximumRetailPrice']['amount'];
			$ItemSP = $prodAttr['sellingPrice']['amount']; 
			$ItemURL = $prodAttr['productUrl'];
			$ItemBrand = $prodAttr['productBrand'];

			$variable = $prodAttr['imageUrls'];
			foreach ($variable as $key => $imageUrl) break;

			$ItemImage = $imageUrl;
			


			// echo '<br>'.$ItemId;
			// echo '<br>'.$ItemTitle;
			// echo '<br>'.$ItemMRP;
			// echo '<br>'.$ItemSP;
			// echo '<br>'.$ItemURL;
			// echo '<br>'.$ItemBrand;
			// echo '<br>'.$ItemImage;

			echo '<hr>';

			$columns = 'id, title, mrp, sp, url, brand, image';
			$values  = "'".$ItemId."'".','."'".$ItemTitle."'".','.$ItemMRP.','.$ItemSP.','."'".$ItemURL."'".','."'".$ItemBrand."'".','."'".$ItemImage."'";

			// echo $values;
			$sql = "INSERT INTO ".$tableName. "(".$columns.") VALUES (".$values.")";

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else { 

				// row is already exists.

				$sql = "UPDATE ".$tableName. " SET mrp=".$ItemMRP .", sp=".$ItemSP.", url="."'".$ItemURL."'"." where id='".$ItemId."'";

				if ($conn->query($sql) === TRUE) {
					echo "row updated successfully";
				} else {
					echo "Error updating table" . $conn->error;
				}

			}

		}

	}

	$conn->close();
}

?>