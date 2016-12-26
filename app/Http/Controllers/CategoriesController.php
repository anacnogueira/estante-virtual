<?php

namespace Estante\Http\Controllers;

use Illuminate\Http\Request;

use Estante\Http\Requests;
use Estante\Repositories\CategoryRepository;
use Estante\Services\CategoryService;


class CategoriesController extends Controller
{

    protected $repository;
    protected $service;

    public function __construct(CategoryRepository $repository, CategoryService $service)
    {
        $this->repository = $repository;
        $this->service  = $service;
    }


    public function index()
    {
        $categories = $this->repository->all();
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = $this->repository->find($id);
        return view('categories.show', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {

        $errors = $this->service->create($request->all());

        if (is_array($errors)) {            
            return redirect()->route('admin.category.create')
            ->withErrors($errors)
            ->withInput();
        }

        return redirect()->route('admin.category.index');
    }

    public function edit($id)
    {

        $category = $this->repository->find($id);

        return view('categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {

        $errors = $this->service->update($request->all(), $id);

        if (is_array($errors)) {            
            return redirect()->route('admin.category.edit', $id)
            ->withErrors($errors)
            ->withInput();
        }

        return redirect()->route('admin.category.index');
    }


   
    public function destroy($id)
    {
        $this->repository->find($id)->delete();

        return redirect()->route("admin.category.index");
    }
}
