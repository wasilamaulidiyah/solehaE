@extends('themes.ezone.layout')

@section('content')
<div class="container">

    <div class="section-title-6 text-center mb-50">
    <h2>Artikel Kucing 'Pet Care'</h2>
</div>
@if (Auth::user()!=null && Auth::user()->is_admin == 1)
<!-- Button trigger modal -->
<div class = "d-flex justify-content-end">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Tambah Artikel
      </button>
</div>
@endif
<br/>
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  <div class="all-title-box">
                      <div class="cart-box-main">
                          <div class="container table-responsive">
                              <form method="POST" action="{{url('artikelkucing')}}" enctype="multipart/form-data">
                                <div class="card-body">
                                    @csrf
                                    <div class="form-group">
                                    <label class="small mb-1" for="judul">Judul</label>
                                    <input required class="form-control py-4" id="judul" type="text" placeholder="Judul Artikel" name="judul" value="{{old('judul')}}"/>
                                    </div>
                                    @error('judul')
                                    <span>
                                        {{ ucwords($message) }}
                                    </span>
                                    @enderror

                                    <div class="form-group">
                                        <label for="">Author</label>
                                        <input required class="form-control" name="author" id="author" type="text" placeholder="Nama Penulis" value="{{ old('author') }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="small mb-1" for="gambar">Gambar</label>
                                        <input required class="form-control" id="gambar" type="file" name="gambar" accept="image/*" value="{{old('gambar')}}"/>
                                    </div>
                                        @error('gambar')
                                        <span>
                                            {{ ucwords($message) }}
                                        </span>
                                        @enderror

                                    <div class="form-group">
                                        <label class="small mb-1" for="summernote">Isi Konten</label>
                                        <textarea class ="form-control" name="konten" id="konten"  cols="30"></textarea>
                                    </div>
                                    @error('konten')
                                    <span>
                                        {{ ucwords($message) }}
                                    </span>
                                    @enderror

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
      </div>
    </div>
<br/>

    @foreach($artikelkucings as $artikelkucing)
    <div class="card">
        <div class="card-header">
        {{$artikelkucing->judul}}
        </div>
        <div class="card-body right">
            <form method = 'POST' action="{{route('artikel.update', $artikelkucing->id)}}">
                @csrf
                {{method_field('PUT')}}
                <h5 class="card-title">{{$artikelkucing->author}}</h5>
                <img src="{{asset('storage/'.$artikelkucing->gambar)}}">
                <p class="card-text">{{$artikelkucing->konten}}</p>
                @if (Auth::user()!=null && Auth::user()->is_admin == 1)
                <div class='float-right'>
                    <a href="artikelkucing/{{ $artikelkucing->id }}/edit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ubah</a>
                </div>
                @endif
            </form>
        </div>
    </div>
    @endforeach

{{-- @elseif(Auth::user()->is_admin != 1)
@foreach($artikelkucings as $artikelkucing)
    <div class="card">
        <div class="card-header">
        {{$artikelkucing->judul}}
        </div>
        <div class="card-body right">
            <form method = 'POST' action="{{route('artikel.update', $artikelkucing->id)}}">
                @csrf
                {{method_field('PUT')}}
                <h5 class="card-title">{{$artikelkucing->author}}</h5>
                <img src="{{asset('storage/'.$artikelkucing->gambar)}}">
                <p class="card-text">{{$artikelkucing->konten}}</p>
            </form>
        </div>
    </div>
    @endforeach
@endif --}}
  </div>
</div>
<br/>
@endsection
