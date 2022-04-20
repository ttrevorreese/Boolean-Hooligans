<!DOCTYPE html>
<html lang = "en">
<head>
    <meta cahrset="UTF-8">
    <title>InfoWink.com</title>
    <link rel='stylesheet' href ="about us.css">
    
</head>


<body>

<?php 
$connect = mysqli_connect('localhost', 'root', 'root', 'sandbox');
$query="select * from city"; 
$result=mysql_query($query); 
?> 
    <table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Record Search for City</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> Name </th> 
              <th> CountryCode </th> 
              <th> District </th>
			  <th> Population </th> 
			  
		</tr> 
		
		<?php while($rows=mysql_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['ID']; ?></td> 
		<td><?php echo $rows['Name']; ?></td> 
        <td><?php echo $rows['CountryCode']; ?></td> 
        <td><?php echo $rows['District']; ?></td> 
		<td><?php echo $rows['Population']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 

</body>
