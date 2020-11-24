<!--
    Pranav Bhandari
    Rhea Pottathuparambil
    Ruta Vagasia
    Imtiaz Khalid
    Nihar Gupte
-->

<html>
    <head>
        <title> Display Details of a Student User</title>
    </head>
    <body>
        <div align="center">
        <form action="delete_controller.php" method="POST">
            <fieldset>
                <legend> Enter Details to Delete</legend>
                    <label id ="usernamelabel" for="un"> Username : </label>
                    <input type="text" name="un"  /> <br/> <br/>
                    <label id ="fnamelabel" for="fname"> First Name: </label>
                    <input type="text" name="fname"  /> <br/> <br/>
                    <label id ="lnamelabel" for="lname"> Last Name: </label>
                    <input type="text" name="lname"  /> <br/> <br/>
                    <input id="button" type="submit" name="submit" />
            </fieldset> 
        </form>
        </div>
    </body>
</html>
