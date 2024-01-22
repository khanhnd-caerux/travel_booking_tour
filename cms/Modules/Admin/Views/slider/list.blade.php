@extends('Core::layouts.backend.app', ['activePage' => __('slider') , 'titlePage' => __('Danh sách Slider và hình
ảnh')])
@section('js')
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlert.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlertFunction.js') }}"></script>
@endsection
@section('content')
@php
$slidersConfig = [
"banner" => 'Banner',
"partner" => 'Đối tác'
]
@endphp
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Sliders và hình ảnh</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-2" href="{{ route('admin.slider.create') }}"><i
                                class="material-icons text-sm">add</i>Thêm mới</a>
                    </div>
                    @if (session('success'))
                    <div class="alert alert-success mt-1">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th>Tên slider</th>
                                    <th>Loại</th>
                                    <th>Hình ảnh</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-right">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                <tr style="text-align: left">
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td>{{ $slider->name }}</td>
                                    <td>{{ $slidersConfig[$slider->type] }}</td>
                                    <td>
                                        <img src="{{ asset($slider->image_path) }}" class="img" alt="Slider Image">
                                    </td>
                                    <td>{{ $slider->updated_at }}</td>
                                    <td class="td-actions text-right">
                                        <a class="btn text-danger text-gradient px-3 mb-0 action_delete" href=""
                                            data-url="{{ route('admin.slider.delete', ['id' => $slider->id]) }}"><i
                                                class="material-icons text-sm me-2 ">delete</i>Delete</a>
                                        <a class="btn btn-link text-dark px-3 mb-0"
                                            href="{{ route('admin.slider.edit', ['id' => $slider->id]) }}"><i
                                                class="material-icons text-sm me-2">edit</i>Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 pagination">
                {{$sliders->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
<style>
    .img {
        width: 300px;
        object-fit: cover;
    }
</style>
@endsection
