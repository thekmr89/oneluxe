<?php

namespace App\Http\Controllers;

use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    /**
     * | About Us Page
     */
    public function aboutusPage()
    {
        $pageName = "aboutUs";
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view('admin.pages.aboutus', [
            "pageData" => $newArray
        ]);
        
    }

    private $mSectionValue;
    private $_pageName;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue = new SectionValue();
        $this->_pageName = "aboutUs";
    }


    /**
     * | For the first section 
     * | Completed
        | Serial no : 01
     */
    public function sectionUpdate1(Request $req)
    {
        $req->validate([
            'section1'  => 'required',
            'value1'    => 'nullable|',
            'value2'    => 'nullable'
        ]);

        try {
            # Update the page contents 
            $section = array();

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section1,
                    "value"         => $actualFileName,
                    "type"          => "image"
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
        ]);

        try {
            $section = array();

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section3,
                    "value"         => $actualFileName,
                    "type"          => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section3,
                    "value"         => $req->value2,
                    "type"          => "content"
                ];
                array_push($section, $second);
            }


            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->SaveValue($sections, $this->_pageName);
                }
            }
            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    /**
     * | Section 4
     */
    public function sectionUpdate4(Request $req)
    {
        $req->validate([
            'section4'  => 'required',
            'value1'    => 'nullable',
            'value2'    => 'nullable',
        ]);

        try {
            $section = array();

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section4,
                    "value"         => $actualFileName,
                    "type"          => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section4,
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
     * | Section 5
     */
    public function sectionUpdate5(Request $req)
    {
        $req->validate([
            'section5'  => 'required',
            'value1'    => 'nullable',
            'value2'    => 'nullable',

            'value3'    => 'nullable',
            'value4'    => 'nullable'
        ]);

        try {
            $section = array();

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section5,
                    "value"         => $actualFileName,
                    "type"          => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section5,
                    "value"         => $req->value2,
                    "type"          => "content"
                ];
                array_push($section, $second);
            }


            // second section
            if ($req->hasFile('value3') && $req->value3) {
                $file = $req->file('value3');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section5,
                    "value"         => $actualFileName,
                    "type"          => "image2"
                ];
                array_push($section, $first);
            }

            if (isset($req->value4)) {
                $second = [
                    "sectionName"   => $req->section5,
                    "value"         => $req->value4,
                    "type"          => "content2"
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



    public function sectionUpdate6(Request $req)
    {
        $req->validate([
            'section6'  => 'required',
            'value1'    => 'nullable',
            'value2'    => 'nullable',

            'value3'    => 'nullable',
            'value4'    => 'nullable',

            'value5'    => 'nullable',
            'value6'    => 'nullable'
        ]);

        try {
            $section = array();

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section6,
                    "value"         => $actualFileName,
                    "type"          => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section6,
                    "value"         => $req->value2,
                    "type"          => "content"
                ];
                array_push($section, $second);
            }


            // second section
            if ($req->hasFile('value3') && $req->value3) {
                $file = $req->file('value3');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section6,
                    "value"         => $actualFileName,
                    "type"          => "image2"
                ];
                array_push($section, $first);
            }

            if (isset($req->value4)) {
                $second = [
                    "sectionName"   => $req->section6,
                    "value"         => $req->value4,
                    "type"          => "content2"
                ];
                array_push($section, $second);
            }


            // third section
            if ($req->hasFile('value5') && $req->value5) {
                $file = $req->file('value5');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section6,
                    "value"         => $actualFileName,
                    "type"          => "image3"
                ];
                array_push($section, $first);
            }

            if (isset($req->value6)) {
                $second = [
                    "sectionName"   => $req->section6,
                    "value"         => $req->value6,
                    "type"          => "content3"
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
}
