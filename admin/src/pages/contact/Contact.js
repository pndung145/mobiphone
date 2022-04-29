import { faTrashAlt } from '@fortawesome/free-regular-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { Card, Container, Row, Table } from '@themesberg/react-bootstrap';
import React, { useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { useToasts } from 'react-toast-notifications';
import { deleteContactThunk, getContactThunk } from '../../redux/contactSlice';

export default () => {
  let contact = useSelector(state => state.contact.data); // lấy dữ liệu category đã lưu trữ
  let { addToast } = useToasts()
  let dispatch = useDispatch();

  useEffect(() => {
    dispatch(getContactThunk()) // eslint-disable-next-line react-hooks/exhaustive-deps
  }, []);  // vừa vào trang web thì thực thi hàm này.

  let deleteContact = async (contactId) => {
    await dispatch(deleteContactThunk(contactId));
    dispatch(getContactThunk())
    addToast("Delete Success", { appearance: 'success', autoDismiss: 1000 })
  }
  return (
    <Container>
      <Row>
        <Card border="light" className="table-wrapper table-responsive shadow-sm">
          <Card.Body className="pt-0">
            <Table hover className="user-table align-items-center">
              <thead>
                <tr>
                  <th className="border-bottom">#</th>
                  <th className="border-bottom">Email</th>
                  <th className="border-bottom">Tiêu đề</th>
                  <th className="border-bottom">Tên</th>
                  <th className="border-bottom">Nội dung</th>
                  <th className="border-bottom">Cài đặt</th>
                </tr>
              </thead>
              <tbody>
                {contact && contact.map((contactItem, index) => {
                  return (
                    <TableItem index={index + 1} contact={contactItem} key={index} deleteContact={deleteContact} />
                  )
                })}
              </tbody>
            </Table>
          </Card.Body>
        </Card>
      </Row>
    </Container>
  )
}

function TableItem({ index, contact, deleteContact }) {
  return (
    <tr>
      <td>
        <Card.Link href="#" className="text-primary fw-bold">{index}</Card.Link>
      </td>
      <td>{contact.email}</td>
      <td>{contact?.title ? contact?.title : '-'}</td>
      <td>{contact?.name ? contact?.name : '-'}</td>
      <td>{contact?.content ? contact?.content : '-'}</td>
      <td>
        <FontAwesomeIcon onClick={() => deleteContact(contact._id)} style={{ cursor: 'pointer' }} icon={faTrashAlt} className="me-2" />
      </td>
    </tr>
  );
}   
