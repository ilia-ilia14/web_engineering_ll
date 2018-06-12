<?php
if(!isset($_SESSION)){
    session_start();

    if(!isset($_SESSION['Cart']))
        {  $_SESSION['Cart'] = array(); }
    }

require('model/model.php');
require('model/category_db.php');
require('model/product_db.php');
$action = filter_input(INPUT_POST, 'action');
if($action == NULL)
{
$action = filter_input(INPUT_GET, 'action');
}

if ($action == NULL) {
	$_SESSION['categories'] = get_categories();
    include 'home.php';
	
	break;
}
//cart start at the beggingin of the session
switch($action){

    case 'Register':
        //collect data
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password');
        $password1 = filter_input(INPUT_POST, 'password1');
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $PASS =  strlen($password);


        $error = array();
        if($firstname == NULL || $lastname == NULL)
            { $error[] = "Invalid First/Last Name"; }
        //echo $error;
        //exit();
        if(!$email)
        {
            $error[] = 'Invalid Email';
        }
        
         if($password != $password1)
        {
        	$error[] = "Password doesn't match";
        }
         if($PASS < 6)
        {
            $error[] = "Password must be at least 6 characters";
        }

        if(!empty($error))
        {
        include 'signup.php';
    	}else 
        {  
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $newID = add_member($firstname, $lastname, $email, $hashedPassword, $phone);
            include 'login.php';
        }

        //process the data
        if(!empty($newID))
        {
            $message = "Thank you for registering  $firstname ";
            exit;
        }else {  echo 'error';  exit; }
        //inform the user of the return

        break;
    //LOGIN CASE
    case 'login':
        $email = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        $error ="";



        $potentialUser = getUserByEmail($email);
        //see if password's match if so login
        $passwordMatch = password_verify($password, $potentialUser['password']);
        if($passwordMatch)
        //if($password == $potentialUser['Password'])
        {
         $_SESSION['loggedin'] = TRUE;
         $_SESSION['firstname'] = $potentialUser['firstname'];
         $_SESSION['lastname'] = $potentialUser['lastname'];
         $_SESSION['status'] = $potentialUser['status'];
         $_SESSION['email'] = $potentialUser['email'];
        	
         $lifetime = 60 *60 *24 * 24;
         setcookie('3361name', $potentialUser['firstname'], $lifetime);
         $categories = get_categories();

         include 'home.php';
        } else { $error = "Invalid Username/Password"; include 'login.php'; }
        break;
    case 'logout':
        session_destroy();
        $categories = get_categories();
        $_SESSION['loggedin'] = FALSE;
        $_SESSION['status'] = FALSE;
        include 'home.php';
        break;
    case 'Save':
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password');
        $password1 = filter_input(INPUT_POST, 'password1');
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $member_id = filter_input(INPUT_POST, 'member_id');

        $error = "";
        if(empty($firstname) || empty($lastname)  || empty($password) || empty($password1) || empty($phone))
        {
            $error = 'please provide valid first/lastname/password or phone';
            
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error= 'email is not vaild';
            
        }
         if($password != $password1)
        {
            $error = "password doesn't match";
            $memberEmail = $email;
            $member = getUserByEmail($memberEmail);
            include 'user/accountManager.php';
        }else { $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
                edit_member($firstname, $lastname, $email, $hashedPassword, $member_id);
                session_destroy();
                $categories = get_categories();
                $_SESSION['loggedin'] = FALSE;
                $_SESSION['status'] = FALSE;
                include 'login.php';
                }  
        
        break;
	 case 'registerPage':
		$categories = get_categories();
		$error = "";
        include('signup.php');
        break;
    case 'loginPage':
        $categories = get_categories();
        $error = "";
        include('login.php');
        break;


/////////PAGES////PAGES//////////////////

    case 'contactPage':
        $categories = get_categories();
        include('contact.php');
        break;
	case 'products':
		$category_id = filter_input(INPUT_GET, 'categoryID');
        $products = get_products_by_category($category_id);
        include('products.php');
        break;
		case 'viewProduct':
		$id = filter_input(INPUT_GET, 'id');
        $product = get_product($id);
        include('product.php');
        break;
	case 'addToCart':
        $product_id = filter_input(INPUT_GET, 'product_id');

        //array_push($Cart, $product_id);
        if(!in_array($product_id, $_SESSION['Cart']))
        {
            $_SESSION['Cart'][] = $product_id;
        }    
        $product = get_product($product_id);
        include('product.php');
        break;
	 case 'remove':
         $product_id = filter_input(INPUT_GET, 'product_id');
         $pos = array_search($product_id, $_SESSION['Cart']);
         if($pos == 0)
           $bbb = array_pop($_SESSION['Cart']);
        else
         unset( $_SESSION['Cart'][$pos]);
         $product = get_product($product_id);
         include('product.php');
        break;
	  case 'goCart':
         $product_id = NULL;
         //filter_input(INPUT_GET, 'product_id');
         

         $IDS = NULL;
        $IDS = $_SESSION['Cart'];
        $size = count($IDS);
        //echo $size ."---";
        $cartList[][] = NULL;


        //echo $size;
        //print_r($IDS[2]);
        for($i =0; $i<$size; $i++)
        {
            $product = get_product($IDS[$i]);
            
            //$product = get_product($IDS[$i]);
            $psize = count($product) / 2;
            for($j=0; $j<$psize; $j++)
            {
                    $cartList[$i][$j] = $product[$j];

            }   
        }  
        include('pages/cart.php');
        break;
				
    case 'Submit':
        include('home.php');
        break;	
    case 'workoutPage':
        $categories = get_categories();
        include('workouts.php');
        break;
    case 'trainersPage':
        $categories = get_categories();
        include('trainers.php');
        break;

        case 'accountManager':
            $memberEmail = filter_input(INPUT_GET, 'useremail');
            $member = getUserByEmail($memberEmail);
            $error = "";
            include('user/accountManager.php');
            break;



    case 'order':
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
        $total = filter_input(INPUT_POST, 'total');
        $userDetail = getUserByEmail($username);
        include 'order.php';
        break;

    
   

    case 'Search':
        $keyword = filter_input(INPUT_GET, 'keyword');
        include('search.php');
        break;

    default:
    $categories = get_categories();
    include 'home.php'; 
/////////PAGES////PAGES//////////////////

}
 ?>