<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="?view">Trang Chu</a></span> / <span>Dang Ky</span></p>
            </div>
        </div>
    </div>
</div>

<div class="nhh-auth-page" style="padding-top:60px;padding-bottom:60px;">
    <div class="nhh-auth-card">
        <div class="nhh-auth-logo">
            <span class="nhh-auth-logo-brand">N<span>HH</span></span>
            <span class="nhh-auth-logo-sub">Thoi Trang So 1 Chau A</span>
        </div>
        <h2 class="nhh-auth-title">Tao Tai Khoan</h2>
        <form action="?view=sign_up" method="post">
            <div class="nhh-form-group">
                <label>Ho va Ten</label>
                <div class="nhh-auth-input-group">
                    <i class="fas fa-user nhh-input-icon"></i>
                    <input type="text" name="name" placeholder="Nguyen Van A" required>
                </div>
            </div>
            <div class="nhh-form-group">
                <label>Email</label>
                <div class="nhh-auth-input-group">
                    <i class="fas fa-envelope nhh-input-icon"></i>
                    <input type="email" name="email" placeholder="email@example.com" required>
                </div>
            </div>
            <div class="nhh-form-group">
                <label>So Dien Thoai</label>
                <div class="nhh-auth-input-group">
                    <i class="fas fa-phone nhh-input-icon"></i>
                    <input type="text" id="sdt" name="sdt" placeholder="0xxx xxx xxx" required>
                </div>
            </div>
            <div class="nhh-form-group">
                <label>Dia Chi</label>
                <div class="nhh-auth-input-group">
                    <i class="fas fa-location-dot nhh-input-icon"></i>
                    <input type="text" id="address" name="address" placeholder="So nha, duong, tinh/thanh pho" required>
                </div>
            </div>
            <div class="nhh-form-group">
                <label>Mat Khau</label>
                <div class="nhh-auth-input-group password-input">
                    <i class="fas fa-lock nhh-input-icon"></i>
                    <input type="password" id="password" name="password" placeholder="Nhap mat khau" required>
                    <div class="toggle-password" onclick="togglePasswordVisibility()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 3.75c-4.1 0-7.57 3.24-9 7.5 1.43 4.26 4.9 7.5 9 7.5s7.57-3.24 9-7.5c-1.43-4.26-4.9-7.5-9-7.5zm0 12c-2.48 0-4.5-2.02-4.5-4.5s2.02-4.5 4.5-4.5 4.5 2.02 4.5 4.5-2.02 4.5-4.5 4.5zm0-7.5c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5zm0 3c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div style="margin-top:8px;">
                <button type="submit" name="signup" class="nhh-btn nhh-btn-primary nhh-btn-full">
                    Tao Tai Khoan Ngay
                </button>
            </div>
        </form>
        <div class="nhh-auth-links">
            Da co tai khoan? <a href="?view=login">Dang Nhap</a>
        </div>
    </div>
</div>
