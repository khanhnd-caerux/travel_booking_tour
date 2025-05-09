@extends('Core::layouts.backend.app', ['activePage' => __('tour'), 'titlePage' => __('Cập nhật Tour')])
@section('js')
<script src="{{ asset('/backend/assets/js/ckeditor.js') }}"></script>
@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div
                            class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                            <h6 class="text-white text-capitalize ps-3">Cập nhật Tour du lịch</h6>
                            <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.tour.list') }}"><i
                                    class="material-icons text-sm">list</i>Danh sách</a>
                        </div>
                    </div>
                    <div class="card-body px-3 pb-2">
                        <form method="POST" action="{{route('admin.tour.update', ['id' => $tour->id])}}"
                            enctype="multipart/form-data">
                            @csrf()
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="input-group input-group-outline my-3">
                                                <input type="text" name="name" value="{{ $tour->name }}"
                                                    class="form-control @error('name') in-valid @enderror"
                                                    autocomplete="off">
                                            </div>
                                            @error('name')
                                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col-8">
                                            <div class="input-group input-group-outline my-3">
                                                <input type="text" name="tour_includes" value="{{ $tour->tour_includes }}"
                                                    class="form-control @error('tour_includes') in-valid @enderror"
                                                    autocomplete="off">
                                            </div>
                                            @error('tour_includes')
                                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group input-group-outline my-3">
                                                <input type="text" name="tour_excludes" value="{{ $tour->tour_excludes }}"
                                                    class="form-control @error('tour_excludes') in-valid @enderror"
                                                    autocomplete="off">
                                            </div>
                                            @error('tour_excludes')
                                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group input-group-outline my-3">
                                                <input type="text" name="time" value="{{ $tour->time }}"
                                                    class="form-control @error('time') in-valid @enderror"
                                                    autocomplete="off">
                                            </div>
                                            @error('time')
                                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-check form-check-radio p-0">
                                        Trạng thái
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                                value="show" @if($tour->status == 0) checked @endif>
                                            Hiển thị
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                                value="hide" @if($tour->status == 1) checked @endif>
                                            Ẩn
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <label for="">Tour Type</label>
                                        @foreach(config('type.moto_types') as $id => $label)
                                            <div>
                                                <label>
                                                    <input type="checkbox" name="moto_types[]" value="{{ $id }}"
                                                        {{ in_array($id, json_decode($tour->moto_types)) ? 'checked' : '' }}>
                                                    {{ $label }}
                                                </label>
                                            </div>
                                        @endforeach
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
@endsection
