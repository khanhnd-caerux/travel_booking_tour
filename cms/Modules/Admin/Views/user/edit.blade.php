@extends('Core::layouts.backend.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Cập nhật người dùng</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.user.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.user.update', ['id' => $user['id']])}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf()
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label">Tên người dùng</label>
                                    <input type="text" name="name" class="form-control" value="{{ $user['name'] }}" autocomplete="off">
                                </div>
                                <div class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $user['email'] }}" autocomplete="off">
                                </div>
                                <div class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" value="{{ $user['password'] }}"  autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-3">
                                <input type="submit" class="btn btn-success" value="Chỉnh sửa">
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
