<?php
class Bsgit_Observerexample_Model_Observer {

    public function send_email($observer) {
               
        Mage::log('Observer example');
    }

}
