<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use Cake\Controller\Controller;



class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'finder' => 'auth'
                ]
            ],
        ]);

        $this->set('username',$this->Auth->user('username'));
        $this -> Auth -> allow(['login','add']);   
    }

}
