<?php
use App\Models\ContactMessage;
use App\Models\Contact;

function contact() {
    $contact = Contact::find(1);
    return $contact;
}
function contact_message_count() {
    $contact_message_Count = ContactMessage::count();
    return $contact_message_Count;
}