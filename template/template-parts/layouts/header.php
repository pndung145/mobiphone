<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>SimPay - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
    <script src="assets/placeholderTypewriter.js"></script>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= ($isSticky)?'sticky':'' ?>">
<?php
$isLogin = rand(false,true);
$isNotify = rand(false,true);
$isCart = rand(false,true);
$isWishList = rand(false,true);
?>
<?php require "template-parts/commons/facebook_chat.php"; ?>
<?php if (!isset($isAccount)): ?>
<div id="offcanvas-fillter" class="boloc__offcanvas" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <?php require "template-parts/layouts/boloc.php"; ?>
    </div>
</div>
<?php endif; ?>
<!--offcanvasmenu-->
<div id="offcanvasmenu" uk-offcanvas="overlay: true;flip: true;">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <div class="menumobile uk-flex uk-flex-column">
            <div class="uk-flex-auto" style="padding-top: 50px">
                <div class="uk-container">
                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="toggle: >.uk-icon">
                        <li class="uk-parent">
                            <a href="simcool.php">Sản phẩm</a>
                            <span class="uk-icon menumobile__uk-icon uk-position-top-right"></span>
                            <ul class="uk-nav-sub">
                                <li><a href="simcool.php">SIM COOL</a></li>
                                <li><a href="simcool.php">SIM BIZ</a></li>
                                <li><a href="simcool.php">SIM VIP</a></li>
                                <li><a href="simcool.php">SIM LUCK</a></li>
                                <li><a href="simcool.php">SIM PAL</a></li>
                            </ul>
                        </li>
                        <li><a href="goicuoc.php">Gói cước</a></li>
                        <li hidden><a href="thanhtoan.php">Thanh toán</a></li>
                        <li><a href="lienhe.php">Liên hệ</a></li>
                    </ul>
                    <div>
                        <div class="uk-position-relative uk-display-inline-block">
                            <div class="header__top__flag">
                                <img class="" src="images/230px-Flag_of_North_Vietnam_(1955–1976).png" alt="">
                            </div>
                            <div class="uk-padding-small header__top__dropFlag" uk-dropdown="mode: click">
                                <ul class="uk-nav">
                                    <li class="uk-active"><a href="" style="--background: url('images/230px-Flag_of_North_Vietnam_(1955–1976).png')">Vietnamese</a></li>
                                    <li><a href="" style="--background: url('https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Flag_of_the_United_States_%281847%E2%80%931848%29.svg/1200px-Flag_of_the_United_States_%281847%E2%80%931848%29.svg.png')">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-container">
                    <div class="uk-section-xsmall menumobile__copyright">
                        <div>Phiên bản Beta 0.1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/offcanvasmenu-->

