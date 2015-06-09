<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserDocuments Controller
 *
 * @property \App\Model\Table\UserDocumentsTable $UserDocuments
 */
class UserDocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Documents']
        ];
        $this->set('userDocuments', $this->paginate($this->UserDocuments));
        $this->set('_serialize', ['userDocuments']);
    }

    /**
     * View method
     *
     * @param string|null $id User Document id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userDocument = $this->UserDocuments->get($id, [
            'contain' => ['Users', 'Documents', 'UserDocumentTags']
        ]);
        $this->set('userDocument', $userDocument);
        $this->set('_serialize', ['userDocument']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userDocument = $this->UserDocuments->newEntity();
        if ($this->request->is('post')) {
            $userDocument = $this->UserDocuments->patchEntity($userDocument, $this->request->data);
            if ($this->UserDocuments->save($userDocument)) {
                $this->Flash->success(__('The user document has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user document could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserDocuments->Users->find('list', ['limit' => 200]);
        $documents = $this->UserDocuments->Documents->find('list', ['limit' => 200]);
        $this->set(compact('userDocument', 'users', 'documents'));
        $this->set('_serialize', ['userDocument']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Document id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userDocument = $this->UserDocuments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userDocument = $this->UserDocuments->patchEntity($userDocument, $this->request->data);
            if ($this->UserDocuments->save($userDocument)) {
                $this->Flash->success(__('The user document has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user document could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserDocuments->Users->find('list', ['limit' => 200]);
        $documents = $this->UserDocuments->Documents->find('list', ['limit' => 200]);
        $this->set(compact('userDocument', 'users', 'documents'));
        $this->set('_serialize', ['userDocument']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Document id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userDocument = $this->UserDocuments->get($id);
        if ($this->UserDocuments->delete($userDocument)) {
            $this->Flash->success(__('The user document has been deleted.'));
        } else {
            $this->Flash->error(__('The user document could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
