import React from 'react';
import { Link, useHistory } from 'react-router-dom';
// import { SERVER } from '../../apis/API';
import Footer from '../../components/layout/Footer';
import Header from '../../components/layout/Header';
import '../../scss/pagination.scss';
import Product1 from '../../images/product/product_1.png'
import BestSeller from '../../components/home/BestSeller'
export default function Product() {
  return (
    <>

      <div>

        <Header />
        <section className="cat_product_area section_padding">
          <div className="container">
            <div className="row">
              <div className="col-lg-3">
                <div className="left_sidebar_area">
                  <aside className="left_widgets p_filter_widgets">
                    <div className="l_w_title">
                      <h3>Browse Categories</h3>
                    </div>
                    <div className="widgets_inner">
                      <ul className="list">
                        <li>
                          <a href="#">Frozen Fish</a>
                          <span>(250)</span>
                        </li>
                        <li>
                          <a href="#">Dried Fish</a>
                          <span>(250)</span>
                        </li>
                        <li>
                          <a href="#">Fresh Fish</a>
                          <span>(250)</span>
                        </li>
                        <li>
                          <a href="#">Meat Alternatives</a>
                          <span>(250)</span>
                        </li>
                        <li>
                          <a href="#">Fresh Fish</a>
                          <span>(250)</span>
                        </li>
                        <li>
                          <a href="#">Meat Alternatives</a>
                          <span>(250)</span>
                        </li>
                        <li>
                          <a href="#">Meat</a>
                          <span>(250)</span>
                        </li>
                      </ul>
                    </div>
                  </aside>
                  <aside className="left_widgets p_filter_widgets">
                    <div className="l_w_title">
                      <h3>Product filters</h3>
                    </div>
                    <div className="widgets_inner">
                      <ul className="list">
                        <li>
                          <a href="#">Apple</a>
                        </li>
                        <li>
                          <a href="#">Asus</a>
                        </li>
                        <li className="active">
                          <a href="#">Gionee</a>
                        </li>
                        <li>
                          <a href="#">Micromax</a>
                        </li>
                        <li>
                          <a href="#">Samsung</a>
                        </li>
                      </ul>
                      <ul className="list">
                        <li>
                          <a href="#">Apple</a>
                        </li>
                        <li>
                          <a href="#">Asus</a>
                        </li>
                        <li className="active">
                          <a href="#">Gionee</a>
                        </li>
                        <li>
                          <a href="#">Micromax</a>
                        </li>
                        <li>
                          <a href="#">Samsung</a>
                        </li>
                      </ul>
                    </div>
                  </aside>
                  <aside className="left_widgets p_filter_widgets">
                    <div className="l_w_title">
                      <h3>Color Filter</h3>
                    </div>
                    <div className="widgets_inner">
                      <ul className="list">
                        <li>
                          <a href="#">Black</a>
                        </li>
                        <li>
                          <a href="#">Black Leather</a>
                        </li>
                        <li className="active">
                          <a href="#">Black with red</a>
                        </li>
                        <li>
                          <a href="#">Gold</a>
                        </li>
                        <li>
                          <a href="#">Spacegrey</a>
                        </li>
                      </ul>
                    </div>
                  </aside>

                </div>
              </div>
              <div className="col-lg-9">
                <div className="row">
                  <div className="col-lg-12">
                    <div className="product_top_bar d-flex justify-content-between align-items-center">
                      <div className="single_product_menu">
                        <p><span>10000 </span> Product Found</p>
                      </div>
                      <div className="single_product_menu d-flex">
                        <h5 className=''>short by : </h5>
                        <select>
                          <option data-display="Select">name</option>
                          <option value={1}>price</option>
                          <option value={2}>product</option>
                        </select>
                      </div>
                      <div className="single_product_menu d-flex">
                        <h5>show :</h5>
                        <div className="top_pageniation">
                          <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                          </ul>
                        </div>
                      </div>
                      <div className="single_product_menu d-flex">
                        <div className="input-group">
                          <input type="text" className="form-control" placeholder="search" aria-describedby="inputGroupPrepend" />
                          <div className="input-group-prepend">
                            <span className="input-group-text" id="inputGroupPrepend">
                              <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                              </svg></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Product */}
                <div className="row align-items-center latest_product_inner">
                  <div className="col-lg-4 col-sm-6">
                    <Link to={'/product/detail'}>
                      <div className="single_product_item">
                        <img src={Product1} alt="" />
                        <div className="single_product_text">
                          <h4>Quartz Belt Watch áđâsdsadá</h4>
                          <h3>$150.00</h3>
                          <a href="#" className="add_cart">+ add to cart<i className="ti-heart" /></a>
                        </div>
                      </div>
                    </Link>
                  </div>
                  <div className="col-lg-4 col-sm-6">
                    <Link to={'/product/detail'}>
                      <div className="single_product_item">
                        <img src={Product1} alt="" />
                        <div className="single_product_text">
                          <h4>Quartz Belt Watch</h4>
                          <h3>$150.00</h3>
                          <a href="#" className="add_cart">+ add to cart<i className="ti-heart" /></a>
                        </div>
                      </div>
                    </Link>
                  </div>
                  <div className="col-lg-4 col-sm-6">
                    <Link to={'/product/detail'}>
                      <div className="single_product_item">
                        <img src={Product1} alt="" />
                        <div className="single_product_text">
                          <h4>Quartz Belt Watch</h4>
                          <h3>$150.00</h3>
                          <a href="#" className="add_cart">+ add to cart<i className="ti-heart" /></a>
                        </div>
                      </div>
                    </Link>
                  </div>
                  <div className="col-lg-4 col-sm-6">
                    <Link to={'/product/detail'}>
                      <div className="single_product_item">
                        <img src={Product1} alt="" />
                        <div className="single_product_text">
                          <h4>Quartz Belt Watch</h4>
                          <h3>$150.00</h3>
                          <a href="#" className="add_cart">+ add to cart<i className="ti-heart" /></a>
                        </div>
                      </div>
                    </Link>
                  </div>
                  <div className="col-lg-4 col-sm-6">
                    <Link to={'/product/detail'}>
                      <div className="single_product_item">
                        <img src={Product1} alt="" />
                        <div className="single_product_text">
                          <h4>Quartz Belt Watch</h4>
                          <h3>$150.00</h3>
                          <a href="#" className="add_cart">+ add to cart<i className="ti-heart" /></a>
                        </div>
                      </div>
                    </Link>
                  </div>
                  <div className="col-lg-4 col-sm-6">
                    <Link to={'/product/detail'}>
                      <div className="single_product_item">
                        <img src={Product1} alt="" />
                        <div className="single_product_text">
                          <h4>Quartz Belt Watch</h4>
                          <h3>$150.00</h3>
                          <a href="#" className="add_cart">+ add to cart<i className="ti-heart" /></a>
                        </div>
                      </div>
                    </Link>
                  </div>
                  <div className="col-lg-4 col-sm-6">
                    <Link to={'/product/detail'}>
                      <div className="single_product_item">
                        <img src={Product1} alt="" />
                        <div className="single_product_text">
                          <h4>Quartz Belt Watch</h4>
                          <h3>$150.00</h3>
                          <a href="#" className="add_cart">+ add to cart<i className="ti-heart" /></a>
                        </div>
                      </div>
                    </Link>
                  </div>
                  <div className="col-lg-4 col-sm-6">
                    <Link to={'/product/detail'}>
                      <div className="single_product_item">
                        <img src={Product1} alt="" />
                        <div className="single_product_text">
                          <h4>Quartz Belt Watch</h4>
                          <h3>$150.00</h3>
                          <a href="#" className="add_cart">+ add to cart<i className="ti-heart" /></a>
                        </div>
                      </div>
                    </Link>
                  </div>
                  <div className="col-lg-4 col-sm-6">
                    <Link to={'/product/detail'}>
                      <div className="single_product_item">
                        <img src={Product1} alt="" />
                        <div className="single_product_text">
                          <h4>Quartz Belt Watch</h4>
                          <h3>$150.00</h3>
                          <a href="#" className="add_cart">+ add to cart<i className="ti-heart" /></a>
                        </div>
                      </div>
                    </Link>
                  </div>
                  <div className="col-lg-12">
                    <div className="pageination">
                      <nav aria-label="Page navigation example">
                        <ul className="pagination justify-content-center">
                          <li className="page-item">
                            <a className="page-link" href="#" aria-label="Previous">
                              <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
                              </svg>
                            </a>
                          </li>
                          <li className="page-item"><a className="page-link" href="#">1</a></li>
                          <li className="page-item"><a className="page-link" href="#">2</a></li>
                          <li className="page-item"><a className="page-link" href="#">3</a></li>
                          <li className="page-item"><a className="page-link" href="#">4</a></li>
                          <li className="page-item"><a className="page-link" href="#">5</a></li>
                          <li className="page-item"><a className="page-link" href="#">6</a></li>
                          <li className="page-item">
                            <a className="page-link" href="#" aria-label="Next">
                              <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                                <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                              </svg>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <BestSeller />
        <Footer />
      </div>


    </>
  )
}