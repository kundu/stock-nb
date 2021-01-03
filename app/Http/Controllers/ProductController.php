<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryFormField;
use App\Models\Product;
use App\Models\ProductValue;
use Alert;
use Exception;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Create Product";
        $data['categories'] = Category::with('formField')->get();
        return view('admin.pages.product.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            // dd($request);

            $product = new Product();
            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category_id;
            $product->added_by = auth()->user()->name;

            $product->save();

            foreach ($request->fields as $key => $value) {
                $productValue = new ProductValue();
                $productValue->product_id = $product->id;
                $productValue->form_field_id = $key;
                $productValue->value = $value;
                $productValue->save();
            }
            DB::commit();
            Alert::success('Success', 'New Product is created!');
            return redirect()->back();
        } catch (Exception $th) {
            DB::rollback();
            Alert::error('Error', $th->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajaxFormField($category_id){
        $data['formFeilds'] = CategoryFormField::with('formField')->where('category_id', $category_id)->get();
        // dd($data['formFeilds']);
        return view('admin.pages.product.ajax-other-field')->with($data);
    }
}
