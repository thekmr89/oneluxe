<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;

class LIController extends Controller
{
    private $mSectionValue;
    private $pageName;
    //
    public function __construct()
    {
        $this->mSectionValue = new SectionValue();
        $this->pageName = 'little_inspiration';
    }
    public function littleView()
    {
        $pageName = "little_inspiration";
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        $files = File::findByPageName($this->pageName);
        $tourPhotos = collect($files)->where('file_type', 'photo');
        $tourVideos = collect($files)->where('file_type', 'video');

        return view('admin.pages.little-inspiration', [
            'photos' => $tourPhotos,
            'videos' => $tourVideos,
            'pageData' => $newArray ?? null
        ]);
    }

    // 
    public function updateSection(Request $req)
    {
        if ($req->section == 1)
            return $this->updateSection1($req);
        // if ($req->section == 2)
        //     return $this->updateSection2($req);
    }

    // Update section 1
    private function updateSection1($req)
    {
        $req->validate([
            "section1Heading"    => "nullable|string",
            "section1Content"    => "nullable|string",
            "hero-image"         => "nullable"
        ]);

        $section = array();
        try {
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


            if ($req->hasFile('heroImage') && $req->heroImage) {
                $file = $req->file('heroImage');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "Image"
                ];
                array_push($section, $first);
            }


            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $this->pageName);
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
            "section2Content"    => "required|string"
        ]);
        $section = array();
        try {
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
                    $this->mSectionValue->updateValues($sections, $this->pageName);
                }
            }

            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    // Upload Image or Video
    public function uploadFile(Request $req)
    {
        $req->validate([
            'tourfile'    => 'required|file',
            'placeholderImage'    => 'nullable|image',
            'title'  => 'required',
            'description'    => 'required',
            'infofor'    => '',
            'fileType' => 'required|In:photo,video'
        ]);

        try {
            $actualImageName = null;
            $file = $req->file('tourfile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . rand(10, 100) . "." . $extension;
            $viewPath = "uploads/little";
            $path = public_path() . "/" . $viewPath;
            $file->move($path, $filename);
            $actualFileName = $viewPath . "/" . $filename;

            if (isset($req->placeholderImage)) {
                $image = $req->file('placeholderImage');
                $extension = $image->getClientOriginalExtension();
                $imageName = time() . rand(10, 100) . "." . $extension;
                $path = public_path() . "/" . $viewPath;
                $image->move($path, $imageName);
                $actualImageName = $viewPath . "/" . $imageName;
            }

            $fileReq = [
                'file_path' => $actualFileName,
                'file_type' => $req->fileType,
                'title' => $req->title,
                'description' => $req->description,
                'page_name' => 'little_inspiration',
                'placeholder_image_path' => $actualImageName,
                'infofor'=> $req->infofor
            ];
            File::create($fileReq);
            return back()->with('success', "Tour Successfully Created");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function editFile($id)
    {
        $file = File::findOrFail($id);
        return view('admin.pages.edit-file', ['file' => $file]);
    }

    // 
    public function editFileProcess(Request $req, $id)
    {
        $req->validate([
            'tourfile'    => 'nullable|file|max:20120',
            'placeholderImage'    => 'nullable|image|max:5120',
            'title'  => 'required',
            'description'    => 'required',
        ]);
        try {
            $fileReq = [
                'file_type' => $req->fileType,
                'title' => $req->title,
                'description' => $req->description,
                'page_name' => 'little_inspiration',
            ];

            if (isset($req->tourFile)) {
                $actualImageName = null;
                $file = $req->file('tourfile');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/little";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;
                $fileReq['file_path'] = $actualFileName;
            }

            if (isset($req->placeholderImage)) {
                $image = $req->file('placeholderImage');
                $extension = $image->getClientOriginalExtension();
                $imageName = time() . rand(10, 100) . "." . $extension;
                $path = public_path() . "/" . $viewPath;
                $image->move($path, $imageName);
                $actualImageName = $viewPath . "/" . $imageName;
                $fileReq['placeholder_image_path'] = $actualImageName;
            }

            File::find($id)->update($fileReq);;
            return redirect('littleView')->with('success', "Tour Updated Successfully");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    // Delete file
    public function deleteFile($id)
    {
        $file = File::findOrFail($id);
        $file->delete();
        return back()->with('success', "File deleted Successfully");
    }
}
