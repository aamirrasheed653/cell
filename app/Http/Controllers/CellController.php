<?php

namespace App\Http\Controllers;

use App\Models\Cell;

use Illuminate\Http\Request;

class CellController extends Controller
{
    public function index()
    {
        $cells = Cell::with('contact')->get();
        return $cells->all();
    }

    public function show(Cell $cell)
    {
        return $cell->load('contact');
    }

}
