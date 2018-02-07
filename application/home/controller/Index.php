<?php
namespace app\home\controller;

class Index extends Base
{
    /**
     * 博客首页
     */
    public function index() {

        return $this->fetch();
    }

    /**
     * 说说页面
     */
    public function moodList() {

        return $this->fetch();
    }

    public function article() {

        return $this->fetch();
    }

    public function articleDetail() {

        return $this->fetch();
    }

    public function about() {

        return $this->fetch();
    }

    public function comment() {

        return $this->fetch();
    }


}
