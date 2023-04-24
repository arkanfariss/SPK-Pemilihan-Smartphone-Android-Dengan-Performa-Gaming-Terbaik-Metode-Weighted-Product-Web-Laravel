<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS Local -->
    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <!-- title -->
    <title>HOME</title>
</head>

<body>
    @include('navbar')
    <!-- master -->
    <section class="masterfirst">
        <div class="container">
            <div class="row1 row row-cols-1">
                <div class="col1 col">
                    <h2 class="text-center">Mobile Gaming</h2>
                    Mobile gaming adalah industri gim masa depan. Fakta ini tidak terbantahkan. Banyak pengembang gim
                    yang awalnya fokus di desktop kini merambah ke perangkat mobile. Faktor ini jugalah yang kemudian
                    akhirnya membuat smartphone terus berkembang dengan spesifikasi yang tinggi. Tujuannya untuk bisa
                    memuaskan hasrat para pemain mobile gaming. (carisinyal.com).
                </div>
            </div>
        </div>
    </section>
    <section class="mastertengahwhite">
        <div class="container">
            <div class="rowcenter col1 col">
                <h2>Keunggulan Sistem</h2>
            </div>
            <div class="rowcenter row row-cols-1 row-cols-sm-1 row-cols-md-2">
                <div class="col1 col">
                    <div class="card cardkeunggulan">
                        <img src="proses-cepat.png" class="card-img-top imgkeunggulan">
                        <div class="card-body">
                            <p class="card-text">Proses hitung cepat dengan metode Weighted Product.</p>
                        </div>
                    </div>
                </div>
                <div class="col1 col">
                    <div class="card cardkeunggulan">
                        <img src="banyak-data.png" class="card-img-top imgkeunggulan">
                        <div class="card-body">
                            <p class="card-text">Database hingga 50 data smartphone dan bisa lebih.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="masterlast">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 justify-content-evenly">
                <div class="col1 col">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="mb-3">
                                <h3>Cari Smartphone Android Gaming Anda Disini</h3>
                                <button class="btn btn-secondary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePenjelasan" aria-expanded="false"
                                    aria-controls="collapsePenjelasan">
                                    Penjelasan
                                </button>
                                <div class="collapse" id="collapsePenjelasan">
                                    <div class="card card-body">
                                        Isilah bobot kepentingan pada setiap kriteria berikut ini sesuai dengan
                                        keinginan anda dengan aturan
                                        "5" atau "Sangat Penting", "4" atau "Penting", "3" atau "Ragu-ragu", "2" atau
                                        "Tidak Pending", dan "1" atau "Sangat Tidak Penting" untuk mencari smartphone
                                        android dengan performa gaming terbaik yang diinginkan.
                                    </div>
                                </div>
                            </div>
                            @if (session()->has('inputBobotSama'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('inputBobotSama') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('cobalagi'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('cobalagi') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form method="post" action="/result">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputCpu" class="form-label">CPU</label>
                                    <select class="form-select" id="inputCpu" name="inputCpu" required>
                                        <option value="">Pilih Bobot Kepentingan</option>
                                        <option value="1">1 : Sangat Tidak Penting</option>
                                        <option value="2">2 : Tidak Penting</option>
                                        <option value="3">3 : Ragu-ragu</option>
                                        <option value="4">4 : Penting</option>
                                        <option value="5">5 : Sangat Penting</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputRam" class="form-label">RAM</label>
                                    <select class="form-select" id="inputRam" name="inputRam" required>
                                        <option value="">Pilih Bobot Kepentingan</option>
                                        <option value="1">1 : Sangat Tidak Penting</option>
                                        <option value="2">2 : Tidak Penting</option>
                                        <option value="3">3 : Ragu-ragu</option>
                                        <option value="4">4 : Penting</option>
                                        <option value="5">5 : Sangat Penting</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputStorage" class=" form-label">STORAGE</label>
                                    <select class="form-select" id="inputStorage" name="inputStorage" required>
                                        <option value="">Pilih Bobot Kepentingan</option>
                                        <option value="1">1 : Sangat Tidak Penting</option>
                                        <option value="2">2 : Tidak Penting</option>
                                        <option value="3">3 : Ragu-ragu</option>
                                        <option value="4">4 : Penting</option>
                                        <option value="5">5 : Sangat Penting</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputLayar" class="form-label">LAYAR</label>
                                    <select class="form-select" id="inputLayar" name="inputLayar" required>
                                        <option value="">Pilih Bobot Kepentingan</option>
                                        <option value="1">1 : Sangat Tidak Penting</option>
                                        <option value="2">2 : Tidak Penting</option>
                                        <option value="3">3 : Ragu-ragu</option>
                                        <option value="4">4 : Penting</option>
                                        <option value="5">5 : Sangat Penting</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputBaterai" class="form-label">BATERAI</label>
                                    <select class="form-select" id="inputBaterai" name="inputBaterai" required>
                                        <option value="">Pilih Bobot Kepentingan</option>
                                        <option value="1">1 : Sangat Tidak Penting</option>
                                        <option value="2">2 : Tidak Penting</option>
                                        <option value="3">3 : Ragu-ragu</option>
                                        <option value="4">4 : Penting</option>
                                        <option value="5">5 : Sangat Penting</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputHarga" class="form-label">HARGA</label>
                                    <select class="form-select" id="inputHarga" name="inputHarga" required>
                                        <option value="">Pilih Bobot Kepentingan</option>
                                        <option value="1">1 : Sangat Tidak Penting</option>
                                        <option value="2">2 : Tidak Penting</option>
                                        <option value="3">3 : Ragu-ragu</option>
                                        <option value="4">4 : Penting</option>
                                        <option value="5">5 : Sangat Penting</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputTampilData" class="form-label">Informasi Smartphone Yang
                                        Ingin Ditampilkan (1-10)</label>
                                    <input type="text" name="inputTampilData" class="form-control"
                                        id="inputTampilData" placeholder="0" required>
                                </div>
                                @if (session()->has('inputTampilSalah'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('inputTampilSalah') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">
                                        </button>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary content-center">Calculate</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col2 col">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingCPU">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseCPU" aria-expanded="true"
                                            aria-controls="collapseCPU">
                                            Tentang CPU
                                        </button>
                                    </h2>
                                    <div id="collapseCPU" class="accordion-collapse collapse show"
                                        aria-labelledby="headingCPU" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            CPU kepanjangan dari Central Processing unit, fungsinya secara otomatis
                                            melakukan proses seluruh perintah yang dilakukan oleh pengguna perangkat
                                            dengan acuan yang ada pada EEPROM juga RAM. <strong>Jadi semakin tinggi
                                                nilai bobot CPU maka semakin baik (benefit).</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingRAM">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseRAM"
                                            aria-expanded="false" aria-controls="collapseRAM">
                                            Tentang RAM
                                        </button>
                                    </h2>
                                    <div id="collapseRAM" class="accordion-collapse collapse"
                                        aria-labelledby="headingRAM" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            RAM kepanjangan dari Random Access Memory, sebagai media penyimpanan
                                            sementara dalam suatu proses yang dijalankan pada unit perangkat.
                                            <strong>Jadi semakin tinggi nilai bobot RAM maka semakin baik
                                                (benefit).</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSTORAGE">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSTORAGE"
                                            aria-expanded="false" aria-controls="collapseSTORAGE">
                                            Tentang Storage
                                        </button>
                                    </h2>
                                    <div id="collapseSTORAGE" class="accordion-collapse collapse"
                                        aria-labelledby="headingSTORAGE" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            (Storage) Penyimpanan umumnya menjadi tempat untuk menyimpan data, seperti
                                            musik, foto, dan video, sementara memori menjadi tempat untuk menjalankan
                                            program, seperti aplikasi dan sistem Android. <strong>Jadi semakin tinggi
                                                nilai bobot Storage maka semakin baik (benefit).</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingLayar">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseLAYAR"
                                            aria-expanded="false" aria-controls="collapseLAYAR">
                                            Tentang Layar
                                        </button>
                                    </h2>
                                    <div id="collapseLAYAR" class="accordion-collapse collapse"
                                        aria-labelledby="headingLayar" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Layar atau Display merupakan komponen yang paling dasar dari smartphone.
                                            Saat ini teknologi display pada smartphone hadir dalam dua jenis utama,
                                            yaitu LCD dan LED. <strong>Jadi semakin tinggi nilai bobot Layar maka
                                                semakin baik (benefit).</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBATERAI">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseBATERAI"
                                            aria-expanded="false" aria-controls="collapseBATERAI">
                                            Tentang Baterai
                                        </button>
                                    </h2>
                                    <div id="collapseBATERAI" class="accordion-collapse collapse"
                                        aria-labelledby="headingBATERAI" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Baterai merupakan komponen penting dari smartphone yang berfungsi sebagai
                                            satu-satunya sumber catu daya ke ponsel, ini adalah daya hidup dan mati dari
                                            ponsel itu sendiri. <strong>Jadi semakin tinggi nilai bobot Baterai maka
                                                semakin baik (benefit).</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingHARGA">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseHARGA"
                                            aria-expanded="false" aria-controls="collapseHARGA">
                                            Tentang Harga
                                        </button>
                                    </h2>
                                    <div id="collapseHARGA" class="accordion-collapse collapse"
                                        aria-labelledby="headingHARGA" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Harga adalah hal penting dalam memilih sebuah smartphone. Maka dari itu
                                            harga juga dimasukkan dalam penghitungan pemilihan ini. <strong>Jadi semakin
                                                tinggi nilai bobot Harga maka semakin tidak baik (cost).</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </section>
    <!-- end master -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
