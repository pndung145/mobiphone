import React from 'react'
import { Link } from 'react-router-dom'
import Product1 from '../../images/product/product_1.png'
import Product2 from '../../images/product/product_2.png'
import Product3 from '../../images/product/product_3.png'
import Product4 from '../../images/product/product_4.png'


export default function ProductList() {
    return (
        <section class="product_list section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section_tittle text-center">
                            <h2>awesome <span>shop</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_list_slider owl-carousel">
                            <div class="single_product_list_slider">
                                <div class="wrap-product row align-items-center justify-content-between">
                                    <div class="col-lg-3 col-sm-6">
                                        <Link to={'/product/detail'}>
                                            <div class="single_product_item">
                                                <img src={Product1} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart
                                                        {/* <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                                    </svg> */}
                                                    </a>
                                                </div>
                                            </div>
                                        </Link>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <Link to={'/product/detail'}>
                                            <div class="single_product_item">
                                                <img src={Product2} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart
                                                        {/* <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                                    </svg> */}
                                                    </a>
                                                </div>
                                            </div>
                                        </Link>

                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <Link to={'/product/detail'}>
                                            <div class="single_product_item">
                                                <img src={Product3} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart
                                                        {/* <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                                    </svg> */}
                                                    </a>
                                                </div>
                                            </div>
                                        </Link>

                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <Link to={'/product/detail'}>
                                            <div class="single_product_item">
                                                <img src={Product4} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart
                                                        {/* <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                                    </svg> */}
                                                    </a>
                                                </div>
                                            </div>
                                        </Link>

                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <Link to={'/product/detail'}>
                                            <div class="single_product_item">
                                                <img src={Product1} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart
                                                        {/* <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                                    </svg> */}
                                                    </a>
                                                </div>
                                            </div>
                                        </Link>

                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <Link to={'/product/detail'}>
                                            <div class="single_product_item">
                                                <img src={Product2} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart
                                                        {/* <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                                    </svg> */}
                                                    </a>
                                                </div>
                                            </div>
                                        </Link>

                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <Link to={'/product/detail'}>
                                            <div class="single_product_item">
                                                <img src={Product3} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart
                                                        {/* <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                                    </svg> */}
                                                    </a>
                                                </div>
                                            </div>
                                        </Link>

                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <Link to={'/product/detail'}>
                                            <div class="single_product_item">
                                                <img src={Product4} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart
                                                        {/* <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                                    </svg> */}
                                                    </a>
                                                </div>
                                            </div>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                            {/* <div class="single_product_list_slider">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src={Product1} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src={Product2} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src={Product3} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src={Product4} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src={Product1} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src={Product2} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src={Product3} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src={Product4} alt="" />
                                                <div class="single_product_text">
                                                    <h4>Quartz Belt Watch</h4>
                                                    <h3>$150.00</h3>
                                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div> */}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    )
}
