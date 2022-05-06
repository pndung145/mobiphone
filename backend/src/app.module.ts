import { Module } from '@nestjs/common';
import { MongooseModule } from '@nestjs/mongoose';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { AuthModule } from './auth/auth.module';
import { BlogModule } from './blog/blog.module';
import { CategoryModule } from './category/category.module';
import { CommentModule } from './comment/comment.module';
import { FeedbackModule } from './feedback/feedback.module';
import { OrderProductModule } from './order-product/order-product.module';
import { OrderModule } from './order/order.module';
import { ProductModule } from './product/product.module';
import { UserModule } from './user/user.module';
import { ContactModule } from './contact/contact.module';


@Module({
  imports: [UserModule,
    MongooseModule.forRoot('mongodb+srv://Pndung145:anhdung145@cluster0.af0uc.mongodb.net/myFirstDatabase?retryWrites=true&w=majority'),
    AuthModule,
    BlogModule,
    CommentModule,
    FeedbackModule,
    CategoryModule,
    ProductModule,
    OrderModule,
    OrderProductModule,
    ContactModule,
  ],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule { }
