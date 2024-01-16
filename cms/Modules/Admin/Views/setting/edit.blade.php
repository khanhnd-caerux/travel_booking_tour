@extends('Core::layouts.backend.app', ['activePage' => __('setting') , 'titlePage' => __('Tạo mới cài đặt')])

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Chỉnh sửa cài đặt chung</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.setting.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.setting.update', ['id' => $setting->id])}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label">Tên cài đặt chung</label>
                                    <input type="text" name="name" class="form-control" autocomplete="off" value="{{ $setting->name }}">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="input-group input-group-outline my-3 is-filled">
                                    <label class="form-label">Giá trị</label>
                                    <input type="text" name="config_value" value="{{ $setting->config_value }}" class="form-control" autocomplete="off">
                                </div>
                                @error('config_value')
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
<script>

</script>
@endsection
