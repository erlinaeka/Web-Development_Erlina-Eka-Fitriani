<?php

namespace App\Http\Controllers;

use App\Models\izinKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;

class IzinKerjaController extends Controller
{
    public function index()
    {
        return view('Admin.suratIzinKerja.index');
    }
    public function fetchsuratizin()
    {
        $suratizin = izinKerja::all();
        return response()->json([
            'suratizin' => $suratizin,
        ]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tempat_tulis_surat' => 'required|max:20',
            'tanggal_tulis_surat' => 'required',
            'hal_izin' => 'required|max:100',
            'kepada_orang_instansi' => 'required|max:50',
            'nama_instansi' => 'required|max:100',
            'alamat_instansi' => 'required|max:200',
            'nama_user_izin' => 'required|max:100',
            'alamat_user_izin' => 'required|max:100',
            'tanggal_mulai_izin' => 'required',
            'jabatan_user_izin' => 'required|max:100',
            'alasan_izin' => 'required|max:200',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            $izinkerja = new izinKerja;
            $izinkerja->tempat_tulis_izin = $request->input('tempat_tulis_surat');
            $izinkerja->tanggal_tulis_izin = $request->input('tanggal_tulis_surat');
            $izinkerja->hal_izin = $request->input('hal_izin');
            $izinkerja->kepada_orang_instansi = $request->input('kepada_orang_instansi');
            $izinkerja->nama_instansi = $request->input('nama_instansi');
            $izinkerja->alamat_instansi = $request->input('alamat_instansi');
            $izinkerja->nama_user_izin = $request->input('nama_user_izin');
            $izinkerja->alamat_user_izin = $request->input('alamat_user_izin');
            $izinkerja->alamat_instansi = $request->input('alamat_instansi');
            $izinkerja->tanggal_mulai_izin = $request->input('tanggal_mulai_izin');
            $izinkerja->tanggal_selesai_izin = $request->input('tanggal_selesai_izin');
            $izinkerja->jabatan_user_izin = $request->input('jabatan_user_izin');
            $izinkerja->alasan_izin = $request->input('alasan_izin');
            $izinkerja->save();
            return response()->json([
                'status' => 200,
                'message' => 'Data Surat Izin Kerja Berhasil Ditambahkan.'
            ]);
        }
    }
    public function edit($id)
    {
        $suratizin = izinKerja::find($id);
        if ($suratizin) {
            return response()->json([
                'status' => 200,
                'suratizin' => $suratizin,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Surat Izin Kerja Found.'
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tempat_tulis_surat' => 'required|max:20',
            'tanggal_tulis_surat' => 'required',
            'hal_izin' => 'required|max:100',
            'kepada_orang_instansi' => 'required|max:50',
            'nama_instansi' => 'required|max:100',
            'alamat_instansi' => 'required|max:200',
            'nama_user_izin' => 'required|max:100',
            'alamat_user_izin' => 'required|max:100',
            'tanggal_mulai_izin' => 'required',
            'jabatan_user_izin' => 'required|max:100',
            'alasan_izin' => 'required|max:200',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            $suratizin = izinKerja::find($id);
            if ($suratizin) {
                $suratizin->tempat_tulis_izin = $request->input('tempat_tulis_surat');
                $suratizin->tanggal_tulis_izin = $request->input('tanggal_tulis_surat');
                $suratizin->hal_izin = $request->input('hal_izin');
                $suratizin->kepada_orang_instansi = $request->input('kepada_orang_instansi');
                $suratizin->nama_instansi = $request->input('nama_instansi');
                $suratizin->alamat_instansi = $request->input('alamat_instansi');
                $suratizin->nama_user_izin = $request->input('nama_user_izin');
                $suratizin->alamat_user_izin = $request->input('alamat_user_izin');
                $suratizin->alamat_instansi = $request->input('alamat_instansi');
                $suratizin->tanggal_mulai_izin = $request->input('tanggal_mulai_izin');
                $suratizin->tanggal_selesai_izin = $request->input('tanggal_selesai_izin');
                $suratizin->jabatan_user_izin = $request->input('jabatan_user_izin');
                $suratizin->alasan_izin = $request->input('alasan_izin');
                $suratizin->update();
                return response()->json([
                    'status' => 200,
                    'message' => 'Data Surat Izin Berhasil di Update.'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Surat Izin Kerja Tidak Ditemukan.'
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $suratizin = izinKerja::find($id);
        if ($suratizin) {
            $suratizin->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Data Surat Izin Kerja Berhasil dihapus.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Data Surat Izin Kerja Tidak Ditemukan.'
            ]);
        }
    }
    public function print($id)
    {
        $suratizin = izinKerja::find($id);
        $pdf = PDF::loadview('admin.suratizinkerja.pdf_suratizinkerja', ['suratizin' => $suratizin])->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
}
