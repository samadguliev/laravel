<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Contact;

class ContactController extends Controller
{
    use ValidatesRequests;
    public function submit(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function getAllMessages()
    {
        $contact = new Contact;
        return view(
            'messages',
            ['data' => $contact->all()]
        );
    }

    public function getMessage($id)
    {
        $contact = new Contact;
        return view(
            'one-message',
            ['data' => $contact->find($id)]
        );
    }

    public function updateMessage($id)
    {
        $contact = new Contact;
        return view(
            'update-message',
            ['data' => $contact->find($id)]
        );
    }

    public function updateMessageSubmit($id, ContactRequest $request)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }

}
