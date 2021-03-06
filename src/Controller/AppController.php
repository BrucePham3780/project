<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginAction'=> [
                'controller' => 'Customers',
                'action' => 'login', 
                
            ],
            'authenticate' =>[
                'Form' => [
                    'fields' =>[
                        'username'=>'email'
                    ]
                ]
                
            ],
            'logoutRedirect'=> [
                'controller' => 'Customers',
                'action' => 'index', 
                
            ] 

        ]);
        // $this->Auth->allow();

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $user1 = $this->Auth->user();
        $this->set('user1',$user1);

        $cartTbl = TableRegistry::get("Cart");
        $cartList = $cartTbl->find('all', [
            'condition' => ['Cart.user_id' => $user1['id']],
            'contain' => ['Products','Users']
            
        ]);
        
        $cartTbl = TableRegistry::get("Cart");
        $cartList = $cartTbl->find('all', [
            'condition' => ['Cart.user_id' => $user1['id']],
            'contain' => ['Products','Users']
            
        ]);
        $count = $cartList->count();
        $this->set('cartList',$cartList);
        $this->set('count',$count);


        $ordersTbl = TableRegistry::get("Orders");
        // pr($ordersTbl);die;
        $ordersList = $ordersTbl->find('all', [
            'contain' => ['Users']
        ]);
        $countOrders = $ordersList->count();
        $this->set('ordersList',$ordersList);
        $this->set('countOrders',$countOrders);
        

        // if($user1 && $user1['role_id'] != '1' ){
        //     $cont = $this->request->controller;
        //     $act = $this->request->action;
        //     $a = Configure::read('acl'.$cont.$act);
        //     in_array($a,$user1['role_id']);
        // }    
        
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

        // Login Check
            if($this->request->session()->read('Auth.User')){
                $this->set('loggedIn', true);   
            } else {
                $this->set('loggedIn', false); 
            }
    }


}
