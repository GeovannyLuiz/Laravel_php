<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateContact;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function index(Contact $contact) {
        $contacts = $contact->all();
        return view('admin/contacts/index', compact('contacts'));
    }

    public function edit(int $id, Contact $contact) {
        $contact = $contact->find($id);
        if (!$contact) {
            return back();
        }
        return view('admin/contacts/edit', compact('contact'));
    }

    public function create() {
        return view('admin/contacts/create');
    }

    public function store(StoreUpdateContact $request, Contact $contact) {
        $data = $request->validated();

        $contact = $contact->create($data);

        return redirect()->route('contacts.index');
    }

    public function update(StoreUpdateContact $request, string $id, Contact $contact) {
        $contact = $contact->find($id);
        if (!$contact) {
            return back();
        }

        $contact->update($request->only(['name', 'email', 'phone']));

        return redirect()->route('contacts.index');
    }

    public function destroy(string $id, Contact $contact) {
        $contact = $contact->find($id);
        if (!$contact) {
            return back();
        }
        $contact->delete();

        return redirect()->route('contacts.index');
    }
}
