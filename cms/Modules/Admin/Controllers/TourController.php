<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\TourDetailServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourPriceServiceContract;
use Cms\Modules\Admin\Traits\BulkDeletable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;
use Cms\Modules\Admin\Requests\TourRequest;
use Cms\Modules\Admin\Requests\TourPriceRequest;
use Cms\Modules\Admin\Requests\TourDetailRequest;

class TourController extends Controller
{
    use StorageImageTrait, BulkDeletable;

    protected string $bulkDeleteModel = \Cms\Modules\Core\Models\Tour::class;

    public function __construct(
        TourServiceContract $service,
        TourPriceServiceContract $tourPrice,
        TourDetailServiceContract $tourDetail
    ) {
        $this->service = $service;
        $this->tourPrice = $tourPrice;
        $this->tourDetail = $tourDetail;
    }
    public function list()
    {
        $tours = $this->service->getAllTour();
        return view('Admin::tour.list', compact('tours'));
    }

    public function create()
    {
        return view('Admin::tour.create');
    }

    public function store(TourRequest $request)
    {
        $data = [
            'name' => $request->name,
            'tour_includes' => $request->tour_includes,
            'tour_excludes' => $request->tour_excludes,
            'status' => $request->status === "show" ? 0 : 1,
            'time' => $request->time,
            'moto_types' => json_encode($request->moto_types),
        ];

        $this->service->store($data);

        return redirect()->route('admin.tour.list')->with('success', 'Create tour success!');
    }

    public function update($id, TourRequest $request)
    {
        $data = [
            'name' => $request->name,
            'tour_includes' => $request->tour_includes,
            'tour_excludes' => $request->tour_excludes,
            'status' => $request->status === "show" ? 0 : 1,
            'time' => $request->time,
            'moto_types' => json_encode($request->moto_types)
        ];

        $this->service->update($id, $data);

        return redirect()->route('admin.tour.list')->with('success', 'Update tour success!');
    }
    public function edit($id)
    {
        $tour = $this->service->find($id);

        return view('Admin::tour.edit', compact('tour'));
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

    public function deleteMultiple(Request $request)
    {
        return $this->performBulkDelete(\Cms\Modules\Core\Models\Tour::class, $request);
    }

    public function list_price()
    {
        $tourPrices = $this->tourPrice->getAllTourPrice(10);

        return view('Admin::tour-price.list', compact('tourPrices'));
    }

    public function create_price()
    {
        $tours = $this->service->getAll();
        return view('Admin::tour-price.create', compact('tours'));
    }

    public function store_price(TourPriceRequest $request)
    {
        $data = [
            'description' => $request->description,
            'price' => $request->price,
            'tour_id' => $request->tour_id
        ];
        $this->tourPrice->store($data);

        return redirect()->route('admin.tour_price.list')->with('success', 'Create tour price success!');
    }

    public function delete_price($id)
    {
        $this->tourPrice->delete($id);

        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }

    public function deleteMultiplePrice(Request $request)
    {
        return $this->performBulkDelete(\Cms\Modules\Core\Models\TourPrice::class, $request);
    }

    public function edit_price($id)
    {
        $tourPrice = $this->tourPrice->find($id);
        $tours = $this->service->getAll();

        return view('Admin::tour-price.edit', compact('tourPrice', 'tours'));
    }

    public function update_price($id, TourPriceRequest $request)
    {
        $data = [
            'description' => $request->description,
            'price' => $request->price,
            'tour_id' => $request->tour_id
        ];
        $this->tourPrice->update($id, $data);

        return redirect()->route('admin.tour_price.list')->with('success', 'Update tour success!');
    }

    public function list_detail()
    {
        $tourDetails = $this->tourDetail->getAllTourDetail(10);

        return view('Admin::tour-detail.list', compact('tourDetails'));
    }

    public function create_detail()
    {
        $tours = $this->service->getAll();
        return view('Admin::tour-detail.create', compact('tours'));
    }

    public function store_detail(TourDetailRequest $request)
    {
        $data = [
            'content' => $request->content,
            'description' => $request->description,
            'name' => $request->name,
            'tour_id' => $request->tour_id,
        ];

        $dataImage = $this->storageImageUpload($request, 'image', 'tour-detail');

        if (!empty($dataImage)) {
            $data['image'] = $dataImage['file_path'];
        }

        $this->tourDetail->store($data);

        return redirect()->route('admin.tour_detail.list')->with('success', 'Create tour detail success!');
    }

    public function delete_detail($id)
    {
        $this->tourDetail->delete($id);

        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }

    public function deleteMultipleDetail(Request $request)
    {
        return $this->performBulkDelete(\Cms\Modules\Core\Models\TourDetail::class, $request);
    }

    public function edit_detail($id)
    {
        $tourDetail = $this->tourDetail->find($id);
        $tours = $this->service->getAll();

        return view('Admin::tour-detail.edit', compact('tourDetail', 'tours'));
    }

    public function update_detail($id, TourDetailRequest $request)
    {
        $data = [
            'content' => $request->content,
            'description' => $request->description,
            'name' => $request->name,
            'tour_id' => $request->tour_id,
        ];

        if ($request->image) {
            $dataImage = $this->storageImageUpload($request, 'image', 'tour-detail');

            if (!empty($dataImage)) {
                $data['image'] = $dataImage['file_path'];
            }
        }

        $this->tourDetail->update($id, $data);

        return redirect()->route('admin.tour_detail.list')->with('success', 'Update tour detail success!');
    }
}
