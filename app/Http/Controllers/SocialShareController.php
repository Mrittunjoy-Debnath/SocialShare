<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Jorenvh\Share\Share;
use Share;
class SocialShareController extends Controller
{
    public function index()
    {
        $socialShare = Share::page('https://www.thedailystar.net/news/bangladesh/diplomacy/news/pm-hasina-invites-us-president-biden-bangladesh-3056181','PM Hasina invites US President Biden to Bangladesh')
            ->facebook()
            ->twitter()
            ->linkedin()
            ->whatsapp()
            ->telegram()
            ->getRawLinks();

        return view('socialshare',[
            'socialShare' =>$socialShare,
        ]);
    }
}
