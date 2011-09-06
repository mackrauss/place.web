<?php

class Student_ExampleController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function showAction(){
        $examples = Doctrine::getTable("Examples")->findAll(Doctrine::HYDRATE_ARRAY);
        
        $this->view->myExamples = $examples;
    }
    
    public function addformAction(){
    	// get concepts data from db
    	
    	// using fixed concepts array in config.php
    	//global $PLACEWEB_CONFIG;
    	require(APPLICATION_PATH.'/configs/config.php');
    	
    	//print_r($PLACEWEB_CONFIG['fConcepts']);
    	
    	$this->view->fConcepts = $PLACEWEB_CONFIG['fConcepts'];
    }
    
    public function addAction(){
        $params = $this->getRequest()->getParams();
        
        echo "Params: <hr/>";
        var_dump($params);
        echo "<hr/>";
      
        $example = new Examples();
        $example->run_id = 1;
        $example->author_id = 3;
        $example->name = $params['example_name'];
        $example->content = "My example content";
        $example->save();
        
        //$this->view->newExample = $example;
        
        $this->view->newExample = "";
    }


}

