<?php
    $sn = array();
    $p = array();
    $i = 1;
    while($i < 9){
        $sql = "SELECT * FROM `skills` WHERE id = $i;";
        $run = mysqli_query($con, $sql);
        $bring = mysqli_fetch_assoc($run);
        $sn[$i] = $bring['skillname'];
        $p[$i] = $bring['percent'];
        $i++;
    }
?>

<div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $sn[1] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $p[1] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="<?php echo $p[1] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $sn[2] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $p[2] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="<?php echo $p[2] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $sn[3] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $p[3] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?php echo $p[3] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $sn[4] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $p[4] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="<?php echo $p[4] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $sn[5] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $p[5] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="<?php echo $p[5] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $sn[6] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $p[6] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="<?php echo $p[6] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $sn[7] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $p[7] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="<?php echo $p[7] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $sn[8] ?></h6>
                            <h6 class="font-weight-bold"><?php echo $p[8] ?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?php echo $p[8] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>