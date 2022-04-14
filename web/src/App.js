import './styles/style.scss';
import Login from "./components/Login";
import React from "react";
import Header from "./components/share/Header";
import Footer from "./components/share/Footer";
import HomePage from "./pages/HomePage";
import Navigation from './Navigation';
// import CategoryPage from "./pages/CategoryPage";
// import ProductDetailPage from "./pages/ProductDetailPage";
// import CartPage from "./pages/CartPage";
// import CheckoutPage from "./pages/CheckoutPage";
// import ConfirmationPage from "./pages/ConfirmationPage";
// import BlogPage from "./pages/BlogPage";

function App() {
  return (
    <div className="App">
      <Header />

      <Navigation />

      <Footer />
    </div>
  );
}

export default App;
