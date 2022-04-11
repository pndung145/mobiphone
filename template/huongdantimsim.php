<?php $data["title"] = "Hướng dẫn tìm sim"; ?>
<?php $isHeader = true; ?>
<?php $isFooter = true; ?>
<?php $isSticky = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1440:423; min-height: 240; animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/Group3868.png" alt="" uk-cover>
        </li>
        <li>
            <img src="images/photo.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/light.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--/Slider-->

<div class="uk-section-small timsim__section">
    <?php require "template-parts/layouts/search.php"; ?>
    <div class="uk-container">
        <div class="uk-section-small">
            <h2 class="uk-h2 huongdantimsim__title1"><span>Bộ lọc Tìm kiếm nâng cao</span></h2>
            <ul class="uk-child-width-expand huongdantimsim__tab" uk-tab>
                <li class="uk-active"><a href="#">SIM THEO LOẠI</a></li>
                <li><a href="#">SIM THEO NHÀ MẠNG</a></li>
                <li><a href="#">SIM THEO NGÀY SINH</a></li>
                <li><a href="#">SIM THEO PHONG THUỶ</a></li>
            </ul>
            <ul class="uk-switcher switcher-container uk-margin">
                <li>
                    <div class="uk-grid-divider uk-grid-medium" uk-grid>
                        <div class="uk-width-1-4@m">
                            <div class="uk-grid-24 uk-grid uk-child-width-1-1 uk-form-stacked" uk-grid>
                                <div hidden>
                                    <div class="uk-margin uk-grid-10 uk-child-width-1-1 uk-grid" uk-grid>
                                        <label><input class="uk-checkbox boloc__checkBox__check" type="checkbox" checked> <span class="boloc__checkBox__txt">Trả trước</span></label>
                                        <label><input class="uk-checkbox boloc__checkBox__check" type="checkbox"> <span class="boloc__checkBox__txt">Trả sau</span></label>
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Sim theo loại</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Tất cả các loại sim</option>
                                                <option value="1">Sim VIP</option>
                                                <option value="2">Sim Lục quý</option>
                                                <option value="3">Sim Lục quý giữa</option>

                                                <option value="1">Sim Ngũ quý</option>
                                                <option value="2">Sim Ngũ quý giữa</option>
                                                <option value="3">Sim Tứ quý</option>

                                                <option value="1">Sim Tứ quý giữa</option>
                                                <option value="2">Sim Tam hoa</option>
                                                <option value="3">Sim Tam hoa giữa</option>

                                                <option value="1">Sim Tam hoa kép</option>
                                                <option value="2">Sim Taxi</option>
                                                <option value="3">Sim Lộc phát</option>

                                                <option value="1">Sim Thần Tài</option>
                                                <option value="2">Sim Ông Địa</option>
                                                <option value="3">Sim Lặp kép</option>

                                                <option value="1">Sim Gánh đảo</option>
                                                <option value="2">Sim Tiến lên</option>
                                                <option value="3">Sim Lặp</option>

                                                <option value="1">Sim Kép 2</option>
                                                <option value="2">Sim Kép 3</option>
                                                <option value="3">Sim Số đảo 2</option>

                                                <option value="1">Sim Số đảo 3 - Soi gương</option>
                                                <option value="2">Sim Số độc</option>
                                                <option value="3">Sim Đôi</option>

                                                <option value="1">Sim Dễ nhớ</option>
                                                <option value="2">Sim Đầu số cổ</option>
                                                <option value="3">Sim Đại Cát</option>
                                                <option value="3">Sim Khuyến mãi</option>
                                            </select>
                                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                                <span></span>
                                                <span class="uk-icon uk-position-center-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Giá tiền</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-margin-small uk-hidden">
                                            <div class="price-slider">
                                                <input class="uk-input number" type="number" value="0" min="0" max="500"/>
                                                <input class="uk-input number" type="number" value="125" min="0" max="500"/>
                                                <input class="uk-range range" type="range" value="0" min="0" max="500" step="1"/>
                                                <input class="uk-range range" type="range" value="125" min="0" max="500" step="1"/>
                                            </div>
                                        </div>
                                        <div class="uk-margin-small boloc__ranger">
                                            <input type="text" class="js-range-slider" name="my_range" value="" />
                                        </div>
                                        <div class="js-output__d1"></div>
                                        <div class="uk-grid-10 uk-flex-middle uk-hidden" uk-grid>
                                            <div class="uk-width-expand">
                                                <input class="uk-input boloc__inputRange" type="text" placeholder="" value="0">
                                            </div>
                                            <div class="uk-width-auto">
                                                <span>-</span>
                                            </div>
                                            <div class="uk-width-expand">
                                                <input class="uk-input boloc__inputRange" type="text" placeholder="" value="125">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Không bao gồm</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-grid-8 uk-child-width-auto uk-grid" uk-grid>
                                            <?php for ($i=1;$i<=9;$i++): ?>
                                                <label class="boloc__notNumber">
                                                    <input class="uk-checkbox boloc__notNumber__check" type="checkbox" <?= ($i==0)?'checked':'' ?>>
                                                    <span class="boloc__notNumber__txt"><?= $i ?></span>
                                                </label>
                                            <?php endfor; ?>
                                            <label class="boloc__notNumber">
                                                <input class="uk-checkbox boloc__notNumber__check" type="checkbox">
                                                <span class="boloc__notNumber__txt">0</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-h3 huongdantimsim__title">Tìm Sim theo Loại Sim:</h3>
                            <div class="huongdantimsim__content">
                                <div>Tuỳ thuộc vào từng tiêu chí để bạn chọn được đúng Sim số ưng ý.</div>
                                <div>Mỗi loại Sim sẽ mang những ý nghĩa khác nhau, giúp bổ trợ về cuộc sống, công danh, sự nghiệp,... cho bạn.</div>
                                <ul class="uk-list huongdantimsim__list">
                                    <li><span>Sim Lục quý, Lục quý giữa:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                    <li><span>Sim Ngũ quý, Ngũ quý giữa:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                    <li><span>Sim Tứ quý, Tứ quý giữa:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                    <li><span>Sim Tam hoa, Tam hoa giữa, Tam hoa kép:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                    <li><span>Sim Lộc phát - Thần tài - Ông địa - Đại cát:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                    <li><span>Sim Lặp kép - Gánh đảo - Tiến lên:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                    <li><span>Sim Lặp - Kép - Số đảo - Số độc:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                    <li><span>Sim Đôi - Dễ nhớ:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                    <li><span>Sim Đầu số cổ:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>Hello again!</li>
                <li>Bazinga!</li>
                <li>1!</li>
            </ul>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>