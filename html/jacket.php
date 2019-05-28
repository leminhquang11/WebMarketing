<?php session_start() ?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <title>SHOP MEO FÒUR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Css/style.css">
  <link rel="stylesheet" href="../Css/Home_page-collection.css">
  <link rel="stylesheet" href="../Css/search.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../Css/buttun.css">
  <link rel="stylesheet" href="../Css/signup.css">
  <link rel="stylesheet" href="../Css/test.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/search.js"></script>
</head>

<body>
<div id="wrapper">
  
  <div id="header"><!--Header start-->
    <nav class="navbar navbar-fixed-top navbar-light" >
        <div class="container" style="padding: 0">
              <!--LOGO-->
          <div class="navbar-header">
              <a href="../Index.php" class="navbar-brand"><img src="../image/sss.jpg" style=" max-height: 70px";/></a>
                    <!--<a href="#" class="navbar-brand"> MEO FOUR</a>-->
          </div>
                <!--LOGO END-->
                <!--Thanh công cụ-->
                <div class="navbar-collapse collapse" id="tool_list">
            <ul class="nav navbar-nav" id="menu">
                <li><a href="../Index.php" class="navbar_link" style ="color:black";>TRANG CHỦ</a></li>
                <li>
                          <a href="sanpham.php" class="navbar_link" data-toggle="dropdown" style ="color:black";>SẢN PHẨM<span class="caret"></span> </a>
                          <ul class="dropdown-menu">
                                <li><a href="aothun.php" class="navbar_droplist">Áo thun</a></li>
                                <li><a href="hoddie.php" class="navbar_droplist">Hoddie</a></li>
                                <li><a href="jacket.php" class="navbar_droplist">Jacket</a></li>
                                <li><a href="quan.php" class="navbar_droplist">Quần</a></li>
                                <li><a href="phukien.php" class="navbar_droplist">Phụ kiện </a></li>
                                <li><a href="sanpham.php" class="navbar_droplist">Lọc sản phẩm</a></li>                                
                          </ul>
                                
                </li> <!--Droplisst-->
                <li><a href="khuyenmai.php" class="navbar_link" style ="color:black";>KHUYẾN MÃI</a></li>
                <li><a href="lienhe.html" class="navbar_link" style ="color:black";>LIÊN HỆ</a></li>
                <li><a href="gioithieu.html" class="navbar_link" style ="color:black";>GIỚI THIỆU</a></li>
                <li style="padding-top: 1px" class="openCloseCart"><a class="top_icons";><img class="openCloseCart" aria-hidden="true" src="../image/shopping-cart-black-shape.png" style="max-width: 15px";/></a><span id="itemCount"></span></li>                                  
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
            <a href="giohang.php">
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

  <div class="page-banner"><!--banner-->
    <div>
      <img class="banner-image" src="../image/jacket.jpg" style="width:100%">
    </div>
  </div>

  <div class="row" id="t-shirt-container"><!--jacket-container-->
    
    <div style="padding: 20px"> <!--title-->
      <h2 class="chp-title">
          JACKET
      </h2>
    </div>

   <div class="container">
      <div class="row">
          <div  id="np-item1"><!--item1-->
          
  <?php
  include("../ketnoi.php");
   // kết nối đến bảng và gán biến cho các cột dữ liệu
  $so_du_lieu=8;
  $tv="select count(*) from product";
  $tv_1=mysql_query($tv,$conn);
  $tv_2=mysql_fetch_array($tv_1);
  $so_trang=ceil($tv_2[0]/$so_du_lieu);
  
  if(!isset($_GET['page'])){$vtbd=0;}else{$vtbd=($_GET['page']-1)*$so_du_lieu;}
  
  $tv="SELECT product.`id`, product.`name`, catalog.`name` AS catalog_name,`product`.`price`, image.`image_link`
FROM product JOIN image ON product.`id` = image.`product_id` JOIN catalog ON product.`catalog_id` = catalog.`id` 
WHERE catalog.`id` = 3
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
            $_SESSION['trang_chi_tiet_gio_hang']='co';
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
              <form style="margin: 20px;" action="detail.php" method="get">
                <input type='hidden' name='thamso' value='gio_hang' >
                <?php echo "<input type='hidden' name='id' value='".$_GET['id']."' >" ?>
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

  </div>

  <script src="../js/cart.js"></script> <!--giỏ hàng js-->
  
  <div id="myOverlay" class="overlay"><!--search php-->
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form action="/action_page.php">
          <input style="min-height:60px " type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
  </div>

</div>
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
          <img alt="address" src="../image/pre_footer_address_icon.png">
              <span>9 Ngõ 41 Phố Vọng, Hai Bà Trưng, Hà Nội</span> 
        </p>
        <p>
              <img alt="address" src="../image/pre_footer_address_icon.png">
              <span>7 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội</span> 
        </p>
        <p>
              <img alt="email" src="../image/pre_footer_email_icon.png">
              <a href="mailto:meo4shop@gmail.com" style="color: #FFFFFF";>meo4shop@gmail.com</a>
        </p>
      </div>
       <div class="col-md-2 mb-md-0 mb-3" style="text-align: left"><!-- Giới thiệu -->  
        <h4 class="text-uppercase" style="color: #FFFFFF";>GIỚI THIỆU</h4>
          <ul class="list-unstyled" >
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="../Index.php" style="color: #FFFFFF">Trang chủ</a> 
              <p>
            </li>
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="sanpham.php" style="color: #FFFFFF">Sản phẩm</a> 
                <p>
            </li>
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="khuyenmai.php" style="color: #FFFFFF">Khuyến mãi</a> 
              <p>
            </li>
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="gioithieu.html" style="color: #FFFFFF">Giới thiệu</a> 
              <p>
            </li>
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="lienhe.html" style="color: #FFFFFF">Liên hệ</a> 
              <p>
            </li>
          </ul>
      </div>
      <div class="col-md-2 mb-md-0 mb-3" style="text-align: left" ><!-- Hướng dẫn -->
        <h4 class="text-uppercase" style="color: #FFFFFF";>HƯỚNG DẪN</h4>
          <ul class="list-unstyled">
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="huongdanmuahang.html"  style="color: #FFFFFF">Hướng dẫn mua hàng</a> 
              </p>
            </li>
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="chinhsachthanhtoan.html" style="color: #FFFFFF">Chính sách thanh toán</a> 
              </p>
            </li>
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="chinhsachvanchuyen.html"  style="color: #FFFFFF">Chính sách vận chuyển</a> 
              </p>
            </li>
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="chinhsachdoitra.html" style="color: #FFFFFF">Chính sách đổi trả</a> 
              </p>
            </li>
            <li>
              <p>
                <img alt="address" src="../image/widget-link.png">
                <a href="bangsize.html" style="color: #FFFFFF">Bảng SIZE</a> 
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