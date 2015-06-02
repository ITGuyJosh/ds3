<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Documents Controller
 *
 * @property \App\Model\Table\DocumentsTable $Documents
 */
class DocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('documents', $this->paginate($this->Documents));
        $this->set('_serialize', ['documents']);
    }

    /**
     * View method
     *
     * @param string|null $id Document id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => ['DocumentTags']
        ]);
        $this->set('document', $document);
        $this->set('_serialize', ['document']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $document = $this->Documents->newEntity();
        $tags = $this->Documents->DocumentTags->Tags->find("list");
        
        if ($this->request->is('post')) {
            $document = $this->Documents->patchEntity($document, $this->request->data);            
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The document could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('document', "tags"));
        $this->set('_serialize', ['document']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Document id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $document = $this->Documents->patchEntity($document, $this->request->data);
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The document could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('document'));
        $this->set('_serialize', ['document']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Document id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $document = $this->Documents->get($id);
        if ($this->Documents->delete($document)) {
            $this->Flash->success(__('The document has been deleted.'));
        } else {
            $this->Flash->error(__('The document could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
