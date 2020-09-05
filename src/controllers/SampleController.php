<?php

namespace Raman\Contact\controllers;

use Illuminate\Http\Request;
use Raman\Contact\Model\Contact;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {

       return $get_email_from_congig = config('contact.send_email_to');

       $result = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        $response = $result ? 'success' : 'danger';
        $status = $result ? 'Success' : 'Failed';
        $message = $result ? 'Your form is submitted successfully' : 'Unable to submit your form at this moment';

        return view('contact::contact')->with('data',['response'=> $response , 'status' => $status ,'message' => $message]);
    }
}
