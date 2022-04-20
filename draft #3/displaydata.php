
<!doctype html>
<html>
    <head>
        <title>PHP amd MySQL</title>
    </head>
    <body>

        <h1>PHP and MySQL</h1>

        <?php

use LDAP\Result;

        $connect = mysqli_connect('localhost', 'root', '', 'world');


        // Create a query
        $query = 'SELECT * FROM city';
            

        // Execute the query
        $result = $connect->query($query);

        // If there is no result, display an error message
        if ($result->num_rows > 0){
            while($rows = $result-> fetch_assoc()){
                echo "<tr><td>" . $row["ID"] . "</td><td>". $row["ID"] . "</td><td>". $row["Name"] . "</td><td>". $row["CountryCode"] . "</td><td>". $row["District"] . "</td><td>". $row["Population"] . "</td><td>";

            }
        
        }
        else{
            echo "No Result";
        }
       
        $connect->close();
        ?>


    </body>
</html>