<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
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

  public function store(ContactRequest $request)
{
    $validated = $request->validated(); // Get validated data

    $validated['created_by'] = auth()->id(); // Add additional data

    Contact::create($validated);

    return redirect()->route('contacts.index')->with('success', 'Contact created successfully!');
}

    public function edit(Contact $contact)
    {
        return view('dashboard.contacts.edit', compact('contact'));
    }

   public function update(ContactRequest $request, Contact $contact)
{
    $validated = $request->validated(); // Get validated data

    $validated['created_by'] = auth()->id(); // Add additional data

    $contact->update($validated);

    return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
}
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
