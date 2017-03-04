<?php
require_once('database.php');

// Get all categories
$query = 'SELECT * FROM categories_guitar1
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
      

	<?php foreach ($categories as $category) : ?>
	
	<tr>
		<td>
			<?php echo $category['categoryName'];?>
		</td>

	<td><form action='delete_category.php' method='post' id='delete_category.php'>
	    <input type='hidden' name='category_name' value='<?php echo $category['categoryName']; ?>'>
	    <input type="submit" value="Delete"></form> </td>
	</tr>

	<?php endforeach; ?>

        <!-- add code for the rest of the table here -->
    
    </table>

    <h2>Add Category</h2>
    
    <!-- add code for the form here -->

	 <form action="add_category.php" method = "post"
		id="category_list"> 

	<label>Name:</label>
	<input type="text" name="category_name">

	 <label>&nbsp;</label>
	<input type="submit" value="Add"><br>
	
	</form>

    <br>
    <p><a href="index.php">List Products</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
