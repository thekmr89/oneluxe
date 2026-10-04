<?php

namespace App\Http\Controllers;

use App\Models\MultiService;
use App\Models\SectionValue;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Str;

class OurServicesController extends Controller
{
    //private $mSectionValue;
    private $mSectionValue;
    private $_pageName;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->_pageName        = "ourServices";
    }

    public function viewService($id = null)
    {
        $editedData = null;
        $mMultiServices = new MultiService();
        $activeTab = 'home';
        if (isset($id)) {
            $activeTab = 'exampleModal';
            $editedData = $multiServies = $mMultiServices->getDataById($id)->first();
        }

        $pageName = "ourServices";
        $multiServies = $mMultiServices->getAll();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }

        if (isset($editedData)) {
            $returnData['editData']  = $editedData ?? null;
        }


        $returnData['activeTab']     = $activeTab;
        $returnData['multiServices'] = $multiServies;
        $returnData['pageData']      = $newArray;


        return view('admin.pages.ourservices', $returnData);
    }

    public function saveServices(Request $req)
    {
        
        //dd($req);
        
        $req->validate([
            'value1'    => 'nullable|',
            'value2'    => 'nullable|string',
        ]);

        $pageName = "MultiServices";
        $mMultiServices = new MultiService();
        $slug = $req->tag_service_page ? Str::slug($req->tag_service_page) : Str::slug($req->section_heading);
        try {
            # Update the page contents 
            $attributes = [
                'content_value' => $req->value2,
                'page_name' => "ourServices",
                'view_home' => $req->flexCheckIndeterminate ?? 0,
                'heading'=> $req->section_heading ?? '',
                'tag_service_page'=> $slug,
            ];

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;
                $attributes['image_path'] = $actualFileName;
            }
            // Only set default image for new records (not updates)
            if (!isset($req->id) && !isset($attributes['image_path'])) {
                $attributes['image_path'] = 'uploads/landing/default.webp';
            }

            // update
            if (isset($req->id)) {
                $mMultiServices->updateServices($attributes, $req->id);

                $responseMsg = $pageName . " Content Updated";
                //return view('admin.pages.ourservices')->with('success', $responseMsg);
                return back()->with('success', $responseMsg);
            }

            $mMultiServices->create($attributes);
            $responseMsg = $pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    // 
    public function deleteMultiService($id)
    {
        $service = MultiService::findOrFail($id);
        $service->delete();
        return back()->with('success', "Service Deleted Successfully");
    }

    public function updateSection1(Request $req)
    {
        $req->validate([
            "section1"  => "required",
            "value2"    => "nullable",
            "value1"    => "nullable",  //image
            "valueD"    => "nullable"

        ]);

        $section = array();
        try {

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section1,
                    "value"         => $actualFileName,
                    "type"          => "Image"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section1,
                    "value"         => $req->value2,
                    "type"          => "tittle"
                ];
                array_push($section, $second);
            }

            if (isset($req->valueD)) {
                $second = [
                    "sectionName"   => $req->section1,
                    "value"         => $req->valueD,
                    "type"          => "content"
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $this->_pageName);
                }
            }

            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    public function activeMultiService($id)
    {
        $service = MultiService::findOrFail($id);
        $service->update([
            "status" => 1
        ]);
        return back()->with('success', "Service Updated Successfully");
    }


    public function deactiveMultiService($id)
    {
        $service = MultiService::findOrFail($id);
        $service->update([
            "status" => 0
        ]);
        return back()->with('success', "Service Updated Successfully");
    }
}
