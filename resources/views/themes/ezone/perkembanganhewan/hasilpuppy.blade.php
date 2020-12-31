@extends('themes.ezone.layout')

@section('content')
<div class="section-title-3 mb-15">
	<h3>Hasil Perkembangan Puppy</h3>
</div>
<table class="table table-striped">
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">Soal 1</th>
      <th scope="col">Soal 2</th>
      <th scope="col">Soal 3</th>
      <th scope="col">Soal 4</th>
      <th scope="col">Soal 5</th>
      <th scope="col">Soal 6</th>
      <th scope="col">Soal 7</th>
      <th scope="col">Soal 8</th>
      <th scope="col">Soal 9</th>
      <th scope="col">Feedback</th>
      @if (Auth::user()!= null && Auth::user()->is_admin==1)
      <th scope="col">Aksi</th>
      @endif
    </tr>
    <tbody>
    @foreach($anjings as $anjing)
    <tr>
    
    <td>{{$anjing->user_id}}</td>
    @if($anjing->soal1=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($anjing->soal2=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($anjing->soal3=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($anjing->soal4=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($anjing->soal5=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($anjing->soal6=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($anjing->soal7=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($anjing->soal8=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($anjing->soal9=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($anjing->feedback == null)
    <td>Saat ini tidak ada feedback.</td>
    @else
    <td>{{$anjing->feedback}}</td>
    @endif

    @if (Auth::user()!= null && Auth::user()->is_admin==1)
    <td>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$anjing->id}}">
      Feedback
    </button>

    <!-- Modal -->
    <div class="modal fade" id="{{$anjing->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form method="POST" action="{{url('/anjing/'.$anjing->id)}}">
            <div class="card">
              <div class="card-header">Puppy (2 Minggu - 3 Bulan)</div>
              @if (session('message'))
              <div class="col-md-12">
                <div class="alert alert-success">
                  {{session ('message')}}
                </div>
              </div>
              @endif
              <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Apakah anak anjing sudah memasuki usia 4 minggu setelah kelahiran?</label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input style="width:10px; height:10px" type="radio" value="true" name="soal1" class="form-check-input" {!! ($anjing->soal1=='true') ? 'checked' : '' !!}/>
                            <a>Yes</a>
                        </div>    
                        <div class="form-check">
                            <label class="form-check-label">
                            <input style="width:10px; height:10px" type="radio" value="false" name="soal1" class="form-check-input"{!! ($anjing->soal1=='false') ? 'checked' : '' !!}/>
                            <a>No</a>
                        </div> 
                    </div>

                        <div class="form-group">
                            <label>Apakah berat badan anak anjing ketika lahir sudah setara dengan 100 gram?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input" {!! ($anjing->soal2=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input" {!! ($anjing->soal2=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>  
                        </div>

                        <div class="form-group">
                            <label>Apakah anak anjing sudah bisa membuka mata ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input" {!! ($anjing->soal3=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input" {!! ($anjing->soal3=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div> 
                        </div>

                        <div class="form-group"> 
                          <label>Apakah anak anjing sudah bisa berjalan/menggerakkan anggota tubuhnya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input" {!! ($anjing->soal4=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input" {!! ($anjing->soal4=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div> 
                        </div>

                        <div class="form-group">
                            <label>Apakah anak anjing sudah bisa menyusu pada induknya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input" {!! ($anjing->soal5=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input" {!! ($anjing->soal5=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>
                        </div>

                        <div class="form-group">
                          
                            <label>Apakah anak anjing mengalami pertambahan berat badan sejak awal kelahiran
                              (Umumnya berat badan kucing setelah lahir sekitar 100 gram)?</label>
                              <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input" {!! ($anjing->soal6=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal6" class="form-check-input" {!! ($anjing->soal6=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>       
                          
                        </div>

                        <div class="form-group">
                          
                            <label>Apakah anak anjing sudah bisa menunjukkan respon pengelihatan dan perilaku ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal7" class="form-check-input" {!! ($anjing->soal7=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal7" class="form-check-input" {!! ($anjing->soal7=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>       
                          
                        </div>

                        <div class="form-group">
                          
                            <label>Apakah anak anjing sudah bisa menunjukkan respon pendengaran dan interaksi dengan saudara kandungnya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal8" class="form-check-input" {!! ($anjing->soal8=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal8" class="form-check-input" {!! ($anjing->soal8=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>       
                          
                        </div>

                        <div class="form-group">
                            <label>Apakah anak anjing sudah terbiasa menyusu kepada induknya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal9" class="form-check-input" {!! ($anjing->soal9=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal9" class="form-check-input" {!! ($anjing->soal9=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div> 
                        </div>
                      </div>
                    
                      <div class="form-group m-3">
                        <label for="#feedback">Feedback</label>
                        <textarea class="form-control" name="feedback" id="feedback" cols="30" rows="10" >{{$anjing->feedback}}</textarea>
                      </div>
                    <div class = "card-footer text-right">
                      <div class="form-group row mb-0">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">
                                Kirim
                              </button>
                          </div>
                        </div>
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>
</form>
    </td>
    @endforeach
    </tr>
    </tbody>
</table>
</div>
@endsection