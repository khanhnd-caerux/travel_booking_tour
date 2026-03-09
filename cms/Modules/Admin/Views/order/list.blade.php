@extends('Core::layouts.backend.app', ['activePage' => __('order'), 'titlePage' => __('Danh sách Order')])
@section('js')
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlert.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/sweetAlert/sweetAlertFunction.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#checkAll').on('change', function() {
            $('.row-checkbox').prop('checked', $(this).prop('checked'));
        });
    });

    function deleteMultiple() {
        let selectedIds = [];
        $('.row-checkbox:checked').each(function() {
            selectedIds.push($(this).val());
        });

        if (selectedIds.length === 0) {
            Swal.fire('Opps', 'Vui lòng chọn ít nhất 1 dòng để xoá', 'warning');
            return;
        }

        Swal.fire({
            title: 'Bạn có chắc chắn muốn xoá các dòng đã chọn?',
            text: "Hành động này không thể hoàn tác!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Có, xoá ngay!'
        }).then((result) => {
            if (result.value) {
                let form = $('<form>', {
                    'method': 'POST',
                    'action': '{{ route("admin.order.deleteMultiple") }}'
                });

                form.append($('<input>', {
                    'name': '_token',
                    'value': '{{ csrf_token() }}',
                    'type': 'hidden'
                }));

                selectedIds.forEach(function(id) {
                    form.append($('<input>', {
                        'name': 'ids[]',
                        'value': id,
                        'type': 'hidden'
                    }));
                });

                $('body').append(form);
                form.submit();
            }
        });
    }
</script>
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3 mb-0">Danh sách Order</h6>
                        <div class="d-flex px-3">
                            <button type="button" class="btn btn-sm btn-danger mb-0" onclick="deleteMultiple()">
                                <i class="material-icons text-sm align-middle me-1">delete</i> Xoá đã chọn
                            </button>
                        </div>
                    </div>
                </div>
                @if (session('success'))
                <div class="alert alert-success mt-1">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">
                                        <div class="form-check p-0 m-0">
                                            <input class="form-check-input" type="checkbox" id="checkAll" style="border: 1px solid #ced4da;">
                                        </div>
                                    </th>
                                    <th class="text-center">STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-right">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                <tr style="text-align: left">
                                    <td class="text-center">
                                        <div class="form-check p-0 m-0">
                                            <input class="form-check-input row-checkbox" type="checkbox" value="{{ $order->id }}" style="border: 1px solid #ced4da;">
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td>{{ $order->full_name }}</td>
                                    <td>{{ $order->whats_app }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ number_format($order->total, 0) }} VND</td>
                                    <td><span class="badge badge-sm {{ $order->status == 0 ?
                                    'bg-gradient-secondary' : 'bg-gradient-primary' }}">{{ $order->status == 0 ?
                                    'Chưa xác nhận' : 'Đã xác nhận' }}</span></td>
                                    <td>{{ $order->updated_at }}</td>
                                    <td class="td-actions text-right">
                                        <a class="btn text-danger text-gradient px-3 mb-0 action_delete" href=""
                                            data-url="{{ route('admin.order.delete', ['id' => $order->id]) }}"><i
                                                class="material-icons text-sm me-2 ">delete</i>Delete</a>
                                        <a class="btn btn-link text-dark px-3 mb-0"
                                            href="{{ route('admin.order.detail', ['id' => $order->id]) }}"><i
                                                class="material-icons text-sm me-2 ">edit</i>Detail</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center py-4">Chưa có dữ liệu, hãy đợi đơn đặt hàng mới!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 pagination">
                {{$orders->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
<style>
    .img {
        width: 200px;
        object-fit: cover;
    }
</style>
@endsection
