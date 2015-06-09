<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GroupDocuments Controller
 *
 * @property \App\Model\Table\GroupDocumentsTable $GroupDocuments
 */
class GroupDocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups']
        ];
        $this->set('groupDocuments', $this->paginate($this->GroupDocuments));
        $this->set('_serialize', ['groupDocuments']);
    }

    /**
     * View method
     *
     * @param string|null $id Group Document id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupDocument = $this->GroupDocuments->get($id, [
            'contain' => ['Groups', 'GroupDocumentTags']
        ]);
        $this->set('groupDocument', $groupDocument);
        $this->set('_serialize', ['groupDocument']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupDocument = $this->GroupDocuments->newEntity();
        if ($this->request->is('post')) {
            $groupDocument = $this->GroupDocuments->patchEntity($groupDocument, $this->request->data);
            if ($this->GroupDocuments->save($groupDocument)) {
                $this->Flash->success(__('The group document has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The group document could not be saved. Please, try again.'));
            }
        }
        $groups = $this->GroupDocuments->Groups->find('list', ['limit' => 200]);
        $this->set(compact('groupDocument', 'groups'));
        $this->set('_serialize', ['groupDocument']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Group Document id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupDocument = $this->GroupDocuments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupDocument = $this->GroupDocuments->patchEntity($groupDocument, $this->request->data);
            if ($this->GroupDocuments->save($groupDocument)) {
                $this->Flash->success(__('The group document has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The group document could not be saved. Please, try again.'));
            }
        }
        $groups = $this->GroupDocuments->Groups->find('list', ['limit' => 200]);
        $this->set(compact('groupDocument', 'groups'));
        $this->set('_serialize', ['groupDocument']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Group Document id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupDocument = $this->GroupDocuments->get($id);
        if ($this->GroupDocuments->delete($groupDocument)) {
            $this->Flash->success(__('The group document has been deleted.'));
        } else {
            $this->Flash->error(__('The group document could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
