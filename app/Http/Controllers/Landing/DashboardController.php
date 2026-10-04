<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\File;
use App\Models\MultiService;
use App\Models\SectionValue;
use App\Models\seoTable;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    private $mSectionValue;
    private $mseoTable;
    private $mDestination;

    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->mseoTable = new seoTable();
        $this->mDestination = new Destination();
    }


    /**
     * | Get and render Dasboard details 
     * | Get the details from the db and render the dashboard 
        | Serial No : 01
        | Working
        | 6 section`
     */
    public function index()
    {
        $pageName = "landingPage";                                              // Static put in config
        $newArray = array();
        $mMultiService = new MultiService();
        $testimonial = new Testimonial();
        $destination    = $this->mDestination->getDestination()->where('status', 1)->get();
        $metaData       = $this->mseoTable->getSeoByPage("homePage")->first();
        $pageData       = $this->mSectionValue->getDataForPage($pageName)->get();
        // $littleIns      = File::where("file_type", "photo")->get();
        $littleIns      = File::where(['file_type' => 'photo' , 'infofor' => 'LIH'])->get();
        // $fileDataPhoto = $mFile::where(['file_type' => 'photo' , 'infofor' => 'LID'])->get();
        $multipleServices = MultiService::where("status", 1)->where("view_home", 1)->get();
        $testimonials = Testimonial::all();
        //dd($testimonials);
        $listServices   = $mMultiService->getAll()->where("status", 1);

        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/home", [
            "pageData"      => new \SafePageData($newArray),
            "meta"          => $metaData,
            "destination"   => $destination,
            "listServices"  => $listServices,
            "liImage"   => $littleIns,
            "multipleServices" => $multipleServices,
             "testimonials" =>  $testimonials
        ]);
    }


    public function blogDetail()
    {
        return view("pages/blog-detail",);
    }
    
    public function  payonlinebill()
    {
        return view("pages/pay-online-bill",);
        //return view("payment/success",);
        
    }


    /**
     * | Get Destination details and render it 
     * | Destination detials only
        | Serial No : 02
        | Under con
     */
    public function aboutUs()
{
    $pageName = "aboutUs"; // fixed page name
    $newArray = array();

    // Get SEO data
    $metaData = $this->mseoTable->getSeoByPage("aboutUs")->first();

    // Get all section values for the "aboutUs" page
    $pageData = $this->mSectionValue->getDataForPage($pageName)->get();

    // Build a key-value array like: section6image2 => some value
    foreach ($pageData as $pageDatas) {
        $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
        $newArray[$newKey] = $pageDatas->value;
    }

    // Return view with both formatted and raw data
    return view("pages/about-us", [
        "pageData" => new \SafePageData($newArray),   // 👉 for quick access by keys
        "meta" => $metaData,       // 👉 your SEO data
        "rawData" => $pageData     // 👉 full record for foreach loops
    ]);
}


    /**
     * | Get detials and view Our services 
     * | Services details only 
        | Serial No : 03
        | Under Con 
     */
    public function ourDestination()
    {
        $pageName = "ourDestination";                                              // Static put in config
        $newArray = array();
        $metaData = $this->mseoTable->getSeoByPage("destination")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        $destinations = $this->mDestination->getDestination()->where('status', 1)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/our-destination", [
            "pageData" => new \SafePageData($newArray),
            "meta" => $metaData,
            "designations" => $destinations
        ]);
    }

    /**
     * | Get the destials for the little inpiration page 
        | Serial No : 04
        | Under Con
     */
    public function littileInspiration()
    {
        $mFile = new File();
        $pageName = "little_inspiration";                                              // Static put in config
        $newArray = array();
        $metaData = $this->mseoTable->getSeoByPage("experiences")->first();
        $fileDataPhoto = $mFile::where(['file_type' => 'photo' , 'infofor' => 'LID'])->get();
        $fileDataVideo = $mFile::where('file_type', "video")->get();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/littile-inspiration", [
            "pageData" => new \SafePageData($newArray),
            "tourData" => $fileDataPhoto,
            "videoData1" => $fileDataVideo->first(),
            "videoData" => collect($fileDataVideo)->slice(1)->all(),
            'meta' => $metaData
        ]);
    }


    /**
     * | Get the details for the our services page 
        | Serial No : 05
        | Under Con 
     */
    public function ourServic()
    {
        $pageName = "ourServices";                                              // Static put in config
        $newArray = array();
        $mMultiServices = new MultiService();
        $multiServies = $mMultiServices->getAll()->where("status", 1)->where("view_home", 0);

        $metaData = $this->mseoTable->getSeoByPage("services")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/our-service", [
            "pageData" => new \SafePageData($newArray),
            "meta" => $metaData,
            "multiServices" => $multiServies
        ]);
    }

    /**
     * | Get the details for the responsible travel page 
        | Serial No : 06
        | Under Con 
     */
    public function responsibleTravel()
    {
        $pageName = "responsible_travels";                                              // Static put in config
        $newArray = array();
        $metaData = $this->mseoTable->getSeoByPage("travel")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/responsible-travel", [
            "pageData" => new \SafePageData($newArray),
            "meta" => $metaData
        ]);
    }

    /**
     * | Get the blog page details and view it 
        | Serial No : 07
        | Under Con
        | Not used
     */
    public function blogs()
    {
        $pageName = "blogs";                                              // Static put in config
        $newArray = array();
        $metaData = $this->mseoTable->getSeoByPage("homePage")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/blogs", [
            "pageData" => new \SafePageData($newArray),
            "meta" => $metaData
        ]);
    }


    public function privacyPolicy()
    {
        return view("pages/privacy-policy");
    }


    /**
     * | Get the details and view the contact us page 
        | Serial no :
        | Under Con 
     */
    public function contactUs()
    {
        $pageName = "contact";                                              // Static put in config
        $newArray = array();
        $metaData = $this->mseoTable->getSeoByPage("contact")->first(); 
        return view("pages/contact-us", [
            "meta" => $metaData
        ]);
        // return view("pages/contact-us");
    }


    public function thankYou()
    {
        return view("pages/thank-you");
    }
}
