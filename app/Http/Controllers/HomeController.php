<?php

namespace App\Http\Controllers;

use App\Models\izinKerja;
use App\Models\lamarKerja;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $suratizin = izinKerja::get();
        $totalsuratizin = count($suratizin);

        $suratlamaran = lamarKerja::get();
        $totalsuratlamaran = count($suratlamaran);

        $totalsurat = $totalsuratlamaran + $totalsuratizin;
        return view('admin.dashboard', compact('totalsurat', 'totalsuratizin', 'totalsuratlamaran'));
    }
}
