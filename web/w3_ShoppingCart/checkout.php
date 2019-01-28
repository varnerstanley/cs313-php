<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Check Out</title>
<body>

<form name="cart" method="post" action="confirm.php" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
            <h2>Purchase Information</h2>
            <p>
                <label for="first_name">First Name:</label>
                <input name="name" class="pInfo" type="text" id="first_name" required/>
                
                <br />
            </p>
            <p>
                <label for="last_name">Last Name:</label>
                <input name="lname" class="pInfo" type="text" id="last_name" required />
                
            </p>
            <p id="addresslabel">
                Address:<br/>
                <label for="cityaddress">City:</label><input type="text" name="city" class="pInfo" id="cityaddress" required/><br/><br/>
                <label for="stateaddress">State:</label><input type="text" name="state" class="pInfo" id="stateaddress" placeholder="UT" required pattern= "[a-z]{2}"/><br/><br/>
                <label for="zipaddress">Zip Code:</label><input type="number" name="zip" class="pInfo" type="" id="zipaddress" required pattern="[0-9]{6}"/>
                
            </p>
           <input type="submit" name="input" class="btn" value="Buy Now">
        </form>


</body>
</html>