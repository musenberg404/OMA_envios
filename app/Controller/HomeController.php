<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('Role','Model');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class HomeController extends AppController {

	public $uses=array('User','Company');


    public function beforeFilter() {
	 	parent::beforeFilter();
	 	$this->Auth->allow();
    }	

    //Genera un cadena de 10 digitos aleatoria
    public function generateRandomString($length = 10) { 
	    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
	}

	public function giveToken(){
		$this->autoRender = false;
		//Obtenemos el email del usuario logueado
		//$email = $this->Auth->user('email');
		//Obtenemos el password del usuario logueado
		//$password = $this->Auth->user('password');
		
		$this->log("Generando token",'logEnvios');
		
		$success=0;
		//Llamada a funcion que retorna el token
		$token = $this->generateRandomString(20);
		$data = Array(
			"token" => $token
		);
		
		//Obtenemos el ID del usuario logueado
		$id = $this->Auth->user('id');
		//Se asigna token al usuario especifico.
		$success=$this->User->updateAll(
		    array('User.token' => "'".$token."'"),
		    array('User.id' => $id)
		);				

		return $token;
	}

	public function index(){
		$this->set('title_for_layout', 'OMA Envios | Tu Distribuidor');

		if($this->Auth->user()){

			$user=$this->User->find('first',array(
					'conditions' => array(
							'User.id' => $this->Auth->user('id')
					),
					'recursive' => -1,
					'fields' => array('User.name','User.last_name')
			));
			
			$this->set(compact('user'));

		}
	}

	public function login(){
		$this->set('title_for_layout', 'OMA Envios | Login');
	}


	public function verifyLogin(){
		$autoRender=false;

		$this->log("Iniciando sesion",'logEnvios');

		$success=0;
		$email=$this->request->data['email'];
		$password=$this->request->data['pass'];

		$user = $this->User->find("first", array(
			"conditions" => array(
				"User.email" => $email, 
				)
		));

		if(count($user)>0){
			$password=Security::hash($password,'md5');

			if ($user["User"]["password"]==$password) {
				$success=1;
				$user=$user['User'];
				
				$this->log("Inicio de sesion exitoso",'logEnvios');

				unset($user["password"]);
				$this->Session->write('Auth.User', $user);
			}else {
				$user = array();
				$success = -2;
			}
		}else{
			$user = array();
			$success = -1;
		}
		if($success > 0) {
			$this->redirect('/admin');
		} else {
			$this->Flash->danger('El usuario o la contraseña son inválidos. Por favor, inténtelo nuevamente', array(
			    'key' => 'positive'));
			
			$this->log("Error en inicio: El usuario o la contraseña son invalidos",'logEnvios');

			$this->redirect(array('action' => 'login'));
		}
	}

	public function saveRegistry() {
		$this->autoRender=false;

		$success=0;
		$dataToCreate=array();
		$this->log("Iniciando registro",'logEnvios');


		$name=$this->request->data['name'];
		$last_name=$this->request->data['last_name'];
		$email=$this->request->data['email'];
		$pass=$this->request->data['pass'];
		$company_name=$this->request->data['company_name'];
		$rif=$this->request->data['rif'];
		$description=$this->request->data['description'];
		$zip_code=$this->request->data['zip_code'];

		$user=$this->User->find('first',array(
			'conditions' => array('User.email' => $this->request->data['email']),
			'recursive' => -1
		));

		if(!$user) {
			$pass=Security::hash($pass,'md5');

			$dataToCreate=array(
				'User' => array(
					'name' => $name,
					'last_name' => $last_name,
					'email' => $email,
					'password' => $pass,
					'role_id' => Role::EMPRESA
				),
				'Company' => array(
					'company_name' => $company_name,
					'rif' => $rif,
					'description' => $description,
					'zip_code' => $zip_code		
				)
				
			);

			$success=$this->User->saveAll($dataToCreate);

			if ($success) {
				$user=$this->User->find('first',array(
					'conditions' => array('User.email' => $this->request->data['email']),
					'recursive' => -1
				));

				$this->log("Registro exitoso",'logEnvios');

				$user=$user['User'];
				unset($user['password']);				
				$this->Session->write('Auth.User', $user);
				$token=$this->giveToken();	


			}

		}else{
			$success=-1;
		}

		if($success){
			$this->Flash->success('Usuario registrado correctamente', array(
			    'key' => 'positive'));

			$this->log("Error en registro: Usuario registrado correctamente",'logEnvios');

			$this->redirect(array('controller' => 'administrators', 'action' => 'index'));
		}elseif($success=-1) {
			$this->Flash->danger('Ya existe el correo introducido', array(
			    'key' => 'positive'));

			$this->log("Error en registro: Ya existe el correo introducido",'logEnvios');

			$this->redirect(array('action' => 'login'));
		}else{
			$this->Flash->danger('Ha ocurrido un error, intentelo nuevamente', array(
			    'key' => 'positive'));

			$this->log("Error en registro: Ha ocurrido un error",'logEnvios');

			$this->redirect(array('action' => 'login'));			
		}


	}

		
	public function logout(){
		$this->autoRender = false;

		$this->log("Cerrando sesion",'logEnvios');

		$this->Session->delete('Auth.User');
		$this->Session->destroy();

		$this->redirect(array('controller'=>'home', 'action'=>'index'));
	}


}