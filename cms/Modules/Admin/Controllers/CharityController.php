<?php

namespace Cms\Modules\Admin\Controllers;

use Cms\Modules\Admin\Services\Contracts\CharityServiceContract;
use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Requests\CharityRequest;

class CharityController extends Controller
{
    protected $service, $tour;

    public function __construct(CharityServiceContract $service, TourServiceContract $tour)
    {
        $this->service = $service;
        $this->tour = $tour;
    }
    public function list()
    {
        $charities = $this->service->paginate(10);
        return view('Admin::charity.list', compact('charities'));
    }

    public function create()
    {
        return view('Admin::charity.create');
    }

    public function store(CharityRequest $request)
    {
        try {
            DB::beginTransaction();
            $tours = $this->tour->getAll()->where('deleted_at', null)->pluck('id')->toArray();
            $dataCharity = [
                'name' => $request->name,
                'phone' => $request->phone,
                'tour_id' => $tours[array_rand($tours, 1)]
            ];

            $this->service->store($dataCharity);

            DB::commit();

            return redirect()->route('admin.charity.list')->with('success', 'Created charity success!');
        } catch (\Exception $exception) {
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
