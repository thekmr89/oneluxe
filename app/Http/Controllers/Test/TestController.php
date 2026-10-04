<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

/**
 * | Created On : 15-05-2024
 * | Created By : 
 * | Used to test the operation of the controllers or to test codes
 */

class TestController extends Controller
{
    // Initializing Construct Function 
    public function __construct()
    {
    }


    /**
     * | Testing the view connection 
        | Serial No : 01
        | Under Con
     */
    public function testVersion()
    {
        try{
            return view("first");
        }
        catch(Exception $e)
        {
            // return view("error");
        }
    }
}
