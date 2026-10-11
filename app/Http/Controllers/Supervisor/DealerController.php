<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dealer\StoreRequest;
use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function index() {
        
        $dealers = Dealer::select(['id','code','name'])->get();
     

        return view('dealer.index', ['dealers' => $dealers]);
    }

    public function create() {

        return view('dealer.create');
        
    }

    public function show(Dealer $dealer){
        return view('dealer.show', ['dealer' => $dealer]);
    }

    public function store(StoreRequest $request) {
   

        //Validation 
        $validatedRequest = $request->validated();

        //Add to database
        Dealer::create($validatedRequest);

        //Handle if success
        return redirect()->route('dealer.index');

    }

    public function edit() {
        return view('dealer.edit');
    }

    public function update() {
        return view('dealer.update');
    }

    public function destroy(Dealer $dealer){
        $dealer->delete();

        return redirect()->route('dealer.index');
    }
}
