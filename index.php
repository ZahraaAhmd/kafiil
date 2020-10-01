<?php include "includes/header.php"; ?>
<!-- start section banner -->
<section class="title-banner">
    <div class="container">
        <div class="announcement">
            <div>
                <div class="title">هنا عنوان معين</div>
            </div>
            <div>
                <div class="title">هنا عنوان معين</div>
            </div>
            <div>
                <div class="title">هنا عنوان معين</div>
            </div>
            <div>
                <div class="title">هنا عنوان معين</div>
            </div>
        </div>
        
        <i class="fas fa-close"></i>
    </div>
</section>
<!-- end section banner -->
<?php include "includes/menu.php"; ?>
<!-- start section home slider -->
<section class="home-slider">
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide2.png" class="w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slide2.png" class="w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slide2.png" class="w-100" alt="...">
            </div>
        </div>

    </div>
    </div>
</section>
<!-- end section home slider -->

<!-- start section page content  -->
<section class="page-content">
    <!-- start search block -->
    <div class="container py-sm-0">
        <div class="search-block home">

            <?php include "includes/filter.php";?>
        </div>
    </div>
    <!-- start search block -->

    <div class="container">
        <!-- start best selling section -->

        <div class="best-selling mt-3">
            <div class="serv-head">
                أحدث مبيعات الخدمات
                <span class="float-left">المزيد <i class="fas fa-angle-left"></i></span>
            </div>
            <div class="suggest-slider">
                <?php 
             
                for($i=1;$i<7;$i++){
                ?>
                <div>
                    <div class="card">
                        <div class="serv-imgs">
                            <span class="sale-icon"><img src="images/sale.png"></span>
                            <div id="service-slider<?php echo $i;?>" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#service-slider<?php echo $i;?>" data-slide-to="0" class="active"></li>
                                    <li data-target="#service-slider<?php echo $i;?>" data-slide-to="1"></li>
                                    <li data-target="#service-slider<?php echo $i;?>" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/slide.jpg" class="w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/img2.png" class="w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/img3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#service-slider<?php echo $i;?>" role="button" data-slide="prev">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#service-slider<?php echo $i;?>" role="button" data-slide="next">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-title">الرد علي جميع الاستشارات التي تختص ب تكنولوجيا المعلومات
                        </div>
                        <div class="freelancer-serv">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="user-img">
                                        <span class="relative">
                                            <img src="images/img.jpg"><span class="active"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <h4>اسم المستخدم <span>بائع متميز</span></h4>
                                    <div class="float-left">
                                        <span class="price">$25.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="serv-rate">
                                    <i class="fas fa-star"></i>4.5 <small>(32)</small>
                                    <div class="float-left">
                                        <i class="fas fa-heart"></i>
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#"><i class="fas fa-heart"></i> المفضله</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> قائمة جديدة</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
              }
              ?>
            </div>
        </div>
        <!-- end best selling section -->

        <!-- start programing section -->

        <div class="best-selling mt-3">
            <div class="serv-head">
            خدمات في البرمجيات
                <span class="float-left">المزيد <i class="fas fa-angle-left"></i></span>
            </div>
            <div class="suggest-slider">
                <?php 
             
                for($i=1;$i<7;$i++){
                ?>
                <div>
                    <div class="card">
                        <div class="serv-imgs">
                            <span class="sale-icon"><img src="images/sale.png"></span>
                            <div id="programing-slider<?php echo $i;?>" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#programing-slider<?php echo $i;?>" data-slide-to="0" class="active"></li>
                                    <li data-target="#programing-slider<?php echo $i;?>" data-slide-to="1"></li>
                                    <li data-target="#programing-slider<?php echo $i;?>" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/slide.jpg" class="w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/img2.png" class="w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/img3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#programing-slider<?php echo $i;?>" role="button" data-slide="prev">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#programing-slider<?php echo $i;?>" role="button" data-slide="next">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-title">الرد علي جميع الاستشارات التي تختص ب تكنولوجيا المعلومات
                        </div>
                        <div class="freelancer-serv">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="user-img">
                                        <span class="relative">
                                            <img src="images/img.jpg"><span class="active"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <h4>اسم المستخدم <span>بائع متميز</span></h4>
                                    <div class="float-left">
                                        <span class="price">$25.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="serv-rate">
                                    <i class="fas fa-star"></i>4.5 <small>(32)</small>
                                    <div class="float-left">
                                        <i class="fas fa-heart"></i>
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#"><i class="fas fa-heart"></i> المفضله</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> قائمة جديدة</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
              }
              ?>
            </div>
        </div>
        <!-- end best selling section -->
    </div>
</section>
<!-- end section page content  -->

<?php include "includes/footer.php"; ?>