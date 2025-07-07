@extends('Core::layouts.backend.app', ['activePage' => __('bus') , 'titlePage' => __('Tạo mới xe')])

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Thêm mới xe</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.bus.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.bus.store')}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                        <div class="row">
                                            <label for="">Điểm đón</label>
                                            @foreach(config('location.locations') as $id => $label)
                                                <div>
                                                    <label>
                                                        <input type="checkbox" name="department_id" value="{{ $id }}">
                                                        {{ $label }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('department_id')
                                    <div class="alert alert-danger text-white">{{ $message }}</div>
                                    @enderror
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label for="">Chiều đi</label>
                                                <div>
                                                    <label>
                                                        <input type="checkbox" name="direction" value="2">
                                                        Về điểm cũ
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="direction" value="1">
                                                        Đến Hà Giang
                                                    </label>
                                                </div>
                                        </div>
                                    </div>
                                    @error('direction')
                                    <div class="alert alert-danger text-white">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Giá tiền</label>
                                    <input type="text" name="price" class="form-control" autocomplete="off">
                                </div>
                                @error('price')
                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                @enderror
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Tên</label>
                                    <input type="text" name="name" class="form-control" autocomplete="off">
                                </div>
                                @error('name')
                                <div class="alert alert-danger text-white">{{ $message }}</div>
                                @enderror
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Link ảnh</label>
                                    <input type="text" name="image_path" class="form-control" autocomplete="off">
                                </div>
                                @error('image_path')
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
<script>

</script>
@endsection
