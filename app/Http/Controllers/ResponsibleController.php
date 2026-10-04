<?php

namespace App\Http\Controllers;

use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;

class ResponsibleController extends Controller
{
    private $mSectionValue;
    private $_pageName;
    private $_noOfSections;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->_pageName = "responsible_travels";
        $this->_noOfSections = 3;
    }

    // Admin Responsible View Page
    public function viewResponsible()
    {
        $pageName = "responsible_travels";
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        $compacts = [
            'noOfSections' => $this->_noOfSections,
            'pageData' => $newArray
        ];
        return view('admin.pages.responsible-travel', $compacts);
    }

    // Update Section
    public function updateSections(Request $req)
    {
        if ($req->section == 1)
            return $this->updateSection1($req);
        if ($req->section == 2)
            return $this->updateSection2($req);
        if ($req->section == 3)
            return $this->updateSection3($req);
    }

    // Update Section 1
    private function updateSection1($req)
    {
        $req->validate([
            "section"  => "required",
            "section1Image"    => "nullable|file|",
            "section1Heading"    => "required|string",
            "section1Content"    => "required|string"
        ]);

        $section = array();
        try {
            if ($req->hasFile('section1Image') && $req->section1Image) {
                $file = $req->file('section1Image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing/section1";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->section1Heading)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->section1Heading,
                    "type"          => "heading"
                ];

                array_push($section, $second);
            }

            if (isset($req->section1Content)) {
                $third = [
                    "sectionName"   => $req->section,
                    "value"         => $req->section1Content,
                    "type"          => "content"
                ];
                array_push($section, $third);
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

    // Update Section 2
    private function updateSection2($req)
    {
        $req->validate([
            "section"  => "required",
            "section2Image"    => "nullable|image|",
            "section2Content"    => "nullable|string"
        ]);
        $section = array();
        try {
            if ($req->hasFile('section2Image') && $req->section2Image) {
                $file = $req->file('section2Image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing/section2";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->section2Content)) {
                $third = [
                    "sectionName"   => $req->section,
                    "value"         => $req->section2Content,
                    "type"          => "content"
                ];
                array_push($section, $third);
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

    // Update Section 3
    private function updateSection3($req)
    {
        $req->validate([
            "section"  => "required",
            "section3Image"    => "nullable|image|",
            "section3Image2"    => "nullable|image|",
            "section3Content"    => "required|string"
        ]);

        $section = array();
        try {
            if ($req->hasFile('section3Image') && $req->section3Image) {
                $file = $req->file('section3Image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . 'image1' . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing/section3";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"        => "image1"
                ];
                array_push($section, $first);
            }

            if ($req->hasFile('section3Image2') && $req->section3Image2) {
                $file = $req->file('section3Image2');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . 'image2' . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing/section3";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"        => "image2"
                ];
                array_push($section, $first);
            }

            if (isset($req->section3Content)) {
                $third = [
                    "sectionName"   => $req->section,
                    "value"         => $req->section3Content,
                    "type"          => "content"
                ];
                array_push($section, $third);
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
