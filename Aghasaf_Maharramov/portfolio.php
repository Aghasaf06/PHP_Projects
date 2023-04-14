<?php
    $omgloc = array();
    $i = 3;
    while($i < 12){
        $sql = "SELECT * FROM `images` WHERE id = $i;";
        $run = mysqli_query($con, $sql);
        $bring = mysqli_fetch_assoc($run);
        $imgloc[$i] = $bring['imageLocation'];
        $i++;
    }
?>

<div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Me</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Intellectual Games</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Photography</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo $imgloc[3] ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo $imgloc[3] ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo $imgloc[4] ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo $imgloc[4] ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo $imgloc[5] ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo $imgloc[5] ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo $imgloc[6] ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo $imgloc[6] ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo $imgloc[7] ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo $imgloc[7] ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo $imgloc[8] ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo $imgloc[8] ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo $imgloc[9] ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo $imgloc[9] ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo $imgloc[10] ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo $imgloc[10] ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="<?php echo $imgloc[11] ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="<?php echo $imgloc[11] ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>