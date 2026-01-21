<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;
use Cms\Modules\Admin\Traits\StorageImageTrait;
use Cms\Modules\Admin\Traits\HandleDeleteTrait;
use Cms\Modules\Admin\Traits\HandleTransactionTrait;
use Cms\Modules\Admin\Requests\SliderRequest;

class SliderController extends Controller
{
    protected $service;

    use StorageImageTrait, HandleDeleteTrait, HandleTransactionTrait;

    public function __construct(SliderServiceContract $service)
    {
        $this->service = $service;
    }

    public function list()
    {
        $sliders = $this->service->getListAll();

        return view('Admin::slider.list', compact('sliders'));
    }
    public function create()
    {
        return view('Admin::slider.create');
    }

    public function store(SliderRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataSlider = [
                'name' => $request->name,
                'type' => $request->type
            ];

            $dataImage = $this->storageImageUpload($request, 'image_path', 'slider');

            if (!empty($dataImage)) {
                $dataSlider['image_name'] = $dataImage['file_name'];
                $dataSlider['image_path'] = $dataImage['file_path'];
            }

            $this->service->store($dataSlider);

            DB::commit();

            return redirect()->route('admin.slider.list')->with('success', 'Created slider success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }

    }


    public function edit($id)
    {
        $slider = $this->service->find($id);

        return view('Admin::slider.edit', compact('slider'));
    }


    public function update(SliderRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataSlider = [
                'name' => $request->name,
                'type' => $request->type
            ];

            $dataImage = $this->storageImageUpload($request, 'image_path', 'slider');
            // dd($dataImage);
            if (!empty($dataImage)) {
                $dataSlider['image_name'] = $dataImage['file_name'];
                $dataSlider['image_path'] = $dataImage['file_path'];
            }
            $this->service->update($id, $dataSlider);
            DB::commit();
            return redirect()->route('admin.slider.list')->with('success', 'Updated slider success!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message :' . $exception->getMessage() . ' ----- Line ' . $exception->getLine());
        }
    }


    public function delete($id)
    {
        return $this->handleDelete($this->service, $id);
    }
}
