<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    function index() {
        $articles = Article::paginate(3);
        return view('articles', ['articles' => $articles]);
    }

    function createarticle(Request $request) {
        $validator = Validator::make(
            [
                'title' => $request->get('title'),
                'author' => $request->get('author'),
                'body' => $request->get('body')
            ],
            [
                'title' => 'required',
                'author' => 'required',
                'body' => 'required',
            ]
        );

        if ($validator->fails()) {
            $errors = $validator->messages();
            return view('admin', ['errors' => $errors]);
        }

        Article::create(['title' => $request->get('title'),
                         'author' => $request->get('author'),
                         'body' => $request->get('body')]);
        
        return redirect('admin');
    }
}