<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">

    <?php if ($isHeader): ?>
    <!--header-->
    <div class="header">
        <!--header__top-->
        <div class="header__top uk-visible@m">
            <div class="uk-container">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <!--uk-navbar-right-->
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <div class="header__top__txt">Chăm sóc khách hàng: <a href="tel:19004750">1900 4750</a></div>
                        </div>
                        <div class="uk-navbar-item">
                            <div class="header__top__txt">Hỗ trợ đại lý: <a href="tel:0988855155">0988 855 155</a></div>
                        </div>
                        <div class="uk-navbar-item">
                            <div class="header__top__txt">Tuyển dụng: <a href="tel:0979537195">0979 537 195</a></div>
                        </div>
                    </div>
                    <!--/uk-navbar-right-->
                </nav>
            </div>
        </div>
        <!--/header__top-->

        <!--header__bottom-->
        <div class="header__bottom" uk-sticky>
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <!--uk-navbar-left-->
                    <div class="uk-navbar-left">
                        <a href="." class="uk-navbar-item uk-logo">
                            <img hidden src="images/logo1.png" alt="">
                            <div class="uk-cover-container header__bottom__logo">
                                <canvas width="310" height="69"></canvas>
                            </div>
                        </a>
                    </div>
                    <!--/uk-navbar-left-->

                    <!--uk-navbar-right-->
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="."><span class="header__bottom__iconHome"></span></a></li>
                            <li>
                                <a href="simcool.php">Sản phẩm</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="simcool.php">SIM COOL</a></li>
                                        <li><a href="#">SIM BIZ</a></li>
                                        <li><a href="#">SIM VIP</a></li>
                                        <li><a href="#">SIM LUCK</a></li>
                                        <li><a href="#">SIM PAL</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li hidden><a href="#">Tìm Sim<sup>*</sup></a></li>
                            <li><a href="goicuoc.php">Gói cước</a></li>
                            <li hidden><a href="thanhtoan.php">Thanh toán</a></li>
                            <li><a href="lienhe.php">Liên hệ</a></li>
                        </ul>
                        <div class="uk-navbar-item header__bottom__divider uk-visible@m">
                            <div class="uk-flex-middle uk-child-width-auto uk-grid-10" uk-grid>
                                <div>
                                    <a class="uk-navbar-toggle header__bottom__search" href="#my-search" uk-scroll="offset: 100">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9056 16.3199C13.551 17.3729 11.8487 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10C18 11.8487 17.3729 13.551 16.3199 14.9056L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0976 20.6834 22.0976 20.2929 21.7071L14.9056 16.3199ZM16 10C16 13.3137 13.3137 16 10 16C6.68629 16 4 13.3137 4 10C4 6.68629 6.68629 4 10 4C13.3137 4 16 6.68629 16 10Z" fill="#777E91"/>
                                        </svg>
                                    </a>
                                </div>
                                <?php if ($isLogin): ?>
                                <div>
                                    <div class="uk-inline">
                                        <div class="header__bottom__bell <?= ($isNotify)?'notify':'' ?>" data-count="1"></div>
                                        <?php if ($isNotify): ?>
                                            <div class="" uk-dropdown="mode: hover">
                                                <ul class="header__listNotify uk-list uk-margin-remove">
                                                    <li class="header__listNotify__li">
                                                        <a href="" class="uk-link-toggle header__listNotify__link">
                                                            <div class="uk-grid-16 uk-flex-middle" uk-grid>
                                                                <div class="uk-width-auto">
                                                                    <div class="header__listNotify__coverImg uk-cover-container uk-border-circle">
                                                                        <canvas width="40" height="40"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-width-expand">
                                                                    <div class="header__listNotify__txt">Top 100 Sim số cực hiếm, hãy nhanh tay sở hữu</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="header__listNotify__li">
                                                        <a href="" class="uk-link-toggle header__listNotify__link">
                                                            <div class="uk-grid-16 uk-flex-middle" uk-grid>
                                                                <div class="uk-width-auto">
                                                                    <div class="header__listNotify__coverImg uk-cover-container uk-border-circle">
                                                                        <canvas width="40" height="40"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-width-expand">
                                                                    <div class="header__listNotify__txt">Bạn vừa nhận được <span>voucher ưu đãi</span> từ SIMPAY</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="uk-navbar-item uk-visible@m">
                            <div class="uk-flex-middle uk-child-width-auto uk-grid-small uk-grid-24-m" uk-grid>
                                <?php if ($isLogin): ?>
                                <div>
                                    <div class="uk-flex-middle uk-child-width-auto uk-grid-10" uk-grid>
                                        <div>
                                            <div class="header__user__txt">Xin chào, <span>Hai</span></div>
                                        </div>
                                        <div>
                                            <div class="uk-inline">
                                                <div class="uk-cover-container uk-border-circle header__bottom__profile">
                                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                    <canvas width="40" height="40"></canvas>
                                                </div>
                                                <div class="" uk-dropdown="mode: hover">
                                                    <ul class="uk-nav uk-nav-default">
                                                        <li class="acc"><a href="profile.php">Tài khoản của tôi</a></li>
                                                        <li class="history"><a href="lichsugiaodich.php">Lịch sử giao dịch</a></li>
                                                        <li class="logout"><a href="login.php">Thoát tài khoản</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--wishlist-->
                                <div>
                                    <a href="wishlist.php" class="header__bottom__wishList__icon <?= ($isWishList)?'uk-active':'' ?>"></a>
                                </div>
                                <!--/wishlist-->
                                <?php else: ?>
                                <div>
                                    <a href="#modal-login" uk-toggle class="uk-button uk-button-secondary header__bottom__btn header__bottom__btn--login">Đăng nhập</a>
                                    <a href="#modal-register" uk-toggle class="uk-button uk-button-default header__bottom__btn header__bottom__btn--register">Đăng ký</a>
                                </div>
                                <?php endif; ?>
                                <div>
                                    <div class="uk-inline">
                                        <a href="<?= ($isCart)?'cart.php':'nocart.php' ?>" class="header__bottom__cart" <?= ($isCart)? 'data-count=2':'' ?> ></a>
                                        <div class="" uk-dropdown="mode: hover">
                                            <h5 class="uk-h5">Giỏ hàng của tôi (<?= ($isCart)?'2':'0' ?>)</h5>
                                            <?php if ($isCart): ?>
                                                <div style="margin-bottom: 20px;">
                                                    <div class="uk-child-width-1-1 uk-grid-small" uk-grid>
                                                        <?php
                                                        $logos = Array(
                                                            'images/_Thẻ/1600px-Viettel_logo_2021 1.png',
                                                            'images/mobifone.png',
                                                            'images/reddi.png',

                                                            'images/vinaphone.png',
                                                            'images/vietnamobile.png',
                                                            'images/itel.png',
                                                            'images/indochina.png',
                                                        );

                                                        function randomNumberSequence($requiredLength = 7, $highestDigit = 8) {
                                                            $sequence = '';
                                                            for ($i = 0; $i < $requiredLength; ++$i) {
                                                                $sequence .= mt_rand(0, $highestDigit);
                                                            }
                                                            return $sequence;
                                                        }
                                                        $numberPrefixes = ['84055', '84086', '84088', '84087', '84092','84056','84094','84098'];
                                                        for ($i=1;$i<=2;$i++): ?>
                                                            <div>
                                                                <div class="uk-card uk-card-default uk-card-body home__content__sanpham__card">
                                                                    <?php
                                                                    $numberPrefixes[array_rand($numberPrefixes)];
                                                                    $phone = $numberPrefixes[array_rand($numberPrefixes)] ."". randomNumberSequence();
                                                                    $parts=sscanf($phone,'%2c%3c%3c%4c');
                                                                    ?>
                                                                    <?php if ($i<=6): ?>
                                                                        <?php
                                                                        $items = Array(
                                                                            'images/_Thẻ/Tag1.png',
                                                                            'images/_Thẻ/Tag2.png',
                                                                            'images/_Thẻ/Tag3.png',
                                                                        );
                                                                        ?>
                                                                        <img hidden class="uk-position-top-left home__content__sanpham__imgTag" src="<?= $items[array_rand($items)] ?>" alt="">
                                                                    <?php endif; ?>
                                                                    <div class="uk-position-top-right home__content__sanpham__link--position">
                                                                        <a href="simphongthuy.php" class="home__content__sanpham__link home__content__sanpham__link--info"></a>
                                                                        <a href="javascript:void(0)" onclick="addWishList()" class="home__content__sanpham__link home__content__sanpham__link--wishList"></a>
                                                                        <a href="javascript:void(0)" class="home__content__sanpham__link home__content__sanpham__link--addCart"></a>
                                                                    </div>
                                                                    <div class="home__content__sanpham__mb">
                                                                        <div class="home__content__sanpham__phoneNumber"><?php print "$parts[1].$parts[2].<span>$parts[3]</span>"; ?></div>
                                                                        <span class="home__content__sanpham__info" hidden></span>
                                                                    </div>
                                                                    <div class="uk-child-width-auto uk-grid-small uk-flex-between uk-flex-middle" uk-grid>
                                                                        <div>
                                                                            <img class="home__content__sanpham__card__logo" src="<?= $logos[array_rand($logos)] ?>" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="home__content__sanpham__priceTxt">1.800.000đ</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endfor; ?>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="header__bottom__cart__txtEmpty">Opps, chưa có gì trong giỏ</div>
                                            <?php endif; ?>
                                            <div class="uk-text-center">
                                                <a href="<?= ($isCart)?'cart.php':'nocart.php' ?>" class="uk-button uk-button-secondary header__bottom__btn header__bottom__btn--login">Vào giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-navbar-item uk-hidden@m">
                            <div class="uk-child-width-auto uk-flex-middle uk-grid-12" uk-grid>
                                <div>
                                    <a href="" class="header__mobile__icon header__mobile__icon--bell"></a>
                                </div>
                                <div>
                                    <a href="<?= ($isCart)?'cart.php':'nocart.php' ?>" class="header__mobile__icon header__mobile__icon--cart"></a>
                                </div>
                                <div>
                                    <?php if ($isLogin): ?>
                                        <div class="uk-inline">
                                            <div class="uk-cover-container uk-border-circle header__bottom__profile">
                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                <canvas width="40" height="40"></canvas>
                                            </div>
                                            <div class="" uk-dropdown="mode: hover">
                                                <ul class="uk-nav uk-nav-default">
                                                    <li class="acc"><a href="profile.php">Tài khoản của tôi</a></li>
                                                    <li class="history"><a href="lichsugiaodich.php">Lịch sử giao dịch</a></li>
                                                    <li class="logout"><a href="login.php">Thoát tài khoản</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <a href="#modal-login" uk-toggle class="header__mobile__icon header__mobile__icon--user"></a>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" uk-toggle="target: #offcanvasmenu" id="btnMenu1" class="header__mobile__icon header__mobile__icon--nav"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/uk-navbar-right-->
                </nav>
            </div>
            <div class="menumobile uk-flex uk-flex-column" hidden>
                <div class="uk-flex-auto">
                    <div class="uk-container">
                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="toggle: >.uk-icon">
                            <li class="uk-parent">
                                <a href="#">Sản phẩm</a>
                                <span class="uk-icon menumobile__uk-icon uk-position-top-right"></span>
                                <ul class="uk-nav-sub">
                                    <li><a href="#">SIM COOL</a></li>
                                    <li><a href="#">SIM BIZ</a></li>
                                    <li><a href="#">SIM SANG</a></li>
                                    <li><a href="#">SIM MAY</a></li>
                                    <li><a href="#">SIM PAL</a></li>
                                </ul>
                            </li>
                            <li hidden><a href="">Tìm Sim<sup>*</sup></a></li>
                            <li><a href="">Gói cước</a></li>
                            <li><a href="thanhtoan.php">Thanh toán</a></li>
                            <li><a href="lienhe.php">Liên hệ</a></li>
                        </ul>
                        <div>
                            <div class="uk-position-relative uk-display-inline-block">
                                <div class="header__top__flag">
                                    <img class="" src="images/230px-Flag_of_North_Vietnam_(1955–1976).png" alt="">
                                </div>
                                <div class="uk-padding-small header__top__dropFlag" uk-dropdown="mode: click">
                                    <ul class="uk-nav">
                                        <li class="uk-active"><a href="" style="--background: url('images/230px-Flag_of_North_Vietnam_(1955–1976).png')">Vietnamese</a></li>
                                        <li><a href="" style="--background: url('https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Flag_of_the_United_States_%281847%E2%80%931848%29.svg/1200px-Flag_of_the_United_States_%281847%E2%80%931848%29.svg.png')">English</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-container">
                        <div class="uk-section-xsmall menumobile__copyright">
                            <div>Phiên bản Beta 0.1</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header__bottom-->
    </div>
    <!--/header-->
    <?php else: ?>

    <?php endif; ?>