import { privateDeleteApi, privatePostApi, publicGetApi } from "../apis/API";

export const getBlog = async (dto) => {
    let response = await publicGetApi(`/blog/${dto}`)
    return response
};


export const getNewBlog = async () => {
    let response = await publicGetApi(`/blog/home/new`)
    return response
};

export const getBlogOther = async (dto) => {
    let response = await publicGetApi(`/blog/other/${dto}`)
    return response
};


export const addBlog = async (data) => {
    let response = await privatePostApi('/blog/create', data)
    return response
};

export const editBlog = async (blogId, data) => {
    let response = await privatePostApi(`/blog/edit/${blogId}`, data)
    return response
};
export const detailBlog = async (data) => {
    let response = await publicGetApi(`/blog/detail/${data}`);
    return response;
}

export const deleteBlog = async (data) => {
    let response = await privateDeleteApi(`/blog/delete/${data}`)
    return response
};
