<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\PostRequest;
use App\Http\Requests\CategoryRequest;
use App\Post;
// PER EMAIL
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('pages.index', compact('categories'));
    }

    public function postShow($id){
        $post = Post::findOrFail($id);
        return view('pages.postShow', compact('post'));
    }
    
    public function postEdit($id){
        $post = Post::findOrFail($id);
        return view('pages.postEdit', compact('post'));
    }

    public function postUpdate(PostRequest $request, $id){
        $validateDate = $request -> validated();

        $post = Post::findOrFail($id);
        $post -> update($validateDate);

        return redirect() -> route('post.show', $id);
    }

    public function postDelete($id)
    {
        $post = Post::findOrFail($id);
        $post -> delete();
        Mail::to("prova@email.com")->send(new OrderShipped("Post", $post -> title));

        return redirect() -> route('home.index');
    }

    public function categoryEdit($id){
        $category = Category::findOrFail($id);
        return view('pages.categoryEdit', compact('category'));
    }

    public function categoryUpdate(CategoryRequest $request, $id){
        $validateDate = $request -> validated();
        $category = Category::findOrFail($id);
        $category -> update($validateDate);

        return redirect() -> route('home.index');
    }

    public function categoryDelete($id)
    {
        $category = Category::findOrFail($id);
        $category -> posts() -> delete();
        $category -> delete();

        Mail::to("prova@email.com")->send(new OrderShipped("Category", $category -> name));

        return redirect() -> route('home.index');
    }


}
