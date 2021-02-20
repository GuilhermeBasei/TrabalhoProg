<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $itens = Item::all();
            return view('ListAll', ['itens' => $itens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($item)
    {
        if($item == 50){
            $itens = Item::where('tipo', 'Masculino')->get();
            return view('ListTipo',['itens'=>$itens]);
        }
        elseif ($item == 51){
            $itens = Item::where('tipo', 'Feminino')->get();
            return view('ListTipo',['itens'=>$itens]);
        }else{
            $itens = Item::where('id', $item)->get();
            return view('Item',['itens'=>$itens]);
        }

    }

    public function show2($item)
    {
        if($item == 1){
            $itens = Item::where('tipo', 'Masculino')->get();
        }
        elseif ($item == 2){
            $itens = Item::where('tipo', 'Feminino')->get();
        }
        return view('ListTipo',['itens'=>$itens]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}