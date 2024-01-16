<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cms\Modules\Admin\Services\Contracts\SettingServiceContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    protected $service;

    public function __construct(SettingServiceContract $service)
    {
        $this->service = $service;
    }
    public function list()
    {
        $settings = $this->service->getAll();
        return view('Admin::setting.list', compact('settings'));
    }

    public function create()
    {
        return view('Admin::setting.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataSettingCreate = [
                'name' => $request->name,
                'config_key' => Str::slug($request->name),
                'config_value' => $request->config_value
            ];

            $this->service->store($dataSettingCreate);
            DB::commit();
            return redirect()->route('admin.setting.list')->with('success', 'Created setting success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }
    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $dataSettingUpdate = [
                'name' => $request->name,
                'config_key' => Str::slug($request->name),
                'config_value' => $request->config_value
            ];

            $this->service->update($id, $dataSettingUpdate);
            DB::commit();
            return redirect()->route('admin.setting.list')->with('success', 'Update setting success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }
    public function edit($id)
    {
        $setting = $this->service->find($id);
        return view('Admin::setting.edit', compact('setting'));
    }
    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $this->service->delete($id);
            DB::commit();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }
}
