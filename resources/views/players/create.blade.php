@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-left">Add New Player</h2>
                    <a class="btn btn-primary float-right" href="{{ route('players.index') }}">Back</a>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('players.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter player name">
                        </div>
                        <div class="form-group">
                            <label for="position">Position:</label>
                            <select class="form-control" id="position" name="position">
                                <option value="">Select Position</option>
                                <option value="Goalkeeper">Goalkeeper</option>
                                <option value="Defender">Defender</option>
                                <option value="Midfielder">Midfielder</option>
                                <option value="Forward">Forward</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jersey_number">Jersey Number:</label>
                            <input type="number" class="form-control" id="jersey_number" name="jersey_number" placeholder="Enter jersey number">
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality:</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter nationality">
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="Enter age">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection