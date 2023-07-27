<!-- table widget -->

<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/market_campaigns");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($server_response, true);
?>

<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Recent Campaigns</h4>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover multiple-select-row nowrap">
            <thead>
            <tr>
                <th class="table-plus datatable-nosort">Campaign Name</th>
                <th>City/Town</th>
                <th>Zone</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Status</th>
                <th class="datatable-nosort">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($data as $application):
                $date = htmlspecialchars($application["createdAt"]);
                $createDate = new DateTime($date);

                $end_date = htmlspecialchars($application["endDate"]);
                $formatted_end_date = date("Y-m-d", strtotime($end_date));

                $current_date = date("Y-m-d"); // Get the current date
                $status = htmlspecialchars($application["campaignStatus"]);

                $row_class = '';
                // if($application["branchName"] =="belvedere" && $application["allocatedLoanOfficer"] =="vovo"){

                if ($formatted_end_date < $current_date && $status == "open") {
                    $row_class = 'expired';
                }

                if($application["campaignStatus"] =="open"){
                    ?>

                    <tr class="<?php echo $row_class; ?>">
                        <td><?= htmlspecialchars ($application["campaignName"]) ?></td>
                        <td class="table-plus"><?= htmlspecialchars ($application["city"]) ?></td>
                        <td><?= htmlspecialchars ($application["zoneArea"]) ?></td>
                        <td><?= htmlspecialchars ($application["startDate"]) ?></td>
                        <td><?= htmlspecialchars ($application["endDate"]) ?></td>
                        <td>

                            <!-- <span class="badge badge-pill" data-bgcolor="#FF0000" data-color="#fff">
						<?= htmlspecialchars ($application["campaignStatus"]) ?></span> -->

                            <?php if ($application["campaignStatus"] =="open") {
                                echo "<label style='padding: 7px;' class='badge badge-success'>Open</label>";
                            } else {
                                echo "<label style='padding: 7px;' class='badge badge-danger'>Closed</label>";
                            }
                            ?>
                        </td>
                        <td>
                            <div class="dropdown">
                                <a
                                    class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                >

                                    <a class="dropdown-item" href="view_campaign.php?id=<?=$application["id"] ?>"
                                    ><i class="dw dw-edit2"></i> View</a
                                    >
                                    <a class="dropdown-item" href="#"
                                    ><i class="dw dw-delete-3"></i> Close</a
                                    >
                                    <a class="dropdown-item" href="#"
                                    ><i class="dw dw-delete-3"></i> Delete</a
                                    >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                else{}
            endforeach;?>


            </tbody>
        </table>
    </div>
</div>
<style>
    .expired {
        background-color: #FAA0A0; /* Set the background color for expired rows */
    }
</style>