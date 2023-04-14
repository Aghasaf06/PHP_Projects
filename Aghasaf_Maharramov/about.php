<?php
    function dbcon2(){
        global $con, $sql, $run, $bring;
        $run = mysqli_query($con, $sql);
        $bring = mysqli_fetch_assoc($run);
    }
?>

<div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <?php
                        $sql = "SELECT `imageLocation` FROM `images` WHERE id = 2;";
                        dbcon2();
                        $imgabt = $bring['imageLocation'];
                    ?>
                    <img class="img-fluid rounded w-100" src="<?php echo $imgabt ?>" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4"><?php echo $jobt1, " & ", $jobt2, " & ", $jobt3;?></h3>
                    <p>Agasaf Maharramov, I am currently a 3rd-year bachelor's student at Baku Engineering University, engineering faculty, majoring in Information Technology.
                    Furthermore, I worked for more than 3 years in customer service and personal care in hotels and resorts, mainly during summer vacations, with the aim of increasing my responsibility and commitment skills and gaining experience.
                    In addition, I assure you that my skills in scientific logic and arithmetic brain tasks, as well as team work skills, have been further improved thanks to the knowledge competitions, such as, BRAIN Ring, Khamsa, inter-school apprehension tournaments that I have ensured since my high-school years.
                    Also, thanks to my faithful and persistent character indicators in military competitions and sports games, which require activity, I can say that I once again confirmed myself in this field as a necessary and indispensable individual for the group, obtaining accurate results.</p>
                    <?php
                        $sql = "SELECT * FROM `main`;";
                        dbcon2();
                        $info = $bring['info'];
                        $birthday = $bring['birthday'];
                        $degree = $bring['degree'];
                        $experience = $bring['experience'];
                        $phone = $bring['phone'];
                        $email = $bring['email'];
                        $address = $bring['address'];
                    ?>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary"><?php echo $namesurname ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary"><?php echo $birthday ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary"><?php echo $degree ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary"><?php echo $experience ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary"><?php echo $phone ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary"><?php echo $email ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary"><?php echo $address ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">Available</span></h6></div>
                    </div>
                    <!-- <a href="" class="btn btn-outline-primary mr-4">Hire Me</a>
                    <a href="" class="btn btn-outline-primary">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>