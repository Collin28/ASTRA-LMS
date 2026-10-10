<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function index() {
        
        $validatedRequest = Dealer::all();

        return view('dealer.index');
    }

    public function create() {

        return view('dealer.create');
        
    }

    public function show(){
        
    }

    public function store() {
        
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy(){
        
    }
}
