<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $artList = [
            ['slug' => 'art1',
            'pics' => 'art1.png',
            'name' => 'FanArt Rumah 404',
            'year' => '2016',
            'type' => 'FanArt'
            ],
            ['slug' => 'art2',
            'pics' => 'art2.png',
            'name' => "FanArt All' Accademia di Magia",
            'year' => '2017',
            'type' => 'FanArt'
            ],
            ['slug' => 'art3',
            'pics' => 'art3.png',
            'name' => 'Meeting After OSK',
            'year' => '2020',
            'type' => 'Illustration'
            ],
            ['slug' => 'art4',
            'pics' => 'art4.png',
            'name' => "Li Jian Jian - Go Ahead",
            'year' => '2020',
            'type' => 'Illustration'
            ],
            ['slug' => 'art5',
            'pics' => 'art5.png',
            'name' => 'Friend Farewell',
            'year' => '2020',
            'type' => 'Original Art'
            ],
            ['slug' => 'art6',
            'pics' => 'art6.png',
            'name' => 'Broken Couple',
            'year' => '2020',
            'type' => 'Original Art'
            ]
        ];

        return view('gallery')->with('arts', $artList);
    }

    public function show($slug){
        $artList = [
            ['slug' => 'art1',
            'pics' => 'art1.png',
            'name' => 'FanArt Rumah 404',
            'year' => '2016',
            'type' => 'FanArt',
            'description' => "This is one of my FanArt that I made when I was in grade 8. This is from Webtoon called 'Rumah 404' which is fantasy story about someone living in Rumah 404. I liked this story so, i made a fanart and posted it in my Instagram."
            ],
            ['slug' => 'art2',
            'pics' => 'art2.png',
            'name' => "FanArt All' Accademia di Magia",
            'year' => '2017',
            'type' => 'FanArt',
            'description' => 'This is one of my FanArt that i made when I was in grade 8. At that time, I liked to read webtoon and this is one of my favorite Webtoon at that time. I made two fanart and I sent it to the author via email. I also posted it in my Instagram.'
            ],
            ['slug' => 'art3',
            'pics' => 'art3.png',
            'name' => 'Meeting After OSN-K',
            'year' => '2020',
            'type' => 'Illustration',
            'description' => "This sketch was made when I was in grade 10th. I joined 'Olimpiade Sains Nasional - Kota' at one of Senior High School in Jember. I met my old friends, so we took a picture for our memory of that moment. I decided to make an illustration and posted in my Instagram."
            ],
            ['slug' => 'art4',
            'pics' => 'art4.png',
            'name' => "Li Jian Jian - Go Ahead",
            'year' => '2020',
            'type' => 'Illustration',
            'description' => "This is an illustration of Li Jian Jian who is a female lead character from Chinese Drama called 'Go Ahead'. It's one of the scene where Li Jian Jian was sitting under the tree, getting inspiration for her design and called her siblings."
            ],
            ['slug' => 'art5',
            'pics' => 'art5.png',
            'name' => 'Friend Farewell',
            'year' => '2020',
            'type' => 'Original Art',
            'description' => "It's my original art which tells about friend farewell. It was one of my assignment in Senior High School to tell a short story. Its story was based on my experience when my friend changed school to her old school."
            ],
            ['slug' => 'art6',
            'pics' => 'art6.png',
            'name' => 'Broken Couple',
            'year' => '2020',
            'type' => 'Original Art',
            'description' => "It is my original art for assignment in my Senio High School. The story behind its art is a couple who have already made a promises, but the boy just broke their promise and makes his girlfriend upset."
            ]
        ];

        $detail_art = [];

        foreach ($artList as $arts) {
            if ($arts['slug'] === $slug) {
                $detail_art = $arts;
            }
        }

        return view('detailArt')->with('art', $detail_art);
    }
}
