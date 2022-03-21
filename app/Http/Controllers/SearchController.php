<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    protected $found;

    public function index(){
        $products = Product::all();
    }

    public function search(Request $request)
    {
        $this->found = DB::table('products')->where('emri', 'LIKE', "%{$request->word}%")->get();
        $found = '';
        foreach ($this->found as $key => $product) {
            $found .= '<a href="/pages/shop/'.$product->id.'" class="flex border-b border-b-slate-500 bg-white hover:bg-slate-400 rounded md:w-64 p-1 sm:w-48 h-[60px]">
            <div style="width: 110px; height: 70px" class="bg-[#F5F6F8] flex justify-center items-center">
                <img src="'.$product->img_slug.'" style="width: 90px; height: 55px">
            </div>
            <div class="ml-2 flex flex-col">
                <div class="font-josefin text-navy-blue text-base">
                    '.$product->emri.'
                </div>
                <div class="font-josefin text-navy-blue text-xs">
                    $'.number_format((float)$product->cmimi, 2, ".", "").'
                </div>
            </div>
        </a>';
        }

        return Response($found);
    }
}
