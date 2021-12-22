<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockportfolio;
use Illuminate\Support\Facades\DB;
class StockportfolioController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

    
        return view('admin.portfolio',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // Validate the inputs
        $request->validate([
            'price' => 'required',
            'date' => 'required',
            'profit' => 'required',
            'duration' => 'required',

        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('assets', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Stockportfolio([
                "price" => $request->get('price'),
                "date" => $request->get('date'),
                "profit" => $request->get('profit'),
                "duration" => $request->get('duration'),
                "image" => $request->file->hashName()
            ]);
            $product->save(); // Finally, save the record.
        }
      
        return view('admin.portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stockportfolio  $stockportfolio
     * @return \Illuminate\Http\Response
     */
    public function show(stockportfolio $stockportfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stockportfolio  $stockportfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(stockportfolio $stockportfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stockportfolio  $stockportfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stockportfolio $stockportfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stockportfolio  $stockportfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(stockportfolio $stockportfolio)
    {
        //
    }
}
