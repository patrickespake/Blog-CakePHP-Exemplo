<?php
    class PostsController extends AppController {
        var $name = 'Posts';
        var $components = array('Session');
        
        function index() {
            $this->set('posts', $this->Post->find('all'));
        }
        
        function view($id = null) {
            $this->Post->id = $id;
            $this->set('post', $this->Post->read());
        }
        
        function add() {
            if (!empty($this->data)) {
                if ($this->Post->save($this->data)) {
                    $this->Session->setFlash('Seu post foi salvo.');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
        
        function delete($id) {
            $this->Post->delete($id);
            $this->Session->setFlash('O post com id: ' . $id . ' foi excluído.');
            $this->redirect(array('action' => 'index'));
        }
        
        function edit($id = null) {
            $this->Post->id = $id;
            
            if (empty($this->data)) {
                $this->data = $this->Post->read();
            } else {
                if ($this->Post->save($this->data)) {
                    $this->Session->setFlash('Seu post foi atualizado.');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
    }
?>
