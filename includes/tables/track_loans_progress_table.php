<div class="card-box pb-20 mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Track Application <small>Summary</small></h4>
    </div>
    <div class="pb-20">
        <!-- Smart Wizard -->
        <table class="table table-striped hover nowrap" >
            <thead>
            <tr class="headings">
                <th class="column-title">Pipeline Stage: </th>
                <th class="column-title">Action Done By: </th>
                <th class="column-title"> Time Stamp: </th>
                <th class="column-title">Turn Around Time:</th>
            </tr>
            </thead>

            <tbody>
            <?php
            $loans = loans('/'.$_GET['loan_id']);
            $createDate = new DateTime($loans["createdAt"]);
            ?>

            <tr>
                <td><?php echo "Loan application" ?></td>

                <td><?php echo htmlspecialchars ($loans["firstName"]).' '.htmlspecialchars ($loans["lastName"].' (Client)') ?></td>

                <td><?php echo $createDate->format('d-M-Y H:i:s') ?></td>

                <td><?php if($loans['loanStatus'] == "ACCEPTED"){
                        echo "<label style='padding: 6px;' class='badge badge-success'>Checked</label>";
                    }
                    else if($loans['loanStatus'] == "REJECTED"){
                        echo "<label style='padding: 6px;' class='badge badge-danger'>Rejected</label>";
                    }
                    else{
                        echo "<label style='padding: 6px;' class='badge badge-warning'>Pending</label>";
                    }?>
                </td>
            </tr>

            <tr>
                <?php
                $bocoDate  = new DateTime($loans["bocoDate"]);
                ?>

                <td><?php echo "Review Loan Application" ?></td>

                <td><?php $boco = user($loans["loanStatusAssigner"]);
                    echo htmlspecialchars ($boco['firstName']." ".$boco['lastName'].' (BOCO)') ?></td>

                <td><?php echo $bocoDate ->format('d-M-Y H:i:s') ?></td>

                <td><?php

                    // Declare and define two dates
                    $bocoDates = $bocoDate ->format('Y-m-d H:i:s');
                    $createDates = $createDate->format('d-M-Y H:i:s');
                    $date1 = strtotime($createDates);
                    $date2 = strtotime($bocoDates);

                    $diff = abs($date2 - $date1);

                    $years = floor($diff / (365*60*60*24));

                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                    $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));

                    $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);


                    if($days <= 1){

                        echo "<label style='padding: 6px;' class='badge badge-success'>
                                                                            $months months, $days days, $hours hours, $minutes minutes
                                                                        </label>";
                    }
                    else if($days > 1 && $days <= 3){
                        echo "<label style='padding: 6px;' class='badge badge-warning'>
                                                                            $months months, $days days, $hours hours, $minutes minutes
                                                                        </label>";
                    }
                    else{
                        echo "<label style='padding: 6px;' class='badge badge-danger'>
                                                                                $months months, $days days, $hours hours, $minutes minutes
                                                                            </label>";
                    }?>
                </td>
            </tr>

            <tr>
                <?php
                $bmDateAssignLo   = new DateTime($loans["bmDateAssignLo"]);
                ?>

                <td>
                    <?php $loan_officer = user($loans["assignTo"]);
                    echo " Assigned Application to: ".$loan_officer['firstName'].' '.$loan_officer['lastName'];
                    ?>
                </td>

                <td>
                    <?php
                    $branch_manager = user($loans["assignedBy"]);

                    echo $branch_manager['firstName'].' '.$branch_manager['lastName'].' (Branch Manager)';
                    ?>
                </td>

                <td><?php echo $bmDateAssignLo ->format('d-M-Y H:i:s') ?></td>

                <td><?php

                    // Declare and define two dates
                    $dates2 = $bmDateAssignLo ->format('Y-m-d H:i:s');
                    $dates1 = $bocoDate->format('d-M-Y H:i:s');
                    $date1 = strtotime($dates1);
                    $date2 = strtotime($dates2);

                    $diff = abs($date2 - $date1);

                    $years = floor($diff / (365*60*60*24));

                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                    $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));

                    $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);


                    if($days <= 1){

                        echo "<label style='padding: 6px;' class='badge badge-success'>
                                                                            $months months, $days days, $hours hours, $minutes minutes
                                                                        </label>";
                    }
                    else if($days > 1 && $days <= 3){
                        echo "<label style='padding: 6px;' class='badge badge-warning'>
                                                                            $months months, $days days, $hours hours, $minutes minutes
                                                                        </label>";
                    }
                    else{
                        echo "<label style='padding: 6px;' class='badge badge-danger'>
                                                                                $months months, $days days, $hours hours, $minutes minutes
                                                                            </label>";
                    }?>
                </td>
            </tr>

            <tr>
                <?php
                $loDate = new DateTime($loans["loDate"]);
                ?>

                <td><?php echo "Loan Assessment and Appraisal" ?></td>

                <td>
                    <?php
                    echo htmlspecialchars($loans["processedBy"].' (Loan Officer)');
                    ?>
                </td>

                <td><?php echo $loDate->format('d-M-Y H:i:s') ?></td>

                <td><?php

                    // Declare and define two dates
                    $dates2 = $loDate ->format('Y-m-d H:i:s');
                    $dates1 = $bmDateAssignLo->format('d-M-Y H:i:s');
                    $date1 = strtotime($dates1);
                    $date2 = strtotime($dates2);

                    $diff = abs($date2 - $date1);

                    $years = floor($diff / (365*60*60*24));

                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                    $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));

                    $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);


                    if($days <= 1){

                        echo "<label style='padding: 6px;' class='badge badge-success'>
                                                                            $months months, $days days, $hours hours, $minutes minutes);
                                                                        </label>";
                    }
                    else if($days > 1 && $days <= 3){
                        echo "<label style='padding: 6px;' class='badge badge-warning'>
                                                                            $months months, $days days, $hours hours, $minutes minutes);
                                                                        </label>";
                    }
                    else{
                        echo "<label style='padding: 6px;' class='badge badge-danger'>
                                                                                $months months, $days days, $hours hours, $minutes minutes);
                                                                            </label>";
                    }?>
                </td>
            </tr>

            <tr>
                <?php
                $bmDateMeeting = new DateTime($loans["bmDateMeeting"]);
                ?>

                <td><?php echo "Schedule meeting for Credit Commit" ?></td>

                <td>
                    <?php
                    $bmSet = user($loans["bmSetMeeting"]);

                    echo $bmSet['firstName'].' '.$bmSet['lastName'].' (Branch Manager)';
                    ?>
                </td>

                <td><?php echo $bmDateMeeting ->format('d-M-Y H:i:s') ?></td>

                <td><?php

                    // Declare and define two dates
                    $dates2 = $bmDateMeeting ->format('Y-m-d H:i:s');
                    $dates1 = $loDate->format('d-M-Y H:i:s');
                    $date1 = strtotime($dates1);
                    $date2 = strtotime($dates2);

                    $diff = abs($date2 - $date1);

                    $years = floor($diff / (365*60*60*24));

                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                    $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));

                    $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);


                    if($days <= 1){

                        echo "<label style='padding: 6px;' class='badge badge-success'>
                                                                            $months months, $days days, $hours hours, $minutes minutes);
                                                                        </label>";
                    }
                    else if($days > 1 && $days <= 3){
                        echo "<label style='padding: 6px;' class='badge badge-warning'>
                                                                            $months months, $days days, $hours hours, $minutes minutes);
                                                                        </label>";
                    }
                    else{
                        echo "<label style='padding: 6px;' class='badge badge-danger'>
                                                                                $months months, $days days, $hours hours, $minutes minutes);
                                                                            </label>";
                    }?>
                </td>
            </tr>

            <tr>
                <?php
                $ccDate   = new DateTime($loans["ccDate"]);
                ?>

                <td><?php echo "Final Decision for the Loan" ?></td>

                <td><?php echo htmlspecialchars ($loans["meetingFinalizedBy"]) ?></td>

                <td><?php echo $ccDate ->format('d-M-Y H:i:s') ?></td>

                <td><?php

                    // Declare and define two dates
                    $dates2 = $ccDate ->format('Y-m-d H:i:s');
                    $dates1 = $bmDateMeeting->format('d-M-Y H:i:s');
                    $date1 = strtotime($dates1);
                    $date2 = strtotime($dates2);

                    $diff = abs($date2 - $date1);

                    $years = floor($diff / (365*60*60*24));

                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                    $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));

                    $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);


                    if($days <= 1){

                        echo "<label style='padding: 6px;' class='badge badge-success'>
                                                                            $months months, $days days, $hours hours, $minutes minutes);
                                                                        </label>";
                    }
                    else if($days > 1 && $days <= 3){
                        echo "<label style='padding: 6px;' class='badge badge-warning'>
                                                                            $months months, $days days, $hours hours, $minutes minutes);
                                                                        </label>";
                    }
                    else{
                        echo "<label style='padding: 6px;' class='badge badge-danger'>
                                                                                $months months, $days days, $hours hours, $minutes minutes);
                                                                            </label>";
                    }?>
                </td>
            </tr>

            <tr>
                <?php
                $ccDate = new DateTime($loans["ccDate"]);
                ?>

                <td><?php echo "Pre-Disbursement of Ticket" ?></td>

                <td><?php echo "- -" ?></td>

                <td><?php echo $ccDate->format('d-M-Y H:i:s') ?></td>

                <td><?php

                    // Declare and define two dates
                    $dates2 = $ccDate ->format('Y-m-d H:i:s');
                    $dates1 = $ccDate->format('d-M-Y H:i:s');
                    $date1 = strtotime($dates1);
                    $date2 = strtotime($dates2);

                    $diff = abs($date2 - $date1);

                    $years = floor($diff / (365*60*60*24));

                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                    $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));

                    $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);


                    if($days <= 1){

                        echo "<label style='padding: 6px;' class='badge badge-success'>
                                                                            $months months, $days days, $hours hours, $minutes minutes);
                                                                        </label>";
                    }
                    else if($days > 1 && $days <= 3){
                        echo "<label style='padding: 6px;' class='badge badge-warning'>
                                                                            $months months, $days days, $hours hours, $minutes minutes);
                                                                        </label>";
                    }
                    else{
                        echo "<label style='padding: 6px;' class='badge badge-danger'>
                                                                                $months months, $days days, $hours hours, $minutes minutes);
                                                                            </label>";
                    }?>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- End SmartWizard Content -->
    </div>
</div>