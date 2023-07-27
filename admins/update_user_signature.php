<?php 
  include ('../session.php'); 
  if($_SESSION['role'] <> 'ROLE_ADMIN'){
    header('Location: ../logout-user.php');
  }

  $resp = "";  
  if (isset($_POST['upload'])) {
      
    if(isset($_FILES['file']['name'])){
	    $uploadfile = '../../uploads/signatures/'.basename($_FILES['file']['name']);
      $userId = $_POST['userId'];
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $branch = $_POST['branch'];
      $role = $_POST['role'];



      $temp = explode(".", $_FILES["file"]["name"]);
      $newfilename = basename($_FILES['file']['name']).date('Y.m.d').'.'.round(microtime(true)). '.' . end($temp) ;      
      if(move_uploaded_file($_FILES["file"]["tmp_name"], "../../uploads/signatures/" . $newfilename)){
          $url = "http://localhost:7878/api/utg/signatures/add";
        $data_array = array(
        'fileName' => $newfilename,
        'userId' => $userId,
        'firstName' => $firstName,
        'lastName' => $lastName,
        'branch' => $branch,
        'role' => $role
                        
        );

        $data = json_encode($data_array);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true );
        $resp = curl_exec($ch);

        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headerStr = substr($resp, 0, $headerSize);
        $bodyStr = substr($resp, $headerSize);

    // convert headers to array
    $headers = headersToArray( $headerStr );

    if (!curl_errno($ch)) {
      switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
      case 200:  # OK redirect to dashboard

          $_SESSION['info'] = "Signature uploaded successfully";

          
          require_once '../dbconnect.php';
          include ('../session.php'); 
          $decoded = json_decode($resp, true);
                  
          $_SESSION['userId'] = $decoded['id'];
          $_SESSION['email'] = $decoded['contactDetail']['emailAddress'];
          $_SESSION['username'] = $decoded['username'];
          $_SESSION['mobile'] = $decoded['contactDetail']['mobileNumber'];
          $_SESSION['role'] = $decoded['roles'][0]['name']; 
          $_SESSION['fullname'] =  $decoded['firstName'] ." ". $decoded['lastName'];
          $_SESSION['branch'] = $decoded['branch'];

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/users/$id");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $server_response = curl_exec($ch);
          curl_close($ch);
        
          $data = json_decode($server_response, true);

          
        
        
          $activity =" Uploaded signature of  $firstName  $lastName named ". $newfilename;
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
                   




          header('location: user_details.php?id='.$userId);
      break;
      case 400:  # Bad Request
          $decoded = json_decode($bodyStr);
          foreach($decoded as $key => $val) {
          echo $key . ': ' . $val . '<br>';
       }
           echo $val;
          $_SESSION['error'] = "Failed. Please try again, ".$val;
          header('location: user_details.php?id='.$userId);
      break;

      case 401: # Unauthorixed - Bad credientials
          $_SESSION['error'] = 'Update Status failed';
          header('location: user_details.php?id='.$userId);
          
      break;
      default:
      $_SESSION['error'] = 'Could not upload '. "\n";
      header('location: user_details.php?id='.$userId);
      }
  } else {
      $_SESSION['error'] = 'Update Status failed.. Please try again!'. "\n";
      header('location: user_details.php?id='.$userId);
      
  }
  curl_close($ch);
}

        curl_close($ch);

        }     
    }


?>

