<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
  public function __construct()
  {
    $this->middleware('first');
  }

  public function index()
  {
    $contacts = Contact::all();

    return view('contact.index', compact('contacts'));
  }

  public function create()
  {
    return view('contact.create');
  }

  public function store(Request $request)
  {
    $contact = new Contact();

    $contact->name = $request->input('name');
    $contact->nickname = $request->input('nickname');
    $contact->email = $request->input('email');
    $contact->sex = $request->input('sex');
    $contact->phone = $request->input('phone');
    $contact->phone_alternative = $request->input('phone_alternative');
    $contact->web_address = $request->input('web_address');
    $contact->address = $request->input('address');
    $contact->birthday = $request->input('birthday');
    $contact->note = $request->input('note');
    $contact->emergency_contact = $request->input('emergency_contact') ? '1' :  '0';

    $contact->save();

    $contacts = Contact::all();

    return view('contact.index', compact('contacts'));
  }

  public function show(string $id)
  {
    $contact = Contact::find($id);

    if ($contact == null) return;

    return view('contact.show', compact('contact'));
  }

  public function edit(string $id)
  {
    $contact = Contact::find($id);

    if ($contact == null) return;

    return view('contact.edit', compact('contact'));
  }

  public function update(Request $request, string $id)
  {
    $contact = Contact::find($id);

    if ($contact == null) return;

    $contact->name = $request->input('name');
    $contact->nickname = $request->input('nickname');
    $contact->email = $request->input('email');
    $contact->sex = $request->input('sex');
    $contact->phone = $request->input('phone');
    $contact->phone_alternative = $request->input('phone_alternative');
    $contact->web_address = $request->input('web_address');
    $contact->birthday = $request->input('birthday');
    $contact->address = $request->input('address');
    $contact->note = $request->input('note');
    $contact->emergency_contact = $request->input('emergency_contact') ? '1' :  '0';

    $contact->save();

    $contacts = Contact::all();
    return view('contact.index', compact('contacts'));
  }

  public function destroy(string $id)
  {
    $contact = Contact::find($id);

    if ($contact == null) return;

    $contact->delete();

    $contacts = Contact::all();

    return view('contact.index', compact('contacts'));
  }
}
