import { Injectable } from '@nestjs/common';
import { InjectModel } from '@nestjs/mongoose';
import { Model } from 'mongoose';
import { Contact, ContactDocument } from './schemas/contact.schemas';

@Injectable()
export class ContactService {
  constructor(@InjectModel(Contact.name) private contactModel: Model<ContactDocument>) { }


  async findAll() {
    return this.contactModel.find();
  }

  async create(contactDto) {
    let contact = new this.contactModel({ email: contactDto });
    return contact.save();
  }

  async delete(contactId){
    let contact = await this.contactModel.findById(contactId);
    return contact.remove();
  }

}
