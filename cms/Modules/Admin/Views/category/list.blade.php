@extends('Core::layouts.backend.app', ['activePage' => __('category') , 'titlePage' => __('Danh sách danh mục')])
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
                                    <th>Tên danh mục</th>
                                    <th>Mô tả</th>
                                    <th>Danh mục cha</th>
                                    <th>Loại danh mục</th>
                                    <th>Trạng thái</th>
                                    <th class="text-right">Ngày giờ cập nhật</th>
                                    <th class="text-right">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr style="text-align: left">
                                    <td class="text-center">{{$loop->index + 1}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    @if ($category->parent)
                                    <td>{{ $category->parent->name }}</td>
                                    @else
                                    <td></td>
                                    @endif
                                    @if($category->type)
                                    <td>{{config('categories.categories')[$category->type]}}</td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td><span class="badge badge-sm bg-gradient-secondary">{{ $category->status == 0 ?
                                            'Hiển thị' : 'Ẩn' }}</span></td>
                                    <td class="text-right"><span class="text-secondary text-xs font-weight-bold">{{
                                            $category->updated_at
                                            }}</span></td>
                                    <td class="td-actions text-right">
                                        <a class="btn text-danger text-gradient px-3 mb-0 action_delete" href=""
                                            data-url="{{ route('admin.category.delete', ['id' => $category->id]) }}"><i
                                                class="material-icons text-sm me-2 ">delete</i>Delete</a>
                                        <a class="btn btn-link text-dark px-3 mb-0"
                                            href="{{ route('admin.category.edit', ['id' => $category->id]) }}"><i
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
                {{$categories->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
@endsection
