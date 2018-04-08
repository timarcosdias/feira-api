<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;

class UnidadeController extends Controller
{
    public function __construct() {
        // Cross-origin resource sharing 
        $this->middleware('cors');
    }

    public function index() {
        return Unidade::all();
    }
}
