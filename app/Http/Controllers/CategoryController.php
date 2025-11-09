<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    # berdasarkan id 
    public function index($id) {
        
        $category = Category::findOrFail($id);
        $category_course = Course::with('writer')->where('category_id', $id)->get();
        $categories = Category::all();
        
        $image1 = [
            asset('image/Pattern Software Design.jpg'),
            asset('image/Agile-Software-Development1-660.png'),
            asset('image/code-reenginering.jpg')
        ];

        $image2 = [
            asset('image/Human Computer Interaction.jpg'),
            asset('image/User Experience.jpg'),
            asset('image/User Experience for immersive technologies.jpg')
        ];

        $image = $category->name === 'Interactive Multimedia'? $image2 : $image1;

        return view('pages.categories', compact('category', 'category_course', 'categories', 'image'));
    }
}
