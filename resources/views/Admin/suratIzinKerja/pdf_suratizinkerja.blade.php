<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Izin Kerja </title>
    <style>
        #judul {
            text-align: center;
            text-decoration: underline;

        }
    </style>
</head>

<body>
    <h3 id="judul">SURAT IZIN KERJA</h3>
    <br><br>
    <div style="width: 30%; text-align: left; float: right;">{{ $suratizin->tempat_tulis_izin }},
        {{Carbon\Carbon::parse($suratizin->tanggal_tulis_izin)->format('d F Y') }}</div>
    <br><br>
    {{-- <div style="width: 40%; text-align: left; float: right;">Kepada</div>
    <div style="width: 40%; text-align: left; float: right;">Yth {{ $suratizin->kepada_orang_instansi }}</div>
    <div style="width: 40%; text-align: left; float: right;">{{ $suratizin->nama_instansi }}</div>
    <div style="width: 30%; text-align: left; float: right;">{{ $suratizin->tempat_tulis_izin }},
        {{Carbon\Carbon::parse($suratizin->tanggal_tulis_izin)->format('d F Y') }}</div>
    <br> --}}
    <p>Hal : {{ $suratizin->hal_izin }}</p>

    <div style="width: 40%; text-align: auto; float: left;">Kepada</div>
    <br>
    <div style="width: 40%; text-align: left; float: left;">Yth {{ $suratizin->kepada_orang_instansi }}</div>
    <br>
    <div style="width: 40%; text-align: left; float: left;">{{ $suratizin->nama_instansi }}</div>
    <br>
    <div style="width: 40%; text-align: left; float: left;">{{ $suratizin->alamat_instansi }}</div><br><br><br><br>



    <p>Dengan Hormat,</p>
    <p>Saya yang bertanda tanggan di bawah ini :</p>
    <div style="width: 90%; margin:auto;">
        <table>
            <tr>
                <td style="width: 30%;">Nama</td>

                <td style="width: 10%; ">:</td>
                <td style="width: 60%;">{{ $suratizin->nama_user_izin }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;"> {{ $suratizin->alamat_user_izin }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jabatan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $suratizin->jabatan_user_izin }}</td>
            </tr>
        </table>
    </div>
    @if (isset($suratizin->tanggal_selesai_izin))
    <p>Dengan surat ini saya memohon izin kepada Bapak/Ibu {{ $suratizin->kepada_orang_instansi }} untuk tidak masuk
        kerja pada tanggal {{ Carbon\Carbon::parse($suratizin->tanggal_mulai_izin)->format('d F Y') }} sampai tanggal {{
        Carbon\Carbon::parse($suratizin->tanggal_selesai_izin)->format('d F Y') }}
        dikarenakan {{ $suratizin->alasan_izin }}.</p>
    @else
    <p>Dengan surat ini saya memohon izin kepada Bapak/Ibu {{ $suratizin->kepada_orang_instansi }} untuk tidak masuk
        kerja pada tanggal {{ Carbon\Carbon::parse($suratizin->tanggal_mulai_izin)->format('d F Y') }}
        dikarenakan {{ $suratizin->alasan_izin }}.</p>
    @endif

    <p>Demikian surat izin kerja yang dapat saya sampaikan. Atas perhatiannya, saya ucapkan terima kasih. </p>


    <br>
    <br><br><br><br><br>
    <div style="width: 30%; text-align: left; float: right;">Hormat Saya</div><br><br><br><br><br>
    <div style="width: 30%; text-align: left; float: right;">{{ $suratizin->nama_user_izin }}</div>

</body>

</html>