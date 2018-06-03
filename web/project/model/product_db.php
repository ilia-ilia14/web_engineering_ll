<?php
require 'database.php';

function get_products_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM product
              WHERE product.categoryID = :category_id
              ORDER BY productID';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT * FROM product
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function resize_image($old_image_path, $new_image_path,
        $max_width, $max_height) {

    // Get image type
    $image_info = getimagesize($old_image_path);
    $image_type = $image_info[2];

    // Set up the function names
    switch($image_type) {
        case IMAGETYPE_JPEG:
            $image_from_file = 'imagecreatefromjpeg';
            $image_to_file = 'imagejpeg';
            break;
        case IMAGETYPE_GIF:
            $image_from_file = 'imagecreatefromgif';
            $image_to_file = 'imagegif';
            break;
        case IMAGETYPE_PNG:
            $image_from_file = 'imagecreatefrompng';
            $image_to_file = 'imagepng';
            break;
        default:
            echo 'File must be a JPEG, GIF, or PNG image.';
            exit;
    }

    // Get the old image and its height and width
    $old_image = $image_from_file($old_image_path);
    $old_width = imagesx($old_image);
    $old_height = imagesy($old_image);

    // Calculate height and width ratios
    $width_ratio = $old_width / $max_width;
    $height_ratio = $old_height / $max_height;

    // If image is larger than specified ratio, create the new image
    if ($width_ratio > 1 || $height_ratio > 1) {

        // Calculate height and width for the new image
        $ratio = max($width_ratio, $height_ratio);
        $new_height = round($old_height / $ratio);
        $new_width = round($old_width / $ratio);

        // Create the new image
        $new_image = imagecreatetruecolor($new_width, $new_height);

        // Set transparency according to image type
        if ($image_type == IMAGETYPE_GIF) {
            $alpha = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
            imagecolortransparent($new_image, $alpha);
        }
        if ($image_type == IMAGETYPE_PNG || $image_type == IMAGETYPE_GIF) {
            imagealphablending($new_image, false);
            imagesavealpha($new_image, true);
        }

        // Copy old image to new image - this resizes the image
        $new_x = 0;
        $new_y = 0;
        $old_x = 0;
        $old_y = 0;
        imagecopyresampled($new_image, $old_image,
                           $new_x, $new_y, $old_x, $old_y,
                           $new_width, $new_height, $old_width, $old_height);

        // Write the new image to a new file
        $image_to_file($new_image, $new_image_path);

        // Free any memory associated with the new image
        imagedestroy($new_image);
    } else {
        // Write the old image to a new file
        $image_to_file($old_image, $new_image_path);
    }
    // Free any memory associated with the old image
    imagedestroy($old_image);
}

function upload_file($file) {

    $filename = $_FILES[$file]['name'];
    $source = $_FILES[$file]['tmp_name'];
	echo $filename;
	/*
    $image_dir_path = getcwd() . DIRECTORY_SEPARATOR . 'images';
    //fullpath allows file to be stored in the computer folder
    $fullPath = $image_dir_path . DIRECTORY_SEPARATOR . $filename;

    //$imagePath is for server because it doesn't need for path page is already in the product Manager
    $imagePath = 'images' . DIRECTORY_SEPARATOR . $filename;

    //this function resizes and uploads pictures to the library
    resize_image($source, $fullPath, "180", "200");

    //SAVE UPLODED PICTURE
    //move_uploaded_file($source, $fullPath);
    //echo $target;
    return $imagePath;
	*/
}


function add_product($category_id, $code, $name, $price, $product_info, $imagePath) {
    global $db;
    $query = 'INSERT INTO product
                 (categoryID, productCode, productName, listPrice, productInfo, Image)
              VALUES
                 (:category_id, :code, :name, :price, :product_info, :imagePath)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':product_info', $product_info);
    $statement->bindValue(':imagePath', $imagePath);
    $statement->execute();
    $newItem = $statement->rowCount();
    $statement->closeCursor();
    return $newItem;
}

function edit_product($category_id, $code, $name, $price, $product_id, $product_info, $image) {
    global $db;
    $query = 'UPDATE product 
              SET categoryID=:category_id, productCode=:code, productName=:name, listPrice=:price, productInfo=:product_info, Image=:image WHERE 
              productID=:product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->bindValue('product_id', $product_id);
    $statement->bindValue('product_info', $product_info);
    $statement->bindValue('image', $image);
    $statement->execute();
    $statement->closeCursor();
}

function delete_product($product_id) {

    global $db;
    $query = 'DELETE FROM product
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}

?>