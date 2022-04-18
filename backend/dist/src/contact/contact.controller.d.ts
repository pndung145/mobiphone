import { ContactService } from './contact.service';
export declare class ContactController {
    private contactService;
    constructor(contactService: ContactService);
    findAll(): Promise<(import("./schemas/contact.schemas").Contact & import("mongoose").Document<any, any, any> & {
        _id: any;
    })[]>;
    create(body: any): Promise<import("./schemas/contact.schemas").Contact & import("mongoose").Document<any, any, any> & {
        _id: any;
    }>;
    delete(contactId: any): Promise<import("./schemas/contact.schemas").Contact & import("mongoose").Document<any, any, any> & {
        _id: any;
    }>;
}
