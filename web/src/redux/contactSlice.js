import { createSlice } from '@reduxjs/toolkit';
import { addContact, deleteContact, getContact } from '../services/contact.service';

const initialState = {
    data: null,
    error: null
};

export const contactSlice = createSlice({
    name: 'contact',
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
export const { setData, setError } = contactSlice.actions;

// Define a thunk that dispatches those action creators
export const getContactThunk = () => async (dispatch) => {

    try {
        const data = await getContact();
        dispatch(setData(data))
        return data;
    } catch (err) {
        dispatch(setError(err))
    }
    //done
}

export const addContactThunk = (data) => async (dispatch) => {
    try {
        let response = await addContact(data);
        return response;
    } catch (error) {
        console.log(error)
    }
}


export const deleteContactThunk = (data) => async () => {
    try {
        let response = await deleteContact(data);
        return response
    } catch (error) {
        console.log(error)
    }
}
export default contactSlice.reducer