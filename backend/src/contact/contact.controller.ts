import { Body, Controller, Delete, Get, Param, Post } from '@nestjs/common';
import { ContactService } from './contact.service';

@Controller('contact')
export class ContactController {
  constructor(private contactService: ContactService) { }

  @Get()
  async findAll() {
    return this.contactService.findAll();
  }

  @Post('create')
  async create(@Body() body) {
    console.log(body)
    return this.contactService.create(body)
  }

  @Post('delete/:contactId')
  async delete(@Param('contactId') contactId) {
    return this.contactService.delete(contactId);
  }
}
