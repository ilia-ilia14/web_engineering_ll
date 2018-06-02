<DOCTYPE html>
<html>
<head>
    <title>Admin tool</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<style type="text/css">  
    h1 { text-align:center; }
    td{text-align: center;}
    table{ border-spacing:23px;  }
    
</style>

<body>
<main>
    <h1>Product List</h1>

    <top>
        <!-- display a list of categories -->
        <h2>Categories</h2> 
        <?php include '../view/category_nav.php'; ?>    
    </top>

    <fieldset>
         <legend> <?php echo $category_name; ?> </legend>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                
                <td><form action="index.php" method="post">
                    <input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
                    <input type="hidden" name="name" 
                           value="<?php echo $product['productName']; ?>">
                    <input type="hidden" name="code" 
                           value="<?php echo $product['productCode']; ?>">
                    <input type="hidden" name="price" 
                           value="<?php echo $product['listPrice']; ?>">

                    <input type="submit" value="Edit">
                </form>
                </td>  
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Product</a></p>
        <p class="last_paragraph"><a href="?action=list_categories"> List Categories</a>
       <p><a href="../index.php"> Home page </a></p>
        </p>        
    </fieldset>
</main>
</body>
</html>