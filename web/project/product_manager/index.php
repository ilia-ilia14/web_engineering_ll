<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

switch ($action) {
    ///////
    case 'list_categories':
    //////
        $categories = get_categories();
        include('category_list.php');
    break;
    ///////
    case 'add_category':
    //////
         $name = filter_input(INPUT_POST, 'name');

        // Validate inputs
        if ($name == NULL) {
        $error = "Invalid category name. Check name and try again.";
        } else {
        add_category($name);
        header('Location: .?action=list_categories');  // display the Category List page
         }
    break;
    //////
    case 'delete_category':
    /////
        $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
        delete_category($category_id);
         header('Location: .?action=list_categories');      // display the Category List page
    break;
    ///////
    case 'list_products':
    //////
        $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE) {
             $category_id = 1;
         }
        $category_name = get_category_name($category_id);
        $categories = get_categories();
        $products = get_products_by_category($category_id);
        include('product_list.php');
    break;
    /////
    case 'show_add_form':
    /////
        $categories = get_categories();
         include('product_add.php');
    break;
    //////
    case 'add_product':
    /////
        $category_id = filter_input(INPUT_POST, 'category_id', 
                FILTER_VALIDATE_INT);
        $code = filter_input(INPUT_POST, 'code');
        $name = filter_input(INPUT_POST, 'name');
        $price = filter_input(INPUT_POST, 'price');
        $product_info  = filter_input(INPUT_POST, 'product_info');
        $image = filter_input(INPUT_POST, 'image');
        //file upload function
        $imagePath = upload_file('file');


        echo $image ." ". $product_info ." ". $name ." ". $code ." ".  $imagePath;
		break;
/*
        if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
                $name == NULL || $price == NULL || $price == FALSE || $product_info == NULL || $imagePath == NULL  ) {
            $error = "Invalid product data. Check all fields and try again.";
            echo "error something is wrong <br />";
            echo $code. ", ".$name. ", ". $price. ", ". $product_info.",-". $image;

        } else { 
             echo $code. ", ".$name. ", ". $price. ", ". $product_info.",-". $image;
           $newItem = add_product($category_id, $code, $name, $price, $product_info, $imagePath);
            header('Location: .?action=list_products');
			*/
        }
    break;
    //////
    case 'delete_product':
    /////
        $product_id = filter_input(INPUT_POST, 'product_id', 
            FILTER_VALIDATE_INT);
         $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE ||
            $product_id == NULL || $product_id == FALSE) {
        $error = "Missing or incorrect product id or category id.";
            echo 'mission or incorrect product';
         include('../errors/error.php');
         } else { 
            delete_product($product_id);
            header("Location: .?category_id=$category_id");
        }
    break;

    /////
    case 'show_edit_form':
    ////
        // Get the data
        $category_id = filter_input(INPUT_POST, 'category_id', 
                FILTER_VALIDATE_INT);
        $code = filter_input(INPUT_POST, 'code');
        $name = filter_input(INPUT_POST, 'name');
        $price = filter_input(INPUT_POST, 'price');
        $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
        $product_info = filter_input(INPUT_POST, 'product_info', FILTER_VALIDATE_INT);
        $product_image = filter_input(INPUT_POST, 'product_image', FILTER_VALIDATE_INT);
        // Get the functions needed for edit form
        $category_name = get_category_name($category_id);
        $categories = get_categories();
        $product = get_product($product_id);
        //$products = get_products_by_category($category_id);
        // Check for errors
       
        // display the result
        include('product_edit.php'); 
    break;
    
    ///////
    case 'save_product':
    //////
        $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
        $code = filter_input(INPUT_POST, 'code');
        $name = filter_input(INPUT_POST, 'name');
        $price = filter_input(INPUT_POST, 'price');
        $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
        $product_info = filter_input(INPUT_POST, 'productinfo', FILTER_VALIDATE_INT);
        $image = filter_input(INPUT_POST, 'image', FILTER_VALIDATE_INT);
        
        
        // Check for errors
        if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
                $name == NULL || $price == NULL || $price == FALSE) {
            $error = "Invalid product data. Check all fields and try again.";
            // display the result
            include('../errors/error.php');
        } else { 
            edit_product($category_id, $code, $name, $price, $product_id, $product_info, $image);//get the function
            header("Location: .?category_id=$category_id");
        }
    break;

    default:
    # code...
    break;
}

?>