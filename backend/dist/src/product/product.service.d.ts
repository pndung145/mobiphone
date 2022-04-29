import { Model } from 'mongoose';
import { CategoryDocument } from 'src/category/schemas/category.schemas';
import { Product, ProductDocument } from './schemas/product.schemas';
export declare class ProductService {
    private productModel;
    private categoryModel;
    constructor(productModel: Model<ProductDocument>, categoryModel: Model<CategoryDocument>);
    findByCategory(categoryId: any): Promise<(Product & import("mongoose").Document<any, any, any> & {
        _id: any;
    })[]>;
    findNewProducts(): Promise<(Product & import("mongoose").Document<any, any, any> & {
        _id: any;
    })[]>;
    amountProductsByCategory(): Promise<{
        title: any;
        id: any;
        amount: number;
    }[]>;
    getAmountProduct(item: any, index: number, productModel: Product[]): Promise<{
        title: any;
        id: any;
        amount: number;
    }>;
    findByCategoryAdmin(categoryId: any, skipNumber: any): Promise<{
        totalPage: number;
        data: (Product & import("mongoose").Document<any, any, any> & {
            _id: any;
        })[];
    }>;
    findByCategoryIphone(): Promise<(Product & import("mongoose").Document<any, any, any> & {
        _id: any;
    })[]>;
    findById(productId: any): Promise<Product & import("mongoose").Document<any, any, any> & {
        _id: any;
    }>;
    findByCreateDate(): Promise<(Product & import("mongoose").Document<any, any, any> & {
        _id: any;
    })[]>;
    create(productDto: any, photoURL: string): Promise<Product & import("mongoose").Document<any, any, any> & {
        _id: any;
    }>;
    edit(productId: any, productDto: any, photoURL?: string): Promise<Product & import("mongoose").Document<any, any, any> & {
        _id: any;
    }>;
    delete(productId: any): Promise<Product & import("mongoose").Document<any, any, any> & {
        _id: any;
    }>;
}
