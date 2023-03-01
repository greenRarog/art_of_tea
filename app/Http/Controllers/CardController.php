<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CardController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Card/Create', [
            'test1' => 'test1',
            'test2' => 'text test 2',
        ]);
    }
}
