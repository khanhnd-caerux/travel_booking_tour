@extends('Core::layouts.backend.app', ['activePage' => __('user') , 'titlePage' => __('Tạo mới tài khoản')])

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Thêm mới người dùng</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.user.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.user.store')}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Tên người dùng</label>
                                    <input type="text" name="name" class="form-control" autocomplete="off">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger text-white">{{ $message }}</div>
                                @enderror
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" autocomplete="off">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger text-white">{{ $message }}</div>
                                @enderror
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" autocomplete="off">
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
