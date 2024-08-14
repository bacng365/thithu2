@extends('layouts.default')

@section('title')
    @parent
    | Thêm mới nhạc sĩ
@endsection

@push('styles')

@endpush


@section('content')
<div class="p-4" style="min-height: 800px;">
    <h4 class="text-primary mb-4">Thêm mới nhạc sĩ</h4>
    <form action="{{ route('musicians.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            Name:
            <input type="text" name="name" id="" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Profile picture:
            <input type="file" name="profile_picture" id="" class="form-control">
            @error('profile_picture')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Birth date:
            <input type="date" name="birth_date" id="" class="form-control">
            @error('birth_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Instrument:
            <input type="text" name="instrument" id="" class="form-control">
            @error('instrument')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Biography:
            <input type="text" name="biography" id="" class="form-control">
            @error('biography')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button class="btn btn-primary">Thêm mới</button>
        </div>
    </form>
</div>
@endsection


@push('scripts')

@endpush
