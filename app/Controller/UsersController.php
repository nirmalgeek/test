<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add','setPassword','view');
     }
    
    public function index(){
        
    }
    public function add(){
        App::uses('CakeEmail', 'Network/Email');
        if($this->request->is('post'))
        {
            //print_r($this->request->data);
            $this->request->data["User"]["username"]=$this->validateString(trim($this->request->data["email"]));
            $user=$this->User->find('first',array(
                'conditions'=>array('User.username'=>$this->request->data["User"]["username"]),
                'recursive'=>-1
            ));
            if(empty($user))
            {
                $this->request->data["User"]["name"]=$this->validateString(trim($this->request->data["name"]));
                $this->request->data["User"]["user_type"]="User";
                $this->request->data["User"]["register_type"]="Email";
                if ($this->Auth->loggedIn())
                {
                    $this->request->data["User"]["created_by"]=$this->Auth->user("id");
                }
                $this->request->data["User"]["created_date"]=date('Y-m-d H:i:s');
                
                $generate_id = $this->User->query("Select CONCAT(MD5('".$this->request->data["User"]["username"]."'), UNIX_TIMESTAMP(NOW())-1315931278, SUBSTRING(MD5(RAND()) FROM 6 FOR 2)) as id");
                $this->request->data["User"]["key_hash"]=$generate_id[0][0]['id'];
                $saveData=$this->User->save($this->request->data);
                if($saveData)
                {
                    $this->request->data["Brand"]["user_id"]=$saveData["User"]["id"];                
                    $this->request->data["Brand"]["brand_name"]=$this->validateString(trim($this->request->data["brand"]));
                    $this->request->data["Brand"]["website"]=$this->validateString(trim($this->request->data["website"]));
                    $this->request->data["Brand"]["phone"]=$this->validateString(trim($this->request->data["phoneno"]));
                    $this->request->data["Brand"]["platform_interested_in"]=implode(",",$this->request->data["topic"]);
                    $this->request->data["Brand"]["created_date"]=date('Y-m-d H:i:s');
                    $this->loadModel('Brand');
                    $saveData=$this->Brand->save($this->request->data);
                    if($saveData)
                    {
                        $Email = new CakeEmail();
                        $Email->from(array('info@socilio.com' => 'Socilio'));
                        $Email->to($this->request->data["User"]["username"]);
                        $Email->subject('User Verification');
                        $Email->viewVars(array("name"=>$this->request->data["User"]["name"],"link"=>$this->request->data["User"]["key_hash"]));
                        $Email->template('setPassword');
                        $Email->emailFormat('html');
                        $Email->send();
                        $this->Session->setFlash(' Your profile has been created. Please check your email to verify your profile.', 'flashMessages'. DIRECTORY_SEPARATOR. 'flash_success');                        
                    }
                    else{
                        $this->Session->setFlash(" Profile could not be created.", 'flashMessages'.DIRECTORY_SEPARATOR.'flash_error');
                    }
                }
                else{
                    $this->Session->setFlash(" Profile could not be created.", 'flashMessages'.DIRECTORY_SEPARATOR.'flash_error');
                }
            }
            else{
                $this->Session->setFlash(" User already registered.", 'flashMessages'.DIRECTORY_SEPARATOR.'flash_error');
            }
        }
        $jss=array('add.validate.js');
         $this->set(compact('jss'));
    }
    
    public function login()
    {
        $this->layout = 'loginLayout';
        if($this->request->is('post'))
        {
            if($this->Auth->login()){
                $this->redirect(array('controller' => 'users', 'action' => 'index'));
            }
            else{
                $this->Session->setFlash('<div class="text-right" style="color:#E04A39; padding-bottom: 5px;"><strong>Invalid  username or password</strong></div>');
            }
        }
    }
    
    public function setPassword($key = NULL){
        $this->layout = 'loginLayout';
        $user=$this->User->find('all',array(
            'conditions'=>array('User.key_hash'=>$key),
            'recursive'=>-1
        ));
        if(count($user)!=1){
            //$this->redirect(array('controller' => 'users', 'action' => 'login'));
            echo $key." - is empty";
        }
        else{
            if($this->request->is('post')){
                $userData=$user[0];
                $data["id"]=$userData["User"]["id"];
                $data["password"]=trim($this->request->data["User"]["password"]);
                $data["key_hash"]=NULL;
                $savedata=$this->User->save($data);
                $this->redirect(array('controller' => 'users', 'action' => 'login'));
            }
        }
        $this->set(compact('key'));
    }
    
    public function logout()
    {
        //return $this->redirect($this->Auth->logout());
        $this->Auth->logout();
        $this->redirect(array('controller' => 'users', 'action' => 'login'));
            
    }
    public function view(){
        $this->loadModel('Brand');
        $users=$this->Brand->find('all', 
        array(
          'fields' => array('User.id', 'User.name','User.status','Brand.brand_name','Brand.platform_interested_in'),
          'recursive'=>0
        ));
        $this->set(compact('users'));
        $this->loadModel('Category');
        $categories=$this->Category->find('all', 
        array(
          'fields' => array('Category.id', 'Category.CategoryName'),
          'recursive'=>0
        ));
        $this->set(compact('categories'));
        
    } 
    
    
    private function validateString($string){
        return htmlspecialchars($string,ENT_QUOTES,'UTF-8');
    }
}