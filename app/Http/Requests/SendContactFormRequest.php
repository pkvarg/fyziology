<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Patrikjak\Utils\Common\Http\Requests\Traits\ValidationException;

class SendContactFormRequest extends FormRequest
{
    use ValidationException;

    /**
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'gdpr' => 'required|accepted',
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'gdpr.required' => 'Musíte súhlasiť so spracovaním osobných údajov',
            'gdpr.accepted' => 'Musíte súhlasiť so spracovaním osobných údajov',
            'name.required' => 'Meno je povinné',
            'email.email' => 'Email musí byť platný',
            'email.required' => 'Email je povinný',
            'message.required' => 'Správa je povinná',
        ];
    }

    public function getName(): string
    {
        return $this->input('name');
    }

    public function getEmail(): string
    {
        return $this->input('email');
    }

    public function getMessage(): string
    {
        return $this->input('message');
    }
}
