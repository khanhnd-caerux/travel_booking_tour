@extends('Core::layouts.backend.app', ['activePage' => __('tour-price') , 'titlePage' => __('Tạo mới Tour')])
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Cập nhật giá Tour du lịch</h6>
                        <a class="btn bg-gradient-dark mb-0 mx-3" href="{{ route('admin.tour_price.list') }}"><i
                                class="material-icons text-sm">list</i>Danh sách</a>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <form method="POST" action="{{route('admin.tour_price.update', ['id' => $tourPrice->id])}}" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group input-group-outline my-3">
                                            <input type="text" name="price" value="{{ $tourPrice->price }}"
                                                class="form-control @error('price') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('price')
                                        <div class="alert alert-danger text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-outline my-3">
                                            <input type="text" name="description" value="{{ $tourPrice->description }}"
                                                class="form-control @error('description') in-valid @enderror"
                                                autocomplete="off">
                                        </div>
                                        @error('description')
                                        <div class="alert alert-danger text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group w-100 input-group input-group-outline my-3 d-flex flex-column">
                                    <label for="exampleFormControlSelect1">Chọn danh mục Tour cha</label>
                                    <select class="form-control w-100" name="tour_id"
                                        id="exampleFormControlSelect1">
                                        <option value="0">Chọn danh mục Tour</option>
                                        @foreach($tours as $tour)
                                        <option value="{{$tour->id}}" @if($tourPrice->tour_id == $tour->id) selected @endif>{{$tour->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
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
@endsection
