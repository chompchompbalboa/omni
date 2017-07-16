<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// Models

class ParserController extends Controller
{
    /**
     * Load the index page
     */
    public function index()
    {
        return view('yellowpagesparser.index', 
            [
                "path" => "yellowpagesparser",
                "businesses" => []
            ]
        );
    }

    /**
     * Load the index page
     */
    public function addInitial()
    {
        return [""]
    }
}