@extends ('patients.layout')
@section('content')
<div style="height: 100%; width: 100%;">
    <div class="pull-left" style="height: 100px; display: flex; align-items: center; justify-content: center; background-color: #94a3b8">
        <h2>PATIENT RECORD</h2>
    </div>
    <div style="padding-top: 30px; padding-bottom: 10px;">
        <div class="margin-tb">
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('patients.create') }}"> Create New Patient Record </a>
                </a>
            </div>
        </div>
    </div>
    @if($message=Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Sex</th>
            <th>BirthDate</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($patients as $patient)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $patient->FirstName }}</td>
            <td>{{ $patient->MiddleName }}</td>
            <td>{{ $patient->LastName }}</td>
            <td>{{ $patient->Sex }}</td>
            <td>{{ $patient->BirthDate}}</td>
            <td>{{ $patient->Address }}</td>
            <td>{{ $patient->ContactNumber }}</td>
            <td>
                <form action="{{ route('patients.destroy',$patient->id)}}" method="POST">

                    <a class="btn btn-info" href="{{ route('patients.index',$patient->id)}}">Show</a>
                    <a class="btn btn-info" href="{{ route('patients.edit',$patient->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection