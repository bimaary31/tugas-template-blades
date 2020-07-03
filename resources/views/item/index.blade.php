@extends('master')
@section('content')

    
    <div class='ml-3 mt-3'>
    <h1>Pertanyaan</h1>
    <a href="/item/create" class="btn btn-primary">
    Buat Pertanyaan
    </a>
    <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>nama</th>
                      <th>Pertanyaan</th>
                      <th style="width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($item as $ key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->pertanyan}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
@endsection