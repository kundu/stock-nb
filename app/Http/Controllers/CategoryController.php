<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\FormField;
use App\Models\CategoryFormField;
use Alert;
use Exception;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Category Manage";
        $data['categories'] = Category::with('formField')->get();
        $data['form_fields'] = FormField::get();
        return view('admin.pages.category.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

            $category = new Category();
            $category->name = $request->name;
            $category->save();

            $formFields = $request->formFields;
            foreach ($formFields as $key => $value) {
                $categoryFormField = new CategoryFormField();
                $categoryFormField->category_id = $category->id;
                $categoryFormField->form_field_id = $formFields[$key];
                $categoryFormField->save();
            }

            DB::commit();
            Alert::success('Success', 'New category is created!');
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

    public function manageSubCategory(){
        $data['title'] = "Sub Category Manage";
        $data['categories'] = Category::get();
        $data['sub_categories'] = SubCategory::with('category')->get();
        return view('admin.pages.category.sub-category')->with($data);
    }

    public function storeSub(Request $request){
        try {
            DB::beginTransaction();

            $Subcategory = new SubCategory();
            $Subcategory->name = $request->name;
            $Subcategory->category_id = $request->category_id;
            $Subcategory->save();

            DB::commit();
            Alert::success('Success', 'New Sub category is created!');
            return redirect()->back();
        } catch (Exception $th) {
            DB::rollback();
            Alert::error('Error', $th->getMessage());
            return redirect()->back();
        }
    }

    public function ajaxSubCategory($id){
        $data['subCategories'] = SubCategory::where('category_id', $id)->get();
        return view('admin.pages.category.ajax-sub-category')->with($data);

    }
}
