@extends('loyouts.app.app')

@section('content')
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Hoş geldiniz</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted mb-0">
                        {{ auth()->user()->name ?? auth()->user()->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
