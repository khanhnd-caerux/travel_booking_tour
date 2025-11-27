@extends('Core::layouts.backend.app', ['activePage' => __('contact') , 'titlePage' => __('Danh sách liên hệ')])
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
                        <h6 class="text-white text-capitalize ps-3">Danh sách liên hệ</h6>
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
                                    <th>Tên khách hàng</th>
                                    <th>Email</th>
                                    <th>SĐT liên hệ</th>
                                    <th>Ghi chú</th>
                                    <th>Địa chỉ </th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-right">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts->sortByDesc('id') as $contact)
                                <tr style="text-align: left" class="{{ $contact->status == 0 ? 'table-warning' : '' }}">
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td>{{ $contact->full_name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->whats_app }}</td>
                                    <td>{{ $contact->note }}</td>
                                    <td>{{ $contact->country }}</td>
                                    <td>
                                        @if($contact->status == 0)
                                            <span class="badge bg-warning">Mới</span>
                                        @else
                                            <span class="badge bg-success">Đã xử lý</span>
                                        @endif
                                    </td>
                                    <td>{{ $contact->updated_at }}</td>
                                    <td class="td-actions text-right">
                                        @if($contact->status == 0)
                                        <form action="{{ route('admin.contact.updateStatus', ['id' => $contact->id]) }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn text-success text-gradient px-3 mb-0">
                                                <i class="material-icons text-sm me-2">check</i>Đã xử lý
                                            </button>
                                        </form>
                                        @endif
                                        <a class="btn text-danger text-gradient px-3 mb-0 action_delete" href=""
                                            data-url="{{ route('admin.contact.delete', ['id' => $contact->id]) }}"><i
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
                {{$contacts->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
@endsection
