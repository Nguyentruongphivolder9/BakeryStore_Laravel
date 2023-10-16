@extends('admin.main')

@section('main-content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-md-6 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3>Thêm mới danh mục</h3>
                        <form class="forms-sample mt-4" action="{{ route('category.store') }}" method="POST">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tên danh mục</label>
                                <input name="cate_name" type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Username">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
