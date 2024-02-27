<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use app\Traits\Helper;
use Illuminate\Http\Request;
use Mockery\Exception;

class ContactController extends Controller
{

//    use Helper;

    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('dashboard.contact.index',compact('contacts'));
    }

    public function create()
    {
        return view('dashboard.contact.create');
    }

    public function store(Request $request)
    {

        $validatedData =  $this->validadeContactsInput($request);

        Contact::create($validatedData);

        return redirect()->route('contact.index')->with('success', 'Contacto gravado com sucesso');

    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|min:6',
            'contact' => 'required|digits:9|unique:contacts,contact,' . $contact->id,
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
        ]);

        $contact->update([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('contact.index')->with('success', 'Contact updated successfully.');

    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index');
    }

    public function validadeContactsInput($request){

        return $request->validate([
            'name' => 'required|min:6',
            'contact' => 'required|digits:9|unique:contacts',
            'email' => 'required|email|unique:contacts',
        ]);
    }

}
