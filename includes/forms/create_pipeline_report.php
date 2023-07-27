<?php
if(isset($_POST['Submit'])){
    $applicant = $_POST['applicant'];
    $sector = $_POST['sector'];
    $repeatClient = $_POST['repeat_client'];
    $soughtLoan = $_POST['sought_loan'];
    $loanStatus = $_POST['loan_status'];
    $loanOfficer = $_POST['loan_officer'];

    // Set the URL of the REST API endpoint
    $url = "http://localhost:7878/api/utg/credit_application_pipeline/loans";

    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('Africa/Harare'));
    $DateAndTime = $Object->format("d-m-Y h:i:s a");
    $Date = $DateAndTime;

    $FourDigitRandomNumber = mt_rand(1111,9999);
    // Create a new LoansPipeline object
    $loansPipeline = new stdClass();
    $loansPipeline->intId = $FourDigitRandomNumber; // Set the values according to your requirements
    $loansPipeline->userId = $_SESSION['userId'];
    $loansPipeline->branchName = $_SESSION['branch'];
    $loansPipeline->dateRecorded = $Date;
    $loansPipeline->applicant =  $applicant;
    $loansPipeline->sector = $sector;
    $loansPipeline->repeatClient =  $repeatClient;
    $loansPipeline->soughtLoan = $soughtLoan;
    $loansPipeline->loanStatus = $loanStatus;

    $loanOfficer  = str_replace(' ', '_', $loanOfficer );
    $loansPipeline->loanOfficer =  $loanOfficer ;
    $jsonData = json_encode($loansPipeline);
    $ch = curl_init($url);

    // Set the HTTP request headers
    $headers = array(
        "Content-Type: application/json",
        "Content-Length: " . strlen($jsonData)
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    // Check for errors
    if ($response === false) {
        echo "Error: " . curl_error($ch);
    } else {
        header('location:branch_pipeline_report.php');
    }

    // Close cURL resource
    curl_close($ch);
}
?>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Loan Information</h4>
            <p class="mb-30">Loan Pipeline Record</p>
        </div>

    </div>
    <form action="" method="post" >
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Applicant</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="applicant" id="applicant" placeholder="Full Name" required/>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Sector</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="sector" id="sector" required>
                    <option value="">Select Sector</option>
                    <?php
                    $bsn_sector = bsn_sector();
                    foreach ($bsn_sector as $bsn) {
                        echo "<option value='$bsn[name]'>$bsn[name]</option>";
                    }
                    ?>

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Repeat</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="repeat_client" id="repeat_client" required>
                    <option value="Repeat">Repeat</option>
                    <option value="New">New</option>
                    <option value="Repeat">Repeat</option>

                </select>
            </div>
        </div>



        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Sought Loan (USD $)</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="number" name="sought_loan" id="sought_loan" placeholder="1000" required/>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Loan Status</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="loan_status" id="loan_status" required>
                    <option value="Prospect">Prospect</option>
                    <option value="Pending Disbursement">Pending Disbursement</option>
                    <option value="Assessment">Assessment</option>
                    <option value="Prospect">Prospect</option>
<!--                    <option value="Disbursed">Disbursed</option>-->
                </select>
            </div>
        </div>




        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Loan Officer</label>
            <div class="col-sm-12 col-md-10">
                <input
                        class="form-control"
                        type="text"
                        name="loan_officer"
                        id="loan_officer"
                        placeholder="Loan Officer"
                        required
                />
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label"></label>
            <div class="col-sm-12 col-md-10">
                <button type="submit" class="btn btn-danger" value="Submit" name="Submit">Submit</button>

            </div>

    </form>

</div>