import * as mongoose from 'mongoose';
import { Document } from 'mongoose';
import { Category } from 'src/category/schemas/category.schemas';
export declare type ProductDocument = Product & Document;
export declare class Product {
    id: mongoose.Schema.Types.ObjectId;
    title: String;
    category: Category;
    price: Number;
    content: String;
    animate: String;
    photoURL: String;
    createdAt: Date;
}
export declare const ProductSchema: mongoose.Schema<mongoose.Document<Product, any, any>, mongoose.Model<mongoose.Document<Product, any, any>, any, any, any>, any, any>;
