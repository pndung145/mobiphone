import { configureStore } from "@reduxjs/toolkit";
import authReducer from './authSlice';
import blogReducer from './blogSlice';
import categoryReducer from './categorySlice';
import dashboardReducer from './dashboardSlice';
import feedbackReducer from './feedbackSlice';
import progressReducer from "./progressSlice";
import userReducer from './userSlice';
import productReducer from './productSlice';
import contactReducer from './contactSlice';
//USE TOOLKIT
const rootReducer = {
    reducer: {
        progress: progressReducer,
        blog: blogReducer,
        auth: authReducer,
        dashboard: dashboardReducer,
        user: userReducer,
        feedback: feedbackReducer,
        category: categoryReducer,
        product: productReducer,
        contact: contactReducer
    },
};

export const store = configureStore(rootReducer);
