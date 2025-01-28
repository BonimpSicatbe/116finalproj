<?php

namespace App\Livewire;

use Livewire\Component;

class SideBar extends Component
{

    public $menuItems = [
      [
            'title' => 'Introduction',
            'subItems' => [
                'Overview',
                'Getting Started',
                'Authetication and Authorization',
            ]
      ],    
      [
            'title' => 'Shows API',
            'subItems' => [
                'Description',
                'Base URL',
                'Endpoints',
                'Authentication amd Authorization',
                'Parameters',
                'Format Type',
                'Properties with description',
                'Request',
                'Response',
                'Errors',
            ]
      ],
      [
        'title' => 'Actors API',
        'subItems' => [
            'Description',
            'Base URL',
            'Endpoints',
            'Authentication amd Authorization',
            'Parameters',
            'Format Type',
            'Properties with description',
            'Request',
            'Response',
            'Errors',
        ]
      ],
      [
        'title' => 'Directors API',
        'subItems' => [
            'Description',
            'Base URL',
            'Endpoints',
            'Authentication amd Authorization',
            'Parameters',
            'Format Type',
            'Properties with description',
            'Request',
            'Response',
            'Errors',
        ]
      ],
      [
        'title' => 'Genre API',
        'subItems' => [
            'Description',
            'Base URL',
            'Endpoints',
            'Authentication amd Authorization',
            'Parameters',
            'Format Type',
            'Properties with description',
            'Request',
            'Response',
            'Errors',
        ]
      ],
      [
        'title' => 'Ticket API',
        'subItems' => [
            'Description',
            'Base URL',
            'Endpoints',
            'Authentication amd Authorization',
            'Parameters',
            'Format Type',
            'Properties with description',
            'Request',
            'Response',
            'Errors',
        ]
      ],
   ];
    public function render()
    {
        return view('livewire.side-bar');
    }
}
