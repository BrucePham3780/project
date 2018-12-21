<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;
use Facebook;
/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */


class CustomersController extends AppController
{


    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow();
        //$this->Auth->allow(['index','manyProduct','cart','product','register']);

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('customers');

        $result = $this->loadModel('products');
        $data= $result->find();
        $this->set('product',$data);
        $result1 =$this->loadModel('category');
        $data1 = $result1->find();
        $this->set('category',$data1);

    }


    public function register(){
        $this->viewBuilder()->setLayout('customers');
        $userTbl = TableRegistry::get("Users");
        $user2 = $userTbl->newEntity();   
        $rs = $this->request->getData('Register');
        $hasher = new DefaultPasswordHasher;
        if ($this->request->is('post')) {
            // pr($rs);die;
            if(!empty($this->request->data['images']['name']))
            {

                $filename = $this->request->data['images']['name'];
                $uploadpath = 'img/';
                $uploadfile =  $uploadpath.$filename;
                if(move_uploaded_file($this->request->data['images']['tmp_name'], $uploadfile)){

                    $this->request->data['images']= $filename;
                }

            }else{
                $this->Flash->error(__('No file choosen'));
            }
            $user2->role_id = 3; 
            $user2 = $userTbl->patchEntity($user2,$rs);
            $user2->password = $hasher->hash($user2->password);
            if ($userTbl->save($user2)) {
                $this->Flash->success(__('The product has been saved.'));
                $this->Auth->setUser($user2->toArray());
                // pr($user2->toArray());pr( $this->Auth->user());
                return $this->redirect(['controller'=>'customers','action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
            
        }
        $this->set(compact('user2'));
        $this->set('_serialize',['user2']);

        
    }

    //login
    public function login(){
        $this->autoRender = false;
        if($this->request->is('post')){

            $user1 = $this->Auth->identify();
            $perm = $user1['role_id'];
            if($perm == '1' || $perm == '2'){
                if($user1){
                    $this->Auth->setUser($user1);
                    return $this->redirect(['controller' => 'products', 'action'=>'index' ]);
                }
            }
            else{
                if($user1){
                    $this->Auth->setUser($user1);
                    return $this->redirect(['controller' => 'customers', 'action'=>'index' ]);
                }
            }

            // Bad login
            $this->Flash->error('Incorrect Login');
            return $this->redirect(['controller'=> 'customers','action'=>'index']);

        }
    }

    public function loginFb(){
        $this->autoRender = false;  
        require_once ROOT . DS. 'vendor/autoload.php'; // change path as needed
        // require_once(ROOT . DS. 'vendor' . DS  . 'facebook' .  DS . 'graph-sdk' . DS . 'src' . DS . 'Facebook'. DS . 'Facebook.php');


        $fb = new Facebook\Facebook([
            'app_id' => '2130049550350356', // Replace {app-id} with your app id
            'app_secret' => '7fc8a2955c4c4dba955e74c3fd01374b',
            'default_graph_version' => 'v2.2',
        ]);
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email']; // Optional permissions
        $loginUrl = $helper->getLoginUrl(['https://project.com/customers/fb-callback'], $permissions);

        echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
    }

    public function fbCallback(){

        require_once ROOT . DS. 'vendor/autoload.php'; // change path as needed
        // require_once(ROOT . DS . 'vendor' . DS  . 'facebook' .  DS . 'graph-sdk' . DS . 'src' . DS . 'Facebook'. DS . 'Facebook.php');
        $fb = new Facebook\Facebook([
          'app_id' => '2130049550350356', // Replace {app-id} with your app id
          'app_secret' => '7fc8a2955c4c4dba955e74c3fd01374b',
          'default_graph_version' => 'v2.2',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (! isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
        } else {
            header('HTTP/1.0 400 Bad Request');
            echo 'Bad request';
        }
        exit;
        }

        // Logged in
        echo '<h3>Access Token</h3>';
        var_dump($accessToken->getValue());

        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();

        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        echo '<h3>Metadata</h3>';
        var_dump($tokenMetadata);

        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('{app-id}'); // Replace {app-id} with your app id
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        if (! $accessToken->isLongLived()) {
          // Exchanges a short-lived access token for a long-lived one
          try {
            $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
            exit;
        }

        echo '<h3>Long-lived</h3>';
        var_dump($accessToken->getValue());
        }

        $_SESSION['fb_access_token'] = (string) $accessToken;

        // User is logged in with a long-lived access token.
        // You can redirect them to a members-only page.
        //header('Location: https://example.com/members.php');
    }


    //Logout
    public function logout() {
        $this->Auth->logout();
        $this->redirect(array('controller' => 'customers', 'action' => 'index'));
    }

    public function product($id = null)
    {
        $this->viewBuilder()->setLayout('customers');

        $result = $this->loadModel('products');

        $product = $result->get($id, [
            'contain' => ['Category']
        ]);
        $this->set('product', $product);

        $data= $result->find();
        $this->set('product2',$data);
    }

    public function manyProduct(){

        $this->viewBuilder()->setLayout('customers');

        $result = $this->loadModel('products');
        $product= $result->find();
        $this->set('product',$product);

        $result1 =$this->loadModel('category');
        $data1 = $result1->find();
        $this->set('category',$data1);
    }

    public function Cart(){
        $this->viewBuilder()->setLayout('customers');

        $user1 = $this->Auth->user();
        $cartTbl = TableRegistry::get("Cart");
        $cartList = $cartTbl->find('all', [
            'condition' => ['Cart.user_id' => $user1['id']],
            'contain' => ['Products','Users']

        ]);
        $this->set('cartList',$cartList);

    }

    public function Order()
    {
        $this->viewBuilder()->setLayout('customers');

        $user1 = $this->Auth->user();
        $orderTbl = TableRegistry::get("Order");
        $orderList = $orderTble->find('all', 
            ['condition' => ['Order.user_id' => $user1['id']],
            'contain' => ['Users']
        ]);        
        $this->set('orderList',$orderList);
    }  


}
