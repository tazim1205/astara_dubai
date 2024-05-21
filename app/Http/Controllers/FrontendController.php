<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\message;
use App\Models\about_us;
use App\Models\chairman_message;
use Hash;
use Auth;
use DB;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function index()
    {
        return view("frontend.index");
    }
    public function categories()
    {
        return view("frontend.categories");
    }
    public function products()
    {
        return view("frontend.products");
    }
    public function product_details()
    {
        return view("frontend.product_details");
    }
    public function about()
    {
        $about_us = about_us::find(1);

        return view("frontend.about",compact('about_us'));
    }
    public function message_from_chairman()
    {
        $data = chairman_message::find(1);

        return view("frontend.message_from_chairman",compact('data'));
    }
    public function service()
    {
        return view("frontend.service");
    }
    public function mission_vision()
    {
        return view("frontend.mission_vision");
    }
    public function our_quality()
    {
        return view("frontend.our_quality");
    }
    public function blogs()
    {
        return view("frontend.blogs");
    }
    public function blog_details()
    {
        return view("frontend.blog_details");
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
