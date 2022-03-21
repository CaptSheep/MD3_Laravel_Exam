<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormRequest;
use App\Models\Dealers;
use App\Models\Status;
use Illuminate\Http\Request;

class DealerController extends Controller
{

    public function index()
    {
        $dealers = Dealers::all();
        return view('backend.dealer.list',compact('dealers'));
    }

    public function create()
    {
        $status = Status::all();
        return view('backend.dealer.create',compact('status'));
    }


    public function store(CreateFormRequest $request)
    {
        $dealer = new Dealers();
        $dealer->name = $request->name;
        $dealer->phoneNumber = $request->phoneNumber;
        $dealer->email = $request->email;
        $dealer->address = $request->address;
        $dealer->owner = $request->owner;
        $dealer->status_id = $request->select;
        $dealer->save();
        return redirect()->route('dealers.index');
    }


    public function show($id)
    {
        $dealers = Dealers::all()->where('id',$id);
        return view('backend.dealer.detail',compact('dealers'));
   }


    public function edit($id)
    {
        $status = Status::all();
        $dealer = Dealers::findOrFail($id);
        return view('backend.dealer.update',compact('id','dealer','status'));
    }


    public function update(Request $request, $id)
    {
        $status = Status::all();
        $dealer = Dealers::findOrFail($id);
        $dealer->name = $request->name;
        $dealer->phoneNumber = $request->phoneNumber;
        $dealer->email = $request->email;
        $dealer->address = $request->address;
        $dealer->owner = $request->owner;
        $dealer->status_id = $request->select;
        $dealer->save();
        return redirect()->route('dealers.index',compact('id','dealer','status'));
    }


    public function destroy($id)
    {
        Dealers::destroy($id);
        return redirect()->route('dealers.index');
    }
}
