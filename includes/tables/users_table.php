<?php

?>
<!-- table widget -->

<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">
            Manage User Accounts
        </h4>
    </div>

    <div class="pb-20">
        <table class="table hover table stripe multiple-select-row data-table-export nowrap">
            <thead>
            <tr>
                <th>Date Joined</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Username</th>
                <th>Email Address</th>
                <th>Contact Number</th>
                <th>User Role</th>
                <th>Branch</th>
                <th>Status</th>
                <th class="datatable-nosort">Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $users = users();
                foreach($users as $user):?>
                    <tr>
                        <td><?php echo date('d-M-Y', strtotime($user['createdAt'])) ?></td>
                        <td><?= htmlspecialchars ($user["firstName"]) ?></td>
                        <td><?= htmlspecialchars ($user["lastName"]) ?></td>
                        <td><?= htmlspecialchars ($user["username"]) ?></td>
                        <td><?= htmlspecialchars ($user["contactDetail"]["emailAddress"]) ?></td>
                        <td><?= htmlspecialchars ($user["contactDetail"]["mobileNumber"]) ?></td>
                        <td><?= htmlspecialchars ($user["roles"][0]["name"]) ?></td>
                        <td><?= htmlspecialchars ($user["branch"]) ?></td>
                        <td><?php if($user['verified'] == 1){ echo "<label style='padding: 6px;' class='badge badge-success'>Verified</label>";}
                            else{ echo "<label style='padding: 6px;' class='badge badge-warning'>Not Verified</label>";}?>
                        </td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"><i class="dw dw-more"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="user_info.php?userid=<?=$user["id"] ?>"><i class="dw dw-edit2"></i> Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
<script src="../../vendors/scripts/core.js"></script>
<script src="../../vendors/scripts/script.min.js"></script>
<script src="../../vendors/scripts/process.js"></script>
<script src="../../vendors/scripts/layout-settings.js"></script>
<!--  -->
<!-- Google Tag Manager (noscript) -->
<noscript
><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
    ></iframe
    ></noscript>

