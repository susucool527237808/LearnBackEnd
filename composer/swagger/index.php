<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/23
 * Time: 17:07
 */
namespace myswagger;
use Ramsey\Uuid\Uuid;

require 'vendor/autoload.php';

/**
 * 假设是项目中的一个API
 *
 * @SWG\Get(path="/swagger/my-data",
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

$uuid1 = Uuid::uuid1();
echo json_encode($uuid1,200);
