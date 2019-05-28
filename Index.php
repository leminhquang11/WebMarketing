<!DOCTYPE html>
<html lang="vi">

<head>
  <title>SHOP MEO FÒUR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Css/Home_page-collection.css">
  <link rel="stylesheet" href="Css/search.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Css/buttun.css">
  <link rel="stylesheet" href="Css/signup.css">
  <link rel="stylesheet" href="Css/test.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/search.js"></script>
</head>

<body>
        
<?php 
  //kết nối với csdl
  include("ketnoi.php");
  ?>

         
<div id="wrapper">
  
  <div id="header"><!--Header start-->
    <nav class="navbar navbar-fixed-top navbar-light" >
        <div class="container" style="padding: 0">
              <!--LOGO-->
          <div class="navbar-header">
              <a href="Index.php" class="navbar-brand"><img src="image/sss.jpg" style=" max-height: 70px";/>
              </a>
                    <!--<a href="#" class="navbar-brand"> MEO FOUR</a>-->
          </div>
                <!--LOGO END-->
                <!--Thanh công cụ-->
                <div class="navbar-collapse collapse" id="tool_list">
            <ul class="nav navbar-nav" id="menu">
                <li><a href="Index.php" class="navbar_link" style ="color:black";>TRANG CHỦ</a></li>
                <li>
                          <a href="html/sanpham.php" class="navbar_link" data-toggle="dropdown" style ="color:black";>SẢN PHẨM<span class="caret"></span> </a>
                          <ul class="dropdown-menu">
                                <li><a href="html/aothun.php" class="navbar_droplist">Áo thun</a></li>
                                <li><a href="html/hoddie.php" class="navbar_droplist">Hoddie</a></li>
                                <li><a href="html/jacket.php" class="navbar_droplist">Jacket</a></li>
                                <li><a href="html/quan.php" class="navbar_droplist">Quần</a></li>
                                <li><a href="html/phukien.php" class="navbar_droplist">Phụ kiện </a></li>
                                <li><a href="html/sanpham.php" class="navbar_droplist">Lọc sản phẩm</a></li>                                
                          </ul>
                                
                </li> <!--Droplisst-->
                <li><a href="html/khuyenmai.php" class="navbar_link" style ="color:black";>KHUYẾN MÃI</a></li>
                <li><a href="html/lienhe.html" class="navbar_link" style ="color:black";>LIÊN HỆ</a></li>
                <li><a href="html/gioithieu.html" class="navbar_link" style ="color:black";>GIỚI THIỆU</a></li>
                <li style="padding-top: 1px" class="openCloseCart"><a class="top_icons";><img class="openCloseCart" aria-hidden="true" src="image/shopping-cart-black-shape.png" style="max-width: 15px";/></a><span id="itemCount"></span></li>                                  
            </ul>
          </div>
        </div>
    </nav>
  </div>

  <div id="shoppingCart"><!--Cửa sổ Giỏ hàng-->
    <div id="cartItemsContainer">
        
        <div class="row">
          <div class="col-xs-6">
          <h3 style="padding: -50px">Giỏ hàng của bạn</h3> <h4 id="cartTotal"></h4>
          </div>
          <div class="col-xs-6">
            <a href="html/giohang.php">
              <div class="clearfix" style="width: 350px">
                <button type="submit" class="signupbtn" style="background: black">Xem giỏ hàng</button>
              </div>
            </a>
          </div>
        </div>

      <i class="fa fa-times-circle-o fa-3x openCloseCart" aria-hidden="true"></i>
      <div>
        <div>
          <div id="cartItems"></div>

        </div>
      </div>
    </div>
  </div>
  <!--Slide image start-->
  <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>

      </ol>

    <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="image/slide1.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="image/slide2.jpg" alt="Chicago" style="width:100%;">
        </div>
    
        <div class="item">
          <img src="image/slide3.jpg" alt="New york" style="width:100%;">
        </div>
        <div class="item">
          <img src="image/slide4.jpg" alt="New york" style="width:100%;">
        </div>
         <div class="item">
          <img src="image/slide5.jpg" alt="New york" style="width:100%;">
        </div>
      </div>

    <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
