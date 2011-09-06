<?php

class Student_HomeController extends Zend_Controller_Action
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

