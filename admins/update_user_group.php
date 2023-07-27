<?php 


function updateUserGroup($id, $creditCommitGroup){

  $url = "http://localhost:7878/api/utg/users/updateUserGroup/".$id;

  $data_array = array(
     'creditCommitGroup' => $creditCommitGroup
         
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

          $_SESSION['info'] = "User group updated successfully";


          header('location: user_details.php?id='.$id);
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
      header('location: view-details.php?id='.$id);
      }
  } else {
      $_SESSION['error'] = 'Update Status failed.. Please try again!'. "\n";
      header('location: view-details.php?id='.$id);
      
  }
  curl_close($ch);
}



if(isset($_POST['update'])) {
  $id = $_POST['userid'];
  $creditCommitGroup =  $_POST['creditCommitGroup'];
  updateUserGroup($id, $creditCommitGroup);
}



?>


