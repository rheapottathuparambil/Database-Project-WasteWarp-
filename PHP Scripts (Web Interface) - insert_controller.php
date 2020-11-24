<!--
    Pranav Bhandari
    Rhea Pottathuparambil
    Ruta Vagasia
    Imtiaz Khalid
    Nihar Gupte
-->

<html>
    <body>
        <div align="center">
        <?php 
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "wastewarp";
            //create connection
            $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);
            //check connection
            if(!$conn) {
                die("Connection Failed!");
            }
            else {
                $username = isset($_POST['un']) ? $_POST['un'] : '';
                $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
                $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                $userpassword = isset($_POST['up']) ? $_POST['up'] : '';
                $university = isset($_POST['uni']) ? $_POST['uni'] : '';

                $query =    "INSERT INTO WUSER
                             VALUES ('$username','$fname','$lname','$email','$phone','$userpassword')";
                $query1 =    "INSERT INTO STUDENT
                             VALUES ('$username','$university')";
                $query2 =   "INSERT INTO COLLECTOR
                             VALUES ('$username', 0)";
                
                if($conn->query($query)) 
                {
                   if($conn->query($query2))
                   {
                        $conn->query($query1);    
                    
                        echo "New record inserted successfully.";
                   }
                   else {
                        echo "Inserted in Student only.";
                   }
                }
                else {
                    echo "Error:" . $query . " " ;
                }
            }
            $conn = null;
        ?>
        </div>
    </body>
</html>
