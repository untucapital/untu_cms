<?php 
 

  

// $loanId = $_GET["id"];


function updateUserRole($id, $update_user_role){

  $url = "http://localhost:7878/api/utg/users/updateUserRole/".$id;

  $data_array = array(
     "roles" => array (
       array(
      "id" => $update_user_role
      

     )  

     )
  );

  // 'order_items'=> array (
  //   array( // one order item
  //       'name'=>"Dale Blaney 2016 Design",
  //       'quantity'=>"1",
  //       'code'=>"1081389-GSS-FB-2XL-BK",
  //       'variation_list'=> array (
  //           'size'=>"2XL",
  //           'color'=>"Black", 
  //           'style'=>"5000"
  //       ),

  $data = json_encode($data_array);

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HEADER, true);

  $resp = curl_exec($ch);

    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $headerStr = substr($resp, 0, $headerSize);
    $bodyStr = substr($resp, $headerSize);

    // convert headers to array
    // $headers = headersToArray( $headerStr );

    if (!curl_errno($ch)) {
      switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
      case 200:  # OK redirect to dashboard

          $_SESSION['info'] = "Status updated successfully";

          header('location: view-details.php?id='.$id);


          include ('../session.php');
          require_once '../dbconnect.php';
          //require ('user_datails.php');
          $decoded = json_decode($resp, true);
                  
          $_SESSION['userId'] = $decoded['id'];
          $_SESSION['email'] = $decoded['contactDetail']['emailAddress'];
          $_SESSION['username'] = $decoded['username'];
          $_SESSION['mobile'] = $decoded['contactDetail']['mobileNumber'];
          $_SESSION['role'] = $decoded['roles'][0]['name']; 
          $_SESSION['fullname'] =  $decoded['firstName'] ." ". $decoded['lastName'];
          $_SESSION['branch'] = $decoded['branch'];
        
          // Get user name using user id
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/users/$id");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $server_response = curl_exec($ch);
          curl_close($ch);
          $data = json_decode($server_response, true);

          // GET ROLE NAME USING ROLE ID
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/roles/$update_user_role");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $server_response = curl_exec($ch);
          curl_close($ch);
          $role_name = json_decode($server_response, true);
        
        
          $activity = " Successfully Updated User role of ".$data['firstName']." ".$data['lastName']." to ". $role_name['name'];
          $ip =  $_SERVER['REMOTE_ADDR'];
          $device= $_SERVER['HTTP_USER_AGENT'];
        
          
          $time_logged =date('Y-m-d H:i:s');
          $stmt=$conn->prepare('insert into activity(time_logged,user_id,activity,name,ip,device,role,branch)VALUES(?,?,?,?,?,?,?,?)');
          $stmt->bindparam(1,$time_logged);
          $stmt->bindparam(2,$_SESSION['userId']);
          $stmt->bindparam(3,$activity);
          $stmt->bindparam(4,$_SESSION['fullname']);
          $stmt->bindparam(5,$ip);
          $stmt->bindparam(6,$device);
          $stmt->bindparam(7,$_SESSION['role']);
          $stmt->bindparam(8,$_SESSION['branch']);
          
          $stmt->execute();    



      break;
      case 400:  # Bad Request
          $decoded = json_decode($bodyStr);
          foreach($decoded as $key => $val) {
          echo $key . ': ' . $val . '<br>';
       }
           echo $val;
          $_SESSION['error'] = "Failed. Please try again, ".$val;
          header('location: user_details.php?userid='.$id);
      break;

      case 401: # Unauthorixed - Bad credientials
          $_SESSION['error'] = 'Update Status failed';
          header('location: user_details.php?userid='.$id);
          
      break;
      default:
      $_SESSION['error'] = 'Could not update  User Role '. "\n";
      header('location: user_details.php?userid='.$id);
      }
  } else {
      $_SESSION['error'] = 'Update Status failed.. Please try again!'. "\n";
      header('location: user_details.php?userid='.$id);
      
  }
  curl_close($ch);


}





if(isset($_POST['update'])) {
  // $assignTo = mysqli_real_escape_string($con, $_POST['assignTo']);
  $id = $_POST['userid'];
  $update_user_role =  $_POST['update_user_role'];
  //$name = $_POST['firstname'];

  //  echo $loanId;

  updateUserRole($id, $update_user_role);

//   include ('../session.php');
//   require_once '../dbconnect.php';
//   //require ('user_datails.php');
//   $decoded = json_decode($resp, true);
          
//   $_SESSION['userId'] = $decoded['id'];
//   $_SESSION['email'] = $decoded['contactDetail']['emailAddress'];
//   $_SESSION['username'] = $decoded['username'];
//   $_SESSION['mobile'] = $decoded['contactDetail']['mobileNumber'];
//   $_SESSION['role'] = $decoded['roles'][0]['name']; 
//   $_SESSION['fullname'] =  $decoded['firstName'] ." ". $decoded['lastName'];
//   $_SESSION['branch'] = $decoded['branch'];


//   $activity = " Successfully Updated User role of   to  " ;
//   $ip =  $_SERVER['REMOTE_ADDR'];
//   $device= $_SERVER['HTTP_USER_AGENT'];

  
//   $time_logged =date('Y-m-d H:i:s');
//   $stmt=$conn->prepare('insert into activity(time_logged,user_id,activity,name,ip,device,role,branch)VALUES(?,?,?,?,?,?,?,?)');
//   $stmt->bindparam(1,$time_logged);
//   $stmt->bindparam(2,$_SESSION['userId']);
//   $stmt->bindparam(3,$activity);
//   $stmt->bindparam(4,$_SESSION['fullname']);
//   $stmt->bindparam(5,$ip);
//   $stmt->bindparam(6,$device);
//   $stmt->bindparam(7,$_SESSION['role']);
//   $stmt->bindparam(8,$_SESSION['branch']);
  
//   $stmt->execute();    
 }

if(isset($_POST['delete'])) {

        $id = $_POST['userid'];

        $urlDelete = "http://localhost:7878/api/utg/users/deleteUser/".$id;

        $ch = curl_init($urlDelete);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); // curl_setopt($ch, CURLOPT_PUT, true); - for PUT
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'some_data');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);  // DO NOT RETURN HTTP HEADERS
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // RETURN THE CONTENTS OF THE CALL
        $result = curl_exec($ch);

        header('location: tables.php');
        alert("Deleted Successfully");

        

}

?>
