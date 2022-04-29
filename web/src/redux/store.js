import { configureStore } from "@reduxjs/toolkit";
import authReducer from './authSlice';
import blogReducer from './blogSlice';
import commentReducer from './commentSlice';
import contactReducer from './contactSlice';
import dashboardReducer from './dashboardSlice';
import feedbackReducer from './feedbackSlice';
import orderReducer from './orderSlice';
import productReducer from './productSlice';
import progressReducer from "./progressSlice";
import userReducer from './userSlice';
//USE TOOLKIT
const rootReducer = {
    reducer: {
        progress: progressReducer,
        blog: blogReducer,
        auth: authReducer,
        product: productReducer,
        dashboard: dashboardReducer,
        user: userReducer,
        feedback: feedbackReducer,
        comment: commentReducer,
        contact: contactReducer,
        order: orderReducer
    },
};

export const store = configureStore(rootReducer);
