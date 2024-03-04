@extends('patients.layout')
@section('content')
<div class="">

    <div class="col-lg-15 margin-tb">
        <div class="pull-left">
            <h2> Edit Room Record</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rooms.index')}}">Back </a>
        </div>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops</strong> There were some problems with your input. <br> <br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('rooms.update',$room->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room Number: </strong>
                <input type="text" name="room_number" value="{{$room->room_number}}" class="form-control" placeholder="Room Number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room Type: </strong>
                <input type="text" name="room_type" value="{{$room->room_type}}" class="form-control" placeholder="Room Type">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Floor Number: </strong>
                <input type="text" name="floor_number" value="{{$room->floor_number}}" class="form-control" placeholder="Floor Number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status: </strong>
                <input type="text" name="status" value="{{$room->status}}" class="form-control" placeholder="Status">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">


            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
@endsection