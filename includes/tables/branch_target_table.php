
<div class="card-box mb-30">
    <div class="pd-20">
        <?php if ($_SESSION['role'] != "ROLE_LO") { ?>
            <form action="campaign_and_marketing.php?menu=add_target" method="post">
                <button class="btn btn-lg btn-primary" type="submit" name="add_target" style="margin-bottom: 15px;">Add Target</button>
            </form>
        <?php } ?>

    </div>
    <table class="data-table table stripe hover multiple-select-row nowrap">
        <thead>
        <tr>
            <th>Creation Date</th>
            <th>Branch</th>
            <th>Target Set</th>
            <th class="datatable-nosort">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $market_campaigns = branch_targets();
        foreach($market_campaigns as $data):

            $end_date = htmlspecialchars($data["createdAt"]);
            $formatted_end_date = date("Y-m-d", strtotime($end_date));

            $current_date = date("Y-m-d"); // Get the current date
            $status = htmlspecialchars($data["campaignStatus"]);

            $row_class = '';
            if ($formatted_end_date < $current_date && $status == "open") {
                $row_class = 'expired';
            }
            ?>

            <tr class="<?php echo $row_class; ?>">
                <td><?= htmlspecialchars($formatted_end_date) ?></td>
                <td><?= htmlspecialchars($data["branch"]) ?></td>
                <td><?= htmlspecialchars($data["target"]) ?></td>


                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="edit.php?menu=target&id=<?=$data["id"] ?>" ><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#" ><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- CSS styles -->
<style> .expired { background-color: #FAA0A0; /* Set the background color for expired rows */ } </style>