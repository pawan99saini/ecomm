<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\ContactUs;
use App\Models\State;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getStatesByCountry(Request $request){
        $states = State::where('country_id', $request->country_id)
                        ->where('status', 1)->get();
        return view('new-frontend.home.components.states-select', compact('states'));
    }

    public function getCitiesByState(Request $request){
        $cities = City::where('state_id', $request->state_id)
                        // ->where('status', 1)
                        ->get();
        return view('new-frontend.home.components.cities-select', compact('cities'));
    }

    public function addContact(Request $request){
        $contact = ContactUs::create($request->all());
        return ['response' => 'success', 'contact'=> $contact];
    }
}
