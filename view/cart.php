<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="?view">Trang Chu</a></span> / <span>Gio Hang</span></p>
            </div>
        </div>
    </div>
</div>

<div class="nhh-cart">
    <div class="container">

        <!-- Progress Steps -->
        <div class="nhh-progress-steps">
            <div class="nhh-step active">
                <div class="nhh-step-num">01</div>
                <span class="nhh-step-label">Gio Hang</span>
            </div>
            <div class="nhh-step">
                <div class="nhh-step-num">02</div>
                <span class="nhh-step-label">Thanh Toan</span>
            </div>
            <div class="nhh-step">
                <div class="nhh-step-num">03</div>
                <span class="nhh-step-label">Hoan Thanh</span>
            </div>
        </div>

        <?php if (isset($_SESSION['cart_product'])): $subtotal = 0; $dem = 0; ?>

        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div style="overflow-x:auto;">
                    <table class="nhh-cart-table">
                        <thead>
                            <tr>
                                <th>San Pham</th>
                                <th>Size</th>
                                <th>Mau</th>
                                <th>Don Gia</th>
                                <th>So Luong</th>
                                <th>Tong</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart_product'] as $item_cart):
                                $product = mysqli_fetch_array(product($item_cart['MaSP']));
                                $number  = str_replace(',', '', $item_cart['DonGia']);
                                $line_total = $number * $item_cart['SoLuong'];
                                $subtotal += $line_total;
                                $dem += $item_cart['SoLuong'];
                            ?>
                            <tr>
                                <td>
                                    <div class="nhh-cart-prod-info">
                                        <div class="nhh-cart-prod-img" style="background-image:url('webroot/image/sanpham/<?php echo $product['AnhNen']; ?>')"></div>
                                        <span class="nhh-cart-prod-name"><?php echo $product['TenSP']; ?></span>
                                    </div>
                                </td>
                                <td style="font-size:13px;color:var(--muted);"><?php echo $item_cart['Size']; ?></td>
                                <td style="font-size:13px;color:var(--muted);"><?php echo $item_cart['Mau']; ?></td>
                                <td style="font-size:14px;font-weight:600;color:var(--blue);"><?php echo $item_cart['DonGia']; ?>d</td>
                                <td>
                                    <input type="text" class="nhh-cart-qty" value="<?php echo $item_cart['SoLuong']; ?>" readonly>
                                </td>
                                <td style="font-size:14px;font-weight:700;color:var(--blue);"><?php echo number_format($line_total); ?>d</td>
                                <td>
                                    <form action="?view=addtocart" method="post" id="del_<?php echo $item_cart['MaSP'] . '_' . $item_cart['Size'] . '_' . $item_cart['Mau']; ?>">
                                        <input type="hidden" name="productID" value="<?php echo $item_cart['MaSP']; ?>">
                                        <input type="hidden" name="size" value="<?php echo $item_cart['Size']; ?>">
                                        <input type="hidden" name="mau" value="<?php echo $item_cart['Mau']; ?>">
                                        <button type="submit" name="delete_cart_product" class="nhh-delete-btn" value="xoa" title="Xoa">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div style="margin-top:20px;">
                    <a href="?view=products" class="nhh-btn nhh-btn-dark nhh-btn-sm">
                        <i class="fas fa-arrow-left"></i> Tiep Tuc Mua Sam
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="col-lg-4" style="margin-top:24px;">
                <div class="nhh-cart-summary">
                    <h3>Tom Tat Don Hang</h3>

                    <!-- Coupon -->
                    <div class="nhh-coupon-group">
                        <input type="text" id="Coupon" class="nhh-coupon-input" placeholder="Ma giam gia...">
                        <button type="button" id="Apply_Coupon" class="nhh-btn nhh-btn-primary nhh-btn-sm">Ap dung</button>
                    </div>
                    <p><span id="coupon2" style="font-size:13px;color:var(--green);"></span></p>

                    <div class="nhh-summary-row">
                        <span>Tam tinh</span>
                        <span id="subtotal"><?php echo number_format($subtotal); ?>d</span>
                    </div>
                    <div class="nhh-summary-row">
                        <span>Ma giam gia</span>
                        <span id="coupon_apply">0d</span>
                    </div>
                    <div class="nhh-summary-row" style="border:none;">
                        <span>Van chuyen</span>
                        <span style="color:var(--green);">Mien phi</span>
                    </div>
                    <div class="nhh-summary-total">
                        <span>Tong Cong</span>
                        <span class="nhh-total-amount" id="total"><?php echo number_format($subtotal); ?>d</span>
                    </div>

                    <form action="?view=thanhtoan2" method="post" style="margin-top:20px;">
                        <input type="hidden" name="sl" value="<?php echo $dem; ?>">
                        <input type="hidden" name="tamtinh" value="<?php echo number_format($subtotal); ?>">
                        <input type="hidden" name="tiensale" id="tiensale" value="0">
                        <input type="hidden" name="tongtien" id="tongtien" value="<?php echo $subtotal; ?>">
                        <button type="submit" name="thanhtoan" value="2" class="nhh-btn nhh-btn-primary nhh-btn-full">
                            <i class="fas fa-lock"></i> Tien Hanh Thanh Toan
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <?php else: ?>
        <div class="nhh-empty-cart">
            <i class="fas fa-shopping-bag"></i>
            <h3>Gio hang cua ban dang trong</h3>
            <p>Kham pha cac san pham tuyet voi cua chung toi</p>
            <a href="?view=products" class="nhh-btn nhh-btn-primary" style="margin-top:20px;">
                <i class="fas fa-arrow-right"></i> Mua Sam Ngay
            </a>
        </div>
        <?php endif; ?>

    </div>
</div>

<?php if (isset($_GET['alert'])): ?>
<div id="alertDiv" class="alert alert-success alert-dismissible fade custom-alert" role="alert">
    <strong><?php if ($_GET['alert'] !== '') echo ' ' . $_GET['alert']; ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<!-- Sponsors -->
<section class="nhh-sponsors">
    <div class="container">
        <h2 class="nhh-sponsors-title">Sponsorship</h2>
        <p class="nhh-sponsors-desc">Ngam nhin nhung buc anh tu khach hang cua chung toi</p>
        <div class="nhh-sponsor-grid">
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon1.jpeg" alt="Sponsor 1"></div>
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon2.jpeg" alt="Sponsor 2"></div>
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon3.jpeg" alt="Sponsor 3"></div>
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon4.jpeg" alt="Sponsor 4"></div>
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon5.jpeg" alt="Sponsor 5"></div>
        </div>
    </div>
</section>
