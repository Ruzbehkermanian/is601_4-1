<?php

//Get the data 

$category_name = filter_input(INPUT_POST, 'category_name');


//Validate inputs

if ( $category_name == null)
{
	$error = "Enter Valid Name.";
	include('error.php');
}

else 

{
	require_once('database.php');

// Add data to the database

	$query = 'INSERT INTO categories_guitar1
			(categoryName)
		VALUES
			(:category_name)';

	$statement = $db->prepare($query);
	$statement->bindValue(':category_name', $category_name);
	$statement->execute();
	$statement->closeCursor();

// Display the Category List Page

	include('category_list.php');

}
?>
