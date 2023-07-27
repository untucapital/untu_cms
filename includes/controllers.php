<?php

error_reporting(0);

$audit = "";
$cc_level = 'bcc_final';
$schedule_meeting = '';


if ($_SESSION['role'] == "ROLE_OP"){
    $cc_level = 'mcc_final';
    $schedule_meeting = '';
}

$utgAddress = "http://localhost:7878/api/utg/";
    $id = $_GET["loan_id"];
    $userId = $_GET['userid'];

    // CONVERT MUSONI DATES
    function formatJsonDate($jsonDate) {
		$dateArray = json_decode($jsonDate);
		$year = $dateArray[0];
		$month = $dateArray[1];
		$day = $dateArray[2];
		return sprintf("%02d-%02d-%04d", $day, $month, $year);
	}

    // CONVERT CMS DATES
    function convertDateFormat($dateString) {
        $dateTime = new DateTime($dateString);
        return $dateTime->format('d-M-Y');
    }

// ######################  Get RECENT DISBURSEMENTS from MUSONI #################################

function audit($userid, $activity, $branch) {
    $data_array = array(
        'userid'=> $userid,
        'branch'=> $branch,
        'role'=> $_SESSION['role'],
        'activity'=> $activity,
        'deviceInfo'=> $_SERVER['HTTP_USER_AGENT'],
        'ipAddress'=> $_SERVER['REMOTE_ADDR']
    );
    $data = json_encode($data_array);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/access_logs");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true );
    $resp = curl_exec($ch);
    curl_close($ch);

//    return "Log recorded successfully";
}

// ######################  Get RECENT DISBURSEMENTS from MUSONI #################################
    function disbursements(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/musoni/getLoansByDisbursementDate/2023-07-01/2023-07-30');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $disbursements_response = curl_exec($ch);
        curl_close($ch);
        $disbursements_data = json_decode($disbursements_response, true);

        if ($disbursements_data !== null) {
            $disbursements = $disbursements_data['disbursedLoans'];
            return $disbursements;
        } else {
            echo "Error decoding JSON data";
        }
    }
	

// ######################  Get LOAN APPLICATIONS from CMS #################################

    function loans($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/credit_application'.$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $loans_response = curl_exec($ch);
        curl_close($ch);
        $loans = json_decode($loans_response, true);
        return $loans;
    }

// ######################  APPLY FOR A LOAN APPLICATIONS - CMS #################################

