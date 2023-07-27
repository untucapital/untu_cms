<!-- basic table  Start -->
<div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Loan Officer Productivity</h4>
            <p><code></code></p>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Branch</th>
                <th scope="col">Loan Officer</th>
                <th scope="col">Disbursed</th>
                <th scope="col">Pipeline Cases</th>
                <th scope="col">Total</th>
                <th scope="col">Average Target</th>
                <th scope="col">Variance</th>
            </tr>
        </thead>
        <tbody>
            <tr>

            <?php
                if(isset($_POST['Submit'])){
                    $StartDate = $_POST['Start_Date'];
                    $EndDate = $_POST['End_Date'];                                

                    $StartDatedateString = $StartDate;
                    $StartDatetimestamp = strtotime($StartDatedateString);

                    $EndDatedateString = $EndDate;
                    $EndDatetimestamp = strtotime($EndDatedateString);

                    // echo "The UNIX End Date is :".$EndDatetimestamp;

                    $loanOfficers = array();
                    foreach ($data as $item) {
                        $loanOfficers[] = $item->loanOfficer;

                    // $loanOfficers[] = preg_replace('/\s+/', '',  $item->loanOfficer);
                }

                foreach ($loanOfficers as $loanOfficer) {
                    // echo $loanOfficer . "<br>";

                    $selectedObjects = array();
                    $desiredKey = 'loanOfficer';
                    $desiredValue = $loanOfficer;
                    
                    foreach ($data as $object) {
                        if ($object->loanOfficer === $desiredValue) {
                            $selectedObjects[] = $object;
                        }
                    }
                }

                    // Initialize an empty array to store loan officers' information
                $loanOfficers = array();

                // Iterate over the data to extract loan officers' information

                foreach ($data as $entry) {
                    $loanOfficer = $entry->loanOfficer;
                    $loanStatus = $entry->loanStatus;
                    $disbursed = 0;
                    $IN_pipeline=0;
                    // Check if loan officer is already present in the array

                    $dateRecorded = $entry->dateRecorded;
                    
                    $dateString = $dateRecorded;
                    $dateTime = DateTime::createFromFormat('d-m-Y h:i:s a', $dateString);
                    $timestamp = $dateTime->getTimestamp();

                    if ($timestamp>=$StartDatetimestamp && $timestamp<=$EndDatetimestamp){
                    
                    if (!isset($loanOfficers[$loanOfficer])) {
                        // If loan officer is not present, initialize the count and status variables

                        
                        // Check if loan officer is already present in the array
                        if (!isset($loanOfficers[$loanOfficer][$loanStatus])) {
                            // If loan officer is not present, initialize the count
                            $loanOfficers[$loanOfficer][$loanStatus] = 1;
                        } else {
                            // If loan officer is already present, increment the count
                            $loanOfficers[$loanOfficer][$loanStatus]++;
                        }

                        $loanOfficers[$loanOfficer] = array(
                            'count' => 1,
                            'status' => $entry->loanStatus,
                            'branchName' => $entry->branchName,
                            'disbursed' => $disbursed,
                            'IN_pipeline'=>$IN_pipeline
                            
                        );
                    } else {
                        // If loan officer is already present, increment the count
                        $loanOfficers[$loanOfficer]['count']++;
                    }

                }else{
                    // echo "Timestamp range not found";
                    echo"";
                }
                }

                // Print the loan officers' information in a table
                echo '
                        ';
                $i=1;
                foreach ($loanOfficers as $loanOfficer => $info) {

                    echo '<tr>';
                    echo '<td> '.$i.'</td>';
                    echo '<td>' . $info['branchName'] . '</td>'; // Assuming the branch name is the same for all entries
                    echo '<td>' . $loanOfficer . '</td>';

                $url = "http://localhost:7878/api/utg/credit_application_pipeline/loans/count/" . urlencode($loanOfficer);

                // Make the HTTP request
                $response = file_get_contents($url);

                if ($response === false) {
                    // Error handling if the request fails
                    echo "Error: Failed to make the request.";
                    exit;
                }

                // Parse the response JSON
                $data = json_decode($response, true);

                if ($data === null) {
                    // Error handling if the response is not valid JSON
                    echo "Error: Invalid response received.";
                    exit;
                }

                // Get the count from the response
                $count = $data;

                    echo '<td> '.$count.'</td>';
                    echo '<td> '. ($info['count'] - $count).'</td>';
                    echo '<td>' . $info['count'] . '</td>';
                        echo '<td> 5 </td>';
                    echo '<td> '. ($info['count'] - 5) .'</td>';
                    echo '</tr>';

                    $i++;
                }

                echo '</table>';

                } ?>
        </tbody>
    </table>
    <div class="collapse collapse-box" id="basic-table">
        <div class="code-box">
            <div class="clearfix">
                <a
                    href="javascript:;"
                    class="btn btn-primary btn-sm code-copy pull-left"
                    data-clipboard-target="#basic-table-code"
                    ><i class="fa fa-clipboard"></i> Copy Code</a
                >
                <a
                    href="#basic-table"
                    class="btn btn-primary btn-sm pull-right"
                    rel="content-y"
                    data-toggle="collapse"
                    role="button"
                    ><i class="fa fa-eye-slash"></i> Hide Code</a
                >
            </div>
            <pre><code class="xml copy-pre" id="basic-table-code">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                    </tr>
                    </tbody>
                </table>
            </code></pre>
        </div>
    </div>
</div>
<!-- basic table  End -->