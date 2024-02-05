<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\Queue;
use Illuminate\Http\Request;

class AntriController extends Controller
{
    public function index($perusahaanId)
    {
        if (!$perusahaanId) {
            return abort(404);
        }
        
        $checkPerusahaanData = Perusahaan::where('id', $perusahaanId)->first();
        if (!$checkPerusahaanData) {
            return abort(404);
        }

        $data['queues'] = Queue::where('perusahaan_id', $checkPerusahaanData->id)->get();
        $data['perusahaan'] = $checkPerusahaanData;

        return view('frontend.queue', $data);
    }

    public function ambilAntrian($perusahaanID, $userID)
    {
        if (!$perusahaanID) {
            return abort(404);
        }
        if (!$userID) {
            return abort(404);
        }
        
        $checkPerusahaanData = Perusahaan::where('id', $perusahaanID)->first();
        if (!$checkPerusahaanData) {
            return abort(404);
        }
        

        try {
            $data = new Queue();
            $data->perusahaan_id = $perusahaanID;
            $data->user_id = $userID;

            $data->save();

            return redirect()->back()->with('success', "Berhasil Ambil Antrian");
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', $th->getMessage());
        }
    }
}
