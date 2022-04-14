import {
    BrowserRouter as Router, Route, Routes
} from "react-router-dom";
import HomePage from './pages/HomePage'
import BlogPage from './pages/BlogPage'
import BlogDetailPage from './pages/BlogDetailPage'
import CartPage from './pages/CartPage'
import CategoryPage from './pages/CategoryPage'
import CheckoutPage from './pages/CheckoutPage'
import ConfirmationPage from './pages/ConfirmationPage'
import ProductDetailPage from './pages/ProductDetailPage'
import ContactPage from './pages/ContactPage'

function Navigation() {
    return (
        <>
            <Routes>
                {/* <Switch> */}
                <Route path="/" element={<HomePage />} />
                <Route path="blog" element={<BlogPage />} />
                <Route path="blog-detail" element={<BlogDetailPage />} />
                <Route path="cart" element={<CartPage />} />
                <Route path="category" element={<CategoryPage />} />
                <Route path="checkout" element={<CheckoutPage />} />
                <Route path="confirmation" element={<ConfirmationPage />} />
                <Route path="product-detail" element={<ProductDetailPage />} />
                <Route path="contact" element={<ContactPage />} />
                {/* </Switch> */}

            </Routes>
        </>
    )
}
export default Navigation;