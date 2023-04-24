<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS Local -->
    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <!-- title -->
    <title>ABOUT</title>
</head>

<body>
    @include('navbar')

    <!-- about -->
    <section class="about">
        <div class="container">
            <div class="row mb-4 mt-2">
                <div class="col text-center">
                    <h2>ABOUT US</h2>
                </div>
            </div>
            <div class="row fs-5 mb-5">
                <div class="col text-center">
                    <p>Find Your Gaming Smartphone, website ini dibuat oleh Muhammad Arkan Farista pada tahun 2022.
                        Dalam website ini dilakukan pengujian metode Weighted Product ini dapat menjadi alternatif dalam
                        pemilihan smartphone android dengan performa gaming terbaik.</p>
                </div>
            </div>
        </div>
        @include('footer')
    </section>
    <!-- end about -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
