@extends('Core::layouts.backend.app', ['activePage' => __('charity') , 'titlePage' => __('Tạo mới từ thiện')])

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Thêm mới từ thiện</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.charity.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.charity.store')}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Tên từ thiện</label>
                                <div class="input-group input-group-outline my-1">
                                    <input type="text" name="name" id="hiddenTitle" class="form-control"
                                        autocomplete="off">
                                </div>
                                @error('name')
                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                @enderror
                                <label class="form-label">Số điện thoại</label>
                                <div class="input-group input-group-outline my-1">
                                    <input type="text" name="phone" id="hiddenTitle" class="form-control"
                                        autocomplete="off">
                                </div>
                                @error('phone')
                                <div class="alert alert-danger text-white">{{ $message }}</div>
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
