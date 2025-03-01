<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is an about page ...';
        $viewData['author'] = 'Developed by: Juan Jose Vasquez';
    
        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact Us - Online Store';
        $viewData['subtitle'] = 'Contact Us';
        $viewData['email'] = 'contact@gmail.com';
        $viewData['address'] = '34 Street 3882';
        $viewData['phoneNumber'] = '+1 838 8282 9392';
    
        return view('home.contact')->with('viewData', $viewData);
    }
}
