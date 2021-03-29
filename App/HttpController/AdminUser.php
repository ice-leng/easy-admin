<?php

namespace App\HttpController;

use EasySwoole\HttpAnnotation\AnnotationTag\Api;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiDescription;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiFail;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiGroup;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiGroupDescription;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiSuccess;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiSuccessParam;
use EasySwoole\HttpAnnotation\AnnotationTag\InjectParamsContext;
use EasySwoole\HttpAnnotation\AnnotationTag\Method;
use EasySwoole\HttpAnnotation\AnnotationTag\Param;
use EasySwoole\HttpAnnotation\Swagger\Annotation\ApiSuccessTemplate;
use EasySwoole\Skeleton\Framework\BaseController;

/**
 * AdminUser
 * Class AdminUser
 * Create With ClassGeneration
 * @ApiGroup(groupName="/Api/Admin.AdminUser")
 * @ApiGroupDescription("测试")
 */
class AdminUser extends BaseController
{

    /**
     * @Api(name="教员端发现提现", path="/client/v1/user/member/list", description="教员端发现提现")
     * @Method(allow={GET,POST})
     * @Param(name="type", alias= "", defaultValue=1, inArray={1, 2, 3})
     * @Param(name="lat")
     * @Param(name="lot")
     * @Param(name="subject_ id")
     * @Param(name="page", defaultValue="1")
     * @Param(name="size", defaultValue="20")
     * @ApiSuccessTemplate(template="page", result={
     *      "a|这是一个测试": 1,
     *      "b|第二个测试": "1"
     *    })
     */
    public function test()
    {
        $this->success([]);
    }


//    /**
//     * @Api(name="add",path="/Api/Admin/AdminUser/add/{abc}", deprecated=true,)
//     * @ApiDescription("新增数据")
//     * @Method(allow={GET,POST})
//     * @InjectParamsContext(key="param")
//     * @ApiSuccessParam(name="code",description="状态码")
//     * @ApiSuccessParam(name="result",description="api请求结果")
//     * @ApiSuccessParam(name="msg",description="api提示信息")
//     * @ApiSuccess({"code":200,"result":[],"msg":"新增成功"})
//     * @ApiFail({"code":400,"result":[],"msg":"新增失败"})
//     * @Param(name="adminName",alias="昵称",description="昵称",lengthMax="32",required="")
//     * @Param(name="adminAccount",alias="账号",description="账号",lengthMax="32",required="")
//     * @Param(name="adminPassword",alias="密码",description="密码",lengthMax="32",required="")
//     */
//    public function add()
//    {
//
//    }


    /**
     * @Api(name="update",path="/Api/Admin/AdminUser/update")
     * @ApiDescription("更新数据")
     * @Method(allow={GET,POST})
     * @InjectParamsContext(key="param")
     * @ApiSuccessParam(name="code",description="状态码")
     * @ApiSuccessParam(name="result",description="api请求结果")
     * @ApiSuccessParam(name="msg",description="api提示信息")
     * @ApiSuccess({"code":200,"result":[],"msg":"更新成功"})
     * @ApiSuccessTemplate(template="page", result={
     *      "a|这是一个测试": 1,
     *      "b|第二个测试": "1"
     *    })
     * @ApiFail({"code":400,"result":[],"msg":"更新失败"})
     * @Param(name="adminId",alias="id",description="id",required="")
     * @Param(name="adminName",alias="昵称",description="昵称",lengthMax="32",optional="")
     * @Param(name="adminAccount",alias="账号",description="账号",lengthMax="32",optional="")
     * @Param(name="adminPassword",alias="密码",description="密码",lengthMax="32",optional="")
     */
    public function update()
    {

    }


    /**
     * @Api(name="getOne",path="/Api/Admin/AdminUser/getOne")
     * @ApiDescription("获取一条数据")
     * @Method(allow={GET,POST})
     * @InjectParamsContext(key="param")
     * @ApiSuccessParam(name="code",description="状态码")
     * @ApiSuccessParam(name="result",description="api请求结果")
     * @ApiSuccessParam(name="msg",description="api提示信息")
     * @ApiSuccess({"code":200,"result":[],"msg":"获取成功"})
     * @ApiFail({"code":400,"result":[],"msg":"获取失败"})
     * @Param(name="adminId",alias="id",description="id",required="")
     * @ApiSuccessParam(name="result.adminId",description="id")
     * @ApiSuccessParam(name="result.adminName",description="昵称")
     * @ApiSuccessParam(name="result.adminAccount",description="账号")
     * @ApiSuccessParam(name="result.adminPassword",description="密码")
     * @ApiSuccessParam(name="result.addTime",description="创建时间")
     * @ApiSuccessParam(name="result.lastLoginTime",description="上次登陆的时间")
     * @ApiSuccessParam(name="result.lastLoginIp",description="上次登陆的Ip")
     * @ApiSuccessParam(name="result.adminSession",description="")
     */
    public function getOne()
    {

    }


    /**
     * @Api(name="getList",path="/Api/Admin/AdminUser/getList")
     * @ApiDescription("获取数据列表")
     * @Method(allow={GET,POST})
     * @InjectParamsContext(key="param")
     * @ApiSuccessParam(name="code",description="状态码")
     * @ApiSuccessParam(name="result",description="api请求结果")
     * @ApiSuccessParam(name="msg",description="api提示信息")
     * @ApiSuccess({"code":200,"result":[],"msg":"获取成功"})
     * @ApiFail({"code":400,"result":[],"msg":"获取失败"})
     * @Param(name="page", from={GET,POST}, alias="页数", optional="")
     * @Param(name="pageSize", from={GET,POST}, alias="每页总数", optional="")
     * @ApiSuccessParam(name="result[].adminId",description="id")
     * @ApiSuccessParam(name="result[].adminName",description="昵称")
     * @ApiSuccessParam(name="result[].adminAccount",description="账号")
     * @ApiSuccessParam(name="result[].adminPassword",description="密码")
     * @ApiSuccessParam(name="result[].addTime",description="创建时间")
     * @ApiSuccessParam(name="result[].lastLoginTime",description="上次登陆的时间")
     * @ApiSuccessParam(name="result[].lastLoginIp",description="上次登陆的Ip")
     * @ApiSuccessParam(name="result[].adminSession",description="")
     */
    public function getList()
    {

    }


    /**
     * @Api(name="delete",path="/Api/Admin/AdminUser/delete")
     * @ApiDescription("删除数据")
     * @Method(allow={GET,POST})
     * @InjectParamsContext(key="param")
     * @ApiSuccessParam(name="code",description="状态码")
     * @ApiSuccessParam(name="result",description="api请求结果")
     * @ApiSuccessParam(name="msg",description="api提示信息")
     * @ApiSuccess({"code":200,"result":[],"msg":"新增成功"})
     * @ApiFail({"code":400,"result":[],"msg":"新增失败"})
     * @Param(name="adminId",alias="id",description="id",required="")
     */
    public function delete()
    {

    }
}

