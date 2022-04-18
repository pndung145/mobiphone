import { Model } from 'mongoose';
import { Contact, ContactDocument } from './schemas/contact.schemas';
export declare class ContactService {
    private contactModel;
    constructor(contactModel: Model<ContactDocument>);
    findAll(): Promise<(Contact & import("mongoose").Document<any, any, any> & {
        _id: any;
    })[]>;
    create(contactDto: any): Promise<Contact & import("mongoose").Document<any, any, any> & {
        _id: any;
    }>;
    delete(contactId: any): Promise<Contact & import("mongoose").Document<any, any, any> & {
        _id: any;
    }>;
}
