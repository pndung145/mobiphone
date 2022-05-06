import React from 'react'
import { Link } from 'react-router-dom'
import Banner from '../../images/home/iphone2.png'

export default function SectBanner() {
    return (
        <section className="banner_part">
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-12">
                        <div className="banner_slider owl-carousel">
                            <div className="single_banner_slider">
                                <div className="row wrap-banner">
                                    <div className="col-lg-5 col-md-8">
                                        <div className="banner_text">
                                            <div className="banner_text_iner">
                                                <h1>Apple</h1>
                                                <p>Sản phẩm mới nhất năm 2022 giá
                                                    chỉ từ 11 triệu
                                                </p>
                                                <Link to="/product" className="btn_2">Mua ngay</Link>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="banner_img d-none d-lg-block">
                                        <img src={Banner} alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="slider-counter"></div>
                    </div>
                </div>
            </div>
        </section>

    )
}
