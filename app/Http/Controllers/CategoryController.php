<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //

    public function create(Request $request)
    {
        if (!Gate::allows('admin')) {
            abort(403);
        }

        $this->validate($request, [
            'title' => ['required']
        ]);

        Category::create([
            'title' => $request->title
        ]);

        return redirect('/admin/categories');
    }

    public function delete(Request $request)
    {
        if (!Gate::allows('admin')) {
            abort(403);
        }

        $category = Category::find(['id' => $request->id])->first();
        $category->delete();
        return redirect('/admin/categories');
    }
}
