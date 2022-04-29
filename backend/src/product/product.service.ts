import { Injectable } from '@nestjs/common';
import { InjectModel } from '@nestjs/mongoose';
import { Model } from 'mongoose';
import { Category, CategoryDocument } from 'src/category/schemas/category.schemas';
import { Product, ProductDocument } from './schemas/product.schemas';
var mongoose = require('mongoose');
@Injectable()
export class ProductService {
  constructor(@InjectModel(Product.name) private productModel: Model<ProductDocument>,
    @InjectModel(Category.name) private categoryModel: Model<CategoryDocument>
  ) { }
  async findByCategory(categoryId) {
    return this.productModel.find({ category: categoryId }).populate("category", "title", "Category")
  }

  async findNewProducts() {
    return this.productModel.find().populate("category", "title", "Category").limit(8)
  }



  async amountProductsByCategory() {

    let categories = await this.categoryModel.find();
    let productModel = await this.productModel.find();

    let resp = await Promise.all(categories.map((item, index) => this.getAmountProduct(item, index, productModel)))
    return resp;
  }

  async getAmountProduct(item, index:number, productModel: Product[]) {
    let products =  productModel.filter(product => product.category.toString() == `${item._id.toString()}`);
    return {
      title: item.title,
      id: item._id,
      amount: products.length
    }
  }

  async findByCategoryAdmin(categoryId, skipNumber) {
    return this.productModel.find({ category: categoryId }).populate("category", "title", "Category").sort({ createdAt: -1 }).skip(skipNumber).limit(6).exec().then(data => {
      return this.productModel.find({ category: categoryId }).countDocuments().exec().then(count => {
        return {
          totalPage: count,
          data
        };
      })
    })
  }

  async findByCategoryIphone() {
    let category = await this.categoryModel.findOne({ title: "Apple (iPhone)" });
    return this.productModel.find({ category: category._id }).populate("category", "title", "Category").limit(4);
  }

  async findById(productId) {
    return this.productModel.findById(productId);
  }

  async findByCreateDate() {
    return this.productModel.find().sort({ createdAt: -1 }).populate("category", "title", "Category");
  }

  async create(productDto, photoURL: string) {
    let product = new this.productModel();
    product.title = productDto.title;
    product.category = productDto.category;
    product.price = productDto.price;
    product.content = productDto.content;
    product.animate = productDto.animate;
    product.photoURL = photoURL;
    return product.save();
  }
  async edit(productId, productDto, photoURL?: string) {
    let product = await this.productModel.findById(productId);
    if (product) {
      if (photoURL) {
        product.title = productDto.title;
        product.category = productDto.category;
        product.price = productDto.price;
        product.content = productDto.content;
        product.animate = productDto.animate;
        product.photoURL = photoURL;
      } else {
        product.title = productDto.title;
        product.category = productDto.category;
        product.price = productDto.price;
        product.content = productDto.content;
        product.animate = productDto.animate;
      }
      return product.save();
    }

  }
  async delete(productId) {
    let product = await this.productModel.findById(productId);
    return product.remove();
  }
}
