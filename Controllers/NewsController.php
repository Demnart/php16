<?php


class NewsController
{


    public function actionAll()
    {
        $items = NewsModel::findALL();
        $view = new View();
        $view->items = $items;
        $view->display('news/all.php');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = NewsModel::findOneByPK($id);
        $view = new View();
        $view->item = $item;
        $view->display('news/one.php');
    }
}