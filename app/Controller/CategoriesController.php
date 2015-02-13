<?php
//App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
  public $components = array('Paginator');
    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add','setPassword');
		$this->Auth->allow('edit','setPassword');
		$this->Auth->allow('delete','setPassword');
     }
    
    public function index(){
        
    }
    
    public function add(){
        if($this->request->is('post'))
        {
            $this->request->data["Category"]["categoryname"]=$this->validateString(trim($this->request->data["name"]));
            $saveData=$this->Category->save($this->request->data);
            if($saveData)
            {
               $this->Session->setFlash('  Category is added.', 'flashMessages'. DIRECTORY_SEPARATOR. 'flash_success');       
            }
        }
		$categories=$this->Category->find('all');
		$this->set(compact('categories'));
		$jss=array('add.validate.js');
         $this->set(compact('jss'));
    }
	 public function edit(){
	$categories=$this->Category->find('all');
			$this->set(compact('categories'));
			
			//print_r($helo);
        if($this->request->is('post'))
        {
           $this->request->data["Category"]["Id"]=$this->validateString(trim($this->request->data["Category_id"]));
		   $this->request->data["Category"]["categoryname"]=$this->validateString(trim($this->request->data["Category_ame"]));
            $saveData=$this->Category->save($this->request->data);
            if($saveData)
            {
                  $this->Session->setFlash('  Category is edited.', 'flashMessages'. DIRECTORY_SEPARATOR. 'flash_success');  
            }
           
			$categories=$this->Category->find('all');
			$this->set(compact('categories'));
			$jss=array('add.validate.js');
			$this->set(compact('jss'));
        }
		
		
    }
		public function delete(){
	$categories=$this->Category->find('all');
			$this->set(compact('categories'));
			
			//print_r($helo);
        if($this->request->is('post'))
        {
           $this->request->data["Category"]["Id"]=$this->validateString(trim($this->request->data["Category_id1"]));
			$this->Category->delete($this->request->data["Category"]["Id"]);
			$categories=$this->Category->find('all');
			$this->set(compact('categories'));
			$jss=array('add.validate.js');
			$this->set(compact('jss'));
        }
		
		
    }
	private function validateString($string){
       return htmlspecialchars($string,ENT_QUOTES,'UTF-8');
   }
}
