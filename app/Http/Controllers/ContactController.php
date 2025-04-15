<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('task2.contact.form');
    }
    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route('task2')->with('message', 'Formulář byl úspěšně odeslán!');
    }

    public function showContacts()
    {
        $contacts = Contact::all();  // Získá všechny kontakty

        return view('task2.dashboard', compact('contacts'));
    }
}
