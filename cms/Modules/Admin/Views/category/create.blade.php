@extends('Core::layouts.backend.app', ['activePage' => __('category') , 'titlePage' => __('Tạo mới danh mục')])

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Thêm mới danh mục</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.category.create') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Tên danh mục</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                </div>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="input-group input-group-outline my-3">
                                    <label for="exampleFormControlTextarea1" class="mx-2">Mô tả</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>
                                <div class="form-check form-check-radio p-0">
                                    Trạng thái
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                            value="show" checked>
                                        Hiển thị
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                            value="hide">
                                        Ẩn
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-group w-100 input-group input-group-outline my-3 d-flex flex-column">
                                    <label for="exampleFormControlSelect1">Chọn danh mục cha</label>
                                    <select class="form-control w-100" name="parent_id" id="exampleFormControlSelect1">
                                        <option value="0">Chọn danh mục cha</option>
                                        {!! $categoryList !!}
                                    </select>
                                </div>
                                <div class="form-group form-file-upload form-file-simple">
                                    <label for="exampleFormControlSelect1">Chọn hình ảnh</label>
                                    <input type="file" class="inputFileHidden" name="image_path">
                                </div>
                            </div>
                            <div class="mt-3">
                                <input type="submit" class="btn btn-success" value="Thêm mới">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

</script>
@endsection
