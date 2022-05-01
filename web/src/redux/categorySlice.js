import { createSlice } from '@reduxjs/toolkit';
import { addCategory, deleteCategory, detailCategory, editCategory, getCategory } from '../services/category.service';

const initialState = {
    data: null,
    error: null
};

export const categorySlice = createSlice({
    name: 'category',
    initialState,
    reducers: {
        setData: (state, action) => {
            state.data = action.payload;
            state.error = null;
        },
        setError: (state, action) => {
            state.data = null
            state.error = action.payload
        }
    },
})
export const { setData, setError } = categorySlice.actions;
// Đinh nghĩa ra các action
export const getCategoryThunk = () => async (dispatch) => {

    try {
        const data = await getCategory();
        dispatch(setData(data))  // sau khi nhận dữ liệu từ service thì nó sẽ lưu trữ dữ liệu nhận về lên store
        return data;
    } catch (err) {
        dispatch(setError(err))
    }
    //done
}

export const addCategoryThunk = (data) => async () => {
    try {
        let response = await addCategory(data);
        getCategoryThunk();
        return response;
    } catch (error) {
        console.log(error)
    }
}



export const editCategoryThunk = (categoryId, data) => async (dispatch) => {
    try {
        let response = await editCategory(categoryId, data);
        getCategoryThunk()
        return response;
    } catch (error) {
        console.log(error)
    }
}

export const detailCategoryThunk = (data) => async () => {
    try {
        let response = await detailCategory(data);
        return response
    } catch (error) {
        console.log(error)
    }
}
export const deleteCategoryThunk = (data) => async () => {
    try {
        let response = await deleteCategory(data);
        return response
    } catch (error) {
        console.log(error)
    }
}
export default categorySlice.reducer