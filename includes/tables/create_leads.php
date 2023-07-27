<!-- table widget -->
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
                $market_campaigns = market_campaigns();
                foreach($market_campaigns as $campaign):
                    $date = htmlspecialchars ($campaign["createdAt"]);
                    $createDate = new DateTime($date);
                    if($campaign["campaignStatus"] =="open"&& $campaign["branchName"] == $_SESSION['branch'] ){
                    ?>

                    <tr>
                        <td><?= htmlspecialchars ($campaign["campaignName"]) ?></td>
                        <td class="table-plus"><?= htmlspecialchars ($campaign["city"]) ?></td>
                        <td><?= htmlspecialchars ($campaign["zoneArea"]) ?></td>
                        <td><?= htmlspecialchars ($campaign["startDate"]) ?></td>
                        <td><?= htmlspecialchars ($campaign["endDate"]) ?></td>

                        <td>
						<?= htmlspecialchars ($campaign["campaignStatus"]) ?></span> -->

                            <?php if ($campaign["campaignStatus"] =="open") {
                                echo "<label style='padding: 7px;' class='badge badge-success'>Open</label>";
                            } else {
                                echo "<label style='padding: 7px;' class='badge badge-danger'>Completed</label>";
                            }
                            ?>
                        </td>
                        <td>
                            <div class="dropdown">
                                <a
                                    class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                >
                                    <i class="dw dw-more"></i>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="lead_management.php?id=<?=$campaign["id"] ?>"><i class="dw dw-eye"></i> Add Lead</a>
                                    <a class="dropdown-item" href="view_campaign.php?id=<?=$campaign["id"] ?>"
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
                } endforeach;?>
            </tbody>
        </table>
    </div>
</div>