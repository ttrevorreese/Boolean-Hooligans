<?php 
include_once('Connection.php'); 
$query="select * from countrylanguage"; 
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
              <th> CountryCode </th> 
              <th> Language </th>
			  <th> IsOfficial </th> 
              <th> Percentage </th> 
			  
		</tr> 
		
		<?php while($rows=mysql_fetch_assoc($result)) 
		{ 
		?> 
        <td><?php echo $rows['CountryCode']; ?></td> 
        <td><?php echo $rows['Language']; ?></td> 
		<td><?php echo $rows['IsOfficial']; ?></td> 
		<td><?php echo $rows['Percentage']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>