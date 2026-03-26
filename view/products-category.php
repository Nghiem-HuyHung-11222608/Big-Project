<?php
$view = $_GET['view'];
switch ($view) {
    case 'products-category':
        $products = product_category($_GET['id']);
        break;
    case 'products-search':
        $products = product_search($_POST['key']);
        break;
    default:
        break;
}
?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="?view">Trang Chu</a></span> / <span>Bo Suu Tap</span></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="nhh-collection-header">
        <?php if ($view === 'products-search'): ?>
        <h1>Ket Qua Tim Kiem</h1>
        <p>Hien thi ket qua phu hop voi tu khoa cua ban</p>
        <?php else: ?>
        <h1>Bo Suu Tap</h1>
        <p>Kham pha nhung san pham trong bo suu tap nay</p>
        <?php endif; ?>
    </div>

    <div class="nhh-products-grid">
        <?php while ($row = mysqli_fetch_array($products)) {
            $price_sale = price_sale($row['MaSP'], $row['DonGia']);
        ?>
        <div class="nhh-product-card">
            <a href="?view=product-detail&id=<?php echo $row['MaSP']; ?>">
                <div class="nhh-product-img-wrap">
                    <?php if ($price_sale < $row['DonGia']): ?>
                    <span class="nhh-sale-badge">Giam <?php echo number_format($row['DonGia'] - $price_sale); ?>d</span>
                    <?php endif; ?>
                    <img src="webroot/image/sanpham/<?php echo $row['AnhNen']; ?>" alt="<?php echo $row['TenSP']; ?>" loading="lazy">
                </div>
                <div class="nhh-product-info">
                    <p class="nhh-product-name"><?php echo $row['TenSP']; ?></p>
                    <div class="nhh-product-prices">
                        <span class="nhh-price-current"><?php echo number_format($price_sale, 0); ?>d</span>
                        <?php if (number_format($row['DonGia']) !== number_format($price_sale)): ?>
                        <span class="nhh-price-old"><?php echo number_format($row['DonGia']); ?>d</span>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>

    <!-- Sponsors strip -->
    <section class="nhh-sponsors" style="margin:48px 0 0;border-radius:12px;">
        <div class="nhh-sponsor-grid">
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon1.jpeg" alt="Sponsor 1"></div>
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon2.jpeg" alt="Sponsor 2"></div>
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon3.jpeg" alt="Sponsor 3"></div>
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon4.jpeg" alt="Sponsor 4"></div>
            <div class="nhh-sponsor-item"><img src="webroot/image/brand/spon5.jpeg" alt="Sponsor 5"></div>
        </div>
    </section>
</div>
