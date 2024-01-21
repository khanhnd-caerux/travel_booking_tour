@extends('Core::layouts.backend.app', ['activePage' => __('post') , 'titlePage' => __('Cập nhật bài viết')])

@section('content')
@php
$posts = [
"introduction" => "Giới thiệu",
"contact" => "Liên hệ",
"policy" => "Chính sách bảo mật",
"payment" => "Chính sách thanh toán",
"cancel" => "Chính sách huỷ, đặt vé",
"experience" => "Kinh nghiệm du lịch",
]
@endphp
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Cập nhật bài viết</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.post.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.post.update', ['id' => $post->id])}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group w-100 input-group input-group-outline my-1 d-flex flex-column">
                                    <label for="exampleFormControlSelect1">Chọn loại</label>
                                    <select class="form-control w-100" name="type" id="exampleFormControlSelect1">
                                        <option value="">Chọn loại bài viết</option>
                                        @foreach($posts as $key => $value)
                                        <option value="{{$key}}" @if ($post->type == $key) selected @endif>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="form-label">Tên bài viết (tên bài viết sẽ tự động khi bạn chọn loại bài
                                    viết)</label>
                                <div class="input-group input-group-outline my-1">
                                    <input type="text" value="{{ $post->title }}" name="title" id="hiddenTitle" class="form-control"
                                        autocomplete="off">
                                </div>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-check form-check-radio p-0">
                                    Trạng thái
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                            value="show" @if($post->status === 0) checked @endif>
                                        Hiển thị
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                            value="hide" @if($post->status === 1) checked @endif>
                                        Ẩn
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-group form-file-upload form-file-simple">
                                    <label for="exampleFormControlSelect1">Chọn hình ảnh</label>
                                    <input type="file" class="inputFileHidden" name="image_path">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nội dung</label>
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" name="content" id="editor"
                                        rows="10">{!! $post->content !!}</textarea>
                                </div>
                                @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
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
