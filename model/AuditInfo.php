<?php


namespace model;


class AuditInfo
{
    public function Add($info)
    {
        DB::connection("default")->table("")->insert($info);
    }

    public function Update($info)
    {
        DB::connection("default")->table("")->save($info);
    }

    public function Del($id)
    {
        DB::connection("default")->table("")->where("id", $id)->update(["status"=> 1]);
    }

    public function GetOne($id)
    {
        return DB::connection("default")->table("")->where("id", $id)->findOrEmpty();
    }

    public function GetList($where)
    {
        return DB::connection("default")->table("")->where($where)->select()->toArray();
    }
}