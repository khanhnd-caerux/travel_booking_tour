<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\UserServiceContract;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserServiceContract $service)
    {
        $this->service = $service;
    }

    public function create() {
        return view('Admin::user.create');
    }

    public function store(Request $request)
    {
        $this->service->store($request);
    }
}