<?php

require_once('database.php');

//Get Name

$category_name = filter_input(INPUT_POST, 'category_name');

//Delete the data from the database

if($category_name != false) 

{

	$query = 'DELETE FROM categories_guitar1
			WHERE categoryName = :category_name';

	$statement = $db->prepare($query);
	$statement->bindValue(':category_name', $category_name);
	$success = $statement->execute();
	$statement->closeCursor();


}

// Display the product

include('category_list.php');

?>
