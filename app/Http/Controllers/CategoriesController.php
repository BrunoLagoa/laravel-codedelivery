<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\CategoryRepository;

class CategoriesController extends Controller
{
    public function index(CategoryRepository $repository)
    {
        $categories = $repository->paginate(5);

        return view('admin.categories.index', compact('categories'));
    }
}
