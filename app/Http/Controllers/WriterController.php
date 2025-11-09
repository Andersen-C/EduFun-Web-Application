<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function show() {
        $categories = Category::all();
        $writers = Writer::with('category')->get();
        $images = [
            asset('image/Writer 1.jpg'),
            asset('image/Writer 4.jpg'),
            asset('image/Writer 2.jpg'),
            asset('image/Writer 3.jpg'),
        ];

        return view('pages.writer', compact('categories', 'writers', 'images'));
    }

    public function index($id) {
        $categories = Category::all();
        $writer = Writer::with('courses.category')->findOrFail($id);

        $images = [
            '1' => asset('image/Writer 1.jpg'),
            '2' => asset('image/Writer 4.jpg'),
            '3' => asset('image/Writer 2.jpg'),
            '4' => asset('image/Writer 3.jpg'),
        ];

        $image = $images[$writer->id];

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

        $imageCourse = [];

        foreach($writer->courses as $course) {
            if($writer->category?->name === "Interactive Multimedia") {
                $imageCourse[$course->id] = $imageMultimedia[$course->name];
            }
            else {
                $imageCourse[$course->id] = $imageSoftware[$course->name];
            }
        }
        
        return view('pages.writerdetail', compact('categories', 'writer', 'image', 'imageCourse'));
    }
}
