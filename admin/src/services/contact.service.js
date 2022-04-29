import { publicGetApi, publicPostApi } from "../apis/API";

export const getContact = async () => {
    let response = await publicGetApi(`/contact`)
    return response
};


export const addContact = async (data) => {
    let response = await publicPostApi('/contact/create', data)
    return response
};

export const deleteContact = async (data) => {
    let response = await publicPostApi(`/contact/delete/${data}`)
    return response
};
