import * as mongoose from 'mongoose';
import { Document } from 'mongoose';
export declare type CategoryDocument = Category & Document;
export declare class Category {
    id: mongoose.Schema.Types.ObjectId;
    title: string;
    createdAt: Date;
}
export declare const CategorySchema: mongoose.Schema<mongoose.Document<Category, any, any>, mongoose.Model<mongoose.Document<Category, any, any>, any, any, any>, any, any>;
