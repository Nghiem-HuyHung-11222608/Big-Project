<?php
$view = $_GET['view'];
switch ($view) {
    case 'products-category':
        $products=product_category($_GET['id']);
        break;
    case 'products-search':
        $products=product_search($_POST['key']);
        break;    
    
    default:
        # code...
        break;
}
?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="?view">Trang Chủ</a></span> / <span>Sản phẩm</span></p>
            </div>
        </div>
    </div>
</div>
<div class="colorlib-product">
    <div class="container">
        <div class="row wrapper-dt">
<div class="col-12">  <div class="row pad-dt">
        <?php
            while ($row=(mysqli_fetch_array($products))) { $price_sale=price_sale($row['MaSP'],$row['DonGia']);?>
            <div class="col-3 col-dt">
              <a href="?view=product-detail&id=<?php echo $row['MaSP'] ?>">
                <div class="item">
                  <div class="product-lable">
                    <?php $price_sale=price_sale($row['MaSP'],$row['DonGia']); if($price_sale < $row['DonGia']) { 
                      echo '<span>Giảm '.number_format( $row['DonGia'] - $price_sale).'đ </span>';}?>
                  </div>
                  <div><img src="webroot/image/sanpham/<?php echo $row['AnhNen']; ?>"></div>
                  <div class="item-name"><p> <?php echo $row['TenSP']; ?> </p></div>
                  <div class="item-price">
                    <p> <?php echo number_format($price_sale,0).'đ'; ?> </p>
                    <h6> <?php if(number_format($row['DonGia']) !== number_format($price_sale)) {echo number_format($row['DonGia']).'đ';} ;  ?> </h6> 
                  </div>
                </div>
              </a>
            </div> 
            <?php }?>      
        </div> </div>
        </div>
        
    </div>
</div>
<div class="flexslider">
    <img src="webroot/image/slider/brand-2.jpg" alt="" width="100%" height="50%">
</div>
<div class="flexslider">
    <h2 class="text-center">SPONSORSHIP</h2>
    <p class="text-center">Ngắm nhìn những bức ảnh từ khách hàng của chúng tôi</p>
    <div class="row justify-content-center">
        <div class="col-6 col-sm-4 col-md-2 p-2">
            <img src="webroot/image/brand/spon1.jpeg" class="img-fluid" alt="Sponsor 1">
        </div>
        <div class="col-6 col-sm-4 col-md-2 p-2">
            <img src="webroot/image/brand/spon2.jpeg" class="img-fluid" alt="Sponsor 2">
        </div>
        <div class="col-6 col-sm-4 col-md-2 p-2">
            <img src="webroot/image/brand/spon3.jpeg" class="img-fluid" alt="Sponsor 3">
        </div>
        <div class="col-6 col-sm-4 col-md-2 p-2">
            <img src="webroot/image/brand/spon4.jpeg" class="img-fluid" alt="Sponsor 4">
        </div>
        <div class="col-6 col-sm-4 col-md-2 p-2">
            <img src="webroot/image/brand/spon5.jpeg" class="img-fluid" alt="Sponsor 5">
        </div>
    </div>
</div>