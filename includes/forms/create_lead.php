
<?php

$errors = array();

// Escape user inputs for security
if(isset($_POST['Submit'])){
    $id=$_POST['id'];
    $clientname = $_POST['name'];
    $comments = $_POST['comments'];
    $business = $_POST['nature_of_business'];
    $businessAddress= $_POST['business_address'];
    $contact = $_POST['contact_number'];
    $email = $_POST['email'];
    $loan = $_POST['loan'];
    $branch = $_SESSION['branch'];

    $url = "http://localhost:7878/api/utg/marketLeads";
    $data_array = array(
        'campaignID' => $id,
        'loanOfficer'=> $_SESSION['userId'],
        'clientName'=> $clientname,
        'interactionComments' => $comments,
        'natureOfBusiness' => $business,
        'businessAddress' => $businessAddress,
        'contactNumber' => $contact,
        'contactEmail' => $email,
        'potentialLoanAmount' => $loan,
        'branchName' => $branch,
        'followUpStatus' => "ongoing",
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

    // Check HTTP status code
    if (!curl_errno($ch)) {
        switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
            case 201:  # OK redirect to dashboard
                ?>
                <script>$(function() {$("#myModal").modal();//if you want you can have a timeout to hide the window after x seconds});</script>
                <?php

                break;
                case 400:  # Bad Request
                    $decoded = json_decode($bodyStr);
                    foreach($decoded as $key => $val) {
                        //echo $key . ': ' . $val . '<br>';
                    }
                    // echo $val;
                    $_SESSION['error'] = "Failed. Please try again, ".$val;
                    header('location: view_lead.php');
                    break;

                case 401: # Unauthorixed - Bad credientials
                    $_SESSION['error'] = 'Application failed.. Please try again!';
                    header('location: view_lead.php');

                    break;
                default:
                    $_SESSION['error'] = 'Not able to send application'. "\n";
                    header('location: view_lead.php');
            }
        } else {
            $_SESSION['error'] = 'Application failed.. Please try again!'. "\n";
            header('location: view_lead.php');
        }
        curl_close($ch);
    }
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"
            role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h3 class="mb-20">Lead Succesfully Created!</h3>
                <div class="mb-30 text-center">
                    <img src="../vendors/images/success.png" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-0">
                        <a class="btn btn-danger btn-lg btn-block" href="view_lead.php">Ok</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <h4 class="text-blue h4">Create Lead</h4>
    </div>

    <form action="" method="POST">
        <section>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Client Name :</label>
                        <input type="text" class="form-control" name="name" id="name" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Select City :</label>
                        <select class="custom-select2 form-control" name="city" id="city" >
                            <option value="">Select City</option>
                            <?php
                                $cities = cities();
                                foreach ($cities as $city) {
                                    echo "<option value='$city[name]'>$city[name]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nature of Business :</label>
                        <input type="text" class="form-control" name="nature_of_business" id="nature_of_business"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Business Address :</label>
                        <input type="text" class="form-control" name="business_address" id="business_address" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Contact Number :</label>
                        <input type="text" class="form-control" name="contact_number" id="contact_number" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Contact Email <i class="far fa-sort-amount-up"></i> :</label>
                        <input type="email" class="form-control" name="email" id="email" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Potential Loan Amount :</label>
                        <input type="text" class="form-control" name="loan" id="loan"  />
                    </div>
                </div>
<!--                <div class="col-md-6">-->
<!--                    <div class="form-group">-->
<!--                        <label>Branch Name</label>-->
<!--                        <select class="custom-select form-control"name="branch" id="branch" required>-->
<!--                            <option value="">Select Branch</option>-->
<!--                            --><?php //$branches = branches();foreach ($branches as $branch) {echo "<option value='$branch[branchName]'>$branch[branchName] Branch</option>";} ?>
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->

            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php $id = isset($_GET['id']) ? $_GET['id'] : null; echo $id;?>" />
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Interaction Comments :</label>
                        <textarea class="form-control" name="comments" id="comments" ></textarea>
                    </div>
                </div>
            </div>

        </section>

        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <button type="submit" class="btn btn-danger" value="Submit" name="Submit">Submit</button>
            </div>
        </div>


    </form>
</div>
