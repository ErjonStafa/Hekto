<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function indexbyName()
    {
        $start_time = microtime(true);
        $product = Product::orderBy('emri', 'ASC')->paginate(6);
        $categories = DB::table('kategori')->whereNull('parent_id')->get();
        $subcategories = DB::table('kategori')->whereNotNull('parent_id')->get();
        $result_number = Product::all()->count();
        $end_time = microtime(true) - $start_time;
        $end_time = number_format((float)$end_time, 2, '.', '');
        return view('components.grid-default', ['products' => $product, 'result_number' => $result_number, 'time' => $end_time, 'categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function showByName($category_id)
    {
        $start_time = microtime(true);
        $product = Product::where('kategoria_id', '=', $category_id)->orderBy('emri')->paginate(6);
        $categories = DB::table('kategori')->whereNull('parent_id')->get();
        $subcategories = DB::table('kategori')->whereNotNull('parent_id')->get();
        $result_number = Product::where('kategoria_id', '=', $category_id)->count();
        $end_time = microtime(true) - $start_time;
        $end_time = number_format((float)$end_time, 2, '.', '');
        return view('components.category', ['products' => $product, 'result_number' => $result_number, 'time' => $end_time, 'categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function indexByPrice()
    {
        $start_time = microtime(true);
        $product = Product::orderBy('cmimi','ASC')->paginate(6);
        $categories = DB::table('kategori')->whereNull('parent_id')->get();
        $subcategories = DB::table('kategori')->whereNotNull('parent_id')->get();
        $result_number = Product::all()->count();
        $end_time = microtime(true) - $start_time;
        $end_time = number_format((float)$end_time, 2, '.', '');
        return view('components.grid-default', ['products' => $product, 'result_number' => $result_number, 'time' => $end_time, 'categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function showByPrice($category_id)
    {
        $start_time = microtime(true);
        $product = Product::where('kategoria_id', '=', $category_id)->orderBy('cmimi')->paginate(6);
        $categories = DB::table('kategori')->whereNull('parent_id')->get();
        $subcategories = DB::table('kategori')->whereNotNull('parent_id')->get();
        $result_number = Product::where('kategoria_id', '=', $category_id)->count();
        $end_time = microtime(true) - $start_time;
        $end_time = number_format((float)$end_time, 2, '.', '');
        return view('components.category', ['products' => $product, 'result_number' => $result_number, 'time' => $end_time, 'categories' => $categories, 'subcategories' => $subcategories]);
    }
}
