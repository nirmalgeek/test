<?php
App::uses('AppController', 'Controller');
/**
 * Missions Controller
 *
 */
class MissionsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
  public $components = array('Paginator');
    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add','setPassword');
		
     }
    
    public function index(){
        
    }
	public function add(){
	
		if($this->request->is('post'))
        {
            $this->request->data["Mission"]["MissionName"]=$this->validateString(trim($this->request->data["mission_name"]));
			$this->request->data["Mission"]["Description"]=$this->validateString(trim($this->request->data["Description"]));
			$this->request->data["Mission"]["DemoURL"]=$this->validateString(trim($this->request->data["demo_url"]));
			$this->request->data["Mission"]["VideoURL"]=$this->validateString(trim($this->request->data["video_url"]));
            $saveData=$this->Mission->save($this->request->data);
            if($saveData)
            {
              $this->Session->setFlash('  Mission is added.', 'flashMessages'. DIRECTORY_SEPARATOR. 'flash_success');   
            }
			
        }
		$jss=array('add.validate1.js');
			$this->set(compact('jss'));
	}
	private function validateString($string){
       return htmlspecialchars($string,ENT_QUOTES,'UTF-8');
   }

}
