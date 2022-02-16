<?php

namespace App\Controllers;

class Vend extends BaseController
{
    public function index()
    {
        return view('vend/index');
    }

    public function mencasual()
    {
        return view('vend/men_casual');
    }

    public function menformal()
    {
        return view('vend/men_formal');
    }

    public function mensports()
    {
        return view('vend/men_sports');
    }

    public function womencasual()
    {
        return view('vend/women_casual');
    }

    public function womenformal()
    {
        return view('vend/women_formal');
    }

    public function womensports()
    {
        return view('vend/women_sports');
    }

    public function childcasual()
    {
        return view('vend/child_casual');
    }

    public function childformal()
    {
        return view('vend/child_formal');
    }

    public function childsports()
    {
        return view('vend/child_sports');
    }

    public function cats()
    {
        return view('vend/cats');
    }

    public function dogs()
    {
        return view('vend/dogs');
    }

    public function other()
    {
        return view('vend/other');
    }
}
