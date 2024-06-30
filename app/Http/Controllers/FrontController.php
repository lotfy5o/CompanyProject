<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Message;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.index', get_defined_vars());
    }

    public function about()
    {
        return view('front.about', get_defined_vars());
    }

    public function service()
    {
        return view('front.service', get_defined_vars());
    }

    public function contact()
    {
        return view('front.contact', get_defined_vars());
    }

    public function subscriberStore(StoreSubscriberRequest $request)
    {
        $data = $request->validated();
        Subscriber::create($data);
        return to_route('front.index')->with('subscriber_success_msg', 'Subscribed Successfully');
    }

    public function contactStore(StoreMessageRequest $request)
    {
        $data = $request->validated();
        Message::create($data);
        return to_route('front.contact')->with('success', 'Your Message Sent Successfully');
    }
}
