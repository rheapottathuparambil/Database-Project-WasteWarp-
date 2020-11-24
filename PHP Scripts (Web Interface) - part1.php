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
        <form action="insert_controller.php" method="POST">
            <fieldset>
                <legend> Enter Details to add a Student User</legend>
                    <label id ="usernamelabel" for="un"> Username : </label>
                    <input type="text" name="un"  /> <br/> <br/>
                    <label id ="fnamelabel" for="fname"> First Name: </label>
                    <input type="text" name="fname"  /> <br/> <br/>
                    <label id ="lnamelabel" for="lname"> Last Name: </label>
                    <input type="text" name="lname"  /> <br/> <br/>
                    <label id ="emaillabel" for="email"> Email: </label>
                    <input type="text" name="email"  /> <br/> <br/>
                    <label id ="phonelabel" for="phone"> Phone: </label>
                    <input type="text" name="phone"  /> <br/> <br/>
                    <label id ="userpasswordlabel" for="up"> UserPassword: </label>
                    <input type="text" name="up"  /> <br/> <br/>
                    <label id ="universitylabel" for="uni"> University: </label>
                    <input type="text" name="uni"  /> <br/> <br/>
                    <input id="button" type="submit" name="submit" />
            </fieldset> 
        </form>
        </div>
    </body>
</html>
