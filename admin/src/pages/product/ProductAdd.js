import { faPaperclip } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { Button, Container, Form, InputGroup, Row } from '@themesberg/react-bootstrap';
import { Editor } from '@tinymce/tinymce-react';
import React, { useEffect, useState } from 'react';
import { Controller, useForm } from "react-hook-form";
import { useDispatch, useSelector } from 'react-redux';
import { useHistory } from 'react-router-dom';
import { useToasts } from 'react-toast-notifications';
import { getCategoryThunk } from '../../redux/categorySlice';
import { addProductThunk } from '../../redux/productSlice';
import { Routes } from '../../routes';
import { tinyConfig } from '../../TiniConfigure';

export default () => {
  const [file, setFile] = useState();
  const { control, handleSubmit, formState: { errors } } = useForm();
  let { addToast } = useToasts();
  let category = useSelector(state => state.category.data);


  const [categoryId, setCategoryId] = useState();
  const search = async () => {
    let resp = await dispatch(getCategoryThunk())
    if (resp) {
      setCategoryId(resp[0]?._id)
    }
  }
  useEffect(() => {
    search() // eslint-disable-next-line react-hooks/exhaustive-deps
  }, []);


  let history = useHistory();
  let dispatch = useDispatch();
  let addData = async (form) => {
    let data = new FormData();
    data.append("title", form.title);
    data.append("price", form.price);
    data.append("content", form.content);
    data.append("animate", form.animate);
    data.append("category", categoryId);
    if (file) {
      data.append("file", file);
    }
    let response = await dispatch(addProductThunk(data));
    if (response) {
      addToast("Success", { appearance: 'success', autoDismiss: 1000 });
      history.push(Routes.Product.path)
    }
  }
  return (
    <Container>
      <Row>
        <h3 className="mb-3">Thêm sản phẩm</h3>
        <Form>
          <Form.Group className="mb-3" controlId="formBasicEmail">
            <Form.Label>Tiêu đề</Form.Label>
            <Controller
              control={control}
              name="title"
              render={({
                field: { onChange, onBlur, value }
              }) => (
                <InputGroup style={{ border: errors.title?.type === "required" && '1px solid red' }}>
                  <Form.Control autoFocus required type="text" onChange={e => onChange(e.target.value)}
                    onBlur={onBlur}
                  />
                </InputGroup>
              )}
              rules={{
                required: true
              }}
            />
          </Form.Group>
          <Form.Group className="mb-3" controlId="formBasicEmail">
            <Form.Label style={{ marginRight: 10 }}>Danh mục</Form.Label>
            <select onChange={e => setCategoryId(e.target.value)}  >
              {category?.map((item, index) => {
                return <option key={index} value={item?._id} >{item.title}</option>
              })}
            </select>
          </Form.Group>
          <Form.Group className="mb-3" controlId="formBasicEmail">
            <Form.Label>Giá</Form.Label>
            <Controller
              control={control}
              name="price"
              render={({
                field: { onChange, onBlur, value }
              }) => (
                <InputGroup style={{ border: errors.title?.type === "required" && '1px solid red' }}>
                  <Form.Control autoFocus required type="text" onChange={e => onChange(e.target.value)}
                    onBlur={onBlur}
                  />
                </InputGroup>
              )}
              rules={{
                required: true
              }}
            />
          </Form.Group>
          <Form.Group className="mb-3" controlId="formBasicEmail">
            <Form.Label>Nội dung</Form.Label>
            <Controller
              control={control}
              render={({ field: { onChange, onBlur, value } }) => (
                <Editor apiKey="g8rgmljyc6ryhlggucq6jeqipl6tn5rnqym45lkfm235599i"
                  init={tinyConfig}
                  onEditorChange={(event) => {
                    onChange(event)
                  }}
                  onBlur={onBlur}
                  value={value}

                />
              )}
              name="content"
              defaultValue=""
              rules={{ required: true }}
            />
          </Form.Group>
          <Form.Group className="mb-3" controlId="formBasicEmail">
            <Form.Label>Tiện ích</Form.Label>
            <Controller
              control={control}
              render={({ field: { onChange, onBlur, value } }) => (
                <Editor apiKey="g8rgmljyc6ryhlggucq6jeqipl6tn5rnqym45lkfm235599i"
                  init={tinyConfig}
                  onEditorChange={(event) => {
                    onChange(event)
                  }}
                  onBlur={onBlur}
                  value={value}

                />
              )}
              name="animate"
              defaultValue=""
              rules={{ required: true }}
            />
          </Form.Group>
          <Form.Group className="mt-4" >
            <Form.Label>Image</Form.Label>
            <div className="d-xl-flex align-items-center">
              <div className="user-avatar xl-avatar">
                {file && <img id="target" src={URL.createObjectURL(file)} alt="" />}
              </div>
              <div className="file-field">
                <div className="d-flex justify-content-xl-center ms-xl-3">
                  <div className="d-flex">
                    <span className="icon icon-md">
                      <FontAwesomeIcon icon={faPaperclip} className="me-3" />
                    </span>
                    <input type="file"
                      onChange={e => setFile(e.target.files[0])}
                    />
                    <div className="d-md-block text-start">
                      <div className="fw-normal text-dark mb-1">Choose Image</div>
                      <div className="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </Form.Group>

          <Button variant="primary" type="button" onClick={handleSubmit(addData)} >
            Submit
          </Button>
          <Button variant="secondary" type="button" className="m-3"
            onClick={() => history.push(Routes.Product.path)}
          >
            Cancel
          </Button>
        </Form>
      </Row>
    </Container>
  )
}