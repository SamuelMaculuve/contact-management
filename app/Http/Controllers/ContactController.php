<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Mockery\Exception;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::paginate(10);

        return view('dashboard.contact.index',compact('contacts'));
    }

    public function create()
    {
        return view('dashboard.contact.createOrEdit');
    }

    public function store(Request $request)
    {

        $validatedData = $this->validadeContactsInput($request);

        Contact::create($validatedData);

        return redirect()->route('contact.index')->with('success', 'Contacto gravado com sucesso');

    }

    public function show(Contact $contact)
    {
        return view('dashboard.contact.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('dashboard.contact.createOrEdit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {

        $validatedData = $this->validadeContactsInputForUpdate($request,$contact);

        $contact->update($validatedData);

        return redirect()->route('contact.index')->with('success', 'Contacto gravado com sucesso');
    }

    public function destroy(Contact $contact)
    {
        try {

            $contact->delete();

            return redirect()->route('contact.index')->with('success', 'Registro apagado com sucesso');

        }catch (Exception $e){
            return redirect()->route('contact.index')->with('error', 'Ocorreu um erro ao apagar o dato');
        }
    }

    public function validadeContactsInput($request){

        return $request->validate([
            'name' => 'required|min:6',
            'contact' => 'required|digits:9|unique:contacts',
            'email' => 'required|email|unique:contacts',
        ]);
    }

    public function validadeContactsInputForUpdate($request,$contact){

       return $request->validate([
            'name' => 'required|min:6',
            'contact' => 'required|digits:9|unique:contacts,contact,' . $contact->id,
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
        ]);

    }

}
