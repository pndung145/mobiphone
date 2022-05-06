import React, { useState } from 'react';
import '../../scss/style.scss';
import logo from '../../images/logo.png'
import Feedback from './Feedback';
export default () => {
    const [show, setShow] = useState(false);
    const handleClose = () => setShow(false);
    return (
        <>
            <Feedback show={show} handleClose={handleClose} />
            <section className="footer">
                <div className="container">
                    <div className="footer__infor">
                        <div className="row">
                            <div className="col-xl-12">
                                <div className='infor' >
                                    <div className="infor__logo">
                                        <img src={logo} alt="" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-12">
                                <div className="infor">
                                    <ul className="infor__menu">
                                        <li>
                                            <a
                                                className="infor__menu--item"
                                                target="_self"
                                                href="/en/notice"
                                            >
                                                <span>Notice</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                className="infor__menu--item"
                                                target="_self"
                                                href="/en/notice"
                                            >
                                                <span>PRIVACY POLICY</span>{" "}
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                className="infor__menu--item"
                                                target="_self"
                                                href="/en/notice"
                                            >
                                                <span>TERMS OF USE</span>{" "}
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                className="infor__menu--item"
                                                target="_self"
                                                href="/en/notice"
                                            >
                                                <span>YOUTH PROTECTION POLICY</span>{" "}
                                            </a>
                                        </li>
                                    </ul>
                                    <div className="infor__customer">
                                        <div className="infor__customer--title">Customer Service</div>
                                        <div className="infor__customer--time">
                                            <p>AM 10:00- PM 17:00(Off-time 12:00-13:00)</p>
                                            <p>Day Off(Saturday, Sunday, Holiday)</p>
                                        </div>
                                        <div className="infor__customer--sub" style={{ flexDirection: 'column' }} >
                                            <div style={{ display: 'flex' }} >
                                                <div className="sub__item">
                                                    <a href="/" className="btn-plus" target="_blank">
                                                        FAQ
                                                    </a>
                                                </div>
                                                <div className="sub__item">
                                                    <a href="/" className="btn-plus">
                                                        Inquiry
                                                    </a>
                                                </div>
                                                <div className="sub__item">
                                                    <a href="/" className="btn-plus">
                                                        Previous Vote Result
                                                    </a>
                                                </div>
                                            </div>

                                            <div style={{ display: 'flex', justifyContent: 'center', color: '#fff', marginTop: 8, cursor: 'pointer' }}
                                            onClick={() => setShow(true)}
                                            >
                                                Feedback &nbsp; <svg style={{ width: 20, height: 20 }} viewBox="0 0 24 24">
                                                    <path fill="white" d="M13,10H11V6H13V10M13,12H11V14H13V12M22,4V16A2,2 0 0,1 20,18H6L2,22V4A2,2 0 0,1 4,2H20A2,2 0 0,1 22,4M20,4H4V17.2L5.2,16H20V4Z" />
                                                </svg>
                                            </div>

                                        </div>
                                    </div>
                                    <div className="infor__org">
                                        <div className="infor__org--icon">
                                            <svg style={{ width: 24, height: 24 }} viewBox="0 0 24 24">
                                                <path
                                                    fill="currentColor"
                                                    d="M5,3V21H11V17.5H13V21H19V3H5M7,5H9V7H7V5M11,5H13V7H11V5M15,5H17V7H15V5M7,9H9V11H7V9M11,9H13V11H11V9M15,9H17V11H15V9M7,13H9V15H7V13M11,13H13V15H11V13M15,13H17V15H15V13M7,17H9V19H7V17M15,17H17V19H15V17Z"
                                                />
                                            </svg>{" "}
                                            Địa chỉ: B101 Phố Nguyễn Hiền, Bách Khoa, Hai Bà Trưng, Hà Nội
                                        </div>
                                        <div className="infor__org--icon">
                                            <svg style={{ width: 24, height: 24 }} viewBox="0 0 24 24">
                                                <path
                                                    fill="currentColor"
                                                    d="M22,6V4L14,9L6,4V6L14,11L22,6M22,2A2,2 0 0,1 24,4V16A2,2 0 0,1 22,18H6C4.89,18 4,17.1 4,16V4C4,2.89 4.89,2 6,2H22M2,6V20H20V22H2A2,2 0 0,1 0,20V6H2Z"
                                                />
                                            </svg>{" "}
                                            E-mail: 18A12010082@students.hou.edu.vn
                                        </div>
                                        <div className="infor__org--icon">
                                            <svg style={{ width: 24, height: 24 }} viewBox="0 0 24 24">
                                                <path
                                                    fill="currentColor"
                                                    d="M15,12H17A5,5 0 0,0 12,7V9A3,3 0 0,1 15,12M19,12H21C21,7 16.97,3 12,3V5C15.86,5 19,8.13 19,12M20,15.5C18.75,15.5 17.55,15.3 16.43,14.93C16.08,14.82 15.69,14.9 15.41,15.18L13.21,17.38C10.38,15.94 8.06,13.62 6.62,10.79L8.82,8.59C9.1,8.31 9.18,7.92 9.07,7.57C8.7,6.45 8.5,5.25 8.5,4A1,1 0 0,0 7.5,3H4A1,1 0 0,0 3,4A17,17 0 0,0 20,21A1,1 0 0,0 21,20V16.5A1,1 0 0,0 20,15.5Z"
                                                />
                                            </svg>{" "}
                                            SĐT: 0559291405
                                        </div>
                                        <div className="copyright">
                                            {" "}
                                            Copyright (C) KFes All rights reserved
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </>
    )
}