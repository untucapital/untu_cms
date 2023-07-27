<div class="row">
    <?php
    $assessment_files = assessment_files($loan_id);
    foreach($assessment_files as $application):
        ?>

        <div class="col-lg-3 col-md-4 col-sm-12 mb-10">
            <div class="card card-box">
                <?php
                $fileName = $application['fileName'];
                $lastFourLetters = substr($fileName, -4);
                $isImage = ($lastFourLetters === ".jpg" || $lastFourLetters === ".png" || $lastFourLetters === ".svg" || $lastFourLetters === "jpeg");
                $isVideo = ($lastFourLetters === ".mp4" || $lastFourLetters === ".mov" || $lastFourLetters === ".avi");
                ?>

                <?php if ($isImage): ?>
                    <img src="../includes/file_uploads/loan_officers/<?php echo htmlspecialchars($fileName); ?>" class="card-img-top" alt="Default Image" onerror="this.src='../vendors/images/modal-img1.jpg';" style="width:600px; height: 200px;">
                <?php elseif ($isVideo): ?>
                    <video style="height: 200px; width: 100%; display: block;" src="../includes/file_uploads/loan_officers/<?php echo $fileName; ?>" controls></video>
                <?php else: ?>
                    <img src="../vendors/images/modal-img1.jpg" class="card-img-top" alt="Default Image" style="height: 200px;">
                <?php endif; ?>

                <div class="card-body">
                    <h5 class="card-title weight-500">
                        <a name="downloadfile" download="<?php echo htmlspecialchars($application['fileName']) ?>" href="../includes/file_uploads/loan_officers/<?php echo htmlspecialchars($application['fileName']) ?>" style="color: black;">Download</a>
                    </h5>
                    <p class="card-text"><?php echo "Field Assessment File"; ?></p>
                    <!--                                        <a name="downloadfile" class="btn btn-primary" download="--><?php //echo htmlspecialchars($application['fileName']) ?><!--" href="../includes/file_uploads/clients/--><?php //echo htmlspecialchars($application['fileName']) ?><!--">Download</a>-->
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>