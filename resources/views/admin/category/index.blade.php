@extends('admin.main')

@section('main-content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row flex-grow container mt-4">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <h2>Quản lý danh mục</h2>
                                <button class="btn btn-primary" type="button">
                                    <a href="{{ route('category.create') }}" class="nav-link text-white mb-0 me-0">Thêm danh
                                        mục mới</a>
                                </button>
                            </div>
                            <div class="table-responsive  mt-1">
                                <table class="table select-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check form-check-flat mt-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            aria-checked="false"><i class="input-helper"></i></label>
                                                </div>
                                            </th>
                                            <th>Tên danh mục</th>
                                            <th>Ngày tạo</th>
                                            <th>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $item)
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-flat mt-0">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input"
                                                                aria-checked="false"><i class="input-helper"></i></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>{{ $item->cate_name }}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{ $item->created_at }}</h6>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-outline-success btn-sm">Sửa</button>
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-sm">Xóa</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <p style="color: red">Không có dữ liệu</p>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
