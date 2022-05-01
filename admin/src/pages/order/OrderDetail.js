import { Button, Container, Form, InputGroup, Row } from '@themesberg/react-bootstrap';
import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { useHistory, useLocation } from 'react-router-dom';
import { SERVER } from '../../apis/API';

export default () => {
    let location = useLocation();
    let order = location.state;
    const [locationData, setLocationData] = useState();
    let history = useHistory();
    let searchLocation = async () => {
        let responsive = await axios.get('https://provinces.open-api.vn/api/?depth=2');
        if (responsive.status === 200) {
            setLocationData(responsive.data)
        }
    }
    useEffect(() => {
        searchLocation()
    }, []) // eslint-disable-next-line
    let city = locationData?.filter(item => item.code == order?.user?.city)[0]  // eslint-disable-next-line
    let districtSend = city?.districts?.filter(item => item.code == order?.user?.district)[0]?.name;
   
    return (
        <Container>
            <Row>
                <h3 className="mb-3">Chi tiết đơn hàng</h3>
                <Form>
                    <div className='order__detail' >
                        <label>Thông tin người nhận - người gửi</label>
                        <table>
                            <thead>
                                <tr>
                                    <th>Người gửi</th>
                                    <th>Nơi gửi</th>
                                    <th>Địa chỉ gửi</th>
            
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{order?.user.fullName}</td>
                                    <td>{districtSend} - {city?.name}</td>
                                    <td>{order?.user?.address}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style={{ height: 50 }} ></div>
                        <label>Lời nhắn</label>

                       
                        
                        <div style={{ height: 50 }} ></div>
                        <label>Hàng</label>
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Hàng</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                {order?.orderProducts?.map((item, index) => {
                                    return (
                                        <tr key={index} >
                                            <th>{index + 1}</th>
                                            <th>{item?.product?.title}</th>
                                            <th><img alt='' src={`${SERVER.URL_IMAGE}${item?.product?.photoURL}`}
                                                width={150}
                                                height={50}
                                                style={{ margin: 10 }}
                                            /></th>
                                            <th>{item?.amount}</th>
                                            <th>{item?.price}</th>
                                        </tr>
                                    )
                                })}
                            </tbody>
                        </table>
                    </div>
                    <div style={{ height: 50 }} ></div>
                    <label>Trạng thái</label>
                    <InputGroup >
                        <Form.Control autoFocus required type="text"

                            value={order?.status}
                            disabled
                        />
                    </InputGroup>

                    <Button variant="secondary" type="button" className="m-3"
                        onClick={() => history.goBack()}>
                        Quay lại
                    </Button>
                </Form>
            </Row>
        </Container>
    )
}