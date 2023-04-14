<?php
    function dbcon1(){
        global $con, $sql, $run, $bring;
        $run = mysqli_query($con, $sql);
        $bring = mysqli_fetch_assoc($run);
    }
?>

<div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <?php
                        $sql = "SELECT `imageLocation` FROM `images` WHERE id = 1;";
                        dbcon1(); 
                        $imghdr = $bring['imageLocation'];
                    ?>
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="<?php echo $imghdr ?>" alt="">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;"><?php echo $namesurname ?></h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <?php
                        $t = "title";
                        $sql = "SELECT * FROM `eduexp` WHERE Id = 5;";
                        dbcon1();
                        $jobt1 = $bring[$t];

                        $sql = "SELECT * FROM `eduexp` WHERE Id = 6;";
                        dbcon1();
                        $jobt2 = $bring[$t];

                        $sql = "SELECT * FROM `eduexp` WHERE Id = 9;";
                        dbcon1();
                        $jobt3 = $bring[$t];

                        $sql = "SELECT * FROM `urls`;";
                        dbcon1();
                        $cv = $bring['CVdownload'];
                    ?>
                    <div class="typed-text d-none"><?php echo $jobt1 ?>, <?php echo $jobt2 ?>, <?php echo $jobt3 ?></div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a target = "blank" href="<?php echo $cv ?>" class="btn btn-outline-light mr-5">Download CV</a>
                        <!-- <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://youtu.be/Nfuzcr88vdI" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>-->
                    </div>
                </div>
            </div>
        </div>
    </div>