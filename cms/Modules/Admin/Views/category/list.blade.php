@extends('Core::layouts.backend.app')
@section('js')
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlert.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlertFunction.js') }}"></script>
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Danh mục</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-2" href="{{ route('admin.category.create') }}"><i
                                class="material-icons text-sm">add</i>Thêm mới</a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th >Tên danh mục</th>
                                    <th >Danh mục cha</th>
                                    <th >Ảnh</th>
                                    <th >Trạng thái</th>
                                    <th class="text-right">Ngày giờ cập nhật</th>
                                    <th class="text-right">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr style="text-align: left">
                                    <td class="text-center">{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{ $category->parent_id }}</td>
                                    <td>{{ $category->image_path }}</td>
                                    <td><span class="badge badge-sm bg-gradient-secondary">{{ $category->status === 0 ?
                                            'Hiển thị' : 'Ẩn' }}</span></td>
                                    <td class="text-right"><span class="text-secondary text-xs font-weight-bold">{{
                                            $category->updated_at
                                            }}</span></td>
                                    <td class="td-actions text-right">
                                        <a class="btn text-danger text-gradient px-3 mb-0 action_delete" href=""
                                            data-url="{{ route('admin.category.delete', ['id' => $category->id]) }}"><i
                                                class="material-icons text-sm me-2 ">delete</i>Delete</a>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="material-icons text-sm me-2">edit</i>Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
