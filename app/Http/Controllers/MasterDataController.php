<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\FormField;
use Alert;
class MasterDataController extends Controller
{
    public function region(){
        $data["title"] = "Manage Region";
        $data["region"] = Region::get();
        return view('admin.pages.master-data.manage-region')->with($data);
    }

    public function createRegion(Request $request){
        try {

            $region = new Region();
            $region->name = $request->name;
            $region->save();

            Alert::success('Success', 'New Region is created!');
            return redirect()->back();
        } catch (Exception $th) {
            DB::rollback();
            Alert::error('Error', $th->getMessage());
            return redirect()->back();
        }
    }

    public function editRegion($id){
        $data["title"] = "Edit Region";
        $data["region"] = Region::find($id);
        return view('admin.pages.master-data.edit-region')->with($data);
    }

    public function updateRegion(Request $request){
        $region= Region::find($request->id);
        $region->name = $request->name;
        $region->save();
        Alert::success('Success', 'Region is updated!');
        return redirect('/master-data/region/manage');
    }

    public function form(){
        $data['formFields'] = FormField::get();
        $data["title"] = "Manage Form";
        return view('admin.pages.master-data.manage-form')->with($data);
    }

    public function createForm(Request $request){
        try {
            $formField = new FormField();
            $formField->name = $request->name;
            $formField->type = $request->type;
            if($request->type == "select"){
                $formField->value = json_encode($request->value);
            }
            $formField->save();

            Alert::success('Success', 'New form field is created!');
            return redirect()->back();
        } catch (Exception $th) {
            DB::rollback();
            Alert::error('Error', $th->getMessage());
            return redirect()->back();
        }
    }
}
