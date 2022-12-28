<?php 

Trait Controller
{
    public function view($name)
    {
        $filename = "../app/View/" . $name . ".view.php";
        if(file_exists($filename))
        {
            require $filename;
        } else {
            $filename = "../app/View/404.view.php";
            require $filename;
        }
    }

}