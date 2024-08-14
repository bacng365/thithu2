@extends('layouts.default')

@section('title')
    @parent
    | Danh sách nhạc sĩ
@endsection

@push('styles')
@endpush


@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h4 class="text-primary mb-4">Quản lý nhạc sĩ</h4>
        <a href="{{ route('musicians.create') }}" class="btn btn-info">Thêm mới</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Profile picture</th>
                    <th scope="col">Birth date</th>
                    <th scope="col">Instrument</th>
                    <th scope="col">Biography</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($musicians as $key => $musician)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $musician->name }}</td>
                        <td>
                            <img src="{{ Storage::url($musician->profile_picture) }}" alt="" width="100px">
                        </td>
                        <td>{{ $musician->birth_date }}</td>
                        <td>{{ $musician->instrument }}</td>
                        <td>{{ $musician->biography }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('musicians.edit', $musician) }}" class="btn btn-warning me-2">Sửa</a>
                                <form action="{{ route('musicians.destroy', $musician) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


@push('scripts')
@endpush
