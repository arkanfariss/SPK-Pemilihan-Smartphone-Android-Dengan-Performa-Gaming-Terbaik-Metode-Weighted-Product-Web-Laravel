@extends('dashboardLayout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">View Data Smartphone</h1>
</div>

<div class="table-responsive">
    <img src="{{ asset('storage/' . $data->image) }}" class="img-fluid mb-2 col-sm-2">
    <table class="table-sm mb-2">
        <thead>
            <tr><h5>{{ $data->smartphone }}</h5></tr>
        </thead>
        <tbody>
            <tr>
                <td>CPU</td>
                <td>:</td>
                <td>{{ $data->cpu }} Ghz</td>
            </tr>
            <tr>
                <td>RAM</td>
                <td>:</td>
                <td>{{ $data->ram }} GB</td>
            </tr>
            <tr>
                <td>STORAGE</td>
                <td>:</td>
                <td>{{ $data->storage }} GB</td>
            </tr>
            <tr>
                <td>LAYAR</td>
                <td>:</td>
                <td>{{ $data->layar }} inch</td>
            </tr>
            <tr>
                <td>BATERAI</td>
                <td>:</td>
                <td>{{ $data->baterai }} mAh</td>
            </tr>
            <tr>
                <td>HARGA</td>
                <td>:</td>
                <td>Rp {{ $data->harga }}</td>
            </tr>
        </tbody>
    </table>
    <div class="d-grid gap-2 d-md-block mb-5">
        <a href="/dashboard/data" class="btn bg-primary btn-sm" role="button">Kembali</a>
        <a href="/dashboard/data/{{ $data->id }}/edit" class="btn bg-warning btn-sm" role="button">Edit</a>
        <form action="/dashboard/data/{{ $data->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn bg-danger btn-sm" onclick="return confirm('Hapus data {{ $data->smartphone }} ?')">Hapus</button>
        </form>
    </div>
</div>
@endsection
