import React from 'react'
import BestSeller from '../components/home/BestSeller'
import Featured from '../components/home/Featured'
import Offer from '../components/home/Offer'
import ProductList from '../components/home/ProductList'
import SectBanner from '../components/home/SectBanner'

export default function HomePage() {
  return (
    <div>
        {/* <SectBanner /> */}
        <Featured />
        <ProductList />
        <Offer />
        <BestSeller />
    </div>
  )
}
