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
                $t2 = $trashid. '\r';

                $query =   "SELECT EP.EnergyPlantId, EP.PlantName, EP.PlantAddress, EP.PlantPhone 
                            FROM ENERGYPLANT AS EP ,ENERGYTRASH AS ET
                            WHERE ET.EnergyPlantId = EP.EnergyPlantId AND ET.TrashId = '$t2'";

                $result = $conn->query($query);
                if ($result) {
                    foreach($result as $row) {
                        echo "EnergyPlantId: ". "\t" . $row['EnergyPlantId']; echo '</br>';
                        echo "PlantName:". "\t" . $row['PlantName']; echo '</br>';
                        echo "PlantAddress: ". "\t" . $row['PlantAddress']; echo '</br>';
                        echo "PlantPhone: ". "\t" . $row['PlantPhone']; echo '</br></br>';
                    }
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
