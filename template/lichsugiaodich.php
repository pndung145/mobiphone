<?php $data["title"] = "Lịch sử giao dịch"; ?>
<?php $isHeader = true; ?>
<?php $isFooter = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php
$databreadcrumb = array(
    array(
        'txt' => 'Trang chủ',
        'link' => '.',
    ),
    array(
        'txt' => 'Lịch sử giao dịch',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-small lichsu__section">
    <div class="uk-container">
        <h1 class="uk-h1 profile__content__title">Lịch sử giao dịch</h1>
        <table class="uk-table uk-table-divider uk-table-responsive lichsu__table">
            <thead>
            <tr>
                <th>Thứ tự</th>
                <th>Ngày</th>
                <th>Loại sim</th>
                <th>Số thuê bao</th>
                <th>Nhà mạng</th>
                <th>Hình thức thanh toán</th>
                <th>Giá</th>
                <th>Trạng thái</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i=0;$i<=2;$i++): ?>
            <tr>
                <td><span class="lichsu__table__txt">0<?= $i+1 ?></span></td>
                <td><span class="lichsu__table__txt">02.04.2021</span></td>
                <td><span class="lichsu__table__txt">Trả trước</span></td>
                <td><span class="lichsu__table__txt">0123.556.888</span></td>
                <td><span class="lichsu__table__txt">Viettel</span></td>
                <td><span class="lichsu__table__txt">Thanh toán trực tiếp</span></td>
                <td><span class="lichsu__table__txt">1.800.000đ</span></td>
                <td><div class="uk-label uk-label-success lichsu__table__status"><span>Đã thanh toán</span></div></td>
            </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>