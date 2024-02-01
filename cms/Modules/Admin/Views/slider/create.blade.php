@extends('Core::layouts.backend.app', ['activePage' => __('slider') , 'titlePage' => __('Tạo mới Slider')])

@section('content')
@php
$sliders = [
"banner" => 'Banner',
"partner" => 'Đối tác',
"gallery" => 'Thư viện ảnh',
]
@endphp
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Thêm mới Slider</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.slider.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.slider.store')}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Tên Slider</label>
                                    <input type="text" name="name" class="form-control" autocomplete="off">
                                </div>
                                @error('name')
                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                @enderror
                                <div class="form-group w-100 input-group input-group-outline my-3 d-flex flex-column">
                                    <label for="exampleFormControlSelect1">Chọn loại</label>
                                    <select class="form-control w-100" name="type" id="exampleFormControlSelect1">
                                        <option value="">Chọn loại slider</option>
                                        @foreach($sliders as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('type')
                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                @enderror
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
