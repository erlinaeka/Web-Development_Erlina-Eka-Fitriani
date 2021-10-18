<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Izin Lamaran </title>
    <style>
        #judul {
            text-align: center;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h3 id="judul">SURAT LAMARAN KERJA</h3>
    <br><br>
    <div style="width: 30%; text-align: left; float: right;">{{ $suratlamaran->tempat_tulis_lamaran }},
        {{Carbon\Carbon::parse($suratlamaran->tanggal_tulis_lamaran)->format('d F Y') }}</div>
    <br><br>
    {{-- <div style="width: 40%; text-align: left; float: right;">Kepada</div>
    <div style="width: 40%; text-align: left; float: right;">Yth {{ $suratizin->kepada_orang_instansi }}</div>
    <div style="width: 40%; text-align: left; float: right;">{{ $suratizin->nama_instansi }}</div>
    <div style="width: 30%; text-align: left; float: right;">{{ $suratizin->tempat_tulis_izin }},
        {{Carbon\Carbon::parse($suratizin->tanggal_tulis_izin)->format('d F Y') }}</div>
    <br> --}}
    <br><br>
    <div style="width: 40%; text-align: auto; float: left;">Kepada</div>
    <br>
    <div style="width: 40%; text-align: left; float: left;">Yth {{ $suratlamaran->kepada_lamaran_instansi }}</div>
    <br>
    <div style="width: 40%; text-align: left; float: left;">{{ $suratlamaran->nama_instansi_lamaran }}</div>
    <br>
    <div style="width: 40%; text-align: left; float: left;">{{ $suratlamaran->alamat_instansi_lamaran }}</div>
    <br><br><br>



    <p>Dengan Hormat,</p>
    <p>Saya yang bertanda tanggan di bawah ini :</p>
    <div style="width: 90%; margin:auto;">
        <table>
            <tr>
                <td style="width: 30%;">Nama</td>

                <td style="width: 10%; ">:</td>
                <td style="width: 60%;">{{ $suratlamaran->nama_user_lamar }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat Tanggal Lahir</td>

                <td style="width: 10%; ">:</td>
                <td style="width: 60%;">{{ $suratlamaran->tempat_lahir }},{{
                    Carbon\Carbon::parse($suratlamaran->tanggal_lahir)->format('d F Y') }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;"> {{ $suratlamaran->alamat_user_lamar}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nomor HP</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $suratlamaran->nomor_user_lamar }}</td>
            </tr>
        </table>
    </div>

    <p class="text-justify: auto;">Sehubungan dengan adanya penerimaan karyawan baru di perusahaan yang Bapak/Ibu
        pimpin,
        saya bermaksud mengajukan
        surat lamaran kerja agar
        dapat diterima bekerja di tempat yang Bapak/Ibu pimpin.
    </p>
    <p>Sebagai bahan pertimbangan Bapak/Ibu, saya melampirkan berkas-berkas sebagai berikut :</p>
    <div style="width: 90%; margin:auto;">
        <p>1. {{ $suratlamaran->berkas_satu }}</p>
        @if (isset($suratlamaran->berkas_dua))
        <p>2. {{ $suratlamaran->berkas_dua }}</p>
        @endif
        @if (isset($suratlamaran->berkas_tiga))
        <p>3. {{ $suratlamaran->berkas_tiga }}</p>
        @endif
        @if (isset($suratlamaran->berkas_empat))
        <p>4. {{ $suratlamaran->berkas_empat }}</p>
        @endif
        @if (isset($suratlamaran->berkas_lima))
        <p>5. {{ $suratlamaran->berkas_lima }}</p>
        @endif
    </div>

    <p>Demikian surat lamaran ini saya buat, besar harapan saya untuk dapat bekerja ditempat yang Bapak/Ibu saya ucapkan
        terima kasih </p>


    <br>
    <br><br><br><br><br>
    <div style="width: 30%; text-align: left; float: right;">Hormat Saya,</div><br><br><br><br><br>
    <div style="width: 30%; text-align: left; float: right;">{{ $suratlamaran->nama_user_lamar}}</div>

</body>

</html>