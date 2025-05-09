@extends('Core::layouts.backend.app', ['activePage' => __('tour-detail') , 'titlePage' => __('Cập nhật chi tiết Tour')])
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
                        <h6 class="text-white text-capitalize ps-3">Cập nhật chi tiết Tour du lịch</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.tour_detail.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.tour_detail.update', ['id' => $tourDetail->id])}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group input-group-outline my-3">
                                            <input type="text" name="name" value="{{ $tourDetail->name }}"
                                                class="form-control @error('name') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('name')
                                        <div class="alert alert-danger text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-outline my-3">
                                            <input type="text" name="description" value="{{ $tourDetail->description }}"
                                                class="form-control @error('description') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('description')
                                        <div class="alert alert-danger text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group w-100 input-group input-group-outline my-3 d-flex flex-column">
                                    <label for="exampleFormControlSelect1">Chọn danh mục Tour cha</label>
                                    <select class="form-control w-100" name="tour_id"
                                        id="exampleFormControlSelect1">
                                        <option value="0">Chọn danh mục Tour</option>
                                        @foreach($tours as $tour)
                                        <option value="{{$tour->id}}" @if ($tour->id == $tourDetail->tour_id) selected @endif>{{$tour->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group form-file-upload form-file-simple">
                                    <label for="exampleFormControlSelect1">Chọn hình ảnh</label>
                                    <input type="file" class="inputFileHidden" name="image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nội dung</label>
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" name="content" id="editor"
                                        rows="10">{{ $tourDetail->content }}</textarea>
                                </div>
                                @error('content')
                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <input type="submit" class="btn btn-success" value="Cập nhật">
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
</style>
@section('js')
<script>
    $(document).ready(function () {
        // Add change event listener to the select element
        $('#exampleFormControlSelect1').change(function () {
            // Get the selected text (value)
            var selectedText = $(this).find('option:selected').text();
            // Set the value of the hidden input
            $('#hiddenTitle').val(selectedText);
        });
    });
</script>
@endsection
@endsection
