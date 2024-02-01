@extends('Core::layouts.backend.app', ['activePage' => __('car') , 'titlePage' => __('Tạo mới Thuê xe')])
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Thêm mới Thuê xe</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.car.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.car.store')}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Tên car</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control @error('name') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Khởi hành</label>
                                            <input type="text" name="destination_from"
                                                value="{{ old('destination_from') }}"
                                                class="form-control @error('destination_from') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('destination_from')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Đón trả</label>
                                            <input type="text" name="destination_to" value="{{ old('destination_to') }}"
                                                class="form-control @error('destination_to') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('destination_to')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Miễn phí</label>
                                            <input type="text" name="free" value="{{ old('free') }}"
                                                class="form-control @error('free') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('free')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Lộ trình</label>
                                            <input type="text" name="road" value="{{ old('road') }}"
                                                class="form-control @error('road') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('road')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Giá Thuê xe</label>
                                            <input type="text" name="price" value="{{ old('price') }}"
                                                class="form-control @error('price') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">% giảm</label>
                                            <input type="text" name="discount_percent"
                                                value="{{ old('discount_percent') }}"
                                                class="form-control @error('discount_price') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('discount_percent')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group w-100 input-group input-group-outline my-3 d-flex flex-column">
                                    <label for="exampleFormControlSelect1">Chọn danh mục Thuê xe</label>
                                    <select class="form-control w-100" name="category_id"
                                        id="exampleFormControlSelect1">
                                        <option value="0">Chọn danh mục Thuê xe</option>
                                        @foreach($categoryList as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-check form-check-radio p-0">
                                    Trạng thái
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                            value="show">
                                        Hiển thị
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                            value="hide" checked>
                                        Ẩn
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-group form-file-upload form-file-simple my-3">
                                    <label for="exampleFormControlSelect1">Chọn hình ảnh</label>
                                    <input type="file" id="file-input"
                                        class="inputFileHidden @error('feature_image_path') in-valid @enderror"
                                        value="{{ old('feature_image_path') }}" name="feature_image_path">
                                    <img id="img-preview" src="" class="preview-image" />
                                </div>
                                <div class="form-group form-file-upload form-file-simple my-3">
                                    <label for="exampleFormControlSelect1">Chọn hình ảnh chi tiết</label>
                                    <input type="file" class="inputFileHidden @error('name') in-valid @enderror"
                                        multiple value="{{ old('image_path') }}" name="image_path[]" onchange="preview(this)">
                                    <div class="preview-area"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nội dung</label>
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" name="content" id="editor"
                                        rows="10">{{ old('content') }}</textarea>
                                </div>
                                @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
<style>
    .ck-editor__editable {
        min-height: 500px;
    }

    .preview-image {
        width: 100px;
        height: 100px;
        margin-right: 10px;
        object-fit: contain;
    }
</style>
@section('js')
<script>
    const input = document.getElementById('file-input');
    const image = document.getElementById('img-preview');

    input.addEventListener('change', (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            image.src = src;
        }
    });

    function preview(elem, output = "") {
        Array.from(elem.files).map((file) => {
            const blobUrl = window.URL.createObjectURL(file);
            output += `<img src=${blobUrl} class="preview-image">`;
        });
        elem.nextElementSibling.innerHTML = output;
    }
</script>
@endsection
@endsection
