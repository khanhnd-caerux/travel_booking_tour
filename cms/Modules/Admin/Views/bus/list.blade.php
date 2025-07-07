@extends('Core::layouts.backend.app', ['activePage' => __('bus') , 'titlePage' => __('Danh sách xe')])
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
                        <h6 class="text-white text-capitalize ps-3">Danh sách xe</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-2" href="{{ route('admin.bus.create') }}"><i
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
                                    <th>Tên xe</th>
                                    <th>Giá</th>
                                    <th>Link ảnh</th>
                                    <th>Chiều đi</th>
                                    <th>Điểm trả</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-right">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buses as $bus)
                                <tr style="text-align: left">
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td>{{ $bus->name }}</td>
                                    <td>$ {{ $bus->price }}</td>
                                    <td>
                                        <img width="100" height="auto" src="{{ $bus->image_path }}" alt="Image">
                                    </td>
                                    <td>{{ $bus->direction == "1" ? "Đến Hà Giang" : "Về điểm cũ" }}</td>
                                    <td>
                                        @foreach(config('location.locations') as $id => $label)
                                            @if ($bus->department_id == $id)
                                                {{ $label }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $bus->updated_at }}</td>
                                    <td class="td-actions text-right">
                                        <a class="btn text-danger text-gradient px-3 mb-0 action_delete" href=""
                                            data-url="{{ route('admin.bus.delete', ['id' => $bus->id]) }}"><i
                                                class="material-icons text-sm me-2 ">delete</i>Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 pagination">
                {{$buses->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
@endsection
