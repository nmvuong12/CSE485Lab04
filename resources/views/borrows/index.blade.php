@extends('layouts.app')

@section('content')
<h1 class="mb-4">Sách đã được mượn</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Số thứ tự</th>
            <th>Mã người đọc</th>
            <th>Mã sách</th>
            <th>Ngày mượn</th>
            <th>Ngày Trả</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($borrows as $borrows)
        <tr>
            <td>{{ $borrows->id }}</td>
            <td>{{ $borrows->reader_id}}</td>
            <td>{{ $borrows->book_id }}</td>
            <td>{{ $borrows->borrow_at }}</td>
            <td>{{ $borrows->return_at }}</td>
            <td>{{ $borrows->status ?? '0' }}</td>
            <td>{{ $borrows->create_at }}</td>
            <td>{{ $borrows->update_at }}</td>
            <td>
                @if (!$borrows->status)
                <form action="{{ route('borrows.return', $borrows->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success btn-sm">Đánh dấu nộp</button>
                </form>
                @else
                <span class="text-success">Đã nộp</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
