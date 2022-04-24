<?php 
//Step1
$db = mysqli_connect('localhost','root','','world')
or die('Error connecting to MySQL server.');
$query = "SELECT * FROM country order by Population desc";
    mysqli_query($db, $query) or die('Error querying database.');
    //Step3
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="table.css">
</head>
<body> 
	<table> 
	<tr> 
		<h1>Countries Population Records</h1>
		</tr> 
			  <th> ID </th> 
			  <th> Name </th> 
			  <th> Continent
          <select name = 'Continent'>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {
              ?>
              <option><?php echo $rows['Continent']; ?></option>
            <?php
            }
            ?>
          </select> </th> 
			  <th> Region <select name = 'Region'>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {
              ?>
              <option><?php echo $rows['Region']; ?></option>
            <?php
            }
            ?>
          </select> </th> 
        <th> Population </th> 
        <th> Capital </th> 
			  
		</tr> 
		
		<?php 
    //Step2
    $query = "SELECT * FROM country order by Population desc";
    mysqli_query($db, $query) or die('Error querying database.');
    //Step3
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    
   
    
    while($rows=mysqli_fetch_assoc($result)) 
    { 
      ?> 
      <tr> <td><?php echo $rows['Code']; ?></td> 
      <td><?php echo $rows['Name']; ?></td> 
      <td><?php echo $rows['Continent']; ?></td> 
      <td><?php echo $rows['Region']; ?></td> 
      <td><?php echo $rows['Population']; ?></td>
      <td><?php echo $rows['Capital']; ?></td>
        </tr> 
	<?php 
               } 
              
          ?> 
  

	</table> 
  <script src="tablesort.js"></script>
	</body> 
</html>