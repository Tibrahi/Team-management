@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-left">Show Player</h2>
                    <a class="btn btn-primary float-right" href="{{ route('players.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $player->name }}
                    </div>
                    <div class="form-group">
                        <strong>Position:</strong>
                        {{ $player->position }}
                    </div>
                    <div class="form-group">
                        <strong>Jersey Number:</strong>
                        {{ $player->jersey_number }}
                    </div>
                    <div class="form-group">
                        <strong>Nationality:</strong>
                        {{ $player->nationality }}
                    </div>
                    <div class="form-group">
                        <strong>Age:</strong>
                        {{ $player->age }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 