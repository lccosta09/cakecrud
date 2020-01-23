<?php
App::uses('AppController', 'Controller');
/**
 * Tasks Controller
 *
 * @property Task $Task
 * @property PaginatorComponent $Paginator
 */
class TasksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Task->recursive = 0;
		$this->set('tasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Task->exists($id)) {
			throw new NotFoundException('Tarefa inválida');
		}
		$options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
		$this->set('task', $this->Task->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Task']['created_at'] = date('Y-m-d H:i:s');
			$this->Task->create();
			if ($this->Task->save($this->request->data)) {
				$this->Flash->success('Tarefa salva com sucesso');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('Não foi possível salvar a tarefa');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Task->exists($id)) {
			throw new NotFoundException(__('Invalid task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Task->save($this->request->data)) {
				$this->Flash->success('Tarefa salva com sucesso');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('Não foi possível salvar a tarefa');
			}
		} else {
			$options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
			$this->request->data = $this->Task->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Task->exists($id)) {
			throw new NotFoundException(__('Invalid task'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Task->delete($id)) {
			$this->Flash->success('Tarefa excluída com sucesso');
		} else {
			$this->Flash->error('Não foi possível excluir a tarefa');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
