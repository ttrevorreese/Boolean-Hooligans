<?php 
//Step1
$db = mysqli_connect('localhost','root','','world')
or die('Error connecting to MySQL server.');
$query = "SELECT * FROM city Order By Population desc";
    mysqli_query($db, $query) or die('Error querying database.');
    //Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
   
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datatable with mysql</title>
<link rel="stylesheet" id="font-awesome-style-css" href="http://phpflow.com/code/css/bootstrap3.min.css" type="text/css" media="all">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
	 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>

	
	<div class="container">
      <div class="">
        <h1>Data Table</h1>
        <div class="">
		<table id="employee_grid" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th> ID </th> 
            <th> Name </th> 
            <th> CountryCode </th> 
            <th>District<select name = "District" id="District" class="form-control">
            <option value="">District</option>
            <?php 
            while($row = mysqli_fetch_array($result))
            {
            echo '<option value="'.$row["District"].'">'.$row["District"].'</option>';
            }
            ?>
            </select></th>
            <th> Population </th>
            </tr>
        </thead>
 
        <?php 
    
    //Step2
    $query = "SELECT * FROM city order by Population desc";
    mysqli_query($db, $query) or die('Error querying database.');
    //Step3
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    
    while($rows=mysqli_fetch_assoc($result)) 
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
    </div>
      </div>

    </div>

<script type="text/javascript">
$( document ).ready(function() {
$('#employee_grid').DataTable({
				 "bProcessing": true,
                "serverSide": true,
                 "ajax":{
                url :"model.php", // json datasource
                type: "post",  // type of method  ,GET/POST/DELETE
                error: function(){
                $("#employee_grid_processing").css("display","none");
            }
          }
        });   
});
</script>