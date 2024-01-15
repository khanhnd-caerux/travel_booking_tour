<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Requests\UserRequest;
use Cms\Modules\Admin\Services\Contracts\UserServiceContract;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserServiceContract $service)
    {
        $this->service = $service;
    }

    public function list(){
        $users = $this->service->getAll();
        return view('Admin::user.list', [
            'users' => $users
        ]);
    }

    public function create() {
        return view('Admin::user.create');
    }

    public function edit($id) {
        $data = $this->service->find($id);

        return view('Admin::user.edit', ['user' => $data]);
    }

    public function update($id, Request $request) {
        $data = $this->service->update($id, $request->all());

        if ($data) return redirect()->route('admin.user.list')->with('success', 'Updated user success!');
        
        return redirect()->back();
    }

    public function store(UserRequest $request)
    {
        $store = $this->service->store($request->all());

        if ($store) return redirect()->route('admin.user.list')->with('success', 'Created user success!');
        
        return redirect()->back();
    }

    public function delete($id) {
        return $this->service->delete($id);
    }
}