import * as mongoose from 'mongoose';
import { Document } from 'mongoose';
export declare type ContactDocument = Contact & Document;
export declare class Contact {
    id: mongoose.Schema.Types.ObjectId;
    email: string;
    title: string;
    name: string;
    content: string;
    createdAt: Date;
}
export declare const ContactSchema: mongoose.Schema<mongoose.Document<Contact, any, any>, mongoose.Model<mongoose.Document<Contact, any, any>, any, any, any>, any, any>;
