<?php
if(isset($_POST['add_product']))
{
    echo 'here';
    exit();
    $image_dir = 'images';
    $image_dir_path = getcwd() . DIRECTORY_SEPARATOR . $image_dir;
     $filename = $_FILES[$file]['name'];
        if (empty($filename)) {
            echo "it is empty";
            return;
        }
        $source = $_FILES[$file]['tmp_name'];
        $target = $image_dir_path . DIRECTORY_SEPARATOR . $filename;
        move_uploaded_file($source, $target);
}
?>
<DOCTYPE html>
<html>
<head>
    <title>Admin tool</title>
     <link rel="stylesheet" type="text/css" href="main.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<style type="text/css">
/*
    main {
        border:1px solid;
        margin:auto;
        margin-top: 15px;
        width:40%;
        height: 50%;
    }    
    h1 { text-align:center; }
    */
</style>

<body>
<h1>Add Product</h1>
<main>
<fieldset>
     <legend> Add Product </legend>
    <form action="index.php" method="post" id="add_product_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_product">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryid']; ?>">
                <?php echo $category['categoryname']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Code:</label>
        <input type="text" name="code" required />
        <br>

        <label>Name:</label>
        <input type="text" name="name" required />
        <br>

        <label>List Price:</label>
        <input type="text" name="price" required />
        <br>

        <input type="file" name="file" required />
        <br />


        <label>Product Information</label> <br />
        <textarea  name="product_info" placeholder="describe the product" cols="45"  required></textarea>
        <br />



        <label>&nbsp;</label>
        <input type="submit"  value="Add Product" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>
</fieldset>
</main>
</body>
</html>


