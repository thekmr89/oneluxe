<?php

namespace App\Http\Controllers;

use App\Models\PageSection;
use App\Models\SectionType;
use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * | For the landing page element crud operation
 * | Use in the Admin section 
 * | Created by : 
 * | Created at : 22-05-2024
 */

class LandingPageController extends Controller
{
    private $mSectionValue;
    private $_pageName;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->_pageName = "landingPage";
    }


    /**
     * | For the first section 
        | Serial no : 01
        | Complited
     */
    public function sectionUpdate(Request $req)
    {
        $req->validate([
            'section1'  => 'required',
            'value1'    => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|',
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


    /**
     * | Section 2
     */
    public function sectionUpdate2(Request $req)
    {
        $req->validate([
            'section2'  => 'required',
            'value1'    => 'nullable',
        ]);

        try {
            $section = array();

            if (isset($req->value1)) {
                $array = [
                    "sectionName"   => $req->section2,
                    "value"         => $req->value1,
                    "type"          => "title"                                       // Static
                ];
                array_push($section, $array);
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

    /**
     * | Section 3
     */
    public function sectionUpdate3(Request $req)
    {
        $req->validate([
            'section3'  => 'required',
            'value1'    => 'nullable',
            'value2'    => 'nullable',
            'value3'    => 'nullable',
            'value4'    => 'nullable',
            'value5'    => 'nullable',
            'value6'    => 'nullable',
            'value7'    => 'nullable',
            'value8'    => 'nullable',

        ]);

        try {
            $section = array();

            // title
            if (isset($req->value1)) {
                $array = [
                    "sectionName" => $req->section3,
                    "value" => $req->value1,
                    "type" => "title1"                                       // Static
                ];
                array_push($section, $array);
            }
            if (isset($req->value3)) {
                $array = [
                    "sectionName" => $req->section3,
                    "value" => $req->value1,
                    "type" => "title2"                                       // Static
                ];
                array_push($section, $array);
            }
            if (isset($req->value5)) {
                $array = [
                    "sectionName" => $req->section3,
                    "value" => $req->value1,
                    "type" => "title3"                                       // Static
                ];
                array_push($section, $array);
            }
            if (isset($req->value7)) {
                $array = [
                    "sectionName" => $req->section3,
                    "value" => $req->value1,
                    "type" => "title4"                                       // Static
                ];
                array_push($section, $array);
            }


            // images 
            if ($req->hasFile('value2') && $req->value2) {
                $file = $req->file('value2');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $array = [
                    "sectionName"   => $req->section3,
                    "value"         => $actualFileName,
                    "type"          => "image1"
                ];
                array_push($section, $array);
            }
            if ($req->hasFile('value4') && $req->value4) {
                $file = $req->file('value4');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $array = [
                    "sectionName"   => $req->section3,
                    "value"         => $actualFileName,
                    "type"          => "image2"
                ];
                array_push($section, $array);
            }
            if ($req->hasFile('value6') && $req->value6) {
                $file = $req->file('value6');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $array = [
                    "sectionName"   => $req->section3,
                    "value"         => $actualFileName,
                    "type"          => "image3"
                ];
                array_push($section, $array);
            }
            if ($req->hasFile('value8') && $req->value8) {
                $file = $req->file('value8');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $array = [
                    "sectionName"   => $req->section3,
                    "value"         => $actualFileName,
                    "type"          => "image4"
                ];
                array_push($section, $array);
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



    public function sectionUpdate4(Request $req)
    { {
            $req->validate([
                'section4'  => 'required',
                'value1'    => 'nullable',
                'value2'    => 'nullable',
                'value3'    => 'nullable',
                'value4'    => 'nullable',
                'value5'    => 'nullable',
                'value6'    => 'nullable',

            ]);

            try {
                $section = array();

                // title
                if (isset($req->value1)) {
                    $array = [
                        "sectionName" => $req->section4,
                        "value" => $req->value1,
                        "type" => "title1"                                       // Static
                    ];
                    array_push($section, $array);
                }
                if (isset($req->value3)) {
                    $array = [
                        "sectionName" => $req->section4,
                        "value" => $req->value1,
                        "type" => "title2"                                       // Static
                    ];
                    array_push($section, $array);
                }
                if (isset($req->value5)) {
                    $array = [
                        "sectionName" => $req->section4,
                        "value" => $req->value1,
                        "type" => "title3"                                       // Static
                    ];
                    array_push($section, $array);
                }



                // images 
                if ($req->hasFile('value2') && $req->value2) {
                    $file = $req->file('value2');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing";
                    $path = public_path() . "/" . $viewPath;
                    $file->move($path, $filename);
                    $actualFileName = $viewPath . "/" . $filename;

                    $array = [
                        "sectionName"   => $req->section4,
                        "value"         => $actualFileName,
                        "type"          => "image1"
                    ];
                    array_push($section, $array);
                }
                if ($req->hasFile('value4') && $req->value4) {
                    $file = $req->file('value4');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing";
                    $path = public_path() . "/" . $viewPath;
                    $file->move($path, $filename);
                    $actualFileName = $viewPath . "/" . $filename;

                    $array = [
                        "sectionName"   => $req->section4,
                        "value"         => $actualFileName,
                        "type"          => "image2"
                    ];
                    array_push($section, $array);
                }
                if ($req->hasFile('value6') && $req->value6) {
                    $file = $req->file('value6');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing";
                    $path = public_path() . "/" . $viewPath;
                    $file->move($path, $filename);
                    $actualFileName = $viewPath . "/" . $filename;

                    $array = [
                        "sectionName"   => $req->section4,
                        "value"         => $actualFileName,
                        "type"          => "image3"
                    ];
                    array_push($section, $array);
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
    }



    public function sectionUpdate6(Request $req)
    {
        //dd($req);
        $req->validate([
            'section6'  => 'nullable',
            'section7'  => 'nullable',
            'value1'    => 'nullable',
            'value2'    => 'nullable',
            'value3'    => 'nullable',
            'value4'    => 'nullable',
        ]);

        try {
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
                    "sectionName"   => $req->section6 ?? $req->section7,
                    "value"         => $actualFileName,
                    "type"          => "image1"
                ];
                array_push($section, $first);
            }
            if ($req->hasFile('value3') && $req->value3) {
                $file = $req->file('value3');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section6 ?? $req->section7,
                    "value"         => $actualFileName,
                    "type"          => "image2"
                ];
                array_push($section, $first);
            }
            if ($req->hasFile('value4') && $req->value4) {
                $file = $req->file('value4');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section6 ?? $req->section7,
                    "value"         => $actualFileName,
                    "type"          => "image3"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section6 ?? $req->section7,
                    "value"         => $req->value2,
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





    /**
     * | call the model for the data 
     */
    public function landingPage()
    {
        $pageName   = "landingPage";
        $pageData   = $this->mSectionValue->getDataForPage($pageName)->get();

        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view('admin.pages.landing', [
            "pageData"  => $newArray
        ]);
    }
}
