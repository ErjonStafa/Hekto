<?php

namespace App\View\Components;

use App\Models\Product;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class All extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $start_time = microtime(true);
        $product = Product::paginate(6);
        $categories = DB::table('kategori')->whereNull('parent_id')->get();
        $subcategories = DB::table('kategori')->whereNotNull('parent_id')->get();
        $result_number = Product::all()->count();
        $end_time = microtime(true) - $start_time;
        $end_time = number_format((float)$end_time, 2, '.', '');
        return view('components.shop-components.grid-default',['products'=>$product , 'result_number'=>$result_number , 'time' => $end_time, 'categories'=> $categories, 'subcategories' => $subcategories]);
    }
}