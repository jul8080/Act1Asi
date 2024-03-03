@extends('patients.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Add New Patients Record</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('patients.index')}}">Back </a>
        </div>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops</strong> There were some problems with your inoput. <br> <br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('patients.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FirstName: </strong>
                <input type="text" name="FirstName" class="form-control" placeholder="FirstName">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MiddleName: </strong>
                <input type="text" name="MiddleName" class="form-control" placeholder="Middle Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name: </strong>
                <input type="text" name="LastName" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sex: </strong>
                <input type="text" name="Sex" class="form-control" placeholder="Sex">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birth Date: </strong>
                <input type="text" name="BirthDate" class="form-control" placeholder="Birth Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address: </strong>
                <input type="text" name="Address" class="form-control" placeholder="Address">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Number: </strong>
                <input type="text" name="ContactNumber" class="form-control" placeholder="Contact Number">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">


            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection