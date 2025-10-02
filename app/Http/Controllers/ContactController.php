<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactController
{
    public function sendContactForm(SendContactFormRequest $request): JsonResponse
    {
        Mail::to(config('contact-form.email'))
            ->send(new ContactForm([
                'name' => $request->getName(),
                'email' => $request->getEmail(),
                'message' => $request->getMessage(),
            ]));

        return new JsonResponse([
            'message' => 'Formulár bol úspešne odoslaný',
        ]);
    }
}
