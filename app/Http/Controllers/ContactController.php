<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->query('sort_by');
        $search = $request->query('search_by');

        $query = Contact::query();

        if ($search != "") {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
        }

        if ($sort == 'name') {
            $query->orderBy('name');
        } elseif ($sort == 'date') {
            $query->orderBy('created_at');
        }

        $contacts = $query->get();

        return view('index', compact('contacts'));
    }

    public function show(string $id)
    {
        $contactInfo = Contact::find($id);
        return view('show',compact('contactInfo'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->phone = $request['phone'];
        $contact->address = $request['address'];
        $contact->save();

        return redirect()->route('contact.index');
    }

    public function edit(string $id)
    {
        $contact = Contact::find($id);
        return view('edit',compact('contact'));
    }

    public function update(Request $request, string $id)
    {
        $contact = Contact::find($id);

        $contact->update($request->all());

        return redirect()->route('contact.index');
    }

    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('contact.index');
    }
}
