<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/nasi-klienti', [PageController::class, 'clients'])->name('page.clients');
Route::get('/cennik', [PageController::class, 'pricing'])->name('page.pricing');
Route::get('/kontakt', [PageController::class, 'contact'])->name('page.contact');
Route::get('/vseobecne-obchodne-podmienky', [PageController::class, 'terms'])->name('page.terms');
Route::get('/reklamacne-podmienky', [PageController::class, 'complaints'])->name('page.complaints');
Route::get('/ochrana-osobnych-udajov', [PageController::class, 'privacy'])->name('page.privacy');
Route::get('/cookies', [PageController::class, 'cookies'])->name('page.cookies');

Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');

Route::prefix('sluzby')
    ->name('page.services.')
    ->group(static function () {
        Route::get('/', [PageController::class, 'services'])->name('index');
        Route::get('/mobilna-fyzioterapia', [PageController::class, 'mobilePhysiotherapy'])
            ->name('mobile-physiotherapy');

        // 301 redirect from old ambulantna-fyzioterapia to mobilna-fyzioterapia
        Route::redirect('/ambulantna-fyzioterapia', '/sluzby/mobilna-fyzioterapia', 301);

        Route::get('/bankovanie', [PageController::class, 'banking'])->name('banking');
        Route::get('/masaze', [PageController::class, 'massages'])->name('massages');

        Route::get('/fyzioterapia-pre-seniorov', [PageController::class, 'seniorPhysiotherapy'])
            ->name('senior-physiotherapy');
        Route::get('/fyzioterapia-pre-dospelych', [PageController::class, 'adultPhysiotherapy'])
            ->name('adult-physiotherapy');
        Route::get('/fyzioterapia-pri-ochoreniach-chrbtice', [PageController::class, 'vertebrogenicPhysiotherapy'])
            ->name('vertebrogenic-physiotherapy');
        Route::get('/fyzioterapia-pri-neurologickych-ochoreniach', [PageController::class, 'neurologicalPhysiotherapy'])
            ->name('neurological-physiotherapy');
        Route::get('/fyzioterapia-pri-imobilnych-pacientoch', [PageController::class, 'immobilePhysiotherapy'])
            ->name('immobile-physiotherapy');
        Route::get('/fyzioterapia-pri-pourazovych-a-pooperacnych-stavoch', [PageController::class, 'postoperativePhysiotherapy'])
            ->name('postoperative-physiotherapy');

        Route::get('/klasicka-masaz', [PageController::class, 'classicMassage'])->name('classic-massage');
        Route::get('/reflexna-masaz', [PageController::class, 'reflexMassage'])->name('reflex-massage');
        Route::get('/makke-techniky', [PageController::class, 'softTechniques'])->name('soft-techniques');
});