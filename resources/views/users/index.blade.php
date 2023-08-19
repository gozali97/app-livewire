@extends('layouts.main')
@push('styles')
    @livewireStyles
@endpush

@push('script')
    @livewireScripts
@endpush

@section('content')
    <div>
        <h1>User</h1>
        <div class="row mb-3">
            <div class="col-md-6">
                @livewire('user-create')
            </div>
        </div>
        <div>
            @livewire('user-table')
        </div>
    </div>
@endsection
