<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cms\Modules\Admin\Services\Contracts\BusServiceContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Requests\BusRequest;

class BusController extends Controller
{
    protected $service;

    public function __construct(BusServiceContract $service)
    {
        $this->service = $service;
    }

    public function list()
    {
        $buses = $this->service->getListAll();

        return view('Admin::bus.list', compact('buses'));
    }

    public function create()
    {
        return view('Admin::bus.create');
    }

    public function store(BusRequest $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();
            $dataBusCreate = [
                'price' => $request->price,
                'name' => $request->name,
                'department_id' => $request->department_id,
                'image_path' => $request->image_path,
                'direction' => $request->direction
            ];

            $this->service->store($dataBusCreate);
            DB::commit();
            return redirect()->route('admin.bus.list')->with('success', 'Created bus success!');
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
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
