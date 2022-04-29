import { createSlice } from '@reduxjs/toolkit';
import { addProduct, deleteProduct, detailProduct, editProduct, getAmountProductCategory, getNewProduct, getProduct, getProductByCategorySkipAdmin, getProductById, getProductIphone } from '../services/product.service';

const initialState = {
    data: null,
    error: null
};

export const productSlice = createSlice({
    name: 'product',
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

// Action creators are generated for each case reducer function
export const { setData, setError } = productSlice.actions;

// Define a thunk that dispatches those action creators
export const getProductThunk = () => async (dispatch) => {

    try {
        const data = await getProduct();
        dispatch(setData(data))

        return data;
    } catch (err) {
        dispatch(setError(err))
    }
    //done
}


export const getProductByIdThunk = (dto) => async (dispatch) => {
    try {
        const data = await getProductById(dto);
        return data;
    } catch (err) {
        dispatch(setError(err))
    }
    //done
}

export const getProductThunkAdminSkip = (categoryId,skipNumber) => async (dispatch) => {

    try {
        const data = await getProductByCategorySkipAdmin(categoryId,skipNumber);
        return data;
    } catch (err) {
        dispatch(setError(err))
    }
    //done
}


export const getProductIphoneThunk = () => async (dispatch) => {

    try {
        const data = await getProductIphone();
        return data;
    } catch (err) {
        dispatch(setError(err))
    }
    //done
}


export const getNewProductThunk = () => async (dispatch) => {
    try {
        const data = await getNewProduct();
        return data;
    } catch (err) {
        dispatch(setError(err))
    }
    //done
}


export const getAmountProductCategoryThunk = () => async (dispatch) => {
    try {
        const data = await getAmountProductCategory();
        return data;
    } catch (err) {
        dispatch(setError(err))
    }
    //done
}


export const addProductThunk = (data) => async (dispatch) => {
    try {
        let response = await addProduct(data);
        getProductThunk();
        return response;
    } catch (error) {
        console.log(error)
    }
}



export const editProductThunk = (productId, data) => async (dispatch) => {
    try {
        let response = await editProduct(productId, data);
        getProductThunk()
        return response;
    } catch (error) {
        console.log(error)
    }
}

export const detailProductThunk = (data) => async () => {
    try {
        let response = await detailProduct(data);
        return response
    } catch (error) {
        console.log(error)
    }
}
export const deleteProductThunk = (data) => async () => {
    try {
        let response = await deleteProduct(data);
        return response
    } catch (error) {
        console.log(error)
    }
}
export default productSlice.reducer