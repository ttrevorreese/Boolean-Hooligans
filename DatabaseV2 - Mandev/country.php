<?php 
include_once('Connection.php'); 
$query="select * from country"; 
$result=mysql_query($query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> City </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Record Search for City</h2></th> 
		</tr> 
			  <th> Code </th> 
			  <th> Name </th> 
              <th> Continent </th> 
              <th> Region </th>
              <th> SurfaceArea </th> 
              <th> IndepYear </th> 
              <th> Population</th> 
              <th> LifeExpectancy </th> 
              <th> GNP </th> 
              <th> GNPOld </th> 
              <th> LocalName </th> 
              <th> GovernmentForm </th> 
              <th> HeadOfState </th> 
              <th> Capital </th> 
              <th> Code2 </th> 
			  
		</tr> 
		
		<?php while($rows=mysql_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Code']; ?></td> 
		<td><?php echo $rows['Name']; ?></td> 
        <td><?php echo $rows['Continent']; ?></td> 
        <td><?php echo $rows['Region']; ?></td> 
		<td><?php echo $rows['SurfaceArea']; ?></td> 
        <td><?php echo $rows['IndepYear']; ?></td> 
        <td><?php echo $rows['Population']; ?></td> 
        <td><?php echo $rows['LifeExpectancy']; ?></td> 
        <td><?php echo $rows['GNP']; ?></td> 
        <td><?php echo $rows['GNPOld']; ?></td> 
        <td><?php echo $rows['LocalName']; ?></td> 
        <td><?php echo $rows['GovernmentForm']; ?></td> 
        <td><?php echo $rows['HeadOfState']; ?></td> 
        <td><?php echo $rows['Capital']; ?></td> 
        <td><?php echo $rows['Code2']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>