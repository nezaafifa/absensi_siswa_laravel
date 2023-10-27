<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Absen;
use App\Models\Siswa;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['absen']=Absen::get();
        return view('absen.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new Absen;
        $new->status  = Request::get('status');
        $new->keterangan  = Request::get('keterangan');
        $new->siswa_id  = Request::get('id_siswa');
        $new->save();
        return redirect('absen');
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

    public function cari(){
        $id = Request::get('id');
        if ($id==''){
            $data['val']   =  2;
        }else{
            $isi = Siswa::where('nis','=',$id)->first();
            if (empty($isi)) {
                $data['val']  =  0;
            }else{
                $data['val']  =  1;
                $data['data']  =  $isi;
            }
        }

        return response($data);
    }
}
