"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var __param = (this && this.__param) || function (paramIndex, decorator) {
    return function (target, key) { decorator(target, key, paramIndex); }
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.ProductService = void 0;
const common_1 = require("@nestjs/common");
const mongoose_1 = require("@nestjs/mongoose");
const mongoose_2 = require("mongoose");
const category_schemas_1 = require("../category/schemas/category.schemas");
const product_schemas_1 = require("./schemas/product.schemas");
var mongoose = require('mongoose');
let ProductService = class ProductService {
    constructor(productModel, categoryModel) {
        this.productModel = productModel;
        this.categoryModel = categoryModel;
    }
    async findByCategory(categoryId) {
        return this.productModel.find({ category: categoryId }).populate("category", "title", "Category");
    }
    async findNewProducts() {
        return this.productModel.find().populate("category", "title", "Category").limit(8);
    }
    async amountProductsByCategory() {
        let categories = await this.categoryModel.find();
        let productModel = await this.productModel.find();
        let resp = await Promise.all(categories.map((item, index) => this.getAmountProduct(item, index, productModel)));
        return resp;
    }
    async getAmountProduct(item, index, productModel) {
        let products = productModel.filter(product => product.category.toString() == `${item._id.toString()}`);
        return {
            title: item.title,
            id: item._id,
            amount: products.length
        };
    }
    async findByCategoryAdmin(categoryId, skipNumber) {
        return this.productModel.find({ category: categoryId }).populate("category", "title", "Category").sort({ createdAt: -1 }).skip(skipNumber).limit(6).exec().then(data => {
            return this.productModel.find({ category: categoryId }).countDocuments().exec().then(count => {
                return {
                    totalPage: count,
                    data
                };
            });
        });
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
    async create(productDto, photoURL) {
        let product = new this.productModel();
        product.title = productDto.title;
        product.category = productDto.category;
        product.price = productDto.price;
        product.content = productDto.content;
        product.animate = productDto.animate;
        product.photoURL = photoURL;
        return product.save();
    }
    async edit(productId, productDto, photoURL) {
        let product = await this.productModel.findById(productId);
        if (product) {
            if (photoURL) {
                product.title = productDto.title;
                product.category = productDto.category;
                product.price = productDto.price;
                product.content = productDto.content;
                product.animate = productDto.animate;
                product.photoURL = photoURL;
            }
            else {
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
};
ProductService = __decorate([
    (0, common_1.Injectable)(),
    __param(0, (0, mongoose_1.InjectModel)(product_schemas_1.Product.name)),
    __param(1, (0, mongoose_1.InjectModel)(category_schemas_1.Category.name)),
    __metadata("design:paramtypes", [mongoose_2.Model,
        mongoose_2.Model])
], ProductService);
exports.ProductService = ProductService;
//# sourceMappingURL=product.service.js.map