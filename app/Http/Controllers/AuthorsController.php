<?php

namespace Estante\Http\Controllers;

use Illuminate\Http\Request;

use Estante\Http\Requests;
use Estante\Repositories\AuthorRepository;
use Estante\Services\AuthorService;


class AuthorsController extends Controller
{

    protected $repository;
    protected $service;

    public function __construct(AuthorRepository $repository, AuthorService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        $authors = $this->repository->all();

        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $author = $this->repository->find($id);
        return view('authors.show', compact('author'));
    }

    public function create()
    {
        
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $errors = $this->service->create($request->all());

        if (is_array($errors)) {            
            return redirect()->route('admin.author.create')
            ->withErrors($errors)
            ->withInput();
        }

        return redirect()->route('admin.author.index');
        
 
    }    

    public function edit($id)
    {
        $author = $this->repository->find($id);

        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $errors = $this->service->update($request->all(), $id);

        if (is_array($errors)) {            
            return redirect()->route('admin.author.edit', $id)
            ->withErrors($errors)
            ->withInput();
        }

        return redirect()->route('admin.author.index');
    }

    public function destroy($id)
    {
        $this->repository->find($id)->delete();

        return redirect()->route("admin.author.index");
    }


}
