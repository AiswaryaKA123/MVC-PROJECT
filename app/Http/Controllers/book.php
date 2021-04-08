<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class book extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getTitle=request('bname');
        $getAuthor=request('bauthor');
        $getDescrip=request('bdes');
        $getDistrib=request('bdistribu');
        $getPrice=request('bprice');
        echo $getTitle;
        echo "<br>";
        echo $getAuthor;
        echo "<br>";
        echo $getDescrip;
        echo "<br>";
        echo  $getDistrib;
        echo "<br>";
        echo $getPrice;
        echo "<br>";
        $book=new BookModel();
        $book->bname=$getTitle;
        $book->bauthor=$getAuthor;
        $book->bdes=$getDescrip;
        $book->bdistribu=$getDistrib;
        $book->bprice=$getPrice;
        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
