<?php

// Helper made by Sandeep Bara
// function for Static Message

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;

if (!function_exists("responseMsg")) {
    function responseMsg($status, $message, $data)
    {
        $response = ['status' => $status, "message" => $message, "data" => $data];
        return response()->json($response, 200);
    }
}

if (!class_exists("SafePageData")) {
    class SafePageData extends \ArrayObject
    {
        public function offsetGet(mixed $key): mixed
        {
            return $this->offsetExists($key) ? parent::offsetGet($key) : '';
        }
    }
}

/**
 * | Response Msg Version2 with apiMetaData
 */
if (!function_exists("responseMsgs")) {
    function responseMsgs($status, $msg, $data, $apiId = null, $version = null, $queryRunTime = null, $action = null, $deviceId = null)
    {
        return response()->json([
            'status' => $status,
            'message' => $msg,
            'meta-data' => [
                'apiId' => $apiId,
                'version' => $version,
                'responsetime' => responseTime(),
                'epoch' => Carbon::now()->format('Y-m-d H:i:m'),
                'action' => $action,
                'deviceId' => $deviceId
            ],
            'data' => $data
        ]);
    }
}

/**
 * | To through Validation Error
 */
if (!function_exists("validationError")) {
    function validationError($validator)
    {
        return responseMsg(false, 'Validation Error', $validator->errors()->all());
    }
}


if (!function_exists("print_var")) {
    function print_var($data = '')
    {
        echo "<pre>";
        print_r($data);
        echo ("</pre>");
    }
}

if (!function_exists("objToArray")) {
    function objToArray(object $data)
    {
        $arrays = $data->toArray();
        return $arrays;
    }
}

if (!function_exists("remove_null")) {
    function remove_null($data, $encrypt = false, array $key = ["id"])
    {
        $collection = collect($data)->map(function ($name, $index) use ($encrypt, $key) {
            if (is_object($name) || is_array($name)) {
                return remove_null($name, $encrypt, $key);
            } else {
                if ($encrypt && (in_array(strtolower($index), array_map(function ($keys) {
                    return strtolower($keys);
                }, $key)))) {
                    return Crypt::encrypt($name);
                } elseif (is_null($name))
                    return "";
                else
                    return $name;
            }
        });
        return $collection;
    }
}

if (!function_exists("ConstToArray")) {
    function ConstToArray(array $data, $type = '')
    {
        $arra = [];
        $retuen = [];
        foreach ($data as $key => $value) {
            $arra['id'] = $key;
            if (is_array($value)) {
                foreach ($value as $keys => $val) {
                    $arra[strtolower($keys)] = $val;
                }
            } else {
                $arra[strtolower($type)] = $value;
            }
            $retuen[] = $arra;
        }
        return $retuen;
    }
}


if (!function_exists("floatRound")) {
    function floatRound(float $number, int $roundUpto = 0)
    {
        return round($number, $roundUpto);
    }
}



if (!function_exists("responseTime")) {
    function responseTime()
    {
        $responseTime = (microtime(true) - LARAVEL_START) * 1000;
        return round($responseTime, 2);
    }


    /**
     * | Convert YMD format to dmy
     */
    if (!function_exists("ymdToDmyDate")) {
        function ymdToDmyDate($date)
        {
            if (isset($date)) {
                $parsedDate = Carbon::parse($date)->format('d-m-Y');
                return $parsedDate;
            }
        }
    }


    /**
     * | Check if the floor have same usage types
     */
    if (!function_exists("isElementsSame")) {
        function isElementsSame($elements)
        {
            $firstElement = $elements->first();
            $same = true;
            foreach ($elements as $element) {
                if ($element != $firstElement) {
                    $same = false;
                    break;
                }
            }
            return $same;
        }
    }

    // checks if the number lies in between
    if (!function_exists('is_between')) {
        function is_between($number, $min, $max, $inclusive = true)
        {
            if ($inclusive)
                return $number >= $min && $number <= $max;
            else
                return $number > $min && $number < $max;
        }
    }



    /**
     * | Search Filter for Shop Rental Data
     */

    if (!function_exists("searchShopRentalFilter")) {
        function searchShopRentalFilter($orm, $req)
        {
            $key = trim($req->key);
            return $orm->where(function ($query) use ($key) {
                $query->orwhere('shop_no', 'ILIKE', '%' . $key . '%')
                    ->orwhere("allottee", 'ILIKE', '%' . $key . '%');
                // ->orwhere("vendor_name", 'ILIKE', '%' . $key . '%')
                // ->orwhere("toll_no", 'ILIKE', '%' . $key . '%');
            });
        }
    }



    /**
     * | Search Filter for Shop Rental Data
     */

    if (!function_exists("searchTollRentalFilter")) {
        function searchTollRentalFilter($orm, $req)
        {
            $key = trim($req->key);
            return $orm->where(function ($query) use ($key) {
                // $query->orwhere('shop_no', 'ILIKE', '%' . $key . '%')
                // ->orwhere("allottee", 'ILIKE', '%' . $key . '%');
                $query->orwhere("vendor_name", 'ILIKE', '%' . $key . '%')
                    ->orwhere("toll_no", 'ILIKE', '%' . $key . '%');
            });
        }
    }


    /**
     * | Api Response time for the the apis
     */

    if (!function_exists("paginator")) {
        function paginator($orm, $req)
        {
            $perPage = $req->perPage ? $req->perPage :  10;
            $paginator = $orm->paginate($perPage);
            return [
                "current_page" => $paginator->currentPage(),
                "last_page" => $paginator->lastPage(),
                "data" => $paginator->items(),
                "total" => $paginator->total(),
            ];
        }
    }


    /**
     * | All Data Filter According to Key
     */

    if (!function_exists("searchFilter")) {
        function searchFilter($orm, $req)
        {
            $key = trim($req->key);
            return $orm->where(function ($query) use ($key) {
                $query->orwhere('application_no', 'ILIKE', '%' . $key . '%')
                    ->orwhere("applicant", 'ILIKE', '%' . $key . '%')
                    // ->orwhere(DB::raw("TO_CHAR(application_date, 'DD/MM/YYYY')"), 'ILIKE', '%' . $key . '%')
                    ->orwhere("entity_name", 'ILIKE', '%' . $key . '%');
            });
        }
    }
}
