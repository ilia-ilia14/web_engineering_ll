

<?php
if(!isset($_SESSION))
{
  session_start();
}
if(isset($_SESSION['loggedin']))
{
  $loggedin = $_SESSION['loggedin'];
}else { $loggedin = null;}

for($i =0; $i<$size; $i++)
        {
          for($j=0; $j<=6; $j++)
            {
              if($j == 0)
                $product_ids[] = $cartList[$i][$j];
              if($j == 2)
                 $product_codes[] = $cartList[$i][$j];
              if($j == 3)
                 $product_names[] = $cartList[$i][$j];
              if($j == 4)
                $prices[] = $cartList[$i][$j];
              if($j == 5)
                 $product_info[] = $cartList[$i][$j];
              if($j == 6)
                $product_images[] = $cartList[$i][$j];
            }
        }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>.html</title>
<link rel="stylesheet" type="text/css" href="pages/main2.css">
</head>


<body background="white">

<div id="divMain">


<h2> Your Shopping Cart</h2>
 <?php if($loggedin){ ?>
<b> User: <?php echo $_SESSION['firstname']; ?> </b>
  <?php } ?>
<h4 style="text-align:right; "><a href="index.php"> HOME PAGE </a></h4>
<main>
 <!--loop goies here -->
<fieldset>
<legend> Cart Items </legend>
  <?php if ($size == 0) : ?>
    <p>There are no items in your cart.</p>
  <?php else: ?>
      <form action="index.php" method="post">
      <input type="hidden" name="action" value="order">
      <input type="hidden" name="username" value="<?php echo $_SESSION['email']; ?>">
          <table>
                <tr id="cart_header">
                    <th class="left">Item</th>
                    <th class="right">Item Cost</th>
                    <th class="right">Item Total</th>
                    <th class="right">Remove</th>
                </tr>

            <?php echo $size; for($i =0; $i<$size; $i++) { ?>
                    <td>
                        <?php echo $product_names[$i]; ?>
                    </td>
                    <td class="right">
                        
                    </td>
                    <td class="right">
                       $<?php echo $prices[$i]; ?>
                    </td>
                    <td class="right">
                      <a href=".?action=remove&product_id=<?php echo $product_ids[$i] ?> "> Remove </a>
                    </td>
                </tr>
            <?php } ?>
                  <tr id="cart_footer">
                    <td colspan="3"><b>$<?php $total = array_sum($prices); echo $total; ?></b></td>
                    <input type="hidden" name="total" value="<?php echo $total; ?>" />
                <td> </td>
                </tr>
                <tr>
                <?php if($loggedin){ ?>
                    <td colspan="4" class="right">
                        <input type="submit" value="Place Order">
                    </td>
                <?php } ?>
                </tr>
            </table>
          
            </form>
  <?php endif; ?>
</fieldset>




</main>
 </div>
</body>
</html>