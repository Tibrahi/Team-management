@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-left">Players List</h2>
                    <a href="{{ route('players.create') }}" class="btn btn-primary float-right">Add New Player</a>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Jersey Number</th>
                            <th>Nationality</th>
                            <th>Age</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($players as $player)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->position }}</td>
                            <td>{{ $player->jersey_number }}</td>
                            <td>{{ $player->nationality }}</td>
                            <td>{{ $player->age }}</td>
                            <td>
                                <form action="{{ route('players.destroy',$player->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('players.show',$player->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('players.edit',$player->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $players->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 