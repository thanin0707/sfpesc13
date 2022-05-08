<?php
// if($fetch_data->numrows()>0){

//     foreach($fetch_data->result() as $row){
        
//         echo "id = ".$row->id."<br>";
//         echo "detail = ".$row->detail."<br>";
//         echo "status = ".$row->status."<br>";
//     }

// }else{

//     echo "No data";

// }
?>

<html>
<head>
<title>Display records</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
 
<body>
<table width="600" border="0" cellspacing="5" cellpadding="5">
<tr style="background:#CCC">
    <th>ID</th>
    <th>COMMAND</th>
    <th>STATUS</th>
  </tr>
  <?php
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->detail."</td>";
  echo "<td>".$row->status."</td>";
  echo "</tr>";
  }
   ?>
</table>
</body>
</html>