<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    function index(){
        return view('sitio.pages.index');//busca la vista que va a utilizar
    }

    function preguntas(){
        return view('sitio.pages.preguntas');
    }

    function blog(){
        return view('sitio.pages.blog');
    }

    function community(){
        return view('sitio.pages.community');
    }

    function login(){
        return redirect()->route('login');
    }

    function projectnews(){
        return view('sitio.pages.newsviews.projectnews');
    }

    function newswins(){
        return view('sitio.pages.newsviews.newswins');
    }

    function newcharacters(){
        return view('sitio.pages.newsviews.newcharacters');
    }
    function nutritionnews(){
        return view('sitio.pages.newsviews.nutritionnews');
    }
}
