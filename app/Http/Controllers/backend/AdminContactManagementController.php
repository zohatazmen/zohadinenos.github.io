<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdminContact;

class AdminContactManagementController extends Controller
{
    public function index()
    {
        $contacts = AdminContact::all(); 

        return view('backend.contactmanagement', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = AdminContact::findOrFail($id); 
        $contact->delete(); 

        return redirect()->route('admin.contact.index')->with('success', 'Contact deleted successfully.');
    }
}