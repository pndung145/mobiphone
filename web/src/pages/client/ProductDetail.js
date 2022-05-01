import React from 'react'
import { useLocation } from 'react-router-dom'
import { useToasts } from 'react-toast-notifications'
import { SERVER } from '../../apis/API'
import Footer from '../../components/layout/Footer'
import Header from '../../components/layout/Header'

export default function ProductDetail() {
    const location = useLocation();
    const product = location.state;
    const currencyFormat = (num) => {
        return num?.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ' VNĐ'
    }

    let { addToast } = useToasts();
    const addToCart = () => {
        const cart = JSON.parse(localStorage.getItem('cart'));
        if (cart) {
            // eslint-disable-next-line
            let isProductCart = cart.filter(item => item.productId == product._id); 
            if (isProductCart.length > 0) {
                addToast("Sản phẩm đã có trong giỏ hàng", { appearance: 'warning', autoDismiss: '1000' })
            } else {
                cart.push({
                    productId: product._id,
                    price: product?.price,
                    amount: 1,
                });
                localStorage.setItem("cart", JSON.stringify(cart))
                addToast("Thêm vào giỏ hàng thành công", { appearance: 'success', autoDismiss: '500' })

            }
        } else {
            let cartNew = [];
            cartNew.push({
                productId: product._id,
                price: product?.price,
                amount: 1,
            });
            localStorage.setItem("cart", JSON.stringify(cartNew))
            addToast("Thêm vào giỏ hàng thành công", { appearance: 'success', autoDismiss: '500' })
        }

    }
    return (
        <div>
            <Header />
            <div className="product_image_area section_padding">
                <div className="container">
                    <div className="row s_product_inner justify-content-between">
                        <div className="col-lg-7 col-xl-7">
                            <div className="product_slider_img">
                                <div id="vertical">
                                    <div>
                                        {product?.photoURL && <img src={`${SERVER.URL_IMAGE}${product?.photoURL}`}
                                            style={{ height: 500 }}
                                            alt="" />}
                                        <h4 style={{ marginTop: 20 }}>Mô tả:</h4>
                                        <div dangerouslySetInnerHTML={{ __html: product?.content }}  >

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-5 col-xl-4">
                            <div className="s_product_text">
                                <h3>{product?.title}</h3>
                                <h2>{currencyFormat(product?.price)}</h2>
                                <ul className="list">
                                    <li>
                                        <a className="active" href="/#">
                                            <span>Danh mục</span> : {product?.category?.title}</a>
                                    </li>
                                </ul>
                                <br />
                                <h4>Khuyến mãi:</h4>
                                <div dangerouslySetInnerHTML={{ __html: product?.animate }} >
                                </div>
                                <div className="card_area d-flex justify-content-between align-items-center">
                                    <div className="btn_3" style={{ cursor: 'pointer' }} 
                                    onClick={addToCart}
                                    >add to cart</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Footer />
        </div>
    )
}
