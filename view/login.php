<?php
include("../model/database.php");
@session_start();
if (isset($_SESSION['laclac_khachang'])) {
    header('location:../?view');
    exit;
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    $checklogin = checklogin($email, $pass);
    if ($checklogin == false) {
        $login_error = 'Sai tai khoan hoac mat khau. Xin moi nhap lai.';
    } else {
        $row = mysqli_fetch_array($checklogin);
        $_SESSION['laclac_khachang'] = $row;
        header('location:../?view');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Dang Nhap — NHH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <style>
        body { padding-top: 0 !important; }
    </style>
</head>
<body>
    <div class="nhh-auth-page">
        <div class="nhh-auth-card">
            <div class="nhh-auth-logo">
                <a href="../?view" style="text-decoration:none;">
                    <span class="nhh-auth-logo-brand">N<span>HH</span></span>
                    <span class="nhh-auth-logo-sub">Thoi Trang So 1 Chau A</span>
                </a>
            </div>
            <h2 class="nhh-auth-title">Dang Nhap</h2>

            <?php if (isset($login_error)): ?>
            <div style="background:#FEE2E2;color:#B91C1C;border-radius:8px;padding:12px 16px;font-size:13px;margin-bottom:16px;border-left:3px solid #EF4444;">
                <i class="fas fa-exclamation-circle"></i> <?php echo $login_error; ?>
            </div>
            <?php endif; ?>

            <form method="post" action="login.php">
                <div class="nhh-form-group">
                    <label>Email</label>
                    <div class="nhh-auth-input-group">
                        <i class="fas fa-envelope nhh-input-icon"></i>
                        <input type="email" name="email" placeholder="email@example.com" required
                               value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    </div>
                </div>
                <div class="nhh-form-group">
                    <label>Mat Khau</label>
                    <div class="nhh-auth-input-group password-input">
                        <i class="fas fa-lock nhh-input-icon"></i>
                        <input type="password" name="password" placeholder="Nhap mat khau" required>
                        <div class="toggle-password" onclick="this.previousElementSibling.type = this.previousElementSibling.type === 'password' ? 'text' : 'password'">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 3.75c-4.1 0-7.57 3.24-9 7.5 1.43 4.26 4.9 7.5 9 7.5s7.57-3.24 9-7.5c-1.43-4.26-4.9-7.5-9-7.5zm0 12c-2.48 0-4.5-2.02-4.5-4.5s2.02-4.5 4.5-4.5 4.5 2.02 4.5 4.5-2.02 4.5-4.5 4.5zm0-7.5c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5zm0 3c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div style="margin-top:8px;">
                    <button type="submit" name="login" class="nhh-btn nhh-btn-primary nhh-btn-full">
                        Dang Nhap
                    </button>
                </div>
            </form>
            <div class="nhh-auth-links">
                Chua co tai khoan? <a href="../?view=sign-up">Dang Ky Ngay</a>
            </div>
            <div class="nhh-auth-links" style="margin-top:8px;">
                <a href="#">Quen mat khau?</a>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
