<?php

namespace App\Http\Controllers\Contact;

use App\Mail\LightningProjectInquiry;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{
    public array $form = [];
    public bool $contactReceived = false;

    protected function rules(): array
    {
        return [
            'form.name' => 'required',
            'form.email' => 'required|email',
            'form.phone' => 'required',
            'form.city' => 'required',
            'form.state' => 'required',
            'form.zip' => 'required',
            'form.type' => 'required',
            'form.description' => 'required',
        ];
    }

    public function save()
    {
        $data = [
            'name' => $this->form['name'],
            'email' => $this->form['email'],
            'phone' => $this->form['phone'],
            'city' => $this->form['city'],
            'state' => $this->form['state'],
            'zip' => $this->form['zip'],
            'type' => $this->form['type'],
            'description' => $this->form['description'],
        ];

        Mail::to(env('MAIL_RECEIVER'))
            ->send(new LightningProjectInquiry($data));

        $this->contactReceived = true;
        $this->reset('form');
    }

    public function render(): View|Application|Factory
    {
        return view('contact.index');
    }
}
