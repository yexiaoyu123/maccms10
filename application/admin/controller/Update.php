<?php
// 注意：修改此文件后，需同步更新 application/extra/version.php 中的 update_hash 值
// update_hash = md5_file('application/admin/controller/Update.php')
namespace app\admin\controller;
use think\Db;
use app\common\util\PclZip;

class Update extends Base
{
    var $_url;
    var $_save_path;

    protected function onlineUpdateDisabled()
    {
        return $this->error('在线更新已禁用，请使用经过审核的离线升级包');
    }
    public function __construct()
    {
        parent::__construct();
        //header('X-Accel-Buffering: no');

        $this->_url = base64_decode("aHR0cHM6Ly91cGRhdGUubWFjY21zLmxhLw==")."v10/";
        $this->_save_path = './application/data/update/';
    }

    public function index()
    {
        return $this->onlineUpdateDisabled();
    }

    public function step1($file = '')
    {
        return $this->onlineUpdateDisabled();
    }

    public function step2()
    {
        return $this->onlineUpdateDisabled();
    }

    public function step3()
    {
        return $this->onlineUpdateDisabled();
    }
}
