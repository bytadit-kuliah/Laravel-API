@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Beritas</h1>
  </div>

  @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">{{ session('success') }}</div>
  @endif

  <div class="table-responsive col-lg-8">
      <a href="/berita/create" class="btn btn-primary mb-3">Create New Berita</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul Berita</th>
          <th scope="col">Isi Berita</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($beritas as $berita)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $berita->judul }}</td>
            <td>{{ $berita->isi_berita }}</td>
            <td>
                <a href="/berita/{{ $berita->id }}" class="badge bg-info">
                    <span data-feather="eye">

                    </span>
                </a>
                <a href="/berita/{{ $berita->id }}/edit" class="badge bg-warning">
                    <span data-feather="edit">

                    </span>
                </a>
                <form action="/berita/{{ $berita->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form>
                    </span>
                </a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection
