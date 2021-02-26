<?php

namespace app\controller;


use app\BaseController;
use app\Request;
use common\Utils;
use http\Client\Response;
use think\App;

class AuditInfo extends BaseController
{
    private $model;

    public function __construct(App $app)
    {
        parent::__construct($app);
        $this->model = new \model\AuditInfo();
    }

    public function Submit(Request $request)
    {
        $info["name"] = $request->param("name");
        $info["status"] = 0;  //0-未审核
        $this->model->Add($info);
        return Utils::SuccessResponse();
    }

    public function Get(Request $request)
    {
        $id = $request->param("id");
        $info = $this->model->GetOne($id);
        return Utils::SuccessResponse($info);
    }

    public function Del(Request $request)
    {
        $id = $request->param("id");
        $this->model->Del($id);
        return Utils::SuccessResponse();
    }

    public function Update(Request $request)
    {
        $info["id"] = $request->param("id");
        $info["name"] = $request->param("name");
        $info["status"] = $request->param("status");
        $this->model->Update($info);
        return Utils::SuccessResponse();
    }
}