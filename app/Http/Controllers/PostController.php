<?php
 
namespace App\Http\Controllers;

use App\Http\Requests\dataDiriRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
 
class PostController extends Controller
{
    /**
     * Show the form to create a new blog post.
     */
    public function create(): View
    {
        return view('post.create');
    }
 
    /**
     * Store a new blog post.
     */
    public function store(dataDiriRequest $request): RedirectResponse
    {
       $validate = $request->validated();

       $validated = $request->safe()->only(['nama', 'panggilan', 'lahir', 'sekolah']);
       $validated = $request->safe()->except(['nama', 'panggilan', 'lahir', 'sekolah' ]);
 
    return redirect('/dataDiri');
    }
}