@extends ('patients.layout')
@section('content')
<div style="height: 100%; width: 100%;">
    <div class="pull-left" style="height: 100px; display: flex; align-items: center; justify-content: center; background-color: #94a3b8;">
        <h2>ROOM RECORD</h2>
    </div>
    <div style="padding-top: 30px; padding-bottom: 10px;">
        <div class="margin-tb">
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New Room Record </a>
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
            <th>Room Number</th>
            <th>Room Type</th>
            <th>Floor Number</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($rooms as $room)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $room->room_number }}</td>
            <td>{{ $room->room_type }}</td>
            <td>{{ $room->floor_number }}</td>
            <td>{{ $room->status }}</td>
            <td>
                <form action="{{ route('rooms.destroy',$room->id)}}" method="POST">

                    <a class="btn btn-info" href="{{ route('rooms.index',$room->id)}}">Show</a>
                    <a class="btn btn-info" href="{{ route('rooms.edit',$room->id)}}">Edit</a>
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