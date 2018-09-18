<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwaggerController extends Controller
{

    /**
     * 返回JSON格式的Swagger定义
     *
     * 这里需要一个主`Swagger`定义：
     * @SWG\Swagger(
     *   @SWG\Info(
     *     title="我的`Swagger`API文档",
     *     version="1.0.0"
     *   )
     * )
     */
    public function getJSON()
    {
//        var_dump(app_path('Http/Controllers'));die;
//        $swagger = \Swagger\scan(app_path('Http/Controllers'));
        $swagger = \Swagger\scan("F:\WWW\LearnBackEnd\composer\laravel-swagger\blog\app\Http/Controllers");
        return response()->json($swagger,200);
    }

    /**
     * 假设是项目中的一个API
     *
     * @SWG\Get(path="/composer/laravel-swagger/blog/public/swagger/my-data",
     *   tags={"project"},
     *   summary="拿一些神秘的数据",
     *   description="请求该接口需要先登录。",
     *   operationId="getMyData",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="reason",
     *     type="string",
     *     description="拿数据的理由",
     *     required=true,
     *   ),
     *   @SWG\Response(response="default", description="操作成功")
     * )
     */
    public function getMyData()
    {
        $return = array('code'=>200);
        return response()->json($return,200);
    }

}
