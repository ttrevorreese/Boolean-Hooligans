<?php 
//Step1
$db = mysqli_connect('localhost','root','','world')
or die('Error connecting to MySQL server.');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4" align="center" border="1px" style="width:600px; line-height:40px;"><h2align="center" border="1px" style="width:600px; line-height:40px;">
    Population Records</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> Name </th> 
			  <th> Continent </th> 
			  <th> Region </th> 
              <th> Population </th> 
              <th> Capital </th> 
			  
		</tr> 
		
		<?php 
    //Step2
    $query = "SELECT * FROM country";
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
	</body> 
</html>