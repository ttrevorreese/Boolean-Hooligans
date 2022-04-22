<?php
//Step1
 $db = mysqli_connect('127.0.0.1','root','','world')
 or die('Error connecting to MySQL server.');
?>

<html>
    <head>

    </head>
    <body>
        <h1>PHP connect to MySQL</h1>
        <?php
        //Step2
        $query = "SELECT * FROM city";
        mysqli_query($db, $query) or die('Error querying database.');
        //Step3
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);

        while ($row = mysqli_fetch_array($result)) {
        echo $row['ID'] . ' ' . $row['Name'] . ': ' . $row['CountryCode'] . ' ' . $row['District']. ' ' . $row['Population'] .'<br />';
        }
        ?>

    </body>
</html>
