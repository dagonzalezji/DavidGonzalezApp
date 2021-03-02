<?php

namespace App\Controller\Admin;

class PrincipalController extends AppController{

    public function home()
    {
       $this -> viewBuilder()->setLayout('Principal');
       $this -> loadModel('Reports');
       $reports = $this -> Reports -> find('all');
       $this -> set('reports', $reports);
    } 

    public function index()
    {
       $this -> viewBuilder()->setLayout('Principal');
    }

}