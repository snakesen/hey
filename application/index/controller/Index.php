<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
//    public function index()
//    {
//        return $this->hello();
//    }
//
//    protected function hello2()
//    {
//        return 'protect';
//    }
//
//    private function hello1()
//    {
//        return 'private1';
//    }

    public function hello()
    {
        $data = Db::name('data')->find();
        $this->assign('result',$data);
        return $this->fetch();
    }
}
