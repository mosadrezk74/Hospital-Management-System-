<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InsurenceApiController extends Controller
{
    use ApiResponseTrait;

    public function index(){

        $insurances = PostResource::collection(Insurance::get());
        return $this->apiResponse($insurances,'ok',200);
    }

    public function show($id){

        $insurances = Insurance::find($id);

        if($insurances){
            return $this->apiResponse(new PostResource($insurances),'ok',200);
        }
        return $this->apiResponse(null,'The post Not Found',404);

    }
    #############################################
    #############################################
    #############################################

    public function store(Request $request){


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'insurance_code' =>  ['required' ,'integer'],
            'discount_percentage' => ['required' ,'integer'],
            'status' => 'required',
            'Company_rate' => ['required' ,'integer'],

        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(),400);
        }


        $insurances = Insurance::create($request->all());
        if($insurances){
            return $this->apiResponse(new PostResource($insurances),'The $insurances Save',201);
        }

        return $this->apiResponse(null,'The $insurances Not Save',400);
    }



    public function update(Request $request , $id){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'insurance_code' =>  ['required' ,'integer'],
            'discount_percentage' => ['required' ,'integer'],
            'status' => 'required',
            'Company_rate' => ['required' ,'integer'],

        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(),400);
        }

        $insurances=Insurance::find($id);
        $insurances->update($request->all());

        if($insurances){
            return $this->apiResponse(new PostResource($insurances),'The post update',201);
        }

        if(!$insurances){
            return $this->apiResponse(null,'The post Not Found',404);
        }

        return $this->apiResponse(new PostResource($insurances),'The post update',201);

    }

    public function destroy($id)
    {

        $insurances = Insurance::find($id);

        if (!$insurances) {

            return $this->apiResponse(null, 'The post Not Found', 404);

        }

        $insurances->delete($id);

        if ($insurances) {

            return $this->apiResponse(null, 'The post deleted', 200);

        }
    }


    }





