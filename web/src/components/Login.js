// import React from 'react'
// // import '../styles/pages/_login.scss'
// import BannerLogin from '../images/banner_login.png'
// export default function Login() {
//     return (
//         <div>
//             <div id="app" className="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">

//                 <div className="uk-flex" uk-height-viewport uk-toggle="cls: uk-flex-middle; mode: media; media: @m">
//                     <div className="uk-width-1-1" uk-toggle="cls: uk-section-small; mode: media; media: @m">
//                         <div className="uk-container" uk-toggle="cls: uk-padding-remove; mode: media; media: (max-width: 959px)">
//                             <div className="uk-grid-match uk-grid-0 uk-grid-40-m uk-grid-108-l" uk-grid>
//                                 <div className="uk-width-3-5@m">
//                                     <div className="uk-cover-container login__box__coverImg">
                                        
//                                         <img src={BannerLogin} alt="" uk-cover />
//                                         {/* <canvas width="1448" height="1180"></canvas> */}
//                                     </div>
//                                 </div>
//                                 <div className="uk-width-expand">
//                                     <div className="uk-grid-match uk-flex-center" uk-grid>
//                                         <div className="uk-width-3-5@s uk-width-1-1@m">
//                                             <div className="uk-flex uk-flex-column login__box">
//                                                 <div className="uk-flex-auto">
//                                                     <form>
//                                                         <fieldset className="uk-fieldset">

//                                                             <legend className="uk-legend login__box__form__title">Đăng nhập</legend>

//                                                             <div className="uk-margin">
//                                                                 <div className="uk-inline uk-width-1-1">
//                                                                     <span
//                                                                         className="uk-form-icon login__box__form__icon login__box__form__icon--phone"
//                                                                         uk-icon="icon: user"></span>
//                                                                     <input className="uk-input login__box__form__input" type="tel"
//                                                                         placeholder="Số điện thoại" />
//                                                                 </div>
//                                                             </div>
//                                                             <div className="uk-margin">
//                                                                 <div className="uk-inline uk-width-1-1">
//                                                                     <span
//                                                                         className="uk-form-icon login__box__form__icon login__box__form__icon--pass"
//                                                                         uk-icon="icon: user"></span>
//                                                                     <input id="ipnPassword"
//                                                                         className="uk-input login__box__form__input" type="password"
//                                                                         placeholder="Mật khẩu" />
//                                                                     <span id="btnPassword"
//                                                                         className="login__box__form__showPass"></span>
//                                                                 </div>
//                                                             </div>

//                                                             <div className="uk-margin login__box__form__box">
//                                                                 <div className="uk-child-width-auto uk-flex-middle uk-flex-between"
//                                                                     uk-grid>
//                                                                     <div>
//                                                                         <label><input
//                                                                             className="uk-checkbox login__box__form__box__check"
//                                                                             type="checkbox" checked /> <span
//                                                                                 className="login__box__form__box__txt">Remember</span></label>
//                                                                     </div>
//                                                                     <div>
//                                                                         <a href="#modal-forgotPass" uk-toggle
//                                                                             className="login__box__form__box__forGotpass">Quên mật
//                                                                             khẩu?</a>
//                                                                     </div>
//                                                                 </div>
//                                                             </div>
//                                                             <button type="submit"
//                                                                 className="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Đăng
//                                                                     nhập</span></button>

//                                                         </fieldset>
//                                                     </form>
//                                                 </div>
//                                                 <div>
//                                                     <div className="uk-text-center login__box__txt1">Bạn chưa có tài khoản SIMPAY?
//                                                         <a href="">Đăng ký ngay</a></div>
//                                                 </div>
//                                             </div>
//                                         </div>
//                                     </div>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//                 {/* <!--Quên mật khẩu?--> */}
//                 <div id="modal-forgotPass" className="uk-flex-top" uk-modal>
//                     <div className="uk-modal-dialog login__modal__dialog uk-modal-body uk-margin-auto-vertical">

//                         <button className="uk-modal-close-default login__modal__close" type="button" uk-close></button>
//                         <h2 className="uk-modal-title login__modal__title">Quên mật khẩu</h2>
//                         <p className="login__modal__desc">Chúng tôi sẽ gửi link khôi phục tài khoản vào mail của bạn. Hãy kiểm tra
//                             mail của bạn nhé!</p>

//                         <div className="uk-margin uk-form-stacked">
//                             <label className="uk-form-label login__modal__label" for="form-stacked-text">Email</label>
//                             <div className="uk-form-controls">
//                                 <input className="uk-input login__modal__input" id="form-stacked-text" type="email"
//                                     placeholder="Ví dụ: Infor@gmail.com" />
//                             </div>
//                         </div>
//                         <div className="uk-grid-8" uk-grid>
//                             <div className="uk-width-1-1">
//                                 <button type="submit"
//                                     className="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Gửi</span></button>
//                             </div>
//                             <div className="uk-width-1-1">
//                                 <button type="submit"
//                                     className="login__box__form__btnSubmit uk-button uk-button-default uk-width-1-1"><span>Quay
//                                         lại</span></button>
//                             </div>
//                         </div>
//                     </div>
//                 </div>
//                 {/* <!--/Quên mật khẩu?--> */}

//             </div>
//             {/* <!--/app--> */}
//             {/* <!--backtop--> */}
//             <a href="#" className="back-to-top" uk-scroll>
//                 <img src="images/Uptop.png" alt="" />
//             </a>
//             {/* <!--/backtop--> */}
//         </div>
//     )
// }
