<?php

namespace App\Http\Controllers\SellerWebsite\Restaurant;

use App\Mail\Booking;
use App\Models\Photo;
use App\Models\contact;
use App\Models\shipmate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class RestaurantHomeController extends Controller
{

    public function Booking(Request $request){
        $request->validate(
            [
                "name" => "required",
                "email" => "required",
                "phone" => "required|digits:10",
                "date" => "required",
                "time" => "required",
                "people" => "required",
                "message" => "required|min:10"
            ],
            [
                "name.required" => "Please enter your name",
                "phone.digits" => "Enter a valid number",
                "message.min" => "Minimum 10 characters required"
            ]
        );
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $date = $request->input('date');
        $time = $request->input('time');
        $people = $request->input('people');
        $message = $request->input('message');

        $url = $request->path();
        $link = str_replace('/booking', '', $url);
        $data = shipmate::where("link", "=", $link)->first();
        $booking = new contact();
        $booking->name = $name;
        $booking->email = $email;
        $booking->phone = $phone;
        $booking->date = $date;
        $booking->time = $time;
        $booking->people = $people;
        $booking->message = $message;

        $user_email = $data->email;
        $user_name = $data->name;
        $data = $data->notifications()->save($booking);

        $details = [
            'title' => "Dear $user_name,",
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'date' => $date,
            'time' => $time,
            'people' => $people,
            'message' => $message
        ];


        Mail::to($user_email)->send(new Booking($details));

        return redirect()->route($link.'.tablebooked')->with('booking-success', 'Table Booked Succesfully! ');
    }

    public function Contact(Request $request){
        $request->validate(
            [
                "name" => "required",
                "email" => "required",
                "subject" => "required",
                "message" => "required|min:10"
            ],
            [
                "name.required" => "Please enter your name",
                "message.min" => "Minimum 10 characters required"
            ]
        );
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $url = $request->path();
        $link = str_replace('/contact', '', $url);
        $data = shipmate::where("link", "=", $link)->first();
        $contact = new Message();
        $contact->name = $name;
        $contact->email = $email;
        $contact->subject = $subject;
        $contact->message = $message;


        $data = $data->messages()->save($contact);

        return redirect()->route($link.'.contactsuccess')->with('contact-success', 'Message Sent Succesfully! ');
    }

}
