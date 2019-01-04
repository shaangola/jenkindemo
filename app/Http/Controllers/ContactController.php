<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Subscriber;
use Illuminate\Http\Request;
use Mail;
use Redirect;
use Illuminate\Support\Facades\Crypt;
use App\Mail\ContactUs;
use App\Mail\Responder;

class ContactController extends Controller
{
    /**
     * Public index page.
     */
    public function index()
    {

        return view('pages.contact');
    }
    /**
     * Post values on the contact form.
     * @param request : type of Request class object
     */
    public function submit(Request $request)
    {
        return view('pages.contact')->with('contact', $request);
    }

    /**
     * subscribe : method use to create the subscribers.
     *
     * @Request : to get the request variables.
     */
    public function subscriber(Request $request)
    {
        // dd($request->get('contact_email'));
        $contact = array();
        $contact['email'] = $request->get('contact_email');
        $request->validate([
            'contact_email' => 'required|email',
        ]);
        if (Subscriber::create($contact)) {
            $request->session()->flash('message.sublevel', 'success');
            $request->session()->flash('message.subcontent', 'Thank you for subscribing!!');
        } else {
            $request->session()->flash('message.sublevel', 'danger');
            $request->session()->flash('message.subcontent', 'Error!!');
        }
        return redirect('/');
    }
    /**
     * STORE INFORMATION.
     * Request : form request
     */
    public function store(Request $request)
    {

        $contact = [];
        $selected_insurancetype= "";
        $request->validate([
            'fullname' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email',
        ]);


        switch ($request->get('insurance_type')) {
        case '1':
            $selected_insurancetype="Life Insurance";
            break;
        case '2':
            $selected_insurancetype="General Insurance";
            break;

        default:
            $selected_insurancetype="Life Insurance";
            break;
        }

        $contact['name'] = $request->get('fullname');
        $contact['phone'] = $request->get('phone');
        $contact['email'] = $request->get('email');
        $contact['message'] = $request->get('message');
        $contact['insurancetype'] = $selected_insurancetype;



        //dd($contact);
        if (Contact::create($contact)) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Thanks for reaching us!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'There was an error trying to send your message.');
        }

        // Mail delivery logic goes here
        $admin_email = env('ADMIN_EMAIL','shanti.gola@djtcorp.in');   //default email set if there is no environment variable set.

        //dd($admin_email);
        Mail::to($admin_email)->send(new ContactUs($contact));
        Mail::to($contact['email'])->send(new Responder($contact));

        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Thanks for reaching us. We will contact you shortly.');
        return redirect()->route('contact.index');

    }
}
