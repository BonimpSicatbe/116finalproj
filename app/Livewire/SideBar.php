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
                    'Getting Started'
                ]
          ],
          [
                'title' => 'Installation',
                'subItems' => [
                    'Requirements',
                    'Steps'
                ]
          ],
          [
                'title' => 'Configuration',
                'subItems' => [
                    'Basic Configuration',
                    'Advanced Configuration'
                ]
          ],
          [
                'title' => 'Error Handling',
                'subItems' => [
                    'Common Errors',
                    'Debugging'
                ]
          ],
          [
                'title' => 'Endpoints',
                'subItems' => [
                    'List of Endpoints',
                    'Endpoint Details'
                ]
          ],
          [
                'title' => 'Authentication',
                'subItems' => [
                    'Login',
                    'Register'
                ]
          ],
   ];
    public function render()
    {
        return view('livewire.side-bar');
    }
}
