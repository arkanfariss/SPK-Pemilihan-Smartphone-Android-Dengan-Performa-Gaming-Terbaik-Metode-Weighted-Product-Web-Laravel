<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Hasilwp;
use Illuminate\Support\Facades\DB;

class HitungController extends Controller
{
    public function index()
    {
        return view('master', [
            "title" => "HOME"
        ]);
    }
    public function proses(Request $request, Data $data)
    {
        // mengambil data alternatif sebagai $data
        $data = Data::all();
        // proses menghitung nilai W
        // input nilai wj
        $bobotCpu = $request->input('inputCpu');
        $bobotRam = $request->input('inputRam');
        $bobotStorage = $request->input('inputStorage');
        $bobotLayar = $request->input('inputLayar');
        $bobotBaterai = $request->input('inputBaterai');
        $bobotHarga = $request->input('inputHarga');
        // pengkondisian untuk aturan input user
        /*if ($bobotCpu == $bobotRam && $bobotCpu == $bobotStorage && $bobotCpu == $bobotLayar && $bobotCpu == $bobotBaterai && $bobotCpu == $bobotHarga) {
            return back()->with(['inputBobotSama' => 'Nilai Bobot Semua Kriteria Tidak Boleh Sama',]);
        }*/
        // menghitung nilai ∑wj
        $totalBobot = $bobotCpu + $bobotRam + $bobotStorage + $bobotLayar + $bobotBaterai + $bobotHarga;
        // hasil perhitungan nilai Wj atau perbaikan bobot
        $bobotCpuFix = $bobotCpu / $totalBobot;
        $bobotRamFix = $bobotRam / $totalBobot;
        $bobotStorageFix = $bobotStorage / $totalBobot;
        $bobotLayarFix = $bobotLayar / $totalBobot;
        $bobotBateraiFix = $bobotBaterai / $totalBobot;
        $bobotHargaFix = $bobotHarga / $totalBobot;

        // menghitung nilai S
        // $i variabel pengulangan untuk alternatif ke-n
        $i = 0;
        $totalNilaiS = 0;
        foreach ($data as $data) {
            // menghitung Xij dipangkatkan Wj
            $NilaiSCpu[$i] = pow($data->cpu, $bobotCpuFix);
            $NilaiSRam[$i] = pow($data->ram, $bobotRamFix);
            $NilaiSStorage[$i] = pow($data->storage, $bobotStorageFix);
            $NilaiSLayar[$i] = pow($data->layar, $bobotLayarFix);
            $NilaiSBaterai[$i] = pow($data->baterai, $bobotBateraiFix);
            $NilaiSHarga[$i] = pow($data->harga, (-$bobotHargaFix));
            // hasil perhitungan nilai Si
            $NilaiS[$i] = $NilaiSCpu[$i] * $NilaiSRam[$i] * $NilaiSStorage[$i] * $NilaiSLayar[$i] * $NilaiSBaterai[$i] * $NilaiSHarga[$i];
            // menghitung nilai ∑Si
            $totalNilaiS += $NilaiS[$i];
            $i++;
        }

        // menghitung nilai V
        // $j variabel pengulangan untuk alternatif ke-n
        $j = 0;
        foreach ($NilaiS as $NilaiS) {
            // perhitungan nilai Vi
            $NilaiV[$j] = $NilaiS / $totalNilaiS;
            $j++;
        }
        // proses menyimpan data nilai V
        // $k variabel pengulangan untuk alternatif ke-n
        $k = 1;
        $cekRecord = Hasilwp::all();
        if ($cekRecord->isEmpty()) {
            foreach ($NilaiV as $NilaiV) {
                $record[$k] = new Hasilwp;
                $record[$k]->nilaiV = $NilaiV;
                $record[$k]->data_id = $k;
                $record[$k]->save();
                $k++;
            }
        } else {
            DB::table('hasilwp')->truncate();
            return back()->with(['cobalagi' => 'Silahkan Coba Lagi',]);
        }
        // pengkondisian untuk menampilkan jumlah smartphone hasil proses WP
        $tampildata = $request->input('inputTampilData');
        if ($tampildata < 1 || $tampildata > 10) {
            return back()->with(['inputTampilSalah' => 'Nilai Input "Data Hasil Yang Diinginkan" Salah',]);
        }
        // perankingan nilai V (terbesar ke terkecil)
        $collection = collect($record)->sortByDesc('nilaiV')->take($tampildata);
        return view('result', [
            'title' => 'RESULT',
            'collection' => $collection,
            'cpu' => $bobotCpu,
            'ram' => $bobotRam,
            'storage' => $bobotStorage,
            'layar' => $bobotLayar,
            'baterai' => $bobotBaterai,
            'harga' => $bobotHarga,
        ]);
    }
    public function clear()
    {
        DB::table('hasilwp')->truncate();
        return redirect('/home');
    }
}
