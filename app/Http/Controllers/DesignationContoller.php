<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class DesignationContoller extends Controller
{
    private $mSectionValue;
    private $_pageName;
    private $_noOfSections;
    private $mDestination;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->mDestination     = new Destination();
        $this->_pageName        = "ourDestination";
        $this->_noOfSections    = 9;
    }

    // View admin designation page
    public function viewAdminDesignation($id = null)
    {

        $data = [
            'country' => $this->mDestination->getDestination()->get(),
            'activeTab' => 'home'
        ];


        if (isset($id)) {
            $editData = [
                'activeTab' => 'profile',
                'editedData' => $this->mDestination->getDestinationById($id)->first() // Assuming 'first' is used instead of 'get'
            ];


            $data = array_merge($data, $editData);
        }

        $pageName = "ourDestination";
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view('admin.pages.designation', $data, $newArray);
    }



    // Update Section 1
    public function sectionUpdate1(Request $req)
    {
        $req->validate([
            'section1'  => 'required',
            'value1'    => 'nullable|file|',
            'value2'    => 'nullable'
        ]);

        try {
            # Update the page contents 
            $section = array();

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
                    "type"          => "video"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section1,
                    "value"         => $req->value2,
                    "type"          => "heading"
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



    public function sectionUpdate2(Request $req)
    {
        $req->validate([
            'section2'  => 'required',
            'value1'    => 'nullable|',
        ]);

        try {
            # Update the page contents 
            $section = array();

            if (isset($req->value1)) {
                $second = [
                    "sectionName"   => $req->section2,
                    "value"         => $req->value1,
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


    public function sectionUpdate3(Request $req)
    {
        $req->validate([
            'name'      => 'required',
            'section'   => 'required',
            'value1'    => 'nullable|',
            'value2'    => 'nullable|',
            'value3'    => 'nullable|file',
            'value4'    => 'nullable|file',
        ]);

        try {
            # Update the page contents 

            // content section
            if (isset($req->value1) || isset($req->value2)) {
                $first["des1content"] = $req->value1;
                $first["des1subcontent"] = $req->value2;
            }


            // image section
            if ($req->hasFile('value3') && $req->value3) {
                $file = $req->file('value3');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first["des1image"] = $actualFileName;
            }
            if ($req->hasFile('value4') && $req->value4) {
                $file = $req->file('value4');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first["des1secondimage"] = $actualFileName;
            }

            if ($req->hasFile('valuel') && $req->valuel) {
                $file = $req->file('valuel');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first["limage"] = $actualFileName;
            }


            if (!empty($first) || isset($first)) {
                $this->mDestination->saveUpdateDestination($this->_pageName, $first, $req->name);
            }

            $responseMsg = $req->pageName . " Destination Saved";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function deleteFile($id)
    {
        $file = Destination::findOrFail($id);
        $file->delete();
        return back()->with('success', "Destination deleted Successfully");
    }

    public function deactiveFile($id)
    {
        $file = Destination::findOrFail($id);
        $file->update([
            "status" => 0
        ]);
        return back()->with('success', "Destination deactivated Successfully");
    }


    public function activeFile($id)
    {
        $file = Destination::findOrFail($id);
        $file->update([
            "status" => 1
        ]);
        return back()->with('success', "Destination activated Successfully");
    }
}
