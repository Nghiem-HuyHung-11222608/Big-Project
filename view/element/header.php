<!DOCTYPE html>
<html lang="vi">

<head>
    <title>NHH — THỜI TRANG SỐ 1 CHÂU Á</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts: Inter + Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="webroot/css/template/animate.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="webroot/css/template/icomoon.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="webroot/css/template/ionicons.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="webroot/css/templats/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="webroot/css/template/magnific-popup.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="webroot/css/template/flexslider.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="webroot/css/template/owl.carousel.min.css">
    <link rel="stylesheet" href="webroot/css/template/owl.theme.default.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="webroot/css/template/bootstrap-datepicker.css">
    <!-- Flaticons -->
    <link rel="stylesheet" href="webroot/css/template/fonts/flaticon/font/flaticon.css">
    <!-- Colorlib Template Style -->
    <link rel="stylesheet" href="webroot/css/template/style.css">
    <!-- NHH Custom Style (overrides) -->
    <link rel="stylesheet" href="webroot/css/style.css">

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css">
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

    <!-- jQuery (must be first) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
    <?php
    $dem = 0;
    if (isset($_SESSION['cart_product'])) {
        foreach ($_SESSION['cart_product'] as $item_cart) {
            $dem = $dem + $item_cart['SoLuong'];
        }
    }
    ?>

    <!-- Mobile Drawer Overlay -->
    <div class="nhh-drawer-overlay" id="drawerOverlay"></div>

    <!-- Mobile Slide-out Drawer -->
    <div class="nhh-drawer" id="mobileDrawer">
        <div class="nhh-drawer-head">
            <span class="nhh-drawer-logo">N<span>HH</span></span>
            <button class="nhh-drawer-close" id="drawerClose" aria-label="Dong menu">&#x2715;</button>
        </div>
        <nav class="nhh-drawer-nav">
            <a href="?view">Trang Chu</a>
            <a href="?view=about">Gioi Thieu</a>
            <?php
            $category2 = categorys();
            while ($row2 = mysqli_fetch_array($category2)) {
                echo '<a href="?view=products-category&id=' . $row2['MaNCC'] . '">' . $row2['TenNCC'] . '</a>';
            }
            ?>
            <a href="?view=products">Tat Ca San Pham</a>
            <a href="?view=contact">Lien He</a>
        </nav>
        <div class="nhh-drawer-footer">
            <i class="fas fa-phone" style="color:var(--blue)"></i>&nbsp; (+84) 837 406 888
        </div>
    </div>

    <!-- Page Wrapper -->
    <div id="page">

        <!-- Sticky Header -->
        <header class="nhh-header" id="nhhHeader">
            <div class="nhh-header-inner">

                <!-- Left: Hamburger + Desktop Nav -->
                <div class="nhh-header-left">
                    <button class="nhh-hamburger" id="hamburgerBtn" aria-label="Mo menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <nav>
                        <ul class="nhh-desktop-nav">
                            <li><a href="?view">Trang Chu</a></li>
                            <li><a href="?view=about">Gioi Thieu</a></li>
                            <?php
                            $category = categorys();
                            while ($row = mysqli_fetch_array($category)) {
                                echo '<li><a href="?view=products-category&id=' . $row['MaNCC'] . '">' . $row['TenNCC'] . '</a></li>';
                            }
                            ?>
                            <li><a href="?view=products">Tat Ca</a></li>
                            <li><a href="?view=contact">Lien He</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Center: Logo -->
                <a href="?view" class="nhh-logo">
                    <span class="nhh-logo-brand">N<span>HH</span></span>
                    <span class="nhh-logo-tagline">Thoi Trang So 1 Chau A</span>
                </a>

                <!-- Right: Icons -->
                <div class="nhh-header-right">
                    <a href="?view=user" class="nhh-icon-btn" title="Tai khoan">
                        <i class="fas fa-user"></i>
                    </a>
                    <a href="?view=cart" class="nhh-icon-btn" title="Gio hang">
                        <i class="fas fa-shopping-bag"></i>
                        <?php if ($dem > 0): ?>
                        <span class="nhh-cart-badge"><?php echo $dem; ?></span>
                        <?php endif; ?>
                    </a>
                </div>

            </div>
        </header>

        <!-- Scroll-to-top button -->
        <a href="#" class="nhh-scroll-top" id="scrollTopBtn" aria-label="Len dau trang">
            <i class="fas fa-arrow-up"></i>
        </a>

    <script>
        // Sticky header scroll effect + scroll-to-top
        (function() {
            var header = document.getElementById('nhhHeader');
            var scrollBtn = document.getElementById('scrollTopBtn');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                if (window.scrollY > 300) {
                    scrollBtn.classList.add('visible');
                } else {
                    scrollBtn.classList.remove('visible');
                }
            });
            scrollBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        })();

        // Hamburger slide-out drawer
        (function() {
            var btn    = document.getElementById('hamburgerBtn');
            var drawer = document.getElementById('mobileDrawer');
            var overlay = document.getElementById('drawerOverlay');
            var closeBtn = document.getElementById('drawerClose');

            function openDrawer() {
                drawer.classList.add('open');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
            function closeDrawer() {
                drawer.classList.remove('open');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            }
            btn.addEventListener('click', openDrawer);
            closeBtn.addEventListener('click', closeDrawer);
            overlay.addEventListener('click', closeDrawer);
        })();
    </script>
