<?php
    $title = array();
    $loc = array();
    $interval = array();
    $i = 1;
    while($i < 11){
        $sql = "SELECT * FROM `eduexp` WHERE id = $i;";
        $run = mysqli_query($con, $sql);
        $bring = mysqli_fetch_assoc($run);
        $title[$i] = $bring['title'];
        $loc[$i] = $bring['loc'];
        $interval[$i] = $bring['interval'];
        $i++;
    }
?>

<div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[1] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[1] ?></strong> | <small><?php echo $interval[1] ?></small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[2] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[2] ?></strong> | <small><?php echo $interval[2] ?></small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[3] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[3] ?></strong> | <small><?php echo $interval[3] ?></small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[4] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[4] ?></strong> | <small><?php echo $interval[4] ?></small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[5] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[5] ?></strong> | <small><?php echo $interval[5] ?></small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[6] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[6] ?></strong> | <small><?php echo $interval[6] ?></small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[7] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[7] ?></strong> | <small><?php echo $interval[7] ?></small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[8] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[8] ?></strong> | <small><?php echo $interval[8] ?></small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[9] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[9] ?></strong> | <small><?php echo $interval[9] ?></small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $title[10] ?></h5>
                            <p class="mb-2"><strong><?php echo $loc[10] ?></strong> | <small><?php echo $interval[10] ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>