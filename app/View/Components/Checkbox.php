<?php
// app/View/Components/Checkbox.php
namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $id;
    public $label;

    public function __construct($id, $label = '')
    {
        $this->id = $id;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.checkbox');
    }
}