</div>
  <!--home-page-collection start-->
  <div class="container" style="padding: 100px 0 0 0">
      <div class="row">
        <div class=" col-xs-12 col-md-4">
          <div class="chp-item" >
            <div class="chp-itemtt">
              <a href="html/aothun.php" class="chp-link">
                <div>
                  <img src="image/Collection/T-shirt.jpg" alt="T-SHIRT" class="chp-image" />
                </div>
                <div class="chp-text"><!--text-->
                  <h2 class="chp-item-text">
                    T-SHIRT
                  </h2>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class=" col-xs-12 col-md-4">  
          <div class="chp-item" >
            <div class="chp-itemtt">
              <a href="html/jacket.php" class="chp-link">
                <div>
                  <img src="image/Collection/jacket.jpg" alt="JACKET" class="chp-image" />
                </div>
                <div class="chp-text">
                  <h2 class="chp-item-text">
                  JACKET
                  </h2>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class=" col-xs-12 col-md-4">
          <div class="chp-item"> 
            <div class="chp-itemtt">
              <a href="html/phukien.php" class="chp-link">
                <div>
                  <img src="image/Collection/hat.jpg" alt="PHỤ KIỆN" class="chp-image" />
                </div>
                <div class="chp-text">
                  <h2 class="chp-item-text">
                    PHỤ KIỆN
                  </h2>              
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!--home-page-collection end-->
  <div class="container" id="new-product"><!--sản phẩm mới-->
    <div> <!--title-->
      <h2 class="chp-title" style="padding: 20px">
          SẢN PHẨM MỚI
      </h2>
    </div>
    <div class="container">
      <div class="row">
          <div  id="np-item1"><!--item1-->
          
  <?php // kết nối đến bảng và gán biến cho các cột dữ liệu
  $so_du_lieu=8;
  $tv="select count(*) from product";
  $tv_1=mysql_query($tv,$conn);
  $tv_2=mysql_fetch_array($tv_1);
  
  if(!isset($_GET['page'])){$vtbd=0;}else{$vtbd=($_GET['page']-1)*$so_du_lieu;}
  
  $tv="SELECT product.`id`, product.`name`, product.`price`, image.`image_link`
FROM product JOIN image ON product.`id` = image.`product_id`
 limit $so_du_lieu offset $vtbd";

  $tv_1=mysql_query($tv,$conn);
  
  echo "<div class='product_container'>";

    while($tv_2=mysql_fetch_array($tv_1))
  {
      for($i=1;$i<=3;$i++)
      {
        if($tv_2!=false) {
          echo "<div class='col-xs-6 col-md-3'>";
           
            $link_chi_tiet="?thamso=product_detail&id=".$tv_2['id'];
            $gia=$tv_2['price'];
      
            $_GET['id']=$tv_2['id'];
            $gia=number_format($gia,0,",",".");
            echo "<a href='$link_chi_tiet' >";
             
              echo '<img src="data:image/jpeg;base64,'.base64_encode($tv_2['image_link']).'"/>';
            echo "</a>";
            echo "<a class='product_name' href='$link_chi_tiet' style='margin: 30px;' >";
              echo $tv_2['name'];
            echo "</a>";
            echo "<span class='price'>";            
            echo $gia;
            echo "</span>";?>
              <form style="margin: 20px;" action="../Meo4Shop update 13-12/html/detail.php" method="get">
                <input type='hidden' name='thamso' value='gio_hang' >
                <?php echo "<input type='hidden' name='id' value='".$_GET['id']."' >" ;?>
                
                <input type='hidden' class='form-control' name='so_luong' value='1'>
                <button type='submit' class='btn btn-warning' class='submit_button' style='margin-bottom: 3px; width: 200px;'>Thêm vào giỏ</button>
              </form>
          <?php
          echo "</div>";
        }
        if($i!=3)
        {
          $tv_2=mysql_fetch_array($tv_1);
        }
      
  }
}
  
  echo "</div>";
            ?>
            
          </div>      
      </div>
      </div>  
    </div>
  </div>

  <div class="container" id="special-product"><!--sản phẩm nổi bật-->
    <div> <!--title-->
      <h2 class="chp-title" style="padding: 20px">
          SẢN PHẨM NỔI BẬT
      </h2>
    </div>
    <div class="container">
      <div class="row">
        <div  id="np-item1"><!--item1-->
          
  <?php // kết nối đến bảng và gán biến cho các cột dữ liệu
  $so_du_lieu=8;
  $tv="SELECT product.`id`, product.`name`, product.`price`, image.`image_link`
FROM product JOIN image ON product.`id` = image.`product_id` 
 limit $so_du_lieu offset 9";
  $tv_1=mysql_query($tv,$conn);
  $tv_2=mysql_fetch_array($tv_1);
  $so_trang=ceil($tv_2[0]/$so_du_lieu);
  
  if(!isset($_GET['page'])){$vtbd=0;}else{$vtbd=($_GET['page']-1)*$so_du_lieu;}
  
 

  $tv_1=mysql_query($tv,$conn);
  
  echo "<div class='product_container'>";

    while($tv_2=mysql_fetch_array($tv_1))
  {
      for($i=1;$i<=3;$i++)
      {
        if($tv_2!=false) {
          echo "<div class='col-xs-6 col-md-3'>";
           
            $link_chi_tiet="?thamso=product_detail&id=".$tv_2['id'];
            $gia=$tv_2['price'];
           
            $_GET['id']=$tv_2['id'];
            $gia=number_format($gia,0,",",".");
            echo "<a href='$link_chi_tiet' >";
             
              echo '<img src="data:image/jpeg;base64,'.base64_encode($tv_2['image_link']).'"/>';
            echo "</a>";
            echo "<a class='product_name' href='$link_chi_tiet' style='margin: 30px;' >";
              echo $tv_2['name'];
            echo "</a>";
            echo "<span class='price'>";            
            echo $gia;
            echo "</span>";?>
              <form style="margin: 20px;" action="../Meo4Shop update 13-12/html/detail.php" method="get" >
                <input type='hidden' name='thamso' value='gio_hang' >
                <?php echo "<input type='hidden' name='id' value='".$_GET['id']."' >" ?>
                
                <input type='hidden' class='form-control' name='so_luong' value='1'>
                <button type='submit' class='btn btn-warning' class='submit_button' style='margin-bottom: 3px; width: 200px;'>Thêm vào giỏ</button><a >
              </form>
          <?php
          echo "</div>";
        }
        if($i!=3)
        {
          $tv_2=mysql_fetch_array($tv_1);
        }
      
  }
}
 
  echo "</div>";
            ?>


            
          </div>         
          
      </div>
    </div>  
  </div>
  
  <script src="js/test.js"></script>
