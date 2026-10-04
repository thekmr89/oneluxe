<?php

namespace App\Http\Controllers;

use App\Models\seoTable;
use Illuminate\Http\Request;
use Exception;


class CollectionController extends Controller
{
    //


    public function viewDestination()
    {
        return view('admin.pages.add-destination');
    }


    public function viewSeo()
    {   
        
        $data1 = seoTable::where('page_name','homePage')->first(); 
        $data2 = seoTable::where('page_name','aboutUs')->first(); 
        $data3 = seoTable::where('page_name','services')->first(); 
        $data4 = seoTable::where('page_name','experiences')->first(); 
        $data5 = seoTable::where('page_name','travel')->first(); 
        $data6 = seoTable::where('page_name','destination')->first(); 
        $data7 = seoTable::where('page_name','contact')->first(); 
        
         
        return view('admin.pages.seo', compact('data1','data2','data3','data4','data5','data6','data7'));
    }


    public function saveSeo(Request $req)
    {
        $req->validate([
            'section'   => 'required',
            'section1Content'    => 'nullable|',
            'section2Content'    => 'nullable',
            'section3Content'    => 'nullable'

        ]);

        try {
            $mseoTable = new seoTable();
            if (isset($req->section1Content)) {
                $first["tittle"] = $req->section1Content;
            }
            if (isset($req->section2Content)) {
                $first["tag"] = $req->section2Content;
            }
            if (isset($req->section3Content)) {
                $first["description"] = $req->section3Content;
            }


            if (!empty($first) || isset($first)) {
                $mseoTable->saveSeo($first,$req);
            }
            $responseMsg = $req->section . " SEO Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
