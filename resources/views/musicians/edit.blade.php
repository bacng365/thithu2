@extends('layouts.default')

@section('title')
    @parent
    | Chỉnh sửa nhạc sĩ
@endsection

@push('styles')

@endpush


@section('content')
<div class="p-4" style="min-height: 800px;">
    <h4 class="text-primary mb-4">Chỉnh sửa nhạc sĩ</h4>
    <form action="{{ route('musicians.update', $musician) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            Name:
            <input type="text" name="name" id="" class="form-control" value="{{ $musician->name }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Profile picture:
            <br><img src="{{ Storage::url($musician->profile_picture) }}" alt="" width="100px">
            <input type="file" name="profile_picture" id="" class="form-control">
            @error('profile_picture')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Birth date:
            <input type="date" name="birth_date" id="" class="form-control" value="{{ $musician->birth_date }}">
            @error('birth_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Instrument:
            <input type="text" name="instrument" id="" class="form-control" value="{{ $musician->instrument }}">
            @error('instrument')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Biography:
            <input type="text" name="biography" id="" class="form-control" value="{{ $musician->biography }}">
            @error('biography')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button class="btn btn-warning">Cập nhật</button>
        </div>
    </form>
</div>
@endsection


@push('scripts')

@endpush
