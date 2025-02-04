<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class UsersTable extends Component
{
    public $users;

    public function __construct()
    {
        $this->users = User::paginate(10); // Paginate results
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.users-table');
    }
}
