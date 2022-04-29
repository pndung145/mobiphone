import axios from 'axios'
import React, { useEffect, useState } from 'react'
import { useDispatch } from 'react-redux'
import Footer from '../../components/layout/Footer'
import Header from '../../components/layout/Header'
import { addOrderThunk } from '../../redux/orderSlice'
import { getProductByIdThunk } from '../../redux/productSlice'
import ModalOrderSuccess from './ModalOrderSuccess'

export default function Checkout() {
    const user = JSON.parse(localStorage.getItem("user"));
    const cart = JSON.parse(localStorage.getItem("cart"));
    const [products, setProducts] = useState([]);
    const [code, setCode] = useState();
    const [resp, setResp] = useState();
    const dispatch = useDispatch();
    const [order, setOrder] = useState({
        user: {
            firstName: user?.firstName,
            lastName: user?.lastName,
            email: user?.email,
            city: user?.city,
            district: user?.district,
            phoneNumber: user?.phoneNumber
        },
        note: ''
    });
    function makeid(length) {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < length; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    }
    let data = {
        orderDto: {
            user: {
                fullName: `${order.user.firstName} ${order.user.lastName}`,
                phoneNumber: order.user.phoneNumber,
                city: order.user.city,
                district: order.user.district,
                address: order.user.address,
                email: order.user.email,
            },
            note: order.note,
            code: makeid(4)
        },
        orderProductDto: products
    }
    const [show, setShow] = useState(false);

    const handleClose = () => setShow(false);
    let handleOrder = async () => {
        let response = await dispatch(addOrderThunk(data));
        if (response) {
            localStorage.removeItem('cart')
            setCode(response?.code)
            setShow(true);
            setResp(response._id)
        }
    }
    let searchCart = () => {
        if (cart) {
            let resp = [];
            cart.forEach(item => {
                resp.push({
                    product: item?.productId,
                    amount: item?.amount,
                    price: Number((item?.price) * (item?.amount))
                })
            })
            setProducts(resp)
        }
    }
    useEffect(() => {
        searchCart() // eslint-disable-next-line
    }, [])

    return (
        <div>
            <Header />
            <ModalOrderSuccess show={show} handleClose={handleClose} code={code} order={resp} />

            <section className="checkout_area padding_top">
                <div className="container">
                    <div className="billing_details">
                        <div className="row">
                            <div className="col-lg-8">
                                <h3>Thông tin</h3>
                                <form className="row contact_form" action="#" method="post" noValidate="novalidate">
                                    <div className="col-md-6 form-group p_star">
                                        <input type="text" className="form-control" id="first" name="name"
                                            value={order?.user?.firstName}
                                            onChange={e => setOrder({
                                                ...order,
                                                user: {
                                                    ...order.user,
                                                    firstName: e.target.value
                                                }
                                            })}
                                        />
                                    </div>
                                    <div className="col-md-6 form-group p_star">
                                        <input type="text" className="form-control" id="last" name="name"
                                            value={order?.user?.lastName}
                                            onChange={e => setOrder({
                                                ...order,
                                                user: {
                                                    ...order.user,
                                                    lastName: e.target.value
                                                }
                                            })}
                                        />
                                    </div>
                                    <Address order={order} setOrder={setOrder} user={user} />
                                    <div className="col-md-6 form-group p_star">
                                        <input type="text" className="form-control" id="number" name="number"
                                            value={order?.user?.phoneNumber}
                                            onChange={e => setOrder({
                                                ...order,
                                                user: {
                                                    ...order.user,
                                                    phoneNumber: e.target.value
                                                }
                                            })}
                                        />
                                    </div>
                                    <div className="col-md-6 form-group p_star">
                                        <input type="text" className="form-control" id="email" name="compemailany"
                                            value={order?.user?.email}
                                            onChange={e => setOrder({
                                                ...order,
                                                user: {
                                                    ...order.user,
                                                    email: e.target.value
                                                }
                                            })}
                                        />
                                    </div>

                                    <div className="col-md-12 form-group p_star">
                                        <input type="text" className="form-control" id="add1" name="add1" placeholder="Địa chỉ" />
                                    </div>
                                    <div className="col-md-12 form-group">
                                        <textarea className="form-control" name="message" id="message" rows={1} placeholder="Ghi chú"
                                            value={order.note}
                                            onChange={(e) => setOrder({
                                                ...order,
                                                note: e.target.value
                                            })}
                                        />
                                    </div>
                                </form>
                            </div>
                            <Products handleOrder={handleOrder} />
                        </div>
                    </div>
                </div>
            </section>
            <Footer />
        </div>
    )
}


