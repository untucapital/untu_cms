<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<?php 


$errors = array();

?>

<?php

function curlloanreg($id,$firstname,$lastname,$nationalid,$dateOfBirth,$gender,$phoneNumber,$homeAddress,$businessSector,$loanAmount,$loanProduct,$creditRating,$branch,$origin){
   

    $url = "http://localhost:7878/api/utg/credit_application_client_datasets/update/$id";

    
    $data_array = array(
        
        
        'firstName'=> $firstname,
        'lastName'=> $lastname,
        'nationalId' => $nationalid,
        'dateOfBirth' => $dateOfBirth,
        'gender' => $gender,
        'phoneNumber' => $phoneNumber,
        'homeAddress' => $homeAddress,
        'businessSector' => $businessSector,
        'loanAmount' => $loanAmount,
        'loanProduct' => $loanProduct,
        'creditRating' => $creditRating,
        'branch' => $branch,
        'origin' => $origin,



        
   

        

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


    // Check HTTP status code
    if (!curl_errno($ch)) {
        // $_SESSION['info'] = "";
        // $_SESSION['error'] = "";
        switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
        case 200:  # OK redirect to dashboard
                               
        ?>        <script>
        $(function() {
        $("#myModal").modal();//if you want you can have a timeout to hide the window after x seconds
        });
        </script>
        <?php  

        break;
        case 400:  # Bad Request
            $decoded = json_decode($bodyStr);
            foreach($decoded as $key => $val) {
            //echo $key . ': ' . $val . '<br>';
         }
            // echo $val;
            $_SESSION['error'] = "Failed. Please try again, ".$val;
            header('location: clients_dataset.php');
        break;

        case 401: # Unauthorixed - Bad credientials
            $_SESSION['error'] = 'Application failed.. Please try again!';
            header('location: clients_dataset.php');
            
        break;
        default:
        $_SESSION['error'] = 'Not able to send application'. "\n";
        header('location: clients_dataset.php');
        }
    } else {
        $_SESSION['error'] = 'Application failed.. Please try again!'. "\n";
        header('location: clients_dataset.php');
        
    }
    curl_close($ch);
}

// Escape user inputs for security
if(isset($_POST['Submit'])){
    $id=$_POST['id'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $nationalid = $_POST['national_id'];
    $dateOfBirth= $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $phoneNumber = $_POST['phone_number'];
    $homeAddress = $_POST['home_address'];
    $businessSector = $_POST['business_sector'];
    $loanAmount = $_POST['loan_amount'];
    $loanProduct = $_POST['loan_product'];
    $creditRating = $_POST['credit_rating'];
    $branch = $_POST['branch'];
    $origin = $_POST['origin'];



 

    curlloanreg($id,$firstname,$lastname,$nationalid,$dateOfBirth,$gender,$phoneNumber,$homeAddress,$businessSector,$loanAmount,$loanProduct,$creditRating,$branch,$origin);

    // require_once '../dbconnect.php';
    // $decoded = json_decode($resp, true);
            
    // $_SESSION['userId'] = $decoded['id'];
    // $_SESSION['email'] = $decoded['contactDetail']['emailAddress'];
    // $_SESSION['username'] = $decoded['username'];
    // $_SESSION['mobile'] = $decoded['contactDetail']['mobileNumber'];
    // $_SESSION['role'] = $decoded['roles'][0]['name']; 
    // $_SESSION['fullname'] =  $decoded['firstName'] ." ". $decoded['lastName'];
    // $_SESSION['branch'] = $decoded['branch'];
  
  
    // $activity = " Successfully apllied for a loan" ;
    // $ip =  $_SERVER['REMOTE_ADDR'];
    // $device= $_SERVER['HTTP_USER_AGENT'];
  
    
    // $time_logged =date('Y-m-d H:i:s');
    // $stmt=$conn->prepare('insert into activity(time_logged,user_id,activity,name,ip,device,role,branch)VALUES(?,?,?,?,?,?,?,?)');
    // $stmt->bindparam(1,$time_logged);
    // $stmt->bindparam(2,$_SESSION['userId']);
    // $stmt->bindparam(3,$activity);
    // $stmt->bindparam(4,$_SESSION['fullname']);
    // $stmt->bindparam(5,$ip);
    // $stmt->bindparam(6,$device);
    // $stmt->bindparam(7,$_SESSION['role']);
    // $stmt->bindparam(8,$_SESSION['branch']);
    
    // $stmt->execute();
     } 






   
     
?>

						
<div
									class="modal fade"
									id="myModal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="exampleModalCenterTitle"
									aria-hidden="true"
								>
									<div
										class="modal-dialog modal-dialog-centered"
										role="document"
									>
										<div class="modal-content">
											<div class="modal-body text-center font-18">
												<h3 class="mb-20">Record Succesfully Edited!</h3>
												<div class="mb-30 text-center">
													<img src="../vendors/images/success.png" />
												</div>
												
											</div>
                                            <div class="row">
														<div class="col-sm-6">
                                                        </div>
                                                        <div class="col-sm-4">
											<div class="input-group mb-0">
																<!--
																use code for form submit
																<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
															-->
																<a class="btn btn-danger btn-lg btn-block" href="clients_dataset.php">Ok</a>
															</div>
                                                            </div>
                                                            </div>

											
										</div>
									</div>
								</div>
						
           
           
<!-- div.row>.col-3>.class*3 -->

