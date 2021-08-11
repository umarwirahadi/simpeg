<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="print.css">
    <title>Data Pegawai</title>
</head>
<body>
<div class="box-title">
    <div class="title">
        <h1 class="title-prints">
            {{getProfile()}}
        </h1>
    </div>
    <div class="sub-title">
        <p>Jl. Cidamar No.34, Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514</p>
    </div>
</div>

<table>
    <tr>
        <td class="column-title">NIP</td>
        <td class="column-separator">:</td>
        <td class="column-field">{{$pegawai->nip}}</td>
    </tr>
</table>

</body>
</html>
