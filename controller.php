<?php
require_once "ad.php";
require_once "view.php";
require_once "mysql.php";

class controller 
{
    private View $view;
    private MySql $mysql;

    public function __construct() 
    {
        $this->view = new View();
        $this->mysql = new MySql();
    }

    public function get() 
    {
        $this->view->renderAds($this->mysql->getAds(), $this->mysql->getCategories());
    }

    public function post() 
    {
        if (empty($_POST["title"]) || empty($_POST["email"]) || empty($_POST["description"]) || empty($_POST['category'])) 
        {
            echo "Error!";
            return;
        }

        $this->mysql->saveAd(new ad($_POST["email"], $_POST['category'], $_POST["title"], $_POST["description"]));
        $this->view->renderAds($this->mysql->getAds(), $this->mysql->getCategories());
    }
}  