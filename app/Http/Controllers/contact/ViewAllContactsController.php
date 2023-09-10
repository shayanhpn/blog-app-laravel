<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ViewAllContactsController extends Controller
{

    // Show All Contacts In Admin Panel
    public function showAllContacts(){
        $contacts = Contact::orderBy('created_at','desc')->paginate(10);
        return view('admin.show-all-contacts',['contacts'=>$contacts]);
    }
}
