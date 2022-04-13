import {
    BrowserRouter as Router, Route, Switch
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
    return(
        <>
            <Router>
                {/* <Switch> */}
                    <Route exact path="/" >
                        <HomePage />
                    </Route>
                    <Route exact path="/blog" >
                        <BlogPage />
                    </Route>
                    <Route exact path="/blog-detail" >
                        <BlogDetailPage />
                    </Route>
                    <Route exact path="/cart" >
                        <CartPage />
                    </Route>
                    <Route exact path="/category" >
                        <CategoryPage />
                    </Route>
                    <Route exact path="/checkout" >
                        <CheckoutPage />
                    </Route>
                    <Route exact path="/confirmation" >
                        <ConfirmationPage />
                    </Route>
                    <Route exact path="/product-detail" >
                        <ProductDetailPage />
                    </Route>
                    <Route exact path="/contact" >
                        <ContactPage />
                    </Route>
                {/* </Switch> */}

            </Router>
        </>
    )
}
export default Navigation;