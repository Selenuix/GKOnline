<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Return the index page to router
    public function getIndex() {
        return view('pages.welcome');
    }

    // Return the contact page to router
    public function getContact() {
        return view('pages.contact');
    }

    // Return the contact page to router
    public function getAbout() {
        return view('pages.about');
    }
}
