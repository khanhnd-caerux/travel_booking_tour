<?php

namespace Cms\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;
use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;

class HomeController extends Controller
{

    protected $slider, $post, $category, $tour;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct
    (
        SliderServiceContract $slider,
        PostServiceContract $post,
        CategoryServiceContract $category,
        TourServiceContract $tour
    ) {
        $this->slider = $slider;
        $this->post = $post;
        $this->category = $category;
        $this->tour = $tour;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
        return view('Home::index');
    }

    public function home(): \Illuminate\Contracts\Support\Renderable
    {
        $sliders = $this->slider->getByType($type = 'banner');
        $partners = $this->slider->getByType($type = 'partner');
        $galleries = $this->slider->getByType($type = 'gallery');
        $postExperiences = $this->post->getPostByType($type = 'experience');
        $firstPostExperience = $this->post->getFirstPost($type = 'experience');
        $categoryWithTour = $this->category->getCateWithTour($slug = 'tour-ha-giang');

        return view('Home::home', compact('sliders', 'partners', 'galleries', 'postExperiences', 'firstPostExperience', 'categoryWithTour'));
    }

    public function postDetail($slug)
    {

        if ($slug === 'kinh-nghiem-du-lich') {
            $postRelated = $this->post->getPostByType('experience');
            return view('Home::postList', compact('postRelated'));
        } else {
            $postDetail = $this->post->getPostBySlug($slug);
            if ($postDetail->type == 'experience') {
                $postRelated = $this->post->getPostRelated($postDetail->id, ['payment', 'introduction', 'policy', 'cancel', 'contact']);
            } else {
                $postRelated = $this->post->getPostRelated($postDetail->id, ['experience']);
            }

            return view('Home::postDetail', compact('postDetail', 'postRelated'));
        }

    }

    public function tourList($slug)
    {
        $tourList = $this->category->getCateWithTour($slug);

        return view('Home::tourList', compact('tourList'));
    }

    public function tourDetail($slug)
    {
        $tourDetail = $this->tour->findBySlug($slug);
        $tourRelated = $this->tour->getTourRelated($tourDetail->id, $tourDetail->category_id);

        return view('Home::tourDetail', compact('tourDetail', 'tourRelated'));
    }
}
