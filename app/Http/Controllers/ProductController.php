<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    //

    public function create(Request $request)
    {
        if (!Gate::allows('admin')) {
            abort(403);
        }

        // dd($request);

        $this->validate($request, [
            'title' => ['required'],
            'model'  => ['required'],
            'price_ru'  => ['required'],
            'amount'  => ['required'],
            'produced_at'  => ['required']
        ]);

        Product::create([
            'title' => $request->title,
            'model' => $request->model,
            'price_ru' => $request->price_ru,
            'amount' => $request->amount,
            'photo' => $request->photo,
            'produced_at' => $request->produced_at,
            'category_id' => $request->category_id,
            'country_id' => 0
        ]);

        return redirect('/admin/products');
    }

    public function delete(Request $request)
    {
        if (!Gate::allows('admin')) {
            abort(403);
        }

        $product = Product::find(['id' => $request->id])->first();
        $product->delete();
        return redirect('/admin/products');
    }
}
