// import moment from 'moment';
import moment from 'moment';
import React, { useEffect, useState } from 'react';
import Pagination from 'react-js-pagination';
import { useDispatch, useSelector } from 'react-redux';
import { useHistory } from 'react-router-dom';
import { SERVER } from '../../apis/API';
// import Pagination from "react-js-pagination";
// import { useDispatch } from 'react-redux';
// import { useHistory } from 'react-router-dom';
// import { SERVER } from '../../apis/API';
import Footer from '../../components/layout/Footer';
import Header from '../../components/layout/Header';
import { getBlogThunk } from '../../redux/blogSlice';
import { Routes } from '../../routes';
// import { getBlogThunk } from '../../redux/blogSlice';
// import { Routes } from '../../routes';
import '../../scss/pagination.scss';


export default () => {
  let history = useHistory();
  let blog = useSelector(state => state.blog.data);
  let dispatch = useDispatch();
  const [activePage, setActivePage] = useState(1);
  useEffect(() => {
    search() // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [activePage]);
  const search = async () => {
    await dispatch(getBlogThunk(6 * (activePage - 1))) // eslint-disable-next-line react-hooks/exhaustive-deps
  }

  let routerDetailBlog = (data) => {
    history.push({
      pathname: Routes.BlogDetail.path,
      state: data
    })
  }

  return (
    <>
      <Header />

      <section className="blog_area padding_top">
        <div className="container">
          <div className="row">
            <div className="col-lg-8 mb-5 mb-lg-0">
              <div className="blog_left_sidebar">
                {blog && blog?.data?.map((item, index) => {
                  return (
                    <BlogItem blog={item} key={index} routerDetailBlog={routerDetailBlog} />
                  )
                })}
                <nav className="blog-pagination justify-content-center d-flex">
                  <div className='wrapper-paginate' >
                    {blog && <Pagination
                      activePage={activePage}
                      itemsCountPerPage={6}
                      totalItemsCount={blog?.totalPage}
                      pageRangeDisplayed={3}
                      onChange={value => setActivePage(value)}
                    />}
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </>
  )
}


function BlogItem({ blog,routerDetailBlog }) {
  return (
    <>
      <article className="blog_item">
        <div 
        style={{cursor:'pointer'}}
        onClick={() => {
          routerDetailBlog(blog)
        }}
        >
          <div className="blog_item_img">
            <img className="card-img rounded-0" src={`${SERVER.URL_IMAGE}${blog?.photoURL}`} alt="" />
            <div className="blog_item_date">
              <h3>{moment(blog?.createdAt, "YYYY/MM/DD").format('D')}</h3>
              <p style={{ textAlign: 'center' }} >{moment(blog?.createdAt, "YYYY/MM/DD").format('M')}</p>
            </div>
          </div>
          <div className="blog_details">
            <h2 dangerouslySetInnerHTML={{ __html: blog?.title }} ></h2>
            <p dangerouslySetInnerHTML={{ __html: blog?.metaDescription }}></p>
            <ul className="blog-info-link">
              <li>
                <svg style={{ width: '24px', height: '24px' }} viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z" />
                </svg>
                {blog?.createdBy?.fullName}</li>
            </ul>
          </div>
        </div>
      </article>
    </>
  )
}