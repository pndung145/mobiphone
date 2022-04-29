import { Prop, Schema, SchemaFactory } from '@nestjs/mongoose';
import * as mongoose from 'mongoose';
import { Document } from 'mongoose';

export type ContactDocument = Contact & Document;

@Schema()
export class Contact {
  @Prop()
  id: mongoose.Schema.Types.ObjectId;

  @Prop({ required: true })
  email: string;

  @Prop()
  title: string;

  @Prop()
  name: string;

  @Prop()
  content: string;

  @Prop({default: new Date()})
  createdAt: Date;
}

export const ContactSchema = SchemaFactory.createForClass(Contact);