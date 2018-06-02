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
<link rel="stylesheet" type="text/css" href="pages/main2.css">
</head>
<script type="text/javascript">

function loading()
    {
        document.getElementById("loader").style.display = "none";
    }

function reset()
    {
        document.getElementById("firstName").value = "";
        document.getElementById("lastName").value ="";
        document.getElementById("address").value ="";
        document.getElementById("phone").value ="";
        document.getElementById("total").value = "";
        document.getElementById("card").value = "";
    }

function validate(e)
{
    var group = document.getElementsByName("myRadio");

for (var i=0; i<group.length; i++) {
if (group[i].checked)
break;
}
if (i==group.length)
document.getElementById("message").innerHTML = "select card type";


for (var i=0; i<group.length; i++) {
if (group[i].checked)
break;
}
if (i==group.length)
document.getElementById("message").innerHTML = "select card type";
var exparationYear = parseFloat(document.getElementsByName("DOBYear")[0].value);
console.log(exparationYear);
    if(document.getElementById('firstName').value == "")    
     { document.getElementById("firstName").focus(); document.getElementById("message").innerHTML = " Firstname field is empty"; return false;}
    else if(document.getElementById('lastName').value == "") 
        { document.getElementById("lastName").focus(); document.getElementById("message").innerHTML = " Lastname field is empty"; return false;}
    else if(document.getElementById('address').value == "" ) 
        { document.getElementById("address").focus(); document.getElementById("message").innerHTML = "Address is empty"; return false;}
    else if(document.getElementById('phone').value.length != 10)
    {  document.getElementById("message").innerHTML = "Invalid phone number"; return false;}
    else if(document.getElementById('card').value.length != 16)
    {  document.getElementById("card").focus();  document.getElementById("message").innerHTML  = " invalid Credit card"; return false;}
    
    else if(document.getElementsByName("DOBYear")[0].value == '' || 
        document.getElementsByName("DOBMonth")[0].value == '' || document.getElementsByName("DOBDay")[0].value == '' )
    { document.getElementById("message").innerHTML = "Invalid Expiration Date"; return false;}
    else if(document.getElementsByName("DOBYear")[0].value < 2016) { document.getElementById("message").innerHTML = "card is expired"; return false;}
    else { document.getElementById("message").innerHTML  = ""; return true;}
}   



</script>

<body >
<div id="divMain">
<a href=".?action=home">HOME PAGE </a>
<h2 style="text-align:center;"> Order Form </h2>
        <div id="message" style="color:red;  margin-left:13%;"> </div>
        <form action="reply.html" method="post" onSubmit="return validate(this);"  id="submitform" >

            <div id="data">
                <label>First Name:</label>
                <input type="text" name="firstName" value="<?php echo $userDetail['firstName']; ?>" id="firstName" onchange="validate()" autofocus required><br>

                <label>Last Name:</label>
                <input type="text" name="lastName" id="lastName" value="<?php echo $userDetail['lastName']; ?>" onchange="validate()"  required><br>

                <label>Shipping Address:</label>
                <input type="text" name="address" id="address"   onchange="validate()" required><br>

                <label>Phone:</label>
                <input type="tel" name="phone" id="phone" value="<?php echo $userDetail['Phone']; ?>" onchange="validate()"  maxlength="10" required><br>

                <label>Total:</label>
                <span>$</span><input type="number" name="total" id="total" value="<?php echo $total; ?>" onchange="validate()" disabled><br>

                <div id="option" >
                 <label> Credit Card Type </label><br>
                <img class="cardType" src="images/assets/visa.png" alt="visa" />
                <input type="radio" name="myRadio"   onchange="validate()"/><br>
                <img class="cardType" src="images/assets/mastercard.png" alt="mastercard" />
                <input type="radio" name="myRadio"  onchange="validate()"/><br>
                <img class="cardType" src="images/assets/american_express.jpg" alt="amercan_express"/>
                <input type="radio" name="myRadio"  onchange="validate()"/><br>

                <label>Credit Card #:</label>
                <input type="number" size="90" name="card" id="card" onchange="validate()"  required> <br>


                <label>Expiration Date</label>
                <!-- date -->
                <select name="DOBMonth" id="DOBMonth" onchange="validate()" required>
    <option value=""> - Month - </option>
    <option value="January">January</option>
    <option value="Febuary">Febuary</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
</select>

<select name="DOBDay" id="DOBDay" onchange="validate()" required>
    <option value=""> - Day - </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>

<select name="DOBYear" id="DOBYear" onchange="validate()" required>
    <option value=""> - Year - </option>
    <option value="2026">2025</option>
    <option value="2025">2025</option>
    <option value="2024">2024</option>
    <option value="2023">2023</option>
    <option value="2022">2022</option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    
    
</select>
<br>

                <!-- date  -->
                </div>
            </div>

            <div id="buttons">
             <label>&nbsp;</label>
                <input type="Submit" name="submit" value="Submit"  ><br>
                <label>&nbsp;</label>
                <input type="reset" value="Reset" onreset="reset()"><br>
            </div>

        </form>




</div>
</body>
</html>