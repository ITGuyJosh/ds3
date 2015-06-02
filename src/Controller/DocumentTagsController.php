<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DocumentTags Controller
 *
 * @property \App\Model\Table\DocumentTagsTable $DocumentTags
 */
class DocumentTagsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Documents', 'Tags']
        ];
        $this->set('documentTags', $this->paginate($this->DocumentTags));
        $this->set('_serialize', ['documentTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Document Tag id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentTag = $this->DocumentTags->get($id, [
            'contain' => ['Documents', 'Tags']
        ]);
        $this->set('documentTag', $documentTag);
        $this->set('_serialize', ['documentTag']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentTag = $this->DocumentTags->newEntity();
        if ($this->request->is('post')) {
            $documentTag = $this->DocumentTags->patchEntity($documentTag, $this->request->data);
            if ($this->DocumentTags->save($documentTag)) {
                $this->Flash->success(__('The document tag has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The document tag could not be saved. Please, try again.'));
            }
        }
        $documents = $this->DocumentTags->Documents->find('list', ['limit' => 200]);
        $tags = $this->DocumentTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('documentTag', 'documents', 'tags'));
        $this->set('_serialize', ['documentTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Document Tag id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentTag = $this->DocumentTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentTag = $this->DocumentTags->patchEntity($documentTag, $this->request->data);
            if ($this->DocumentTags->save($documentTag)) {
                $this->Flash->success(__('The document tag has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The document tag could not be saved. Please, try again.'));
            }
        }
        $documents = $this->DocumentTags->Documents->find('list', ['limit' => 200]);
        $tags = $this->DocumentTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('documentTag', 'documents', 'tags'));
        $this->set('_serialize', ['documentTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Document Tag id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentTag = $this->DocumentTags->get($id);
        if ($this->DocumentTags->delete($documentTag)) {
            $this->Flash->success(__('The document tag has been deleted.'));
        } else {
            $this->Flash->error(__('The document tag could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
