<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DashboardDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardData.index', [
            'datas' => Data::paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardData.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'smartphone' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'layar' => 'required',
            'baterai' => 'required',
            'harga' => 'required',
            'image' => 'required|image|file|max:5120',
        ]);

        $validatedData['image'] = $request->file('image')->store('smartphone-image');

        Data::create($validatedData);
        return redirect('/dashboard/data')->with('success', 'Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        return view('dashboardData.show', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('dashboardData.edit', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        $validatedData = $request->validate([
            'smartphone' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'layar' => 'required',
            'baterai' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:5120',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('smartphone-image');
        }

        Data::where('id', $data->id)->update($validatedData);
        return redirect('/dashboard/data')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        DB::table('hasilwp')->truncate();
        Storage::delete($data->image);
        Data::destroy($data->id);
        return redirect('/dashboard/data')->with('success', 'Data berhasil dihapus!');
    }
}
