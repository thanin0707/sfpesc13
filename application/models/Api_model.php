<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {


public function api1insert($data)
{

    $this->db->insert('commands',$data);
    return true;
	

    //require('dbconnect(1).php');

    //$order=$_POST["order"];
    
    //$sql = "INSERT INTO `commands` (`id`,`user_id`, `owner`, `detail`, `status`, `status_out`) VALUES (NULL,'0', 'ESC_13', '$order', 'waiting','pending');";
    
    //if (mysqli_query($con, $sql)) {
        //echo "New record created successfully";
      //} else {
        //echo "Error: " . "<br>" . mysqli_error($con);
      //}
}

public function api1select()
{

    $query=$this->db->get("commands");
    return $query->result();
    //$query = $this->db->query("SELECT id, detail, status_out FROM `commands`");
    //return $query;
    

    // require('dbconnect(1).php');
    // $sql = "SELECT id, detail, status_out FROM `commands`" ;
    // $result = mysqli_query($conn,$sql);
    // while($row=mysqli_fetch_row($result)){
    //     echo "id = ".$row[0]."<br>";
    //     echo "detail = ".$row[1]."<br>";
    //     echo "status = ".$row[2]."<br>";
    //     echo "<hr>";
    // }


}


function api1showid(){
    $maxid = $this->db->select('MAX(id)')->get('commands')->row();
    $maxid_arr = (array)$maxid;
    if (isset($maxid_arr['MAX(id)'])) {
        $id_result = substr($maxid_arr['MAX(id)'], 0);
        return intval($id_result)+1;
    } else {
        return 1;
    }
    
}


public function api2_insert_status($json_data)
{
    // require('dbconnect(1).php');
    // $json_data=file_get_contents("php://input");
    $php_data = json_decode($json_data);

    $php_id = $php_data->id;
    $php_status = $php_data->status;
    // $sql= "UPDATE commands SET status_out = '$php_status'  WHERE id = '$php_id' ";
    $this->db->trans_start();
    $this->db->set('status', $php_status, FALSE);
    $this->db->where('id',$php_id);
    $this->db->update('commands');
    $this->db->trans_complete();

    if ($this->db->trans_status()==FALSE) {
        echo "Error: " . "<br>" . log_message('error','eeeee');
    } else {
        echo "New status updated successfully";
    }
    // if (mysqli_query($con, $sql)) {
    //     echo "New status updated successfully";
    // } else {
    //     echo "Error: " . "<br>" . mysqli_error($con);
    // }
}

public function api2select()
{

    $sql = $this->db->query("SELECT id, owner, pd1, pd2, pd3, pd4, status FROM commands WHERE status_out='waiting' ");
    
    foreach($sql->result() as $row){

        $sql2 = array("id"=>$row->id,
        // "user_id"=>$row->user_id,
        "owner"=>$row->owner,
        "detail"=>array($row->pd1, $row->pd2, $row->pd3, $row->pd4),
        "status"=>$row->status);

        $data = json_encode($sql2);
        
        echo $data;
    }    
}

// public function api2select_noob()
// {
//     require('connect(2).php');

//     $sql = "SELECT * FROM commands WHERE status='waiting' " ;
//     $statement = $conn->query($sql);
//     $statement->execute();
    
    
//     $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
//     if(count($result)) {
//         $response = array(
//             'status'=> true,
//             'response'=> $result
//         );
//         echo json_encode($response);
    
//     } else {
//         echo json_encode(array('status'=>false));
//     }
// }

public function api2_update()
{
    
	$query=$this->db->query("UPDATE commands SET status_out='done' WHERE status_out = 'waiting'");


}

}
// public function api2_update()
// {
//     require('dbconnect(1).php');

//     $sql= "UPDATE commands SET status = 'done'  WHERE status='waiting' ";

//     if (mysqli_query($con, $sql)) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . "<br>" . mysqli_error($con);
//     }
//     }

// 