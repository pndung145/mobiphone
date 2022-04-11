<div id="my-search" class="search__section" uk-sticky="offset: 76">
    <div class="uk-container">
        <div hidden uk-grid>
            <div class="uk-width-auto">
                <div class="uk-card uk-card-default uk-card-body tooltip__card">
                    <div class="tooltip__item">
                        <div class="tooltip__title">Cách Tìm Sim*</div>
                    </div>
                    <div class="tooltip__item">
                        <ul class="uk-list tooltip__list">
                            <li>Tìm sim có số <span>6789</span> bạn hãy gõ <span>6789</span>.</li>
                            <li>Tìm sim có đầu <span>090</span> đuôi <span>8888</span> hãy gõ <span>090*8888</span>.</li>
                            <li>Tìm sim bắt đầu bằng 0914 đuôi bất kỳ, hãy gõ: <span>0914*</span>.</li>
                            <li>Chọn 1 hoặc các tiêu chí tại <span>Bộ lọc</span> để tìm Sim số phù hợp.</li>
                            <li>Chọn các <span>Từ khoá</span> được tạo bởi công nghệ AI dưới khung tìm kiếm để tìm Sim số phù hợp.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-card uk-card-default uk-card-body home__search__card uk-visible@m">
            <div class="uk-text-center uk-margin-bottom home__search__box">
                <h3 class="uk-card-title home__search__title">Tìm kiếm SIM</h3>
                <div class=""><a href="" class="home__search__link">Hướng dẫn tìm SIM ưng ý</a></div>
            </div>
            <div class="uk-grid-25-m uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-position-relative home__search__margin25">
                        <div class="home__search__form">
                            <div class="uk-grid-divider uk-grid-small uk-grid-match" uk-grid>
                                <div class="uk-width-auto">
                                    <div hidden uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Tất cả</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="uk-button uk-button-default home__search__form__btnSelect" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                    <div class="uk-inline uk-flex uk-flex-middle">
                                        <button class="uk-button home__search__form__btn1 uk-button-default" type="button"><span>Tất cả</span></button>
                                        <div class="home__search__form__drop" uk-dropdown="mode: click">
                                            <ul class="uk-list home__search__form__list">
                                                <?php
                                                $data = array(
                                                    'TẤT CẢ',
                                                    'SIM SỐ ĐẸP',
                                                    'SIM PHONG THUỶ',
                                                    'SIM NĂM SINH',
                                                    'SIM THEO GIÁ TIỀN',
                                                );
                                                foreach ($data as $k=>$v): ?>
                                                <li>
                                                    <label>
                                                        <input <?= ($k==0)?checked:'' ?> class="home__search__form__list__checkbox uk-checkbox uk-hidden" type="checkbox">
                                                        <div class="home__search__form__list__label"><?= $v ?></div>
                                                    </label>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-position-relative">
                                        <input id="search" class="uk-input home__search__form__input" type="text" placeholder="">
                                        <button type="submit" class="uk-button home__search__form__btnSubmit uk-button-default uk-position-center-right"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="timsim.php" hidden class="home__search__form__option uk-position-bottom-right">Tìm kiếm nâng cao</a>
                    </div>
                </div>
                <div class="uk-width-auto uk-flex uk-flex-middle">
                    <a href="" class="home__search__micro"></a>
                </div>
            </div>
            <div class="home__search__tagGrid">
                <div class="uk-child-width-auto uk-grid-12" uk-grid>
                    <?php
                    $data = array(
                        'Sản phẩm của SIMPAY',
                        'Gói cước Combo',
                        'Sim Phong thuỷ',
                        'Sim năm sinh',
                        'Sim số đẹp',
                    );
                    foreach ($data as $k=>$v): ?>
                        <div>
                            <a href="" class="uk-button uk-button-default home__search__tag"><span><?= $v ?></span></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>