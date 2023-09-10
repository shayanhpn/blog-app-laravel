<?php

namespace App\Http\Controllers\contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewSingleContactController extends Controller
{

    // Show Contact Page
    public function showContactPage(Contact $id){
        return view('admin.view-contact',['contact' => $id]);
    }
}
