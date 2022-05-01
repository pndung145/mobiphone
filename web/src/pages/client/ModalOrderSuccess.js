import Modal from 'react-bootstrap/Modal';
import React from 'react';
import { Button } from 'react-bootstrap';
import { useHistory } from 'react-router-dom';
import { Routes } from '../../routes';

export default ({ show, handleClose, code, order }) => {
  let history = useHistory();
  console.log("orderId",order)
  return (
    <>
      <Modal show={show} onHide={handleClose} animation={false}>
        <Modal.Header closeButton>
          <Modal.Title>Thành công</Modal.Title>
        </Modal.Header>
        <Modal.Body>Bạn đã tạo đơn hàng : <strong>{code}</strong> thành công!</Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={() => {
            handleClose();
            history.push({
              pathname: Routes.Confirmation.path,
              state: order
            });

          }}>
            Tiếp tục
          </Button>
        </Modal.Footer>
      </Modal>
    </>
  )
}