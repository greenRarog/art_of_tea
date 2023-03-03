<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CardController extends Controller
{
    public function create(Request $request): Response
    {
        return Inertia::render('Card/Create');
    }
}
