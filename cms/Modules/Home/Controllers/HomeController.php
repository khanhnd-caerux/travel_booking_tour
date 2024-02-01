<?php

namespace Cms\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Services\Contracts\CarServiceContract;
use Cms\Modules\Admin\Services\Contracts\SliderServiceContract;
use Cms\Modules\Admin\Services\Contracts\PostServiceContract;
use Cms\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Cms\Modules\Admin\Services\Contracts\TicketServiceContract;
use Cms\Modules\Admin\Services\Contracts\TourServiceContract;

class HomeController extends Controller
{

    protected $slider, $post, $category, $tour, $car, $ticket;
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
        TourServiceContract $tour,
        CarServiceContract $car,
        TicketServiceContract $ticket
    ) {
        $this->slider = $slider;
        $this->post = $post;
        $this->category = $category;
        $this->tour = $tour;
        $this->car = $car;
        $this->ticket = $ticket;
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

    public function contentList($slug)
    {
        $contentList = $this->category->getCateWithTour($slug);

        return view('Home::contentList', compact('contentList'));
    }

    public function contentDetail($slug)
    {
        if ($this->tour->findBySlug($slug)) {
            $contentDetail = $this->tour->findBySlug($slug);
            $tourRelated = $this->tour->getTourRelated($contentDetail->id, $contentDetail->category_id);
        }
        if ($this->car->findBySlug($slug)) {
            $contentDetail = $this->car->findBySlug($slug);
            $tourRelated = $this->car->getCarRelated($contentDetail->id, $contentDetail->category_id);
        }
        if ($this->ticket->findBySlug($slug)) {
            $contentDetail = $this->ticket->findBySlug($slug);
            $tourRelated = $this->ticket->getTicketRelated($contentDetail->id, $contentDetail->category_id);
        }
        return view('Home::contentDetail', compact('contentDetail', 'tourRelated'));
    }
}
