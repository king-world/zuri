<!DOCTYPE HTML>
<html>
    <head>
    
    </head>

    <body>
        <?php
            if($_POST['formSubmit'] == "Submit")
            {
                $name = $_POST['formName'];
                $phone = $_POST['phoneNumber'];
                $password =$_POST['password'];
            }
        ?>

        <form action="authentication-form.php" method="post">
            <div>
                <p> Name</p>
                <input type="text" name="formName" class="form-control" value="<?=$varName;?>">
            </div>

            <div>
                <p>Phone Number</p>
                <input type="number" name="phoneNumber" class="form-control" value="<?=$varPhone;?>">
            </div>

            <div>
                <p>Password</p>
                <input type="text" name="password" class="form-control" value="<?=$varPassword;?>">
            </div>
            <br>
            <input type="submit" name="formSubmit" value="Submit">
        </form>

        <?php
            if($errorMessage != "You didn't fill one or more of the fields. Fill Them")
            {
                echo("<p>There was an error: $errorMessage</p>\n");
                echo("<ul>" . $errorMessage . "</ul>\n");
            }
            else
            {
                $fs = fopen ("mydata.txt", "a");
                fwrite($fs,$varName . ", " . $varPhone . ", " . $varPassword . "\n");
                fclose($fs);

                header ("Location: thankyou.html");
                exit;
            }
        ?>
        
    </body>

</html>
