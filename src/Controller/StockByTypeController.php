<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StockByType Controller
 *
 * @property \App\Model\Table\StockByTypeTable $StockByType
 *
 * @method \App\Model\Entity\StockByType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StockByTypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProductTypes'],
        ];
        $stockByType = $this->paginate($this->StockByType);

        $this->set(compact('stockByType'));
    }

    /**
     * View method
     *
     * @param string|null $id Stock By Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stockByType = $this->StockByType->get($id, [
            'contain' => ['ProductTypes'],
        ]);

        $this->set('stockByType', $stockByType);
    }
}
