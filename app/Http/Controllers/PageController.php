<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController
{
    public function index(): View
    {
        return view('pages.index');
    }

    public function services(): View
    {
        return view('pages.services.index');
    }

    public function mobilePhysiotherapy(): View
    {
        return view('pages.services.mobile-physiotherapy');
    }

    public function ambulatoryPhysiotherapy(): View
    {
        return view('pages.services.ambulatory-physiotherapy');
    }

    public function seniorPhysiotherapy(): View
    {
        return view('pages.services.senior-physiotherapy');
    }

    public function adultPhysiotherapy(): View
    {
        return view('pages.services.adult-physiotherapy');
    }

    public function vertebrogenicPhysiotherapy(): View
    {
        return view('pages.services.vertebrogenic-physiotherapy');
    }

    public function neurologicalPhysiotherapy(): View
    {
        return view('pages.services.neurological-physiotherapy');
    }

    public function immobilePhysiotherapy(): View
    {
        return view('pages.services.immobile-physiotherapy');
    }

    public function postoperativePhysiotherapy(): View
    {
        return view('pages.services.postoperative-physiotherapy');
    }

    public function banking(): View
    {
        return view('pages.services.banking');
    }

    public function massages(): View
    {
        return view('pages.services.massages');
    }

    public function classicMassage(): View
    {
        return view('pages.services.classic-massage');
    }

    public function reflexMassage(): View
    {
        return view('pages.services.reflex-massage');
    }

    public function softTechniques(): View
    {
        return view('pages.services.soft-techniques');
    }

    public function clients(): View
    {
        return view('pages.clients');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function terms(): View
    {
        return view('pages.terms');
    }

    public function complaints(): View
    {
        return view('pages.complaints');
    }

    public function privacy(): View
    {
        return view('pages.privacy');
    }
}
