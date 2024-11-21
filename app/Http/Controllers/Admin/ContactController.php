<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('dashboard.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('dashboard.contacts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'position' => 'nullable|string|max:100',
            'birth_date' => 'nullable|date',
            'gender' => 'required|in:male,female',
            'phone_number' => 'required|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'email' => 'required|email|max:100|unique:contacts,email',
        ]);

        $validated['created_by'] = auth()->id();

        Contact::create($validated);

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully!');
    }

    public function edit(Contact $contact)
    {
        return view('dashboard.contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'position' => 'nullable|string|max:100',
            'birth_date' => 'nullable|date',
            'gender' => 'required|in:male,female',
            'phone_number' => 'required|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'email' => 'required|email|max:100|unique:contacts,email,' . $contact->id,
        ]);

        $validated['created_by'] = auth()->id();

        $contact->update($validated);

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
