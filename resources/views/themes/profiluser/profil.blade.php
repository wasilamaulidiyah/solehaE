@extends('themes.ezone.layout')

@section('content')
<div class = 'text-center'>
    <h3>Profile Anda</h3>
</div>
<a href="/profil">
    <div class = "img text-center">
    <img src="{{ asset('themes/ezone/assets/img/userprofile.png') }}" alt="" class="rounded" width="100px" height="100px">
    </div>
</a>
<br/>
    <div class = 'container'>
        <div>
            <form method = 'POST' action = "{{url('/profil/'.$user->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                  <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input {!! $is_update ? "": "disabled" !!} type="text" class="form-control @error('name') is-invalid @enderror" name="firstname" id="firstname" value = {{ $user->first_name }} required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input {!! $is_update ? "": "disabled" !!} type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" id="lastname" value = {{ $user->last_name }} required>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input {!! $is_update ? "": "disabled" !!} type="email" class="form-control @error('name') is-invalid @enderror" name="email" id="email" value = {{ $user->email }} required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input {!! $is_update ? "": "disabled" !!} type="password" class="form-control @error('name') is-invalid @enderror" name="password" id="password" value = {{ $user->password }} required>
                    </div>
                </div>
                <div class='float-right'>
                    @if ($is_update)
                    <button type="submit" class="btn btn-primary btn-lg active">Ubah</a>
                    @else
                    <a href="/profil/0/edit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ubah</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
@endsection