<?php
    $language = array();
    $percent = array();
    $i = 1;
    while($i < 7){
        $sql = "SELECT * FROM `languages` WHERE id = $i;";
        $run = mysqli_query($con, $sql);
        $bring = mysqli_fetch_assoc($run);
        $language[$i] = $bring['language'];
        $percent[$i] = $bring['percent'];
        $i++;
    }
?>

<div class="container-fluid py-5" id="language">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Language</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Language Levels</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $language[1] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $percent[1] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="<?php echo $percent[1] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $language[2] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $percent[2] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="<?php echo $percent[2] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $language[3] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $percent[3] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="<?php echo $percent[3] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $language[4] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $percent[4] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?php echo $percent[4] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $language[5] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $percent[5] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="<?php echo $percent[5] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $language[6] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $percent[6] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="<?php echo $percent[6] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>