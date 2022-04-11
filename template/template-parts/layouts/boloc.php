<h3 class="uk-h3 boloc__title">Bộ lọc</h3>
<div class="home__content__mb24">
    <div class="uk-child-width-auto uk-flex-middle uk-grid-5 uk-grid-16-m" uk-grid>
        <div>
            <div class="uk-button uk-button-default home__content__selectFillter">
                <span>Giá từ 0 đến 125Tr</span>
                <a href="" class="uk-close uk-position-center-right"></a>
            </div>
        </div>
        <div>
            <a href="" class="home__content__deleteFillter">Xoá bộ lọc</a>
        </div>
    </div>
</div>
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
<ul class="boloc__accordion" uk-accordion="multiple: true">
    <li class="boloc__accordion__li">
        <a class="uk-accordion-title boloc__accordion__title" href="#">THEO NHÀ MẠNG</a>
        <div class="uk-accordion-content boloc__accordion__content">
            <div class="uk-grid uk-grid-16 uk-form-stacked" uk-grid>
                <div class="uk-width-1-1">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Nhà mạng</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả các nhà mạng</option>
                                <option value="1">Viettel</option>
                                <option value="2">Mobifone</option>
                                <option value="3">Vinaphone</option>
                                <option value="1">Vietnamobile</option>
                                <option value="2">Gmobile</option>
                                <option value="3">Itelecom</option>
                                <option value="3">Reddi</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Đầu số</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả các đầu số</option>
                                <option value="09">Đầu số 09</option>
                                <option value="08">Đầu số 08</option>
                                <option value="07">Đầu số 07</option>
                                <option value="05">Đầu số 05</option>
                                <option value="03">Đầu số 03</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-hidden">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Loại số</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả</option>
                                <option value="1">Mobifone</option>
                                <option value="2">Vinaphone</option>
                                <option value="3">Vietnammobile</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-hidden">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Tổng điểm</label>
                    <div class="uk-form-controls">

                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="boloc__accordion__li">
        <a class="uk-accordion-title boloc__accordion__title" href="#">THEO NGÀY SINH</a>
        <div class="uk-accordion-content boloc__accordion__content">
            <div class="uk-grid uk-grid-16 uk-form-stacked" uk-grid>
                <div class="uk-width-1-1">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Ngày sinh</label>
                    <div class="uk-form-controls">
                        <div class="uk-inline uk-width-1-1 boloc__accordion__ngaysinh">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                            <input class="uk-input time_range" type="text" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="boloc__accordion__li">
        <a class="uk-accordion-title boloc__accordion__title" href="#">THEO PHONG THUỶ</a>
        <div class="uk-accordion-content boloc__accordion__content">
            <div class="uk-grid uk-grid-16 uk-form-stacked" uk-grid>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Chọn tuổi</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả</option>
                                <option value="">Tý</option>
                                <option value="1">Sửu</option>
                                <option value="2">Dần</option>
                                <option value="3">Mão</option>
                                <option value="">Thìn</option>
                                <option value="1">Tị</option>
                                <option value="2">Ngọ</option>
                                <option value="3">Mùi</option>
                                <option value="">Thân</option>
                                <option value="1">Dậu</option>
                                <option value="2">Tuất</option>
                                <option value="3">Hợi</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Hợp mệnh</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả</option>
                                <option value="">Kim</option>
                                <option value="1">Mộc</option>
                                <option value="2">Thuỷ</option>
                                <option value="3">Hoả</option>
                                <option value="3">Thổ</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Giờ sinh</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả</option>
                                <option value="">Giờ Tý</option>
                                <option value="1">Giờ Sửu</option>
                                <option value="2">Giờ Dần</option>
                                <option value="3">Giờ Mão</option>

                                <option value="">Giờ Thìn</option>
                                <option value="1">Giờ Tị</option>
                                <option value="2">Giờ Ngọ</option>
                                <option value="3">Giờ Mùi</option>

                                <option value="">Giờ Thân</option>
                                <option value="1">Giờ Dậu</option>
                                <option value="2">Giờ Tuất</option>
                                <option value="3">Giờ Hợi</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Giới tính</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả</option>
                                <option value="1">Nam</option>
                                <option value="">Nữ</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>