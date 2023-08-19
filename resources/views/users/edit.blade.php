@extends('layouts.main')

@push('styles')
    @livewireStyles
@endpush

@push('script')
    @livewireScripts
@endpush

@section('content')
    <div>
        <h1>Edit User</h1>
        <div class="mb-3">
            <a href="{{route('app.index')}}" class="btn btn-dark">Kembali</a>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                @livewire('user-edit', ['user' => $user])
            </div>
        </div>
    </div>
@endsection
