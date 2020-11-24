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
                $trashid = isset($_POST['tid']) ? $_POST['tid'] : '';

                $query =   "UPDATE TRASH 
                            SET TrashType = 'Recyclable'
                            WHERE TrashId =  '" . $trashid . "\r". "' ";
                echo $query;

                if ($conn->query($query)) {
                    echo "Updated Records successfully.";
                }

                else {
                    echo "Error:" . $query;
                }
            }
            $conn = null;
        ?>
        </div>
    </body>
</html>
