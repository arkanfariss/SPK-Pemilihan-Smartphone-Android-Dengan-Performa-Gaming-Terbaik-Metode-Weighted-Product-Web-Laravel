@extends('dashboardLayout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Smartphone</h1>
    </div>

    <!-- alert berhasil tambah data -->
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="col">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Smartphone</th>
                    <th scope="col">CPU</th>
                    <th scope="col">RAM</th>
                    <th scope="col">STORAGE</th>
                    <th scope="col">LAYAR</th>
                    <th scope="col">BATERAI</th>
                    <th scope="col">HARGA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->smartphone }}</td>
                        <td>{{ $data->cpu }}</td>
                        <td>{{ $data->ram }}</td>
                        <td>{{ $data->storage }}</td>
                        <td>{{ $data->layar }}</td>
                        <td>{{ $data->baterai }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="/dashboard/data/{{ $data->id }}" class="btn btn-primary btn-sm">View</a>
                                <a href="/dashboard/data/{{ $data->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                                <a href="/dashboard/data/{{ $data->id }}" method="post" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data {{ $data->smartphone }} ?')">Hapus</a>
                                @method('delete')
                                @csrf
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $datas->firstItem() }}
        </div>
        <div class="mb-5">
            {{ $datas->links() }}
        </div>
    </div>
@endsection
