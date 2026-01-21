<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\CharityServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;
use Cms\Modules\Admin\Traits\HandleDeleteTrait;
use Cms\Modules\Admin\Traits\HandleTransactionTrait;
use Cms\Modules\Admin\Requests\CharityRequest;

class CharityController extends Controller
{
    protected $service, $tour;

    use HandleDeleteTrait, HandleTransactionTrait;

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
        return $this->executeInTransaction(
            function () use ($request) {
                $tours = $this->tour->getAll()
                    ->where('deleted_at', null)
                    ->pluck('id')
                    ->toArray();

                $dataCharity = [
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'tour_id' => $tours[array_rand($tours, 1)]
                ];

                $this->service->store($dataCharity);
            },
            'Created charity success!',
            'admin.charity.list'
        );
    }

    public function delete($id)
    {
        return $this->handleDelete($this->service, $id);
    }
}
