<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GroupDocumentTags Controller
 *
 * @property \App\Model\Table\GroupDocumentTagsTable $GroupDocumentTags
 */
class GroupDocumentTagsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['GroupDocuments', 'Tags']
        ];
        $this->set('groupDocumentTags', $this->paginate($this->GroupDocumentTags));
        $this->set('_serialize', ['groupDocumentTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Group Document Tag id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupDocumentTag = $this->GroupDocumentTags->get($id, [
            'contain' => ['GroupDocuments', 'Tags']
        ]);
        $this->set('groupDocumentTag', $groupDocumentTag);
        $this->set('_serialize', ['groupDocumentTag']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupDocumentTag = $this->GroupDocumentTags->newEntity();
        if ($this->request->is('post')) {
            $groupDocumentTag = $this->GroupDocumentTags->patchEntity($groupDocumentTag, $this->request->data);
            if ($this->GroupDocumentTags->save($groupDocumentTag)) {
                $this->Flash->success(__('The group document tag has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The group document tag could not be saved. Please, try again.'));
            }
        }
        $groupDocuments = $this->GroupDocumentTags->GroupDocuments->find('list', ['limit' => 200]);
        $tags = $this->GroupDocumentTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('groupDocumentTag', 'groupDocuments', 'tags'));
        $this->set('_serialize', ['groupDocumentTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Group Document Tag id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupDocumentTag = $this->GroupDocumentTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupDocumentTag = $this->GroupDocumentTags->patchEntity($groupDocumentTag, $this->request->data);
            if ($this->GroupDocumentTags->save($groupDocumentTag)) {
                $this->Flash->success(__('The group document tag has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The group document tag could not be saved. Please, try again.'));
            }
        }
        $groupDocuments = $this->GroupDocumentTags->GroupDocuments->find('list', ['limit' => 200]);
        $tags = $this->GroupDocumentTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('groupDocumentTag', 'groupDocuments', 'tags'));
        $this->set('_serialize', ['groupDocumentTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Group Document Tag id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupDocumentTag = $this->GroupDocumentTags->get($id);
        if ($this->GroupDocumentTags->delete($groupDocumentTag)) {
            $this->Flash->success(__('The group document tag has been deleted.'));
        } else {
            $this->Flash->error(__('The group document tag could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
