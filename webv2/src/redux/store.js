import { configureStore } from "@reduxjs/toolkit";
import progressReducer from "./progressSlice";
import blogReducer from './blogSlice';
import authReducer from './authSlice';
import productReducer from './productSlice';
import dashboardReducer from './dashboardSlice';
import userReducer from './userSlice';
import feedbackReducer from './feedbackSlice';
import commentReducer from './commentSlice';
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
        comment: commentReducer
    },
};

export const store = configureStore(rootReducer);