function Address({ order, setOrder, user }) {
    const [city, setCity] = useState([]);
    const [district, setDistrict] = useState([]);
    const [citySelect, setCitySelect] = useState();
    const [districtSelect, setDistrictSelect] = useState();

    let searchLocation = async () => {
        let responsive = await axios.get('https://provinces.open-api.vn/api/?depth=2');
        if (responsive.status === 200) { // eslint-disable-next-line
            let cityDistricts = responsive.data.filter(item => item.code == user.city)[0];
            setCity(responsive.data);
            setCitySelect(user.city);
            setDistrict(cityDistricts.districts);
            setDistrictSelect(user.district)
        }
    }
    useEffect(() => {
        searchLocation() // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);
    let handleSelectCity = (e) => {
        setCitySelect(e.target.value);
        // eslint-disable-next-line
        let cityDistricts = city.filter(item => item.code == e.target.value)?.[0];
        setDistrict(cityDistricts.districts);
        setDistrictSelect(cityDistricts.districts?.[0]?.code);
        setOrder({
            ...order,
            user: {
                ...user,
                city: e.target.value,
                district: cityDistricts.districts?.[0]?.code
            }
        })
    }
    let handleSelectDistrict = (e) => {
        setDistrictSelect(e.target.value)
        setOrder({
            ...order,
            user: {
                ...user,
                city: e.target.value,
                district: e.target.value
            }
        })
    }
    return (
        <>
            <div className="col-md-12 form-group p_star">
                <div style={{ display: 'flex', justifyContent: 'space-between' }} >
                    <div style={{ width: 150 }} >
                        Tỉnh/Thành phố:
                    </div>
                    <select
                        onChange={e => handleSelectCity(e)}
                        value={citySelect}
                        className="country_select"
                    >
                        {city.map((item, index) => {
                            return (
                                <option key={index} value={item.code} >{item.name}</option>
                            )
                        })}
                    </select>
                </div>
            </div>
            <div className="col-md-12 form-group p_star">
                <div style={{ display: 'flex', justifyContent: 'space-between' }} >
                    <div style={{ width: 150 }}>
                        Huyện:
                    </div>
                    <select
                        onChange={e => handleSelectDistrict(e)}
                        value={districtSelect}
                        className="country_select"
                    >
                        {district?.map((item, index) => {
                            return (
                                <option key={index} value={item.code} >{item.name}</option>
                            )
                        })}
                    </select>
                </div>
            </div>
        </>
    )
}

function Products({ handleOrder }) {
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
        <>
            <div className="col-lg-4">
                <div className="order_box">
                    <h2>Đơn hàng của bạn</h2>
                    <ul className="list">
                        <li style={{ display: 'flex', justifyContent: 'space-between' }} >
                            <div>Sản phẩm
                            </div>
                            <div>Tổng
                            </div>
                        </li>
                        {carts.length > 0 && carts.map((item, index) => {
                            return (
                                <ProductItem productCart={item} key={index} />
                            )
                        })}
                    </ul>
                    <ul className="list list_2">
                        <TotalPrice carts={carts} />
                    </ul>
                    <p style={{ color: 'red', marginTop: 20, marginBottom: 20 }} >
                        * Trả tiền mặt khi nhận hàng
                    </p>
                    <div className="btn_1 checkout_btn_1" onClick={() => { handleOrder() }} style={{ cursor: 'pointer' }}>
                        Xác nhận
                        <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                            <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </>
    )
}

function ProductItem({ productCart }) {
    const [product, setProduct] = useState();
    const dispatch = useDispatch();
    const searchProduct = async () => {
        let resp = await dispatch(getProductByIdThunk(productCart?.productId));
        if (resp) {
            setProduct(resp)
        }
    }
    useEffect(() => {
        searchProduct() // eslint-disable-next-line react-hooks/exhaustive-deps
    }, [productCart.productId]);
    const currencyFormat = (num) => {
        return num?.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ' VNĐ'
    }
    return (
        <>
            <li style={{ display: 'flex', justifyContent: 'space-between' }} >
                <div>{product?.title}</div>
                <div>x {productCart?.amount}</div>
                <div>{currencyFormat(product?.price)}</div>
            </li>
        </>
    )
}




function TotalPrice({ carts }) {
    const [price, setPrice] = useState(0);
    const searchPrice = async () => {
        let total = 0;
        carts.forEach(item => {
            total += Number((item.price) * (item.amount))
        })
        setPrice(total)
    }
    useEffect(() => {
        searchPrice() // eslint-disable-next-line react-hooks/exhaustive-deps
    }, [carts]);
    const currencyFormat = (num) => {
        return num?.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ' VNĐ'
    }
    return (
        <>
            <li style={{ display: 'flex', justifyContent: 'space-between' }} >
                <div>Tổng
                </div>
                <div>
                    {currencyFormat(price)}
                </div>
            </li>
        </>
    )
}