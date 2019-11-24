<?php

namespace App\Http\Controllers;

use App\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
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
    public function create(Request $req)
    {
       $bid = Bid::create([
            'ad_id'=>$req->ad_id,
            'order_id'=>$req->order_id,
            'price'=>$req->price,
            'status'=>0,
            'customer_id' => 5,
            'seller_id' => 2


        ]);

        return $bid;
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
     * @param  \App\Ad_Order  $ad_Order
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $bids =  Bid::where('customer_id','=','5')->where('status','=','0')->get();

       return view('customer_bids', compact('bids'));
    }

    public function showSellerBids()
    {
        $bids = Bid::where('seller_id','=','2')->get();
        return view('seller_bids', compact('bids'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ad_Order  $ad_Order
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ad_Order  $ad_Order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $bid =  Bid::find($request->bid_id);
       $bid->status = $request->status;
       $bid->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ad_Order  $ad_Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad_Order $ad_Order)
    {
        //
    }
}
