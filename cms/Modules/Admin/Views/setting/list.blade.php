@extends('Core::layouts.backend.app', ['activePage' => __('setting') , 'titlePage' => __('Danh sách cài đặt chung')])
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
                    'action': '{{ route("admin.setting.deleteMultiple") }}'
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
                        <h6 class="text-white text-capitalize ps-3 mb-0">Cài đặt chung</h6>
                        <div class="d-flex px-3">
                            <button type="button" class="btn btn-sm btn-danger mb-0 me-2" onclick="deleteMultiple()">
                                <i class="material-icons text-sm align-middle me-1">delete</i> Xoá đã chọn
                            </button>
                            <a class="btn btn-sm btn-light mb-0" href="{{ route('admin.setting.create') }}">
                                <i class="material-icons text-sm align-middle me-1">add</i>Thêm mới
                            </a>
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
                                    <th>Tên cài đặt</th>
                                    <th>Tên key</th>
                                    <th>Nội dung</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-right">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($settings as $setting)
                                <tr style="text-align: left">
                                    <td class="text-center">
                                        <div class="form-check p-0 m-0">
                                            <input class="form-check-input row-checkbox" type="checkbox" value="{{ $setting->id }}" style="border: 1px solid #ced4da;">
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td>{{ $setting->name }}</td>
                                    <td>{{ $setting->config_key }}</td>
                                    <td>{{ $setting->config_value }}</td>
                                    <td>{{ $setting->updated_at }}</td>
                                    <td class="td-actions text-right">
                                        <a class="btn text-danger text-gradient px-3 mb-0 action_delete" href=""
                                            data-url="{{ route('admin.setting.delete', ['id' => $setting->id]) }}"><i
                                                class="material-icons text-sm me-2 ">delete</i>Delete</a>
                                        <a class="btn btn-link text-dark px-3 mb-0"
                                            href="{{ route('admin.setting.edit', ['id' => $setting->id]) }}"><i
                                                class="material-icons text-sm me-2">edit</i>Edit</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center py-4">Chưa có dữ liệu, hãy thêm mới!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 pagination">
                {{$settings->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
@endsection
