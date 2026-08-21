<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Placeholder data for artworks
        $artworks = [
            [
                'id' => 1,
                'title' => '#######',
                'description' => 'i love my daughter  guuys',
                'year' => '2025',
                'tools' => 'ipx, magic poser',
                'img' => 'img/angel-core.jpg',
                'category' => 'Original Characters'
            ],
            [
                'id' => 2,
                'title' => 'Artwork 2',
                'description' => 'muwah',
                'year' => '1995',
                'tools' => 'figma',
                'img' => 'img/wawan.png',
                'category' => 'Fanart'
            ],

            [
                'id' => 3,
                'title' => 'Ami amor',
                'description' => 'muwah',
                'year' => '2024',
                'tools' => 'ipx, jiwa dan raga',
                'img' => 'img/bf-core.png',
                'category' => 'Original Characters'
            ],

            [
                'id' => 4,
                'title' => 'Artwork 4',
                'description' => 'asalole',
                'year' => '1995',
                'tools' => 'figma',
                'img' => 'img/banana-split.png',
                'category' => '3D Assets / Environment'
            ],

            [
                'id' => 5,
                'title' => 'ubur',
                'description' => 'asalole',
                'year' => '2025',
                'tools' => 'figma',
                'img' => 'img/ubur.jpg',
                'category' => '3D Assets / Environment'
            ],

            [
                'id' => 6,
                'title' => 'Sua',
                'description' => 'basically her bday art lolz',
                'year' => '2025',
                'tools' => 'ipx',
                'img' => 'img/sua.png',
                'category' => 'Fanart'
            ],
            
            [
                'id' => 7,
                'title' => 'Sua',
                'description' => 'basically her bday art lolz',
                'year' => '2025',
                'tools' => 'ipx',
                'img' => 'img/sua.png',
                'category' => 'Fanart'
            ]

            // Add more as needed
        ];

        return view('portofolio', compact('artworks'));
    }
}