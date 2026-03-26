<?php
if (isset($_SESSION['laclac_khachang']) == false) {
    header('location:?view=login');
} else {
    $kh = $_SESSION['laclac_khachang'];
}
?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="?view">Trang Chu</a></span> / <span>Thanh Toan</span></p>
            </div>
        </div>
    </div>
</div>

<div class="nhh-checkout">
    <div class="container">

        <!-- Progress Steps -->
        <div class="nhh-progress-steps">
            <div class="nhh-step active">
                <div class="nhh-step-num">01</div>
                <span class="nhh-step-label">Gio Hang</span>
            </div>
            <div class="nhh-step active">
                <div class="nhh-step-num">02</div>
                <span class="nhh-step-label">Thanh Toan</span>
            </div>
            <div class="nhh-step">
                <div class="nhh-step-num">03</div>
                <span class="nhh-step-label">Hoan Thanh</span>
            </div>
        </div>

        <div class="row">
            <!-- Billing Form -->
            <div class="col-lg-7">
                <h2 class="nhh-checkout-form-title">Chi Tiet Thanh Toan</h2>
                <form action="?view=order" method="post" id="form_order">
                    <div class="row">
                        <div class="col-12">
                            <div class="nhh-form-group">
                                <label for="fname">Ho va Ten</label>
                                <input type="text" id="fname" name="fname" class="nhh-form-control" placeholder="Ho va Ten" required value="<?php echo $kh['TenKH']; ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="nhh-form-group">
                                <label for="address">Dia Chi Giao Hang</label>
                                <input type="text" id="address" name="address" class="nhh-form-control" placeholder="So nha, duong, quan/huyen, tinh/thanh pho" required value="<?php echo $kh['DiaChi']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nhh-form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="nhh-form-control" placeholder="email@example.com" required value="<?php echo $kh['Email']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nhh-form-group">
                                <label for="zippostalcode">So Dien Thoai</label>
                                <input type="text" id="zippostalcode" name="phone" class="nhh-form-control" placeholder="0xxx xxx xxx" required value="<?php echo $kh['SDT']; ?>">
                            </div>
                        </div>
                        <input type="hidden" name="tongtien" value="<?php echo $_POST['tongtien']; ?>">
                    </div>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-5">
                <div class="nhh-checkout-summary">
                    <h2>Don Hang Cua Ban</h2>
                    <ul>
                        <li>
                            <span><?php echo $_POST['sl']; ?> san pham</span>
                            <span><?php echo $_POST['tamtinh']; ?>d</span>
                        </li>
                        <li>
                            <span>Ma giam gia</span>
                            <span><?php echo number_format($_POST['tiensale']); ?>d</span>
                        </li>
                        <li>
                            <span>Van chuyen</span>
                            <span style="color:#86efac;">Mien phi</span>
                        </li>
                        <li class="nhh-order-total">
                            <span>Tong Cong</span>
                            <span style="font-size:20px;color:#93C5FD;"><?php echo number_format($_POST['tongtien']); ?>d</span>
                        </li>
                    </ul>

                    <!-- Payment Method -->
                    <h2 style="font-size:16px;margin-top:24px;padding-bottom:12px;border-bottom:1px solid rgba(255,255,255,0.15);">Phuong Thuc Thanh Toan</h2>
                    <div class="nhh-payment-option">
                        <label>
                            <input type="radio" name="optradio" checked> Thanh toan khi nhan hang (COD)
                        </label>
                    </div>
                    <div class="nhh-payment-option" style="opacity:0.5;">
                        <label>
                            <input type="radio" name="optradio" disabled> Thanh toan online (coming soon)
                        </label>
                    </div>

                    <div style="margin-top:24px;">
                        <button class="nhh-btn nhh-btn-primary nhh-btn-full" type="submit" name="order" form="form_order">
                            <i class="fas fa-lock"></i> Dat Hang Ngay
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
