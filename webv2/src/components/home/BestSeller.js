import React from 'react'
import Best1 from '../../images/product/product_1.png'
import Best2 from '../../images/product/product_2.png'
import Best3 from '../../images/product/product_3.png'
import Best4 from '../../images/product/product_4.png'
import Best5 from '../../images/product/product_5.png'


export default function BestSeller() {
    return (
        <section class="product_list best_seller section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section_tittle text-center">
                            <h2>Best Sellers <span>shop</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-12">
                        <div class="best_product_slider row owl-carousel">
                            <div class="single_product_item col-lg-3 col-sm-6">
                                <img src={Best1} alt="" />
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                    </div>
                            </div>
                            <div class="single_product_item col-lg-3 col-sm-6">
                                <img src={Best2} alt="" />
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                    </div>
                            </div>
                            <div class="single_product_item col-lg-3 col-sm-6">
                                <img src={Best3} alt="" />
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                    </div>
                            </div>
                            <div class="single_product_item col-lg-3 col-sm-6">
                                <img src={Best4} alt="" />
                                    <div class="single_product_text">
                                        <h4>Quartz Belt Watch</h4>
                                        <h3>$150.00</h3>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    )
}
