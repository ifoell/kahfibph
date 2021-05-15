<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mahasiswa = Mahasiswa::all();

        if ($request->ajax()) {

            return Datatables::of($mahasiswa)
                    ->editColumn('phone_number', function($data){
                        $replace = Str::replaceFirst('0', '62', $data->phone_number);
                        $wa_number = "https://wa.me/".$replace;

                        $phone_number = '<a href="'.$wa_number.'" data-toggle="tooltip" data-original-title="Show" class="edit btn btn-info btn-sm" title="'.$data->fullname.' - WA" >'.$data->phone_number;

                        return $phone_number;
                    })
                    ->editColumn('jk', function($data){
                        if ($data->jk == 'M'){
                            return 'Laki-laki';
                        } elseif ($data->jk == 'F') {
                            return 'Perempuan';
                        } else {
                            return 'ERROR';
                        }
                    })
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Show" class="edit btn btn-info btn-sm showMahasiswa" title="'.$data->fullname.' - Detail" data-id="'.$data->id.'"><ion-icon name="eye"></ion-icon></a>';
                        $btn = $btn.'<a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm editMahasiswa" title="Edit" data-id="'.$data->id.'"><ion-icon name="create"></ion-icon></a>';
                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" class="btn btn-danger btn-sm deleteMahasiswa" title="Delete" data-id="'.$data->id.'"><ion-icon name="trash"></ion-icon></a>';
                        return $btn;
                    })
                    ->rawColumns(['action', 'phone_number'])
                    ->make(true);
        }
        return view('mahasiswa.index');
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
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
