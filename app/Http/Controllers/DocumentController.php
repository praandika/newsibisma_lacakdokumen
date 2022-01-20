<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Models\Sale;
use Carbon\Carbon;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        
       
        $nik = $req->nik;
        $frame_no = $req->frame_no;
        

        if($nik == true)
        {
            $data = Document::join('sales','documents.sale_id','sales.id')
            ->join('stocks','sales.stock_id','stocks.id')
            ->join('units','stocks.unit_id','units.id')
            ->where('nik', $nik)->get();
            return view('home',compact('data'));

                }elseif($frame_no == true){
                    $data = Document::join('sales','documents.sale_id','sales.id')
                    ->join('stocks','sales.stock_id','stocks.id')
                    ->join('units','stocks.unit_id','units.id')
                    ->where('frame_no', $frame_no)->get();
                    return view('home',compact('data'));

                        }else{
                            $data = Document::join('sales','documents.sale_id','sales.id')
                            ->join('stocks','sales.stock_id','stocks.id')
                            ->join('units','stocks.unit_id','units.id')
                            ->where('frame_no', 'id')->get();
                            return view('home',compact('data')); 
                        }
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
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('home', compact('document'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
