<?php
if (!isset($_SESSION['laclac_khachang'])) {
    header('location:?view=login');
} else {
    $kh = $_SESSION['laclac_khachang'];
}
?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="?view">Trang Chu</a></span> / <span>Tai Khoan</span></p>
            </div>
        </div>
    </div>
</div>

<div class="nhh-user-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nhh-user-tabs">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab">Thong Tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab">Don Hang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-info" href="?view=logout">Dang Xuat</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        <!-- Profile Info -->
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel">
                            <form class="form-horizontal" action="" method="post" id="login_form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $kh['Email']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ho va Ten</label>
                                            <input type="text" class="form-control" name="ten" placeholder="Ho va Ten" value="<?php echo $kh['TenKH']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>So Dien Thoai</label>
                                            <input type="text" class="form-control" name="sdt" placeholder="SDT" value="<?php echo $kh['SDT']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dia Chi</label>
                                            <input type="text" class="form-control" name="dc" placeholder="Dia Chi" value="<?php echo $kh['DiaChi']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mat Khau</label>
                                            <div class="password-input">
                                                <input type="password" id="password" name="password" class="form-control" value="<?php echo $kh['MatKhau']; ?>">
                                                <div class="toggle-password" onclick="togglePasswordVisibility()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path d="M12 3.75c-4.1 0-7.57 3.24-9 7.5 1.43 4.26 4.9 7.5 9 7.5s7.57-3.24 9-7.5c-1.43-4.26-4.9-7.5-9-7.5zm0 12c-2.48 0-4.5-2.02-4.5-4.5s2.02-4.5 4.5-4.5 4.5 2.02 4.5 4.5-2.02 4.5-4.5 4.5zm0-7.5c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5zm0 3c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top:8px;">
                                    <input hidden name="makh" value="<?php echo $kh['MaKH']; ?>">
                                    <button type="submit" name="luu" class="nhh-btn nhh-btn-dark nhh-btn-sm" form="login_form">
                                        <i class="fas fa-save"></i> Luu Thong Tin
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Orders -->
                        <div class="tab-pane fade" id="pills-review" role="tabpanel">
                            <?php $bill = bill_user($kh['MaKH']); ?>
                            <?php if ($bill == false): ?>
                            <p style="color:var(--muted);padding:24px 0;">Ban chua co don hang nao.</p>
                            <?php else: ?>
                            <div style="overflow-x:auto;">
                                <table class="table nhh-orders-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>San Pham</th>
                                            <th>Size / Mau</th>
                                            <th>Don Gia</th>
                                            <th>Tong Cong</th>
                                            <th>Tinh Trang</th>
                                            <th>Ngay Dat</th>
                                            <th>Ngay Giao</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $stt = 1; while ($row = mysqli_fetch_array($bill)): ?>
                                        <tr>
                                            <td><?php echo $stt++; ?></td>
                                            <td>
                                                <?php $bill_detail = bill_detail($row['MaHD']);
                                                while ($row1 = mysqli_fetch_array($bill_detail)):
                                                    $prod = mysqli_fetch_array(product($row1['MaSP'])); ?>
                                                <p style="margin:0;font-size:13px;"><?php echo $row1['SoLuong'] . ' x ' . $prod['TenSP']; ?></p>
                                                <?php endwhile; ?>
                                            </td>
                                            <td>
                                                <?php $bill_detail = bill_detail($row['MaHD']);
                                                while ($row1 = mysqli_fetch_array($bill_detail)): ?>
                                                <p style="margin:0;font-size:13px;"><?php echo $row1['Size'] . ' / ' . $row1['MaMau']; ?></p>
                                                <?php endwhile; ?>
                                            </td>
                                            <td>
                                                <?php $bill_detail = bill_detail($row['MaHD']);
                                                while ($row1 = mysqli_fetch_array($bill_detail)): ?>
                                                <p style="margin:0;font-size:13px;"><?php echo number_format($row1['ThanhTien']); ?>d</p>
                                                <?php endwhile; ?>
                                            </td>
                                            <td style="font-weight:700;color:var(--blue);"><?php echo number_format($row['TongTien']); ?>d</td>
                                            <td><span class="nhh-status-badge"><?php echo $row['TinhTrang']; ?></span></td>
                                            <td style="font-size:12px;color:var(--muted);"><?php echo $row['NgayDat']; ?></td>
                                            <td style="font-size:12px;color:var(--muted);"><?php echo $row['NgayGiao']; ?></td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['luu'])) {
    $id = $_POST['makh'];
    $ten = $_POST['ten'];
    $sdt = $_POST['sdt'];
    $matkhau = $_POST['password'];
    $dc = $_POST['dc'];
    $rs = update_user($id, $ten, $sdt, $dc, $matkhau);
    if ($rs) {
        $_SESSION['laclac_khachang'] = selectKH($id);
        header('location:?view=user&alert=da luu');
    } else {
        echo '<script>alert("Loi!!!")</script>';
    }
}
?>

<?php if (isset($_GET['alert'])): ?>
<div id="alertDiv" class="alert alert-success alert-dismissible fade custom-alert" role="alert">
    <strong><?php if ($_GET['alert'] !== '') echo ' ' . $_GET['alert']; ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
