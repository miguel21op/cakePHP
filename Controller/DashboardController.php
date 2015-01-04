<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

class DashboardController extends AppController {
    
	public function admin_index() {
        
	    $start_date = date('Y-m-d', strtotime('today'));

		$this->loadModel('Payment');
		$this->Payment->recursive = -1;
       
        // todo o tempo
        $totReq = ClassRegistry::init('LegalCoverFamilyQuoteRequest')->find('count');
		 
        $this->Payment->virtualFields['total'] = 'SUM(Payment.valor)';
        
        $payYear = $this->Payment->find('all', array(
         'fields'=>'Payment.total',
          array('fields' => array('total')),
        		'conditions' =>array('Payment.pending'=>false,
        					'Payment.created <=' => $start_date,
        					'Payment.valor >'=>0)
        //'order' => array('Payment.created' => 'DESC'),
        //'limit'=>15
        ));
         //  Debugger::dump($total);
          // die();

         $valor=print_r($payYear[0]['Payment']['total'],true);
         $this->set('somaq',$valor);
         $this->set('recCount',$totReq);

	}

}

?>
