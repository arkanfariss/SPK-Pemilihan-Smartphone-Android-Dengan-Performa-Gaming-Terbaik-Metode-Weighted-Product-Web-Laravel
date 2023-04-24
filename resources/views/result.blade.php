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

    <!-- Icon Font Awesome -->
    <script src="https://kit.fontawesome.com/7f9ae09626.js" crossorigin="anonymous"></script>

    <!-- title -->
    <title>RESULT</title>
</head>

<body>
    @include('navbar')
    <!-- result -->
    <section class="result">
        <div class="container">
            <div class="row1 row row-cols-1 mb-3">
                <div class="col1 col">
                    <h2 class="text-center pb-3">Hasil Smartphone Android Dengan Performa Gaming Terbaik</h2>
                    <div class="card shadow">
                        <div class="px-3 py-3">
                            Dari nilai bobot kepentingan pada kriteria <strong>CPU : {{ $cpu }}, RAM :
                                {{ $ram }}, STORAGE : {{ $storage }},
                                LAYAR :
                                {{ $layar }}, BATERAI : {{ $baterai }}, HARGA : {{ $harga }}</strong>
                            yang telah diinputkan mendapatkan informasi hasil perankingan smartphone android dengan
                            performa
                            gaming terbaik
                            sebagai berikut.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($collection as $hasilwp)
                    <div class="col1 col">
                        <div class="card shadow mb-3">
                            <div class="px-3 pt-2 pb-1">
                                <h4>
                                    <i class="fa-sharp fa-solid fa-ranking-star"></i>
                                    RANK {{ $loop->iteration }}
                                </h4>
                            </div>
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4 mt-3">
                                        <img src="{{ asset('storage/' . $hasilwp->data->image) }}"
                                            class="img-fluid rounded-start mt-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $hasilwp->data->smartphone }}</h4>
                                            <p class="card-text">
                                            <table class="table-sm mb-2">
                                                <tbody>
                                                    <tr>
                                                        <td>Score</td>
                                                        <td>:</td>
                                                        <td>{{ $hasilwp->nilaiV }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CPU</td>
                                                        <td>:</td>
                                                        <td>{{ $hasilwp->data->cpu }} Ghz</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RAM</td>
                                                        <td>:</td>
                                                        <td>{{ $hasilwp->data->ram }} GB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>STORAGE</td>
                                                        <td>:</td>
                                                        <td>{{ $hasilwp->data->storage }} GB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LAYAR</td>
                                                        <td>:</td>
                                                        <td>{{ $hasilwp->data->layar }} inch</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BATERAI</td>
                                                        <td>:</td>
                                                        <td>{{ $hasilwp->data->baterai }} mAh</td>
                                                    </tr>
                                                    <tr>
                                                        <td>HARGA</td>
                                                        <td>:</td>
                                                        <td>Rp {{ $hasilwp->data->harga }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-1 mb-5 mt-3">
                <form action="clear" method="post" class="d-inline">
                    @csrf
                    <button class="btn bg-danger btn-lg text-light" onclick="return">Hitung Lagi</button>
                </form>
            </div>
        </div>
        @include('footer')
    </section>
    <!-- end result -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