</div><!--Wrapper-->

</body>
<!--Footer-->
<footer class="page-footer font-small elegant-color-dark pt-4" style="background-color: #232323";><!-- Footer Links -->
  <div class="container-fluid text-center text-md-left"> <!-- Grid row -->
    <div class="row" style="padding: 20px 20px 20px 75px;">
      <div class="col-md-3 mt-md-0 mt-3" style="color: #FFFFFF";><!-- LOGO -->
        <h2 class="text-uppercase" style="text-align: center";>MÈO FOUR SHOP</h2>
        <p>MÈO FOUR SHOP được triển khai với mong muốn khách hàng sẽ tự mua hàng, đặt hàng hoàn toàn tự động trên website mà không cần nhân viên tư vấn. Với các mặt hàng đa dạng phong phú, mát mẻ thời trang phong cách hàn guốc</p>
      </div>
      <div class="col-md-3 mt-md-0 mt-3" style="color: #FFFFFF";><!-- Hệ thống cửa hàng -->
        <h4 class="text-uppercase" style="text-align: center";>HỆ THỐNG CỬA HÀNG</h4>
        <p>Với hệ thống bán hàng Online cùng nhiều chi nhánh cửa hàng tại các tỉnh, thành phố lớn</p>
        <p>
          <img alt="address" src="image/pre_footer_address_icon.png">
              <span>9 Ngõ 41 Phố Vọng, Hai Bà Trưng, Hà Nội</span> 
        </p>
        <p>
              <img alt="address" src="image/pre_footer_address_icon.png">
              <span>7 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội</span> 
        </p>
        <p>
              <img alt="email" src="image/pre_footer_email_icon.png">
              <a href="mailto:meo4shop@gmail.com" style="color: #FFFFFF";>meo4shop@gmail.com</a>
        </p>
      </div>
      <div class="col-md-2 mb-md-0 mb-3" style="text-align: left"><!-- Giới thiệu -->  
        <h4 class="text-uppercase" style="color: #FFFFFF";>GIỚI THIỆU</h4>
          <ul class="list-unstyled" >
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="Index.php" style="color: #FFFFFF">Trang chủ</a> 
              <p>
            </li>
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="html/sanpham.php" style="color: #FFFFFF">Sản phẩm</a> 
                <p>
            </li>
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="html/khuyenmai.php" style="color: #FFFFFF">Khuyến mãi</a> 
              <p>
            </li>
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="html/gioithieu.php" style="color: #FFFFFF">Giới thiệu</a> 
              <p>
            </li>
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="html/lienhe.html" style="color: #FFFFFF">Liên hệ</a> 
              <p>
            </li>
          </ul>
      </div>
      <div class="col-md-2 mb-md-0 mb-3" style="text-align: left" ><!-- Hướng dẫn -->
        <h4 class="text-uppercase" style="color: #FFFFFF";>HƯỚNG DẪN</h4>
          <ul class="list-unstyled">
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="html/huongdanmuahang.html"  style="color: #FFFFFF">Hướng dẫn mua hàng</a> 
              </p>
            </li>
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="html/chinhsachthanhtoan.html" style="color: #FFFFFF">Chính sách thanh toán</a> 
              </p>
            </li>
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="html/chinhsachvanchuyen.html"  style="color: #FFFFFF">Chính sách vận chuyển</a> 
              </p>
            </li>
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="html/chinhsachdoitra.html" style="color: #FFFFFF">Chính sách đổi trả</a> 
              </p>
            </li>
            <li>
              <p>
                <img alt="address" src="image/widget-link.png">
                <a href="html/bangsize.html" style="color: #FFFFFF">Bảng SIZE</a> 
              </p>
            </li>
          </ul>

        </div>
          <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color:#1F1F1F">
      <div style="min-height: 40px;">
        <div align="left">
          <div style="padding: 5px 5px 5px 75px">
            <h5 style="color: #FFFFFF">     © 2018 Copyright: Bản quyền thuộc về Mèo Four Team </h5>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright -->

</footer>
  <!-- Footer -->
</html>
