<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Visitor extends Component
{
   /***
    *  this is validate section
    */
    // public $name;
    // public $email;
    // public $body;

    // public function submit()
    // {
    //     $validatedData = $this->validate([
    //         'name' => 'required|min:6',
    //         'email' => 'required|email',
    //         'body' => 'required',
    //     ]);

    //     Contact::create($validatedData);

    //     return redirect()->to('/form');
    // }

    // public function render()
    // {
    //     return view('livewire.contact-form');
    // }

    public $currentPage = 1;

    public $pages = [
        1 => [
            'heading' => 'Ini Personal Information',
            'subheading' => 'sub-1'
        ],
        2 => [
            'heading' => 'Ini Heading 2',
            'subheading' => 'Ini sub-2'
        ],
    ];

    public function goToNextPage()
    {
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function render()
    {
        return view('livewire.visitor');
    }
}
