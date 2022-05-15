<div class= "container">
    <div class = container >
        <iframe width="560" height="315" src="https://www.youtube.com/embed/bZkXoFFGN-Y"></iframe>
    </div>
    <form method="POST" action="<?= base_url() ?>Product">
    <div class ="row">  
    <div class = "col-3">
        
            <input type="radio" id="red" name="pd1" value="R">
            <label for="html">RED</label><br>
            <input type="radio" id="green" name="pd1" value="G">
            <label for="css">GREEN</label><br>
            <input type="radio" id="blue" name="pd1" value="B">
            <label for="javascript">BLUE</label><br>
            <input type="radio" id="yellow" name="pd1" value="Y">
            <label for="javascript">YELLOW</label>
    
    </div>
    <div class = "col-3">
        
            <input type="radio" id="red" name="pd2" value="R">
            <label for="html">RED</label><br>
            <input type="radio" id="green" name="pd2" value="G">
            <label for="css">GREEN</label><br>
            <input type="radio" id="blue" name="pd2" value="B">
            <label for="javascript">BLUE</label><br>
            <input type="radio" id="yellow" name="pd2" value="Y">
            <label for="javascript">YELLOW</label>
    
    </div>
    <div class = "col-3">
        
            <input type="radio" id="red" name="pd3" value="R">
            <label for="html">RED</label><br>
            <input type="radio" id="green" name="pd3" value="G">
            <label for="css">GREEN</label><br>
            <input type="radio" id="blue" name="pd3" value="B">
            <label for="javascript">BLUE</label><br>
            <input type="radio" id="yellow" name="pd3" value="Y">
            <label for="javascript">YELLOW</label>
    
    </div>
    <div class = "col-3">
        
            <input type="radio" id="red" name="pd4" value="R">
            <label for="html">RED</label><br>
            <input type="radio" id="green" name="pd4" value="G">
            <label for="css">GREEN</label><br>
            <input type="radio" id="blue" name="pd4" value="B">
            <label for="javascript">BLUE</label><br>
            <input type="radio" id="yellow" name="pd4" value="Y">
            <label for="javascript">YELLOW</label>
    
    </div>

    </div>
    <div>
        <input type="submit" name="save" class="form-control btn btn-primary rounded submit px-3">
   
    </div>
    </form>

</div>



<html>
<head>
<title>Display records</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
}
table{
  margin-bottom : 20px;
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
  if(!is_null($data))
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->pd1, $row->pd2, $row->pd3, $row->pd4."</td>";
  echo "<td>".$row->status."</td>";
  echo "</tr>";
  }

   ?>
</table>
</body>
</html>

