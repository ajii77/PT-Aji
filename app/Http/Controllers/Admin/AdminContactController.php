<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('pages.admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('pages.admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Pesan berhasil dihapus');
    }
}