if(isset($_POST['loan_application'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $id_number = $_POST['id_number'];
    $marital = $_POST['marital'];
    $gender = $_POST['gender'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $phonenumber = $_POST['phonenumber'];
    $pob = $_POST['pob'];
    $industry_code = $_POST['industry_code'];
    $street_no = $_POST['street_no'];
    $street_name = $_POST['street_name'];
    $surbub = $_POST['surbub'];
    $city = $_POST['city'];
    $loan = $_POST['loan'];
    $tenure = $_POST['tenure'];
    $businessName = $_POST['businessName'];
//    $businessAddress = $_POST['businessAddress'];
    $businessStartDate = date('Y-m-d', strtotime($_POST['businessStartDate']));
    $branchName = $_POST['branchName'];

    $next_of_kin_name = $_POST['next_of_kin_name'];
    $next_of_kin_phone = $_POST['next_of_kin_phone'];
    $next_of_kin_relationship = $_POST['next_of_kin_relationship'];
    $next_of_kin_address = $_POST['next_of_kin_address'];

    $next_of_kin_name2 = $_POST['next_of_kin_name2'];
    $next_of_kin_phone2 = $_POST['next_of_kin_phone2'];
    $next_of_kin_relationship2 = $_POST['next_of_kin_relationship2'];
    $next_of_kin_address2 = $_POST['next_of_kin_address2'];

    $loan_status = "PENDING";
    $loanFileId = uniqid('4587');
    $process_loan_status = "uncomplete";
    $assignTo = "Unassigned";
    $bocoSignature = "Unsigned";
    $bmSignature = "Unsigned";
    $caSignature = "Unsigned";
    $cmSignature = "Unsigned";
    $finSignature = "Unsigned";
    $pipelineStatus = "client_application" ;

    $url = "http://127.0.0.1:7878/api/utg/credit_application";
    $data_array = array(

        'firstName' => $firstname,
        'middleName'=> $middlename,
        'lastName' => $lastname,
        'idNumber' => $id_number,
        'maritalStatus' => $marital,
        'gender' => $gender,
        'dateOfBirth' => $dob,
        'phoneNumber' => $phonenumber,
        'placeOfBusiness' => $pob,
        'industryCode' => $industry_code,
        'streetNo' => $street_no,
        'streetName' => $street_name,
        'suburb' => $surbub,
        'city' => $city,
        'loanAmount' => $loan,
        'tenure' => $tenure,
        'businessName' => $businessName,
//        'businessAddress' => $businessAddress,
        'businessStartDate' => $businessStartDate,
        'branchName' => $branchName,

        'nextOfKinName' => $next_of_kin_name,
        'nextOfKinPhone' => $next_of_kin_phone,
        'nextOfKinRelationship' => $next_of_kin_relationship,
        'nextOfKinAddress' => $next_of_kin_address,
        'nextOfKinName2' => $next_of_kin_name2,
        'nextOfKinPhone2' => $next_of_kin_phone2,
        'nextOfKinRelationship2' => $next_of_kin_relationship2,
        'nextOfKinAddress2' => $next_of_kin_address2,

//        'dateCreated' => $date_created,
        'userId' => $_SESSION['userId'],
        'loanStatus' => $loan_status,
        'loanFileId' => $loanFileId,
        'process_loan_status' => $process_loan_status,
        'assignTo' => $assignTo,
        'bocoSignature' => $bocoSignature,
        'bmSignature' => $bmSignature,
        'caSignature' => $caSignature,
        'cmSignature' => $cmSignature,
        'finSignature' => $finSignature,
        'pipelineStatus' => $pipelineStatus

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
                audits($_SESSION['userid'], "Client Loan Application successful", $_SESSION['branch']);
                $data = loans('/loanFileId/'.$loanFileId);
                $loanId = $data["id"];

                echo "<script>alert('Application sent successfully. You can now upload the required documents.');</script>";
                echo "<script>window.location.href = 'kyc_documents.php';</script>";
                break;
            case 400:  # Bad Request
                $decoded = json_decode($bodyStr);
                foreach($decoded as $key => $val) {
                }
                $_SESSION['error'] = "Failed. Please try again, ".$val;
                audits($_SESSION['userid'], "Client Loan Application failed", $_SESSION['branch']);
                header('location: create_new_loan.php');
                break;
            case 401: # Unauthorixed - Bad credientials
                $_SESSION['error'] = 'Application failed.. Please try again!';
                audits($_SESSION['userid'], "Client Loan Application failed", $_SESSION['branch']);
                header('location: create_new_loan.php');
                break;
            default:
                $_SESSION['error'] = 'Not able to send application'. "\n";
                header('location: create_new_loan.php');
        }
    } else {
        $_SESSION['error'] = 'Application failed.. Please try again!'. "\n";
        audits($_SESSION['userid'], "Client Loan Application failed", $_SESSION['branch']);
        header('location: create_new_loan.php');
    }
//    curl_close($ch);
    $decoded = json_decode($resp, true);
}

// ######################  Get USER BY ID from CMS #################################
    function users(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/users');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $users_response = curl_exec($ch);
        curl_close($ch);
        $users = json_decode($users_response, true);
        return $users;
    }

    function user($userId){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/users/getUser/'.$userId);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $user_response = curl_exec($ch);
        curl_close($ch);
        $user = json_decode($user_response, true);
        return $user;
    }

// ######################   REPORTS for PIPELINE APPLICANTS from CMS #################################

    function applicants(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/credit_application_pipeline/loans');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $applicants_response = curl_exec($ch);
        curl_close($ch);
        $applicants = json_decode($applicants_response, true);
        return $applicants;
    }

// ######################   REPORTS for BUSINESS SECTORS from CMS #################################

	function industries(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/industries');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $industries_response = curl_exec($ch);
        curl_close($ch);
        $industries = json_decode($industries_response, true);
        return $industries;
    }

    // ######################   REPORTS for BUSINESS SECTORS from CMS #################################
    
	function zones(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/zones');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $zones_response = curl_exec($ch);
        curl_close($ch);
        $zones = json_decode($zones_response, true);
        return $zones;
    }

    // ######################   REPORTS for BUSINESS SECTORS from CMS #################################

    function leadStatus(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/leadStatus');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $leadStatus_response = curl_exec($ch);
        curl_close($ch);
        $leadStatus = json_decode($leadStatus_response, true);
        return $leadStatus;
    }

    // ######################   REPORTS for BUSINESS SECTORS from CMS #################################

    function cities(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/cities');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $cities_response = curl_exec($ch);
        curl_close($ch);
        $cities = json_decode($cities_response, true);
        return $cities;
    }


    // ######################   GET APPRAISAL FILES from CMS #################################

    function files($userId,$id){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/credit_application/downloadFiless/'.$userId.'/'.$id.'/Appraisal-Form'.'/Assessment-Files');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $files = json_decode($server_response, true);
        return $files;
    }
    
	// ######################   GET APPRAISAL KYC FILES from CMS #################################

    function kyc_files($userId){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/credit_application/downloadFiles/'.$userId.'/Appraisal-Form'.'/selfie'.'/nationalId');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($ch);
        curl_close($ch);
        $kyc_files = json_decode($resp, true);
        return $kyc_files;
    }

    // ######################   GET LOAN OFFICERS by BRANCH from CMS #################################

    function loan_officer(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/users/branch/'.$_SESSION['branch']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($ch);
        curl_close($ch);
        $branch = json_decode($resp, true);

        foreach($branch as $branchs):
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/users/role/LoanOfficer');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resp = curl_exec($ch);
            curl_close($ch);
            $loan_officer = json_decode($resp, true);

        endforeach;
        return $loan_officer;
    }

    // ######################   GET CLIENT FILE UPLOADS from CMS #################################

    function client_file_uploads($userId){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/ClientFileUpload/get/'.$userId);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $client_file_uploads = json_decode($server_response, true);
        return $client_file_uploads;
    }

    // ######################   GET CLIENT FILE UPLOADS from CMS #################################

    function assessment_files($id){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/assessmentFileUpload/get/'.$id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $assessment_files = json_decode($server_response, true);
        return $assessment_files;
    }

    // ######################   GET CLIENT FILE UPLOADS from CMS #################################

    function xds_files($id){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/xdsFileUpload/get/'.$id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $xds_files = json_decode($server_response, true);
        return $xds_files;
    }

    // ######################   GET CLIENT FILE UPLOADS from CMS #################################

    function assign_lo($assignTo, $assignedBy, $loanId, $userId, $additional_remarks, $processLoanStatus, $bmDateAssignLo, $pipelineStatus){

        $url = "http://localhost:7878/api/utg/credit_application/assignTo/".$loanId;
        $data_array = array(
            'assignTo' => $assignTo,
            'additionalRemarks' => $additional_remarks,
            'assignedBy' => $assignedBy,
            'processLoanStatus' => $processLoanStatus,
            'bmDateAssignLo' => $bmDateAssignLo,
            'pipelineStatus' => $pipelineStatus
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
            $headers = headersToArray( $headerStr );

            if (!curl_errno($ch)) {
            switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
            case 200:  # OK redirect to dashboard

            
            $loan_officer = user($assignTo);;


            foreach ($loan_officer as $loan_officers):

                $recipientName = $loan_officers['firstName'];
                $recipientEmail = $loan_officers['contactDetail']['emailAddress'];

                $url = "http://localhost:7878/api/utg/credit_application/bmAssignLoanOfficer/".$recipientName.'/'.$recipientEmail;

                $data_array = array(
                    'recipientName' => $recipientName,
                    'recipientEmail' => $recipientEmail
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

                curl_close($ch);
                
            endforeach;

                $_SESSION['info'] = "Assigned this application to". " successfully";

                header('location: loan_info.php?menu=loan&loan_id='.$loanId.'&userid='.$userId);
            break;
            case 400:  # Bad Request
                $decoded = json_decode($bodyStr);
                foreach($decoded as $key => $val) {
                echo $key . ': ' . $val . '<br>';
            }
                echo $val;
                $_SESSION['error'] = "Failed. Please try again, ".$val;
                header('location: loan_info.php?menu=loan&loan_id='.$loanId.'&userid='.$userId);
            break;

            case 401: # Unauthorixed - Bad credientials
                $_SESSION['error'] = 'Update Status failed';
                header('location: loan_info.php?menu=loan&loan_id='.$loanId.'&userid='.$userId);
                
            break;
            default:
            $_SESSION['error'] = 'Could not update Loan status '. "\n";
            header('location: loan_info.php?menu=loan&loan_id='.$loanId.'&userid='.$userId);
            }
        } else {
            $_SESSION['error'] = 'Update Status failed.. Please try again!'. "\n";
            header('location: loan_info.php?menu=loan&loan_id='.$loanId.'&userid='.$userId);
            
        }
        curl_close($ch);
        
        return "";
    }

    function market_campaigns(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/market_campaigns");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $market_campaigns = json_decode($server_response, true);
        return $market_campaigns;
    }

    function market_campaign_by_id($id){
        $ch = curl_init();
        $id = $_GET["id"];
        curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/market_campaigns/$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $market_campaign_by_id = json_decode($server_response, true);
        return $market_campaign_by_id;
    }

    function leads($leads_url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/marketLeads".$leads_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $leads = json_decode($server_response, true);
        return $leads;
    }

    function bsn_sector(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/industries');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $bsn_sector = json_decode($server_response, true);
        return $bsn_sector;
    }

    function branches(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/branches');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $branches = json_decode($server_response, true);
        return $branches;
    }

    function user_role($role){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/users/role/'.$role);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($ch);
        curl_close($ch);
        $user_role = json_decode($resp, true);
        return $user_role;
    }

    function roles(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/roles');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $roles_data = json_decode($server_response, true);
        return $roles_data;
    }

    function untuStaff() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/users/untuStaff');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($ch);
        curl_close($ch);
        $untuStaff = json_decode($resp, true);
        return $untuStaff;
    }

    function appraisal_prep(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/credit_application/assessmentNotCompleted/ACCEPTED/'.$_SESSION['userId'].'/'.$_SESSION['branch'].'/uncompleted');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $appraisal_prep = json_decode($server_response, true);
        return $appraisal_prep;
    }

    function boco_check_application($upadateLoanStatus, $loanId, $userId, $comment, $bocoDate, $pipelineStatus){

        $url = "http://localhost:7878/api/utg/credit_application/update/".$loanId;
        $data_array = array(
            'loanStatus' => $upadateLoanStatus,
            'comment' => $comment,
            'loanStatusAssigner' => $userId,
            'bocoDate' => $bocoDate,
            'pipelineStatus' => $pipelineStatus
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
        $headers = headersToArray( $headerStr );

        if (!curl_errno($ch)) {
            switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                case 200:  # OK redirect to dashboard

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/users/branch/'.$_SESSION['branch']);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $resp = curl_exec($ch);
                    curl_close($ch);
                    $branch = json_decode($resp, true);

                    foreach($branch as $branchs):
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/users/role/BranchManager');
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $resp = curl_exec($ch);
                        curl_close($ch);
                        $branch_manager = json_decode($resp, true);
                    endforeach;


                    foreach ($branch_manager as $branch_managers):
                        $recipientName = $branch_managers['firstName'];
                        $recipientEmail = $branch_managers['contactDetail']['emailAddress'];

                        $url = "http://localhost:7878/api/utg/credit_application/bocoCheckLoanStatus/".$recipientName.'/'.$recipientEmail;

                        $data_array = array(
                            'recipientName' => $recipientName,
                            'recipientEmail' => $recipientEmail
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
                        curl_close($ch);

                    endforeach;

                    if ($upadateLoanStatus == "ACCEPTED"){
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/credit_application/$loanId");
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $server_response = curl_exec($ch);
                        curl_close($ch);
                        $loan = json_decode($server_response, true);

                        $ch = curl_init();
                        $messageText = str_replace(' ', '%20', "Dear ".$loan['firstName'].", We are currently reviewing your application.");
                        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:7878/api/utg/sms/single/0'.$loan['phoneNumber'].'/'.$messageText);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $resp = curl_exec($ch);
                        curl_close($ch);
                    }

                    $_SESSION['info'] = "Status updated successfully, Your Branch Manager has been notified";
                    header('location: loan_info.php?menu=loan&loan_id='.$loanId.'&userid='.$userId);
                    break;
                case 400:  # Bad Request
                    $decoded = json_decode($bodyStr);
                    foreach($decoded as $key => $val) {
                        echo $key . ': ' . $val . '<br>';
                    }
                    echo $val;
                    $_SESSION['error'] = "Failed. Please try again, ".$val;
                    header('location: loan_info.php?loan_id='.$loanId.'&userid='.$userId);
                    break;

                case 401: # Unauthorixed - Bad credientials
                    $_SESSION['error'] = 'Update Status failed';
                    header('location: loan_info.php?loan_id='.$loanId.'&userid='.$userId);
                    break;
                default:
                    $_SESSION['error'] = 'Could not update Loan status '. "\n";
                    header('location: loan_info.php?loan_id='.$loanId.'&userid='.$userId);
            }
        } else {
            $_SESSION['error'] = 'Update Status failed.. Please try again!'."\n";
            header('location: loan_info.php?loan_id='.$loanId.'&userid='.$userId);
        }
        curl_close($ch);
}

    function appraisal_files($loan_id){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/appraisalFileUpload/get/'.$loan_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        $appraisal_files = json_decode($server_response, true);
        return $appraisal_files;
    }

    function updateLoanAssessmentStatus($loanId,$assessment_status, $fullName,  $loDate, $pipelineStatus, $userId){

        $url = "http://localhost:7878/api/utg/credit_application/updateLoanAssessmentStatus/".$loanId;
        $data_array = array(
            'processLoanStatus' => $assessment_status,
            'processedBy' => $fullName,
            'loDate' => $loDate,
            'pipelineStatus' =>$pipelineStatus
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
           $headers = headersToArray( $headerStr );

        if (!curl_errno($ch)) {
            switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                case 200:  # OK redirect to dashboard
                    $_SESSION['info'] = "Status updated successfully";
                    header('location: loan_applications.php?state=processed');
                    break;
                case 400:  # Bad Request
                    $decoded = json_decode($bodyStr);
                    foreach($decoded as $key => $val) {
                        echo $key . ': ' . $val . '<br>';
                    }
                    echo $val;
                    $_SESSION['error'] = "Failed. Please try again, ".$val;
                    header('location: loan_applications.php?state=processed');
                    break;

                case 401: # Unauthorixed - Bad credientials
                    $_SESSION['error'] = 'Update Status failed';
                    header('location: loan_applications.php?state=processed');
                    break;
                default:
                    $_SESSION['error'] = 'Could not update Loan status '. "\n";
                    header('location: loan_applications.php?state=processed');
            }
        } else {
            $_SESSION['error'] = 'Update Status failed.. Please try again!'. "\n";
            header('location: loan_applications.php?state=processed');
        }
        curl_close($ch);
    }

    function setMeeting($recipientEmail, $subject, $message, $loanId, $userId, $scheduledBy, $bmDateMeeting, $commit, $pipelineStatus){
        $url = "http://localhost:7878/api/utg/credit_application/updateBmDateMeeting/".$loanId;
        $data_array = array(
            'bmDateMeeting' => $bmDateMeeting,
            'pipelineStatus' =>$pipelineStatus,
            'bmSetMeeting' => $userId,
            'creditCommit' => $commit
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
        curl_close($ch);

        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headerStr = substr($resp, 0, $headerSize);
        $bodyStr = substr($resp, $headerSize);
        $headers = headersToArray( $headerStr );

        // Check HTTP status code
        if (!curl_errno($ch)) {
            switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                case 200:  # OK redirect to dashboard
                    $user = user($userId);

                    $urls = "http://localhost:7878/api/utg/credit_application/bmScheduleMeeting/".$user['firstName']."/".$recipientEmail."/$subject/$message/$scheduledBy";
                    $url = str_replace(" ","%20",$urls);
                    $data_array = array(
                        'recipientName' => $user['firstName'],
                        'recipientEmail' => $recipientEmail,
                        'recipientSubject' => $subject,
                        'recipientMessage' => $message,
                        'senderName' => $scheduledBy
                    );

                    $data = urlencode($data_array);
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HEADER, true );
                    $resp = curl_exec($ch);

                    // convert headers to array
                    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                    $headerStr = substr($resp, 0, $headerSize);
                    $bodyStr = substr($resp, $headerSize);
                    $headers = headersToArray( $headerStr );

                    // Check HTTP status code
                    if (!curl_errno($ch)) {
                        switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                            case 200:
                                $_SESSION['info'] = "Scheduled Meeting Successfully";
                                audit($_SESSION['userid'], "Scheduled Meeting Successfully", $_SESSION['branch']);
                                header('location: bcc_final_decision.php');
                                break;
                            default:
                                $_SESSION['error'] = 'Failed to Schedule Meeting ';
                                header('location: bcc_final_decision.php');
                        }
                    } else {
                        $_SESSION['error'] = 'Failed to Schedule Meeting.. Please try again!';
                        audit($_SESSION['userid'], "Failed to Schedule Meeting", $_SESSION['branch']);
                        header('location: loan_info.php?menu=bcc_schedule&loan_id='.$loanId.'&userid='.$userId);
                    }
                    curl_close($ch);

                default:
                    audit($_SESSION['userid'], "Failed to Schedule Meeting", $_SESSION['branch']);
                    header('location: loan_info.php?menu=bcc_schedule&loan_id='.$loanId.'&userid='.$userId);
            }
        } else {
            audit($_SESSION['userid'], "Failed to Schedule Meeting", $_SESSION['branch']);
            header('location: loan_info.php?menu=bcc_schedule&loan_id='.$loanId.'&userid='.$userId);
        }
        curl_close($ch);

    }

    function collateral($id){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/meetings/collateralByLoanId/$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($ch);
        curl_close($ch);
        $collateral = json_decode($resp, true);
        return $collateral;

    }

//    ############################################## SCHEDULE MEETING ##########################################
    if(isset($_POST['addCollateral'])){
        $txtCollateral = $_POST['txtCollateral'];
        $loanId = $_POST['loanId'];
        $userId = $_POST['userId'];
        $meetingFinalizedBy = $_POST['meetingFinalizedBy'];

        $url = "http://localhost:7878/api/utg/meetings/addMeetings";

        $data_array = array(
            'userId' => $userId,
            'loanId' => $loanId,
            'collateral' => $txtCollateral,
            'meetingFinalizedBy' => $meetingFinalizedBy
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

         // convert headers to array
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headerStr = substr($resp, 0, $headerSize);
        $bodyStr = substr($resp, $headerSize);
        $headers = headersToArray( $headerStr );

        // Check HTTP status code
        if (!curl_errno($ch)) {
            switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                case 200:  # OK redirect to dashboard
                    $decoded = json_decode($bodyStr);
                    foreach($decoded as $key => $val) {
                        echo $key . ': ' . $val . '<br>';
                    }
                    //echo $val;
                    $_SESSION['info'] = "Added successfully";
                    audit($_SESSION['userid'], "Colleteral Added Successfuly", $_SESSION['branch']);
                    header('location: loan_info.php?menu='.$cc_level.'&loan_id='.$loanId.'&userid='.$userId.'#final_decision');
                    break;
                default:
                    $_SESSION['error'] = 'Failed to add collateral ';
                    audit($_SESSION['userid'], "Attempt to add Colleteral Failed", $_SESSION['branch']);
                    header('location: loan_info.php?menu='.$cc_level.'&loan_id='.$loanId.'&userid='.$userId.'#final_decision');
            }
        } else {
            $_SESSION['error'] = 'Failed to add collateral.. Please try again!';
            header('location: loan_info.php?menu='.$cc_level.'&loan_id='.$loanId.'&userid='.$userId.'#final_decision');
        }
        curl_close($ch);
    }

    if(isset($_POST['set_meeting'])) {
        $recipientEmail = $_POST['recipientEmail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $loanId = $_POST['loanId'];
        $userId = $_POST['userId'];
        $scheduledBy = $_POST['fullname'];
        $bmDateMeeting = date("Y-m-d H:i:s");
        $pipelineStatus = "bm_scheduled_meeting";
        $commit = $_POST['commit'];
    
        setMeeting($recipientEmail, $subject, $message, $loanId, $userId, $scheduledBy, $bmDateMeeting, $commit, $pipelineStatus);
    }

    function finalMeeting($recipientEmail, $subject, $message, $loanId, $userId, $decisionBy, $ccDate, $pipelineStatus, $creditCommit){

        $url = "http://localhost:7878/api/utg/credit_application/updateCcFinalMeeting/".$loanId;
        $data_array = array(
            'ccDate' => $ccDate,
            'pipelineStatus' =>$pipelineStatus,
            'creditCommit' => $creditCommit
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
        curl_close($ch);

//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/users/getUserByEmailAddress/".$recipientEmail);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        $server_response = curl_exec($ch);
//        curl_close($ch);
//        $data = json_decode($server_response, true);
//
//        foreach($data as $application):
//
//            $urls = "http://localhost:7878/api/utg/credit_application/bmScheduleMeeting/".$application['firstName']."/".$application['contactDetail']['emailAddress']."/$subject/$message/$decisionBy";
//
//            $url = str_replace(" ","%20",$urls);
//
//            $data_array = array(
//                'recipientName' => $application['firstName'],
//                'recipientEmail' => $application['contactDetail']['emailAddress'],
//                'recipientSubject' => $subject,
//                'recipientMessage' => $message,
//                'senderName' => $decisionBy
//
//            );
//
//            $data = json_encode($data_array);
//            $ch = curl_init();
//
//            curl_setopt($ch, CURLOPT_URL, $url);
//            curl_setopt($ch, CURLOPT_POST, true);
//            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//            curl_setopt($ch, CURLOPT_HEADER, true );
//            $resp = curl_exec($ch);
//
//            // convert headers to array
//            $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
//            $headerStr = substr($resp, 0, $headerSize);
//            $bodyStr = substr($resp, $headerSize);
//            $headers = headersToArray( $headerStr );
//
//
//            // Check HTTP status code
//            if (!curl_errno($ch)) {
//                switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
//                    case 200:
//                        $_SESSION['info'] = "Decision Successfully sent";
//                        header('location: schedule_meeting.php?id='.$loanId.'&userid='.$userId);
//                        break;
//
//                    default:
//                        $_SESSION['error'] = 'Failed to send Decision ';
//                        header('location: schedule_meeting.php?id='.$loanId.'&userid='.$userId);
//                }
//
//            } else {
//                $_SESSION['error'] = 'Failed to send Decision.. Please try again!';
//                header('location: schedule_meeting.php?id='.$loanId.'&userid='.$userId);
//            }
//
//            curl_close($ch);
//
//        endforeach;
    }

    if(isset($_POST['final_meeting'])) {
        $recipientEmail = $_POST['recipientEmail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $loanId = $_POST['loanId'];
        $userId = $_POST['userId'];
        $decisionBy = $_POST['decisionBy'];
        $ccDate = date("Y-m-d H:i:s");
        $pipelineStatus = $_POST['pipeline'];
        $creditCommit = $_POST['creditCommit'];
        finalMeeting($recipientEmail, $subject, $message, $loanId, $userId, $decisionBy, $ccDate, $pipelineStatus, $creditCommit);
    }

    if(isset($_POST['final_predisbursement'])) {
        $loanId = $_POST['loanId'];
        $userId = $_POST['userId'];
        $decisionBy = $_POST['decisionBy'];
        $ccDate = date("Y-m-d H:i:s");
        $pipelineStatus = $_POST['pipeline'];
        $creditCommit = $_POST['creditCommit'];

        $data_array = array(
            'ccDate' => $ccDate,
            'pipelineStatus' =>$pipelineStatus,
            'creditCommit' => $creditCommit
        );
        $data = json_encode($data_array);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/credit_application/updateRecommentCcFinalMeeting/".$loanId);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $resp = curl_exec($ch);
        curl_close($ch);

        audit($_SESSION['userid'], "Set CC Decision for loan", $_SESSION['branch']);
    }

    if(isset($_POST['set_parameters'])) {
        $txtLoanAmount = $_POST['txtLoanAmount'];
        $txtTenure = $_POST['txtTenure'];
        $txtInterestRate = $_POST['txtInterestRate'];
        $txtBasis = $_POST['txtBasis'];
        $txtCashHandlingFee = $_POST['txtCashHandlingFee'];
        $txtRepaymentAmount = $_POST['txtRepaymentAmount'];
        $txtProduct = $_POST['txtProduct'];
        $txtRN = $_POST['txtRN'];
        $txtUpfrontFee = $_POST['txtUpfrontFee'];
        $loanId = $_POST['loanId'];
        $userId = $_POST['userId'];
        $meetingFinalizedBy = $_POST['meetingFinalizedBy'];

        $url = "http://localhost:7878/api/utg/credit_application/updateMeeting/".$loanId;
        $data_array = array(
            'meetingLoanAmount' => $txtLoanAmount,
            'meetingTenure' => $txtTenure,
            'meetingInterestRate' => $txtInterestRate,
            'meetingOnWhichBasis' => $txtBasis,
            'meetingCashHandlingFee' => $txtCashHandlingFee,
            'meetingRepaymentAmount' => $txtRepaymentAmount,
            'meetingProduct' => $txtProduct,
            'meetingRN' => $txtRN,
            'meetingUpfrontFee' => $txtUpfrontFee,
            'meetingFinalizedBy' => $meetingFinalizedBy,
            'ccDate' => $ccDate
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
        $headers = headersToArray( $headerStr );

        if (!curl_errno($ch)) {
            switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                case 200:  # OK redirect to dashboard
                    $_SESSION['info'] = "Successfully updated";
                    audit($_SESSION['userid'], "Updated values for a loan agreed in CC meeting", $_SESSION['branch']);
                    header('location: loan_info.php?menu='.$cc_level.'&loan_id='.$loanId.'&userid='.$userId);
                    break;
                default:
                    $_SESSION['error'] = 'Could not update conditions'. "\n";
                    audit($_SESSION['userid'], "Failed to Update values for a loan agreed in CC meeting", $_SESSION['branch']);
                    header('location: loan_info.php?menu='.$cc_level.'&loan_id='.$loanId.'&userid='.$userId);
            }
        }
        else {
            $_SESSION['error'] = 'Could not update conditions.. Please try again!'. "\n";
            audit($_SESSION['userid'], "Failed to updated values for a loan agreed in CC meeting", $_SESSION['branch']);
            header('location: loan_info.php?menu='.$cc_level.'&loan_id='.$loanId.'&userid='.$userId);
        }
        curl_close($ch);
    }

    function data_collateral($id){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,'http://localhost:7878/api/utg/meetings/collateralByLoanId/'.$id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        curl_close($ch);
        return json_decode($server_response, true);
    }

function updateTicket($loanId,$fullName ,$bocoSignature, $lessFees, $applicationFee, $predisDate, $pipelineStatus){

    $url = "http://localhost:7878/api/utg/credit_application/updateTicketSignature/".$loanId;
    $data_array = array(
        'bocoSignature' => $bocoSignature,
        'bocoName' => $fullName,
        'lessFees' => $lessFees,
        'applicationFee' => $applicationFee,
        'predisDate' => $predisDate,
        'pipelineStatus' => $pipelineStatus
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
    $headers = headersToArray( $headerStr );

    if (!curl_errno($ch)) {
        switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
            case 200:  # OK redirect to dashboard
                $_SESSION['info'] = "Ticket Updated Successfully!";
                audit($_SESSION['userid'], "Signed Ticket Successfully! - ".$loanId, $_SESSION['branch']);
                header('location: predisbursed_tickets.php');
                break;
            case 400:  # Bad Request
                $decoded = json_decode($bodyStr);
                foreach($decoded as $key => $val) {
                    echo $key . ': ' . $val . '<br>';
                }
                echo $val;
                $_SESSION['error'] = "Failed. Please try again, ".$val;
                audit($_SESSION['userid'], "Failed to Sign Ticket! - ".$loanId, $_SESSION['branch']);
                header('location: predisbursed_tickets.php');
                break;
            default:
                $_SESSION['error'] = 'Could not update Loan status '. "\n";
                audit($_SESSION['userid'], "Failed to Sign Ticket! - ".$loanId, $_SESSION['branch']);
                header('location: predisbursed_tickets.php');
        }
    } else {
        $_SESSION['error'] = 'Signing failed.. Please try again!'. "\n";
        audit($_SESSION['userid'], "Failed to Sign Ticket! - ".$loanId, $_SESSION['branch']);
        header('location: predisbursed_tickets.php');
    }
    curl_close($ch);
}


if(isset($_POST['update_ticket'])) {
    $loanId = $_POST['loanId'];
    $fullName = $_POST['fullName'];
    $bocoSignature = $_POST['bocoSignature'];
    $lessFees = $_POST['lessFees'];
    $applicationFee = $_POST['applicationFee'];
    $predisDate = date("Y-m-d H:i:s");
    $pipelineStatus = "predisbursment_ticket";
    updateTicket($loanId, $fullName, $bocoSignature, $lessFees, $applicationFee, $predisDate, $pipelineStatus);
}

function updateBocoSignature($checked,$userId ,$bocoSignature){
    foreach($_POST['checkArr'] as $checked):
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/credit_application/".$checked);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);

        $data = json_decode($server_response, true);
        $url = "http://localhost:7878/api/utg/credit_application/updateTicketSignature/".$checked;
        $data_array = array(
            'bocoSignature' => $bocoSignature,
            'bocoName' => $userId
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
        $headers = headersToArray( $headerStr );

        if (!curl_errno($ch)) {
            switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                case 200:  # OK redirect to dashboard
                    $loan = loans('/'.$checked);

                    $ch = curl_init();
                    $messageText = str_replace(' ', '%20', "Dear ".$loan['firstName'].", We are pleased to advise that your loan application has been approved and our customer service desk will get in touch with you to guide you on the next steps.");
                    curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:7878/api/utg/sms/single/0'.$loan['phoneNumber'].'/'.$messageText);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $resp = curl_exec($ch);
                    curl_close($ch);

                    $_SESSION['info'] = "Ticket signed successfully";
                    audit($_SESSION['userid'], "Ticket signed successfully - ".$checked, $_SESSION['branch']);
                    header('location: signed_tickets.php');
                    break;
                case 400:  # Bad Request
                    $decoded = json_decode($bodyStr);
                    foreach($decoded as $key => $val) {
                        echo $key . ': ' . $val . '<br>';}
                    echo $val;
                    $_SESSION['error'] = "Failed. Please try again, ".$val;
                    audit($_SESSION['userid'], "Failed to Sign Ticket! - ".$checked, $_SESSION['branch']);
                    header('location: predisbursed_tickets.php');
                    break;
                case 401: # Unauthorixed - Bad credientials
                    $_SESSION['error'] = 'Update Status failed';
                    audit($_SESSION['userid'], "Failed to Sign Ticket! - ".$checked, $_SESSION['branch']);
                    header('location: predisbursed_tickets.php');
                    break;
                default:
                    $_SESSION['error'] = 'Could not update Loan status '. "\n";
                    header('location: predisbursed_tickets.php');}
        }else {
            $_SESSION['error'] = 'Signing failed.. Please try again!'. "\n";
            audit($_SESSION['userid'], "Failed to Sign Ticket! - ".$checked, $_SESSION['branch']);
            header('location: predisbursed_tickets.php' );}
        curl_close($ch);
    endforeach;
}

if(isset($_POST['sign_ticket'])) {
    $checked = $_POST['checkArr'];
    $userId = $_POST['userId'];
    $bocoSignature = $_POST['bocoSignature'];
    if($checked==''){
        header('location: predisbursed_tickets.php');}
    else{
        updateBocoSignature($checked, $userId, $bocoSignature);}
}

if (isset($_POST['generate'])) {
    class myPDF extends FPDF
    {
        function header()
        {
            //  header(){
            $this->Image('../vendors/images/logo.png', 130, 10, 28, 18);
            $this->Ln(15);

            $this->SetFont('Arial', 'B', 11);
            $this->Cell(270, 10, 'UNTU CAPITAL LTD. ', 0, 1, 'C');
            $this->Cell(270, 10, 'Predisbursement Ticket ', 0, 1, 'C');

        }

        function footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial', '', 8);
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }

        function headerTable()
        {
            $this->SetX(5);
            $this->SetFont('Times', 'B', 8);
            $this->Cell(30, 10, 'Client Name', 1, 0, 'C');
            $this->Cell(20, 10, 'Loan Amount', 1, 0, 'C');
            $this->Cell(15, 10, 'Less Fees', 1, 0, 'C');
            $this->Cell(20, 10, 'Application Fee', 1, 0, 'C');
            $this->Cell(20, 10, 'C/Handling Fee', 1, 0, 'C');
            $this->Cell(20, 10, 'Interest Rate', 1, 0, 'C');
            $this->Cell(27, 10, 'Repayment Amount', 1, 0, 'C');
            $this->Cell(15, 10, 'Branch', 1, 0, 'C');
            $this->Cell(8, 10, 'Tenor', 1, 0, 'C');
            $this->Cell(10, 10, 'Product', 1, 0, 'C');
            $this->Cell(10, 10, 'U/Fees', 1, 0, 'C');
            $this->Cell(8, 10, 'R/N', 1, 0, 'C');
            $this->Cell(20, 10, 'Loan Officer', 1, 0, 'C');
            $this->Cell(60, 10, 'Collateral', 1, 0, 'C');
            $this->Ln();
        }

        function form()
        {
        }

        function viewTable()
        {

            if (isset($_POST['generate'])) {
                if (!empty($_POST['checkArr'])) {
                    $id = $_POST['checkArr'];
                    $array[] = '';
                    $i = 0;
                    $this->SetFont('Times', 'B', 11);
                    foreach ($_POST['checkArr'] as $checked) {

                        $loan = loans('/'.$checked);

                        if ($loan['bocoName'] != "") {
                            $boco_signed = user($loan["bocoName"]);
                            $boco_signature = $boco_signed['firstName'].' '.$boco_signed['lastName'];
                        }
                        if ($loan['bmName'] != "") {
                            $bm_signed = user($loan["bmName"]);
                            $bm_signature = $bm_signed['firstName'].' '.$bm_signed['lastName'];

                        }
                        if ($loan['caName'] != "") {
                            $ca_signed = user($loan["caName"]);
                            $ca_signature = $ca_signed['firstName'].' '.$ca_signed['lastName'];
                        }
                        if ($loan['cmName'] != "") {
                            $cm_signed = user($loan["cmName"]);
                            $cm_signature = $cm_signed['firstName'].' '.$cm_signed['lastName'];
                        }
                        if ($loan['finName'] != "") {
                            $fin_signed = user($loan["finName"]);
                            $fin_signature = $fin_signed['firstName'].' '.$fin_signed['lastName'];
                        }


                        $data_collateral = data_collateral($checked);
                        $array[$i] = $loan['firstName'];

                        $i++;
                        $this->SetX(5);
                        $this->SetFont('Times', '', 7);
                        $this->Cell(30, 10, $loan['firstName'] . ' ' . $loan['middleName'] . ' ' . $loan['lastName'], 1, 0, 'C');
                        $this->Cell(20, 10, $loan["meetingLoanAmount"] . ' USD', 1, 0, 'L');
                        $this->Cell(15, 10, $loan["lessFees"] . ' USD', 1, 0, 'L');
                        $this->Cell(20, 10, $loan["applicationFee"] . ' USD', 1, 0, 'L');
                        $this->Cell(20, 10, $loan["meetingCashHandlingFee"] . ' USD', 1, 0, 'L');
                        $this->Cell(20, 10, $loan["meetingInterestRate"] . ' %', 1, 0, 'L');
                        $this->Cell(27, 10, $loan["meetingRepaymentAmount"], 1, 0, 'L');
                        $this->Cell(15, 10, $loan["branchName"], 1, 0, 'L');
                        $this->Cell(8, 10, $loan["meetingTenure"], 1, 0, 'L');
                        $this->Cell(10, 10, $loan["meetingProduct"], 1, 0, 'L');
                        $this->Cell(10, 10, $loan["meetingUpfrontFee"] . ' %', 1, 0, 'L');
                        $this->Cell(8, 10, $loan["meetingRN"], 1, 0, 'L');
                        $this->Cell(20, 10, $loan["processedBy"], 1, 0, 'L');
                        $temp = "";
                        foreach ($data_collateral as $i) {
                            $temp = $temp . ' ' . $i["collateral"] . ',';
                        }
                        $this->Cell(60, 10, $temp, 1, 0, 'L');


                        $this->Ln();
                        $this->SetFont('Times', '', 12);
                        if ($boco_signature != "") {
                            $this->Cell(10, 30, ' ', 0, 1);
                            $this->Cell(70, 7, 'Prepared By: ', 0, 0, 'L');
                            $this->Cell(70, 7, $boco_signature, 0, 0, 'C');
                        }

                        if ($bm_signature != "") {
                            $this->Cell(10, 10, ' ', 0, 1);
                            $this->Cell(70, 7, 'Checked by Branch Manager: ', 0, 0, 'L');
                            $this->Cell(70, 7, $bm_signature, 0, 0, 'C');
                        }

                        if ($ca_signature != "") {
                            $this->Cell(10, 10, ' ', 0, 1);
                            $this->Cell(70, 7, 'Credit Checked by: ', 0, 0, 'L');
                            $this->Cell(70, 7, $ca_signature, 0, 0, 'C');
                        }

                        if ($cm_signature != "") {
                            $this->Cell(10, 10, ' ', 0, 1);
                            $this->Cell(70, 7, 'Confirmed by Credit Manager: ', 0, 0, 'L');
                            $this->Cell(70, 7, $cm_signature, 0, 0, 'C');
                        }

                        if ($fin_signature != "") {
                            $this->Cell(10, 10, ' ', 0, 1);
                            $this->Cell(70, 7, 'Finance Authorised by : ', 0, 0, 'L');
                            $this->Cell(70, 7, $fin_signature, 0, 0, 'C');
                        }
                    }
                }
            }
        }
    }

    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L', 'A4', 0);
    $pdf->headerTable();
    $pdf->viewTable();
    $pdf->form();
    $pdf->Output();
}

if(isset($_POST['bm_sign_ticket'])) {
    $checked = $_POST['checkArr'];
    $userId = $_POST['userId'];
    $bmSignature = $_POST['bmSignature'];

    if($checked==''){
        header('location: signed_tickets.php');
    }
    else{
        foreach($_POST['checkArr'] as $checked):
            $data = loans('/'.$checked);
            $url = "http://localhost:7878/api/utg/credit_application/updateBmSignature/".$checked;
            $data_array = array(
                'bmSignature' => $bmSignature,
                'bmName' => $userId);

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
            $headers = headersToArray($headerStr);

            if (!curl_errno($ch)) {
                switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                    case 200:  # OK redirect to dashboard
                        $_SESSION['info'] = "Ticket signed successfully";
                        audit($_SESSION['userid'], "Ticket signed successfully - ".$checked, $_SESSION['branch']);
                        header('location: signed_tickets.php');
                        break;
                    case 400:  # Bad Request
                        $decoded = json_decode($bodyStr);
                        foreach($decoded as $key => $val) {
                            echo $key . ': ' . $val . '<br>';
                        }
                        echo $val;
                        $_SESSION['error'] = "Failed. Please try again";
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: signed_tickets.php');
                        break;

                    case 401: # Unauthorixed - Bad credientials
                        $_SESSION['error'] = 'Update Status failed';
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: signed_tickets.php');
                        break;
                    default:
                        $_SESSION['error'] = 'Could not update Loan status '. "\n";
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: signed_tickets.php');
                }
            }else {
                $_SESSION['error'] = 'Signing failed.. Please try again!'. "\n";
                audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                header('location: signed_tickets.php' );
            }
            curl_close($ch);
        endforeach;
    }
}


if(isset($_POST['ca_sign_ticket'])) {
    $checked = $_POST['checkArr'];
    $userId = $_POST['userId'];
    $caSignature = $_POST['caSignature'];
    if($checked==''){
        header('location: predisbursed_tickets.php');
    }
    else{
        foreach($_POST['checkArr'] as $checked):

//            $userId = $_SESSION['userid'];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/credit_application/".$checked);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_response = curl_exec($ch);

            $data = json_decode($server_response, true);
            $url = "http://localhost:7878/api/utg/credit_application/updateCaSignature/".$checked;
            $data_array = array(
                'caSignature' => $caSignature,
                'caName' => $userId
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
            $headers = headersToArray( $headerStr );

            if (!curl_errno($ch)) {
                switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                    case 200:  # OK redirect to dashboard

                        $_SESSION['info'] = "Ticket signed successfully";
                        audit($_SESSION['userid'], "Ticket signed successfully - ".$checked, $_SESSION['branch']);
                        header('location: signed_tickets.php');
                        break;
                    case 400:  # Bad Request
                        $decoded = json_decode($bodyStr);
                        foreach($decoded as $key => $val) {
                            echo $key . ': ' . $val . '<br>';
                        }
                        echo $val;
                        $_SESSION['error'] = "Failed. Please try again, ".$val;
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: predisbursed_tickets.php');
                        break;

                    case 401: # Unauthorixed - Bad credientials
                        $_SESSION['error'] = 'Update Status failed';
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: predisbursed_tickets.php');

                        break;
                    default:
                        $_SESSION['error'] = 'Could not update Loan status '. "\n";
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: predisbursed_tickets.php');
                }
            }else {
                $_SESSION['error'] = 'Signing failed.. Please try again!'. "\n";
                audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                header('location: predisbursed_tickets.php');

            }
            curl_close($ch);
        endforeach;
    }
}

if(isset($_POST['cm_sign_ticket'])) {
    $checked = $_POST['checkArr'];
    $userId = $_POST['userId'];
    $cmSignature = $_POST['cmSignature'];
    if($checked==''){
        header('location: predisbursed_tickets.php');
    }
    else{
        foreach($_POST['checkArr'] as $checked):

//            $userId = $_SESSION['userid'];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/credit_application/".$checked);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_response = curl_exec($ch);

            $data = json_decode($server_response, true);
            $url = "http://localhost:7878/api/utg/credit_application/updateCmSignature/".$checked;
            $data_array = array(
                'cmSignature' => $cmSignature,
                'cmName' => $userId
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
            $headers = headersToArray( $headerStr );

            if (!curl_errno($ch)) {
                switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                    case 200:  # OK redirect to dashboard

                        $_SESSION['info'] = "Ticket signed successfully";
                        audit($_SESSION['userid'], "Ticket signing successful - ".$checked, $_SESSION['branch']);
                        header('location: signed_tickets.php');
                        break;
                    case 400:  # Bad Request
                        $decoded = json_decode($bodyStr);
                        foreach($decoded as $key => $val) {
                            echo $key . ': ' . $val . '<br>';
                        }
                        echo $val;
                        $_SESSION['error'] = "Failed. Please try again, ".$val;
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: predisbursed_tickets.php');
                        break;

                    case 401: # Unauthorixed - Bad credientials
                        $_SESSION['error'] = 'Update Status failed';
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: predisbursed_tickets.php');

                        break;
                    default:
                        $_SESSION['error'] = 'Could not update Loan status '. "\n";
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: predisbursed_tickets.php');
                }
            }else {
                $_SESSION['error'] = 'Signing failed.. Please try again!'. "\n";
                audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                header('location: predisbursed_tickets.php');

            }
            curl_close($ch);
        endforeach;
    }
}

if(isset($_POST['fin_sign_ticket'])) {
    $checked = $_POST['checkArr'];
    $userId = $_POST['userId'];
    $cmSignature = $_POST['finSignature'];
    if($checked==''){
        header('location: predisbursed_tickets.php');
    }
    else{
        foreach($_POST['checkArr'] as $checked):

//            $userId = $_SESSION['userid'];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/credit_application/".$checked);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_response = curl_exec($ch);

            $data = json_decode($server_response, true);
            $url = "http://localhost:7878/api/utg/credit_application/updateFinSignature/".$checked;
            $data_array = array(
                'finSignature' => $cmSignature,
                'finName' => $userId
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
            $headers = headersToArray( $headerStr );

            if (!curl_errno($ch)) {
                switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
                    case 200:  # OK redirect to dashboard

                        $_SESSION['info'] = "Ticket signed successfully";
                        audit($_SESSION['userid'], "Ticket signing successful - ".$checked, $_SESSION['branch']);
                        header('location: signed_tickets.php');
                        break;
                    case 400:  # Bad Request
                        $decoded = json_decode($bodyStr);
                        foreach($decoded as $key => $val) {
                            echo $key . ': ' . $val . '<br>';
                        }
                        echo $val;
                        $_SESSION['error'] = "Failed. Please try again, ".$val;
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: predisbursed_tickets.php');
                        break;

                    case 401: # Unauthorixed - Bad credientials
                        $_SESSION['error'] = 'Update Status failed';
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: predisbursed_tickets.php');

                        break;
                    default:
                        $_SESSION['error'] = 'Could not update Loan status '. "\n";
                        audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                        header('location: predisbursed_tickets.php');
                }
            }else {
                $_SESSION['error'] = 'Signing failed.. Please try again!'. "\n";
                audit($_SESSION['userid'], "Ticket signing failed - ".$checked, $_SESSION['branch']);
                header('location: predisbursed_tickets.php');

            }
            curl_close($ch);
        endforeach;
    }
}

?>