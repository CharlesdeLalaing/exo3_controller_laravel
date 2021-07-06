<?php

namespace App\Http\Controllers;

use App\Models\Aboutvariable;
use App\Models\Storevariableday;
use App\Models\Storevariablescontact;
use App\Models\Storevariableshours;
use App\Models\Storevariablestatus;
use App\Models\Storevariabletext;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store()
    {
        $storeTexts = Storevariabletext::all();
        $storeDays = Storevariableday::all();
        $storeStatus = Storevariablestatus::all();
        $storeHour = Storevariableshours::all();
        $storeContact = Storevariablescontact::all();
        $storeAbouts = Aboutvariable::all();
        // $storeText =
        //     (object)[
        //         'sectionUpper' => 'Come On In',
        //         'sectionLower' => 'We\'re Open',
        //     ];
        // $days =
        //     (object)[
        //         'M' => 'Monday',
        //         'T' => 'Tuesday',
        //         'W' => 'Wednesday',
        //         'Th' => 'Thursday',
        //         'F' => 'Friday',
        //         'S' => 'Saturday',
        //         'Su' => 'Sunday'
        //     ];
        // $status =
        //     (object)[
        //         'closed' => 'Closed'
        //     ];
        // $hours =
        //     (object)[
        //         'longDay' => '7:00 AM to 8:00 PM',
        //         'shortDay' => '9:00 AM to 5:00 PM'
        //     ];
        // $contact =
        //     (object)[
        //         'street' => '1116 Orchard Street',
        //         'city' => 'Golden Valley, Minnesota',
        //         'call' => 'Call Anytime',
        //         'number' => '(317) 585-8468'
        //     ];
        // $abouts =
        //     (object)[
        //         "sectionUpper" => "Strong Coffee, Strong Roots",
        //         "sectionLower" => "About Our Cafe",
        //         "paragraphOne" => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee
        //         sourced from artisan farmers in various regions of South and Central America. We are
        //         dedicated to travelling the world, finding the best coffee, and bringing back to you here in
        //         our cafe.",
        //         'paragraphTwo1' => "We guarantee that you will fall",
        //         'em' => ' lust ',
        //         'paragraphTwo2' => 'with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.',
        //         'images' => 'img/about.jpg'
        //     ];

        return view('pages.store', compact('storeTexts', 'storeDays', 'storeStatus', 'storeHour', 'storeContact', 'storeAbouts'));
    }
}
