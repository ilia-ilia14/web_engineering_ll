<!DOCTYPE html>
<html>
<head>
    <title>Gymbandit.org</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<header>
   <h1>Edit Product</h1>
</header>
<style type="text/css">
    span{
        color:red; 
        font-size:13px;
    }
</style>
<main>
						<b style="color:red;"> 
							<?php  if(!empty($error)) {
							foreach ( $error as $err ) : ?>
						   <?php echo $err."<br>"; ?>
							<?php endforeach; }?>
						</b>
    <form action="index.php" method="post" id="edit_product_form">
        <input type="hidden" name="action" value="save_product">
        <br>
        
        <label>Category:</label>
        <select name="category_id">
        <?php foreach ($categories as $category ) : ?>
            <option value="<?php echo $category['categoryid']; ?>">
                <?php echo $category['categoryname']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>
        
        <label>Code:</label>
        <input type="text" name="code" value="<?php echo $code; ?>">
        <br>

        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <br>

        <label>List Price:</label>
        <input type="text" name="price" value="<?php echo $price; ?>">
        <br>
        <textarea rows="4" cols="50"  type="text" name="productinfo" ><?php echo $product['productinfo']; ?></textarea>
        <br><br>
        <span >New Image Url </span><br>
        <input type="text" name="image" value="<?php echo $product['image']; ?>" >
        <br>
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" >
        <label>&nbsp;</label>

        
        <input type="submit" value="save changes" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>

</main>
</body>
</html>