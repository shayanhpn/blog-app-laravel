<?php

namespace App\Http\Controllers\contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteContactController extends Controller
{
    // Delete Contact Form Function
    public function deleteContact(Contact $id){
        $id->delete();
        return redirect()->route('admin.all-contacts')->with('success','حذف تماس مورد نظر با موفقیت انجام گردید');
    }

    // Show Delete Contact Form Page
    public function showDeleteContact(Contact $id){
        return view('admin.delete-contact',['contact' => $id]);
    }
}
