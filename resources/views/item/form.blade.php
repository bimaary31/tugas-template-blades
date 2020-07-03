@extends('master')
@section('content')
    <form action='/item' method='POST'>
        @csrf
        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" name='nama' class="form-control"  id="nama">
        </div>
        <div class="form-group">
            <label for="pertanyaan">pertanyaan:</label>
            <input type="text" name='pertanyaan'class="form-control"  id="Pertanyaan">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection