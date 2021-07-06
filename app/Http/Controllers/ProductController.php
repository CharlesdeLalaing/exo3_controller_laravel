<?php

namespace App\Http\Controllers;

use App\Models\Productvariables;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $productVariables = Productvariables::all();
        // $productSections = [
        //     (object)[
        //         'sectionUpper' => 'Blended to Perfection',
        //         'sectionLower' => 'Coffees & Teas',
        //         'paragraph' => 'We take pride in our work, and it shows. Every time you order a beverage from us, we
        //         guarantee that it will be an experience worth having. Whether it\'s our world famous Venezuelan
        //         Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced
        //         black coffee, you will be coming back for more.',
        //         'image' => 'img/products-01.jpg'
        //     ],
        //     (object)[
        //         'sectionUpper' => 'Delicious Treats, Good Eats',
        //         'sectionLower' => 'Bakery & Kitchen',
        //         'paragraph' => 'Our seasonal menu features delicious snacks, baked goods, and even full meals
        //         perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever
        //         possible, alongside premium vendors for specialty goods.',
        //         'image' => 'img/products-02.jpg'
        //     ],
        //     (object)[
        //         'sectionUpper' => 'From Around the World',
        //         'sectionLower' => 'Bulk Speciality Blends',
        //         'paragraph' => 'Travelling the world for the very best quality coffee is something take pride in.
        //         When you visit us, you\'ll always find new blends from around the world, mainly from regions in
        //         Central and South America. We sell our blends in smaller to large bulk quantities. Please visit
        //         us in person for more details.',
        //         'image' => 'img/products-03.jpg'
        //     ],
        // ];
        return view('pages.product', compact('productVariables'));
    }
}
