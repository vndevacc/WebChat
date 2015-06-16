<?php

/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/14/2015
 * Time: 1:09 PM
 */

require_once('../smarty/Smarty.class.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . '/smarty/Smarty.class.php');
//require_once('Smarty.class.php');

class Template extends Smarty

{
    function __construct($html_name)
    {
        parent::__construct();

        $this->error_reporting = E_ALL & ~E_NOTICE;

        $this->setTemplateDir("../view/template");

        $this->setCompileDir("../view_c");

        $this->assign('content', $html_name);

    }

    public function render()
    {
        $this->display("../view/template/template.tpl");
    }

    public function renderPage()
    {
        $this->display("../view/template/page.tpl");
    }

    public function getHtml()
    {
        return $this->fetch("../view/template/page.tpl");
    }


}

