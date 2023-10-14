@extends('admin.dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Postingan Anda </h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-11">
        <a href="/dashboard/beranda/create" class="btn btn-primary mb-3 mt-2">Create New Post File</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postimage as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_file }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>

                            <a href="/storage/{{ $item->image }}" class="badge bg-info" target="blank"><span
                                    data-feather="eye"></span></a>

                            <a href="/dashboard/beranda/{{ $item->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>


                            <form action="/dashboard/beranda/{{ $item->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                                    <span data-feather="trash"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
