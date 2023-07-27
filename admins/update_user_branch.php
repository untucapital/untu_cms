<?php 


function updateUserBranch($id, $update_user_branch){

  $url = "http://localhost:7878/api/utg/users/updateUserBranch/".$id;

  $data_array = array(
     'branch' => $update_user_branch
         
  );



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

          $_SESSION['info'] = "User branch updated successfully";

        

                           
         
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


          header('location: view-details.php?id='.$id);
      break;
      case 400:  # Bad Request
          $decoded = json_decode($bodyStr);
          foreach($decoded as $key => $val) {
          echo $key . ': ' . $val . '<br>';
       }
           echo $val;
          $_SESSION['error'] = "Failed. Please try again, ".$val;
          header('location: view-details.php?id='.$id);
      break;

      case 401: # Unauthorixed - Bad credientials
          $_SESSION['error'] = 'Update Status failed';
          header('location: view-details.php?id='.$id);
          
      break;
      default:
      $_SESSION['error'] = 'Could not update user branch '. "\n";
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
  $update_user_branch =  $_POST['update_user_branch'];

    updateUserBranch($id, $update_user_branch);
}

if(isset($_POST['deleteBranch'])) {
  // $assignTo = mysqli_real_escape_string($con, $_POST['assignTo']);
  $id = $_POST['id'];

  $urlDelete = "http://localhost:7878/api/utg/branches/deleteBranch/".$id;


  $ch = curl_init($urlDelete);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); // curl_setopt($ch, CURLOPT_PUT, true); - for PUT
  //curl_setopt($ch, CURLOPT_POSTFIELDS, 'some_data');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);  // DO NOT RETURN HTTP HEADERS
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // RETURN THE CONTENTS OF THE CALL
  $result = curl_exec($ch);

  header('location: add_branches.php');
  alert("Deleted Successfully");

 
}


?>


