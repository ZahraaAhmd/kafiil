<?php include "includes/header.php"; ?>

<?php include "includes/menu.php"; ?>


<!-- start section page content  -->
<section class="page-content">
    <!-- start search block -->
    <div class="search-block">
        <div class="container">
        <?php include "includes/filter.php";?>
        </div>
    </div>
    <!-- start search block -->

    <div class="container">
      <!-- start breadcrumb block --> 
      <div class="bread-block">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خدماتنا في البرمجيات</a></li>
                <li class="breadcrumb-item active" aria-current="page">خدمات وردبريس</li>
            </ol>
        </nav>
      </div>
      <!-- end breadcrumb block --> 

      <div class="services-card">
          <div class="row">
          <?php 
                         
                         for($i=1;$i<13;$i++){
                         ?>
                             
                                 <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
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
          <!-- start pag block -->
          <div class="page-pagination">
            <ul class="pagination">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-angle-right"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
                    </li>
            </ul>
          </div>
      </div>
    </div>
</section>
<!-- end section page content  -->

<?php include "includes/footer.php"; ?>