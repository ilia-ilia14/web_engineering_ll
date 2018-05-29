<?php
if(!isset($_SESSION))
{
    session_start();
	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>.html</title>
<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<script type="text/javascript">

function loading()
    {
        document.getElementById("loader").style.display = "none";
    }





</script>

<body >
<div id="divMain">
<a href=".?action=home">HOME PAGE </a>
<h2 style="text-align:center;"> Order Form </h2>
        <div id="message" style="color:red;  margin-left:13%;"> </div>
        <form action="control.php" method="get" onSubmit="return validate(this);"  id="submitform" >
			<input type="hidden" name="action" value="confirm">
            <div id="data">
                <label>First Name:</label>
                <input type="text" required><br>

                <label>Last Name:</label>
                <input type="text" id="lastName" required><br>

                <label>Shipping Address:</label>
                <textarea type="text" name="address" id="address"   onchange="validate()" required></textarea><br>

                <label>Phone:</label>
                <input type="tel"  id="phone"  maxlength="10" required><br>

                <label>Total:</label>
                <span>$</span><input type="number" name="total" id="total" value="<?php echo $total; ?>" onchange="validate()" disabled><br>
            </div>

            <div id="buttons">
             <label>&nbsp;</label>
                <input type="Submit"   ><br>
                <label>&nbsp;</label>
                <input type="reset" value="Cancel" onclick="window.location.href='control.php?action=goCart'" ><br>
            </div>

        </form>




</div>
</body>
</html>