<!-- ================================================
     HERO SLIDER
     ================================================ -->
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">

            <li style="background-image: url('webroot/image/slider/banner9.jpg');">
                <div class="nhh-hero-overlay"></div>
                <div class="nhh-hero-content">
                    <p class="nhh-hero-eyebrow">Bo Suu Tap Moi 2024</p>
                    <h1 class="nhh-hero-title">Style La<br>Ngon Ngu Cua Ban</h1>
                    <p class="nhh-hero-desc">Kham pha xu huong thoi trang tre trung, hien dai nhat</p>
                    <div class="nhh-hero-actions">
                        <a href="?view=products" class="nhh-btn nhh-btn-white">Kham Pha Ngay &rarr;</a>
                        <a href="?view=products-category&id=1" class="nhh-btn nhh-btn-outline-light">Xem Bo Suu Tap</a>
                    </div>
                </div>
            </li>

            <li style="background-image: url('webroot/image/slider/banner7.jpg');">
                <div class="nhh-hero-overlay"></div>
                <div class="nhh-hero-content">
                    <p class="nhh-hero-eyebrow">Collection Ao — Tops</p>
                    <h1 class="nhh-hero-title">Phong Cach<br>Khong Gioi Han</h1>
                    <p class="nhh-hero-desc">Hang tram mau ao da dang cho moi phong cach</p>
                    <div class="nhh-hero-actions">
                        <a href="?view=products-category&id=1" class="nhh-btn nhh-btn-white">Mua Ngay &rarr;</a>
                    </div>
                </div>
            </li>

            <li style="background-image: url('webroot/image/slider/banner8.jpg');">
                <div class="nhh-hero-overlay"></div>
                <div class="nhh-hero-content">
                    <p class="nhh-hero-eyebrow">Collection Quan — Bottoms</p>
                    <h1 class="nhh-hero-title">Dinh Cao<br>Cua Thanh Lich</h1>
                    <p class="nhh-hero-desc">Lua chon hoan hao cho moi buoi kien</p>
                    <div class="nhh-hero-actions">
                        <a href="?view=products-category&id=2" class="nhh-btn nhh-btn-white">Kham Pha Quan &rarr;</a>
                    </div>
                </div>
            </li>

            <li style="background-image: url('webroot/image/slider/banner6.jpg');">
                <div class="nhh-hero-overlay"></div>
                <div class="nhh-hero-content">
                    <p class="nhh-hero-eyebrow">Phu Kien & Giay Dep</p>
                    <h1 class="nhh-hero-title">Hoan Thien<br>Phong Cach</h1>
                    <p class="nhh-hero-desc">Phu kien dinh cao, giay dep chinh hang</p>
                    <div class="nhh-hero-actions">
                        <a href="?view=products" class="nhh-btn nhh-btn-white">Tat Ca San Pham &rarr;</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</aside>

<!-- ================================================
     FEATURED PRODUCTS
     ================================================ -->
<section class="nhh-section">
    <div class="container">
        <div class="nhh-section-heading">
            <h2>San Pham Noi Bat</h2>
            <p>Nhung san pham duoc yeu thich nhat tai NHH</p>
        </div>
        <?php $product = featuredProductsL4(); ?>
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
        </div>
        <div id="data_sp"></div>
    </div>
</section>

<!-- ================================================
     BRAND BANNER
     ================================================ -->
<div style="overflow:hidden;">
    <img src="webroot/image/slider/brand-2.jpg" alt="NHH Banner" style="width:100%;height:auto;display:block;max-height:320px;object-fit:cover;">
</div>

<!-- ================================================
     NEW PRODUCTS
     ================================================ -->
<section class="nhh-section nhh-section-alt">
    <div class="container">
        <div class="nhh-section-heading">
            <h2>San Pham Moi</h2>
            <p>Cap nhat nhung san pham moi nhat vua ve hang</p>
        </div>
        <?php $product = newsProductsL4(); ?>
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
        </div>
    </div>
</section>

<!-- ================================================
     SPONSORSHIP
     ================================================ -->
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

<!-- ================================================
     BEST SELLING PRODUCTS
     ================================================ -->
<section class="nhh-section">
    <div class="container">
        <div class="nhh-section-heading">
            <h2>San Pham Ban Chay</h2>
            <p>Nhung san pham duoc mua nhieu nhat tai NHH</p>
        </div>
        <?php $product = sellingProductsL4(); ?>
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
        </div>
        <div id="loading" style="display:none">
            <img src="webroot/image/loader.gif" alt="Loading...">
        </div>
        <div style="text-align:center;padding:24px 0 8px;">
            <a href="?view=products" class="nhh-btn nhh-btn-primary">Xem Tat Ca San Pham &rarr;</a>
        </div>
    </div>
</section>

<!-- ================================================
     TIN TUC (NEWS)
     ================================================ -->
<section class="nhh-section nhh-section-alt">
    <div class="container">
        <div class="nhh-section-heading">
            <h2>Tin Tuc & Xu Huong</h2>
            <p>Cap nhat nhung tin tuc moi nhat ve xu huong thoi trang</p>
        </div>
        <div class="nhh-news-grid">
            <div class="nhh-news-card">
                <img src="webroot/image/brand/tt1.jpeg" alt="Form dang tham khao">
                <div class="nhh-news-card-body">
                    <p class="nhh-news-card-tag">Style Guide</p>
                    <p>Form Dang Tham Khao Tai NHH</p>
                </div>
            </div>
            <div class="nhh-news-card">
                <img src="webroot/image/brand/tt2.jpeg" alt="Bao hanh ao da">
                <div class="nhh-news-card-body">
                    <p class="nhh-news-card-tag">Tin Tuc</p>
                    <p>Chinh Sach Bao Hanh Ao Da Tai NHH</p>
                </div>
            </div>
            <div class="nhh-news-card">
                <img src="webroot/image/brand/tt3.jpeg" alt="Giat bao quan">
                <div class="nhh-news-card-body">
                    <p class="nhh-news-card-tag">Huong Dan</p>
                    <p>Huong Dan Cach Giat Bao Quan San Pham NHH</p>
                </div>
            </div>
        </div>
    </div>
</section>
