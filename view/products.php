<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="?view">Trang Chu</a></span> / <span>Tat Ca San Pham</span></p>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-top:0;">
    <div class="nhh-collection-header">
        <h1>Tat Ca San Pham</h1>
        <p>Kham pha toan bo bo suu tap thoi trang cua NHH</p>
    </div>

    <?php $product = productAll(); ?>

    <div class="nhh-products-grid">
        <?php while ($row = mysqli_fetch_array($product)) {
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
        <div id="data_sp"></div>
    </div>

    <div id="loading" style="display:none">
        <img src="webroot/image/loader.gif" alt="Loading...">
    </div>

    <form id="load_sp" class="row">
        <input type="text" name="page" id="page" value="1" hidden>
        <input type="text" name="rowCount" id="rowCount" value="10" hidden>
        <div class="nhh-load-more-wrap">
            <button type="button" id="xemthem" class="nhh-btn nhh-btn-primary xemthem">Xem Them San Pham</button>
        </div>
    </form>
</div>
