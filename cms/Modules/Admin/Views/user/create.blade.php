@extends('Core::layouts.backend.app')
@section('content')
    <form method="POST" action="{{ route('admin.user.store') }}" autocomplete="off">
        @csrf
        <div class="form-group">
            <label class="form-control-label" for="input-user-name">{{ __('User Name') }}</label>
            <input type="text" name="name" id="input-user-name" class="form-control " placeholder="Name">
        </div>
        <div class="form-group">
            <label class="form-control-label" for="input-user-name">{{ __('User Name') }}</label>
            <input type="text" name="email" id="input-user-name" class="form-control " placeholder="Email">
        </div>
        <div class="form-group">
            <label class="form-control-label" for="input-user-name">{{ __('User Name') }}</label>
            <input type="password" name="password" id="input-user-name" class="form-control " placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
    </form>
@endsection