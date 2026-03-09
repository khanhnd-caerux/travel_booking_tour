@extends('Core::layouts.backend.app', ['activePage' => __('contact') , 'titlePage' => __('Danh sách liên hệ')])
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
            Swal.fire('Opps', 'Vui lòng chọn ít nhất 1 liên hệ để xoá', 'warning');
            return;
        }

        Swal.fire({
            title: 'Bạn có chắc chắn muốn xoá các liên hệ đã chọn?',
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
                    'action': '{{ route("admin.contact.deleteMultiple") }}'
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
                        <h6 class="text-white text-capitalize ps-3 mb-0">Danh sách liên hệ</h6>
                        <div class="d-flex px-3">
                            <a href="{{ route('admin.contact.export') }}" class="btn btn-sm text-white mb-0 me-2" style="border: 1px solid white;">
                                <i class="material-icons text-sm align-middle me-1">file_download</i> Xuất Excel
                            </a>
                            <button type="button" class="btn btn-sm btn-danger mb-0 me-2" onclick="deleteMultiple()">
                                <i class="material-icons text-sm align-middle me-1">delete</i> Xoá đã chọn
                            </button>
                            <form action="{{ route('admin.contact.updateAllStatus') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm text-white mb-0" style="border: 1px solid white;" onclick="return confirm('Bạn có chắc chắn muốn chuyển toàn bộ liên hệ mới sang Đã xử lý?')">
                                    <i class="material-icons text-sm align-middle me-1">done_all</i> Xác nhận tất cả
                                </button>
                            </form>
                        </div>
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
                                    <th class="text-center" style="width: 50px;">
                                        <div class="form-check p-0 m-0">
                                            <input class="form-check-input" type="checkbox" id="checkAll" style="border: 1px solid #ced4da;">
                                        </div>
                                    </th>
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
                                @forelse ($contacts->sortByDesc('id') as $contact)
                                <tr style="text-align: left" class="{{ $contact->status == 0 ? 'table-warning' : '' }}">
                                    <td class="text-center">
                                        <div class="form-check p-0 m-0">
                                            <input class="form-check-input row-checkbox" type="checkbox" value="{{ $contact->id }}" style="border: 1px solid #ced4da;">
                                        </div>
                                    </td>
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
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center py-4">Chưa có dữ liệu!</td>
                                </tr>
                                @endforelse
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
