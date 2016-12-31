<?php

namespace Estante\Http\Controllers;

use Illuminate\Http\Request;

use Estante\Http\Requests;
use Estante\Repositories\BookRepository;
use Estante\Repositories\AuthorRepository;
use Estante\Repositories\CategoryRepository;
use Estante\Services\BookService;


class BooksController extends Controller
{

    protected $repository;
    protected $service;
    protected $author;
    protected $category;

    public function __construct(
        BookRepository $repository, 
        BookService $service, 
        AuthorRepository $author,
        CategoryRepository $category
    )
    {
        $this->repository = $repository;
        $this->service  = $service;
        $this->author = $author;
        $this->category = $category;
    }


    public function index()
    {
        
        $books = $this->repository->all();

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = $this->repository->find($id);
        return view('books.show', compact('book'));
    }

    public function create()
    {
        $authors = [];
        $data = $this->author->all();
        foreach ($data as $item) {
            $authors[$item->id] = $item->name;   
        }

        $categories = [];
        $data = $this->category->all();
        foreach ($data as $item) {
            $categories[$item->id] = $item->name;   
        }
        return view('books.create', compact('authors','categories'));
    }


    public function store(Request $request)
    {

        $errors = $this->service->create($request->all());

        if (is_array($errors)) {            
            return redirect()->route('admin.book.create')
            ->withErrors($errors)
            ->withInput();
        }

        return redirect()->route('admin.book.index');
    }

    public function edit($id)
    {

        $book = $this->repository->find($id);

        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {

       $errors = $this->service->update($request->all(), $id);

        if (is_array($errors)) {            
            return redirect()->route('admin.book.edit', $id)
            ->withErrors($errors)
            ->withInput();
        }

        return redirect()->route('admin.book.index');
    }


    public function destroy($id)
    {
         $this->repository->find($id)->delete();

        return redirect()->route("admin.book.index");
    }
}
