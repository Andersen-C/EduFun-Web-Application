<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $courses = Course::with('category', 'writer')->get();
        $categories = Category::all();
        return view('pages.home', compact('categories', 'courses'));
    }
}
