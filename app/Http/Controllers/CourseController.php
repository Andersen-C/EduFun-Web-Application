<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($id) {
        $course = Course::with('category', 'writer')->findOrFail($id);
        $categories = Category::all();

        $imageMultimedia = [
            'Human and Computer Interaction' => asset('image/Human Computer Interaction.jpg'),
            'User Experience' => asset('image/User Experience.jpg'),
            'User Experience for Digital Immersive Technology' => asset('image/User Experience for immersive technologies.jpg')
        ];

        $imageSoftware = [
            "Pattern Software Design" => asset('image/Pattern Software Design.jpg'),
            "Agile Software Development" => asset('image/Agile-Software-Development1-660.png'),
            "Code Reengineering" => asset('image/code-reenginering.jpg')
        ];

        if($course->category->name === "Interactive Multimedia") {
            $image = $imageMultimedia[$course->name];
        }
        else {
            $image = $imageSoftware[$course->name];
        }

        return view('pages.details', compact('course', 'categories', 'image'));

    }
}
