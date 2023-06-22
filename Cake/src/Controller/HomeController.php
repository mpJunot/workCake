<?php
namespace App\Controller;
class HomeController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('myLayout');
        $test = "MA VARIABLE";
        $this->set('test', $test);
    }
    public function methode()
    {
        $this->viewBuilder()->setLayout('myLayout');
        $test = "MA VARIABLE";
        $this->set('test', $test);
    }
}
?>