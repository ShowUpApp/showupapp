<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NytimesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//TODO: We should move most of this to it's own model/package
        $data_arr = array(
            'api-key'   =>  '2f9f8886e2276ccd7b069448245f2567:9:72054182',
            'll'        =>  '40.756146,-73.99021',
            'redius'    =>  '4000'
        );

        $parms = http_build_query($data_arr);
        $url="http://api.nytimes.com/svc/events/v2/listings.json?".$parms;
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $curlcontent = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($curlcontent);
        //print_r($output);
        //return View::make('showlist', $output);
        //return view('showlist',$output);
        return view('showlist')->with('output', $output);
    }

    /**
     * Add twitter posting function with api
     */
    public function posttwitter(){
        $clientID ="vq4y3oBHyFXAvCCoitV8zT20J";
        $clientSecret ="wQapkIsihlritnfEkkyG5FBeV0P9WLEob9TleVi730cQod89y6";

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, "https://api.twitter.com/1.1/statuses/update.json?grant_type=client_credentials");
        curl_setopt($curl, CURLOPT_USERPWD, $clientID.":".$clientSecret);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type:application/json", "Cache-Control:no-cache"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        return view('posttwit');
    }

    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
