<?php

namespace App\Http\Controllers;

use App\Models\lamarKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;

class LamarKerjaController extends Controller
{
    public function index()
    {
        return view('Admin.suratLamaranKerja.index');
    }
    public function fetchsuratlamaran()
    {
        $suratlamaran = lamarKerja::all();
        return response()->json([
            'suratlamaran' => $suratlamaran,
        ]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tempat_tulis_lamaran' => 'required|max:20',
            'tanggal_tulis_lamaran' => 'required',
            'kepada_lamaran_instansi' => 'required|max:100',
            'nama_instansi_lamaran' => 'required|max:100',
            'alamat_instansi_lamaran' => 'required|max:100',
            'nama_user_lamar' => 'required|max:100',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required',
            'alamat_user_lamar' => 'required|max:100',
            'nomor_user_lamar' => 'required|max:10',
            'berkas_satu' => 'required|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            $lamarkerja = new lamarKerja;
            $lamarkerja->tempat_tulis_lamaran = $request->input('tempat_tulis_lamaran');
            $lamarkerja->tanggal_tulis_lamaran = $request->input('tanggal_tulis_lamaran');
            $lamarkerja->kepada_lamaran_instansi = $request->input('kepada_lamaran_instansi');
            $lamarkerja->nama_instansi_lamaran = $request->input('nama_instansi_lamaran');
            $lamarkerja->alamat_instansi_lamaran = $request->input('alamat_instansi_lamaran');
            $lamarkerja->nama_user_lamar = $request->input('nama_user_lamar');
            $lamarkerja->tempat_lahir = $request->input('tempat_lahir');
            $lamarkerja->tanggal_lahir = $request->input('tanggal_lahir');
            $lamarkerja->alamat_user_lamar = $request->input('alamat_user_lamar');
            $lamarkerja->nomor_user_lamar = $request->input('nomor_user_lamar');
            $lamarkerja->berkas_satu = $request->input('berkas_satu');
            $lamarkerja->berkas_dua = $request->input('berkas_dua');
            $lamarkerja->berkas_tiga = $request->input('berkas_tiga');
            $lamarkerja->berkas_empat = $request->input('berkas_empat');
            $lamarkerja->berkas_lima = $request->input('berkas_lima');
            $lamarkerja->save();
            return response()->json([
                'status' => 200,
                'message' => 'Data Surat Lamaran Kerja Berhasil Ditambahkan.'
            ]);
        }
    }
    public function edit($id)
    {
        $suratlamaran = LamarKerja::find($id);
        if ($suratlamaran) {
            return response()->json([
                'status' => 200,
                'suratlamaran' => $suratlamaran,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Surat Lamaran Kerja Found.'
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tempat_tulis_lamaran' => 'required|max:20',
            'tanggal_tulis_lamaran' => 'required',
            'kepada_lamaran_instansi' => 'required|max:100',
            'nama_instansi_lamaran' => 'required|max:100',
            'alamat_instansi_lamaran' => 'required|max:100',
            'nama_user_lamar' => 'required|max:100',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required',
            'alamat_user_lamar' => 'required|max:100',
            'nomor_user_lamar' => 'required|max:10',
            'berkas_satu' => 'required|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            $lamarkerja = lamarKerja::find($id);
            if ($lamarkerja) {
                $lamarkerja->tempat_tulis_lamaran = $request->input('tempat_tulis_lamaran');
                $lamarkerja->tanggal_tulis_lamaran = $request->input('tanggal_tulis_lamaran');
                $lamarkerja->kepada_lamaran_instansi = $request->input('kepada_lamaran_instansi');
                $lamarkerja->nama_instansi_lamaran = $request->input('nama_instansi_lamaran');
                $lamarkerja->alamat_instansi_lamaran = $request->input('alamat_instansi_lamaran');
                $lamarkerja->nama_user_lamar = $request->input('nama_user_lamar');
                $lamarkerja->tempat_lahir = $request->input('tempat_lahir');
                $lamarkerja->tanggal_lahir = $request->input('tanggal_lahir');
                $lamarkerja->alamat_user_lamar = $request->input('alamat_user_lamar');
                $lamarkerja->nomor_user_lamar = $request->input('nomor_user_lamar');
                $lamarkerja->berkas_satu = $request->input('berkas_satu');
                $lamarkerja->berkas_dua = $request->input('berkas_dua');
                $lamarkerja->berkas_tiga = $request->input('berkas_tiga');
                $lamarkerja->berkas_empat = $request->input('berkas_empat');
                $lamarkerja->berkas_lima = $request->input('berkas_lima');
                $lamarkerja->update();
                return response()->json([
                    'status' => 200,
                    'message' => 'Data Surat Lamaran Berhasil diUpdate.'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Surat Lamaran Kerja Tidak Ditemukan.'
                ]);
            }
        }
    }
    public function destroy($id)
    {
        $suratlamaran = lamarKerja::find($id);
        if ($suratlamaran) {
            $suratlamaran->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Data Surat Lamaran Kerja Berhasil dihapus.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Data Surat Lamaran Kerja Tidak Ditemukan.'
            ]);
        }
    }
    public function print($id)
    {
        $suratlamaran = lamarKerja::find($id);
        $pdf = PDF::loadview('admin.suratLamaranKerja.pdf_suratlamarankerja', ['suratlamaran' => $suratlamaran])->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
}
