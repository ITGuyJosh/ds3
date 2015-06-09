<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserDocumentTags Controller
 *
 * @property \App\Model\Table\UserDocumentTagsTable $UserDocumentTags
 */
class UserDocumentTagsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserDocuments', 'Tags']
        ];
        $this->set('userDocumentTags', $this->paginate($this->UserDocumentTags));
        $this->set('_serialize', ['userDocumentTags']);
    }

    /**
     * View method
     *
     * @param string|null $id User Document Tag id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userDocumentTag = $this->UserDocumentTags->get($id, [
            'contain' => ['UserDocuments', 'Tags']
        ]);
        $this->set('userDocumentTag', $userDocumentTag);
        $this->set('_serialize', ['userDocumentTag']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userDocumentTag = $this->UserDocumentTags->newEntity();
        if ($this->request->is('post')) {
            $userDocumentTag = $this->UserDocumentTags->patchEntity($userDocumentTag, $this->request->data);
            if ($this->UserDocumentTags->save($userDocumentTag)) {
                $this->Flash->success(__('The user document tag has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user document tag could not be saved. Please, try again.'));
            }
        }
        $userDocuments = $this->UserDocumentTags->UserDocuments->find('list', ['limit' => 200]);
        $tags = $this->UserDocumentTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('userDocumentTag', 'userDocuments', 'tags'));
        $this->set('_serialize', ['userDocumentTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Document Tag id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userDocumentTag = $this->UserDocumentTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userDocumentTag = $this->UserDocumentTags->patchEntity($userDocumentTag, $this->request->data);
            if ($this->UserDocumentTags->save($userDocumentTag)) {
                $this->Flash->success(__('The user document tag has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user document tag could not be saved. Please, try again.'));
            }
        }
        $userDocuments = $this->UserDocumentTags->UserDocuments->find('list', ['limit' => 200]);
        $tags = $this->UserDocumentTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('userDocumentTag', 'userDocuments', 'tags'));
        $this->set('_serialize', ['userDocumentTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Document Tag id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userDocumentTag = $this->UserDocumentTags->get($id);
        if ($this->UserDocumentTags->delete($userDocumentTag)) {
            $this->Flash->success(__('The user document tag has been deleted.'));
        } else {
            $this->Flash->error(__('The user document tag could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
