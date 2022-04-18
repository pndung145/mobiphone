import React from 'react';
import Footer from '../../components/layout/Footer';
import Header from '../../components/layout/Header';
import SectBanner from '../../components/home/SectBanner'
import Featured from '../../components/home/Featured'
import ProductList from '../../components/home/ProductList'
import Offer from '../../components/home/Offer';
import BestSeller from '../../components/home/BestSeller';

import '../../scss/home.scss';
export default () => {
    return(
        <>
            <Header />
            <SectBanner />
            <section className='content' >
                {/* <HomeSlider /> */}
                <Featured /> 
                <ProductList /> 
                <Offer />
                <BestSeller />            
            </section>
            <Footer />
        </>
    )
}