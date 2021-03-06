<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\GangguanPencernaan;
use Auth;
use DB;

class PencernaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pencernaans = DB::table('gangguan_pencernaans')->select()->get();

        $id_user = Auth::user()->id;
        $array_tmp = array();

        foreach($pencernaans as $pencernaan){
            if($id_user == $pencernaan->user_id){
                array_push($array_tmp, $pencernaan);
            }
        }

        if(Auth::user()->is_admin == 1){
            return view("/themes/diagnosahewan/diagnosapencernaan", ['pencernaans'=>$pencernaans]);
        }
        else{
            return view("/themes/diagnosahewan/diagnosapencernaan", ['pencernaans'=>$array_tmp]);
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
        $pencernaan = new GangguanPencernaan();
        $pencernaan->user_id = Auth::user()->id;
        $pencernaan->soal1 = $request->input('soal1');
        $pencernaan->soal2 = $request->input('soal2');
        $pencernaan->soal3 = $request->input('soal3');
        $pencernaan->soal4 = $request->input('soal4');
        $pencernaan->soal5 = $request->input('soal5');
        $pencernaan->soal6 = $request->input('soal6');
        $pencernaan->feedback ="";
        $pencernaan->save();

        return redirect('/diagnosapencernaan');
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
        $pencernaan = GangguanPencernaan::find($id);
        $pencernaan->soal1 = $request->input('soal1');
        $pencernaan->soal2 = $request->input('soal2');
        $pencernaan->soal3 = $request->input('soal3');
        $pencernaan->soal4 = $request->input('soal4');
        $pencernaan->soal5 = $request->input('soal5');
        $pencernaan->soal6 = $request->input('soal6');
        $pencernaan->feedback = $request->input('feedback');
        $pencernaan->save();

        return redirect('/diagnosapencernaan');
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
