<?php
if (isset($_GET['id']) == false) { header('Location:?view'); }
$id = $_GET['id'];
if (product($id) == false) { header('Location:?view'); }
$product = mysqli_fetch_array(product($id));
$price_sale = price_sale($product['MaSP'], $product['DonGia']);
$product_detail_size  = product_detail_size($id);
$product_detail_color = product_detail_color($id);
$product_review       = product_review($id);
if (product_detail_image($id) == false) {
    $product_detail_image = ['Anh1' => 'loader.gif', 'Anh2' => 'loader.gif', 'Anh3' => 'loader.gif', 'Anh4' => 'loader.gif'];
} else {
    $product_detail_image = mysqli_fetch_array(product_detail_image($id));
}
?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread">
                    <span><a href="?view">Trang Chu</a></span> /
                    <span><a href="?view=products">San Pham</a></span> /
                    <span><?php echo $product['TenSP']; ?></span>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="nhh-pdp">
    <div class="container">
        <div class="row">

            <!-- Images -->
            <div class="col-md-7 nhh-pdp-images">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="product-entry">
                            <img src="webroot/image/sanpham/<?php echo $product_detail_image['Anh1']; ?>" class="img-fluid" alt="<?php echo $product['TenSP']; ?>">
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry">
                            <img src="webroot/image/sanpham/<?php echo $product_detail_image['Anh2']; ?>" class="img-fluid" alt="<?php echo $product['TenSP']; ?>">
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry">
                            <img src="webroot/image/sanpham/<?php echo $product_detail_image['Anh3']; ?>" class="img-fluid" alt="<?php echo $product['TenSP']; ?>">
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry">
                            <img src="webroot/image/sanpham/<?php echo $product_detail_image['Anh4']; ?>" class="img-fluid" alt="<?php echo $product['TenSP']; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info -->
            <div class="col-md-5">
                <div class="nhh-pdp-info">
                    <h1 class="nhh-pdp-title"><?php echo $product['TenSP']; ?></h1>

                    <div class="nhh-pdp-price-wrap">
                        <span class="nhh-pdp-price"><?php echo number_format($price_sale, 0); ?>&#8363;</span>
                        <?php if (number_format($product['DonGia']) !== number_format($price_sale)): ?>
                        <span class="nhh-pdp-price-old"><?php echo number_format($product['DonGia'], 0); ?>&#8363;</span>
                        <?php endif; ?>
                    </div>

                    <p class="nhh-pdp-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>

                    <form action="?view=addtocart" method="post" id="form1">
                        <!-- Size -->
                        <span class="nhh-attr-label">Size</span>
                        <div class="nhh-options-wrap">
                            <?php while ($row = mysqli_fetch_array($product_detail_size)): ?>
                            <div class="box-size">
                                <input type="radio" class="custom-control-input" id="<?php echo $row['MaSize']; ?>" name="size" value="<?php echo $row['MaSize']; ?>" required>
                                <label for="<?php echo $row['MaSize']; ?>"><?php echo $row['MaSize']; ?></label>
                            </div>
                            <?php endwhile; ?>
                        </div>

                        <!-- Color -->
                        <span class="nhh-attr-label">Mau Sac</span>
                        <div class="nhh-options-wrap">
                            <?php while ($row = mysqli_fetch_array($product_detail_color)): ?>
                            <div class="box-mau">
                                <input type="radio" class="custom-control-input" id="<?php echo $row['MaMau']; ?>" name="mau" value="<?php echo $row['MaMau']; ?>" required>
                                <label for="<?php echo $row['MaMau']; ?>"><?php echo $row['MaMau']; ?></label>
                            </div>
                            <?php endwhile; ?>
                        </div>

                        <!-- Quantity -->
                        <span class="nhh-attr-label">So Luong</span>
                        <div class="nhh-qty-wrap">
                            <button type="button" class="nhh-qty-btn" id="tru"><i class="fas fa-minus"></i></button>
                            <input type="text" id="soluong" name="soluong" class="nhh-qty-input" value="1" min="1" max="10">
                            <button type="button" class="nhh-qty-btn" id="cong"><i class="fas fa-plus"></i></button>
                        </div>

                        <input type="hidden" name="idproduct" form="form1" value="<?php echo $product['MaSP']; ?>">
                        <input type="hidden" name="dongia" form="form1" value="<?php echo number_format($price_sale); ?>">

                        <button type="submit" form="form1" name="addtocart" class="nhh-btn nhh-btn-primary nhh-btn-full" style="margin-top:8px;">
                            <i class="fas fa-shopping-bag"></i> Them Vao Gio Hang
                        </button>
                    </form>
                </div>
            </div>

        </div><!-- /row -->

        <!-- Tabs: Description & Reviews -->
        <div class="row" style="margin-top:48px;">
            <div class="col-12 nhh-tabs">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab">Mo Ta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab">Danh Gia</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Description -->
                    <div class="tab-pane fade show active" id="pills-description" role="tabpanel">
                        <p><?php echo $product['MoTa']; ?></p>
                        <p><strong>Huong dan bao quan:</strong></p>
                        <ul style="color:var(--muted);font-size:14px;padding-left:20px;line-height:2;">
                            <li>Khong dung hoa chat tay</li>
                            <li>Ui o nhiet do thich hop, han che dung may say</li>
                            <li>Giat o che do binh thuong, voi do co mau tuong tu</li>
                        </ul>
                    </div>
                    <!-- Reviews -->
                    <div class="tab-pane fade" id="pills-review" role="tabpanel">
                        <div class="nhh-review-form">
                            <form action="?view=addtoreview" method="post" id="form2">
                                <textarea name="noidung" id="noidung" placeholder="Viet danh gia cua ban..."></textarea>
                                <input type="hidden" name="masp" form="form2" value="<?php echo $product['MaSP']; ?>">
                                <div style="margin-top:10px;">
                                    <button form="form2" name="action" value="binhluan" type="submit" class="nhh-btn nhh-btn-primary nhh-btn-sm">
                                        <i class="fas fa-paper-plane"></i> Gui Danh Gia
                                    </button>
                                </div>
                            </form>
                        </div>

                        <?php if ($product_review == false): ?>
                        <p style="color:var(--muted);font-size:14px;">Chua co danh gia nao. Hay la nguoi dau tien!</p>
                        <?php else: ?>
                        <p style="font-weight:600;margin-bottom:16px;"><?php echo mysqli_num_rows($product_review); ?> Danh Gia</p>
                        <?php while ($row = mysqli_fetch_array($product_review)):
                            $rowkh = selectKH($row['MaKH']); ?>
                        <div class="nhh-review-item">
                            <div class="nhh-review-avatar" style="background-image:url('webroot/image/logo/user.png')"></div>
                            <div class="nhh-review-body">
                                <h4>
                                    <span><?php echo $rowkh['TenKH']; ?></span>
                                    <span class="review-date"><?php echo $row['ThoiGian']; ?></span>
                                </h4>
                                <p class="nhh-review-stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                                <p><?php echo $row['NoiDung']; ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <section class="nhh-section">
            <div class="nhh-section-heading">
                <h2>San Pham Tuong Tu</h2>
            </div>
            <?php $product_rand = product_rand(); ?>
            <div class="nhh-products-grid">
                <?php while ($row = mysqli_fetch_array($product_rand)) {
                    $ps = price_sale($row['MaSP'], $row['DonGia']);
                ?>
                <div class="nhh-product-card">
                    <a href="?view=product-detail&id=<?php echo $row['MaSP']; ?>">
                        <div class="nhh-product-img-wrap">
                            <?php if ($ps < $row['DonGia']): ?>
                            <span class="nhh-sale-badge">Giam <?php echo number_format($row['DonGia'] - $ps); ?>d</span>
                            <?php endif; ?>
                            <img src="webroot/image/sanpham/<?php echo $row['AnhNen']; ?>" alt="<?php echo $row['TenSP']; ?>" loading="lazy">
                        </div>
                        <div class="nhh-product-info">
                            <p class="nhh-product-name"><?php echo $row['TenSP']; ?></p>
                            <div class="nhh-product-prices">
                                <span class="nhh-price-current"><?php echo number_format($ps, 0); ?>d</span>
                                <?php if (number_format($row['DonGia']) !== number_format($ps)): ?>
                                <span class="nhh-price-old"><?php echo number_format($row['DonGia']); ?>d</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </section>

    </div><!-- /container -->
</div><!-- /nhh-pdp -->
