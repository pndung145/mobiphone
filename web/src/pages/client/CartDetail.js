import React, { useEffect, useState } from 'react'
import { useDispatch } from 'react-redux'
import { Link } from 'react-router-dom'
import { useToasts } from 'react-toast-notifications'
import { SERVER } from '../../apis/API'
import Footer from '../../components/Footer'
import Header from '../../components/layout/Header'
import { getProductByIdThunk } from '../../redux/productSlice'

export default function CartDetail() {
    const [carts, setCarts] = useState([]);
    const search = () => {
        const cartLocalStorage = JSON.parse(localStorage.getItem("cart"));
        if (cartLocalStorage) {
            setCarts(cartLocalStorage);
        } else {
            setCarts([])
        }
    }

    useEffect(() => {
        search()
    }, []);
    return (
        <div>
            <Header />
            <section className="cart_area padding_top cart-section">
                <div className="container">
                    <div className="cart_inner">
                        <div className="table-responsive">
                            <table className="table">
                                <thead>
                                    <tr className='table-cart'>
                                        <th scope="col">Sản phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {carts.length > 0 ? <>
                                        <>

                                            {carts.map((item, index) => {
                                                return (
                                                    <TableItem productCart={item} key={index} search={search} carts={carts} />
                                                )
                                            })}
                                            <FormPrice carts={carts} />
                                        </>
                                    </> : <div>
                                        <br />
                                        <p style={{ marginBottom: 20 }} >Giỏ hàng trống</p>
                                    </div>}

                                </tbody>
                            </table>
                            {carts.length > 0 && <div className="checkout_btn_inner float-right">
                                <Link className="btn_1" to={'/product'}>
                                    <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
                                    </svg>
                                    Tiếp tục mua sắm
                                </Link>
                                <Link className="btn_1 checkout_btn_1" to={'/checkout'}>
                                    Thanh toán
                                    <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                                    </svg>
                                </Link>
                            </div>}
                        </div>
                    </div>
                </div>
            </section>
            <div style={{ marginLeft: 30 }} ><Footer /></div>
        </div>
    )
}

function TableItem({ productCart, search, carts }) {
    const [product, setProduct] = useState();
    let { addToast } = useToasts();
    const dispatch = useDispatch();
    const searchProduct = async () => {
        let resp = await dispatch(getProductByIdThunk(productCart?.productId));
        if (resp) {
            setProduct(resp)
        }
    }
    useEffect(() => {
        searchProduct() // eslint-disable-next-line
    }, [productCart.productId]);
    const deleteProductCart = (productId) => {
        let cartProducts = carts; // eslint-disable-next-line
        let index = cartProducts.findIndex(item => item.productId == productId);
        cartProducts.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(cartProducts));
        addToast("Xóa sản phẩm thành công", { appearance: 'success', autoDismiss: '1000' })
        search();
    }
    let add = (productId) => {
        let amount = productCart.amount + 1;
        let cartProducts = carts; // eslint-disable-next-line
        let index = cartProducts.findIndex(item => item.productId == productId);
        cartProducts[index] = {
            productId: productId,
            price: product?.price,
            amount
        }
        localStorage.setItem("cart", JSON.stringify(cartProducts));
        search();
    }

    let minus = (productId) => {
        let amount = productCart.amount - 1; // eslint-disable-next-line
        if (amount == 0) {
            deleteProductCart(productId)
        } else {
            let cartProducts = carts; // eslint-disable-next-line
            let index = cartProducts.findIndex(item => item.productId == productId);
            cartProducts[index] = {
                productId: productId,
                price: product?.price,
                amount
            }
            localStorage.setItem("cart", JSON.stringify(cartProducts));
            search();
        }
    }
    const currencyFormat = (num) => {
        return num?.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ' VNĐ'
    }
    return (
        <>
            <tr className='table-cart bg-white'>
                <td>
                    <div className="media">
                        <div className="d-flex wrap-image-cart">
                            {product?.photoURL && <img
                                src={`${SERVER.URL_IMAGE}${product?.photoURL}`}
                                alt="img"
                                style={{ width: 150, height: 100, objectFit: 'cover' }}
                            />}
                        </div>
                        <div className="media-body">
                            <p>{product?.title}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <h5>{currencyFormat(product?.price)}</h5>
                </td>
                <td>
                    <div className="product_count">
                        <button className="input-number-decrement" onClick={() => {
                            minus(product?._id)
                        }}>
                            <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,13H5V11H19V13Z" />
                            </svg>
                        </button>
                        <p>{productCart?.amount}</p>
                        <button className="input-number-increment" onClick={() => {
                            add(product?._id)
                        }}>
                            <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                            </svg>
                        </button>
                    </div>
                </td>
                <td>
                    <h5>{currencyFormat(Number(product?.price) * Number(productCart?.amount))}</h5>
                </td>
            </tr>
        </>
    )
}


function FormPrice({ carts }) {
    const [price, setPrice] = useState(0);
    const searchPrice = async () => {
        let total = 0;
        carts.forEach(item => {
            total += Number((item.price) * (item.amount))
        })
        setPrice(total)
    }
    useEffect(() => {
        searchPrice() // eslint-disable-next-line
    }, [carts]);
    const currencyFormat = (num) => {
        return num?.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ' VNĐ'
    }
    return (
        <>
            <tr>
                <td />
                <td />
                <td>
                    <h5>Tổng</h5>
                </td>
                <td>
                    <h5>{currencyFormat(price)}</h5>
                </td>
            </tr>
        </>
    )
}
