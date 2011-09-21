<?php

class MyhomeController extends Zend_Controller_Action
{

    public function init()
    {
		
    }

    public function indexAction()
    {
    	// calculate comment vote score
    	$this->view->commentScore = $this->calculateCommentScore();
    	
    	// calculate concept connection votes score
    	$this->view->tagScore = $this->calculateTagScore();
    	
    }
    
    public function calculateCommentScore(){
        // get all user's comments
        $comments = Doctrine::getTable("Comment")
                    ->findByDql("author_id = ? AND run_id = ?", array($_SESSION['author_id'], $_SESSION['run_id']));
        
        $commentIds = array();
        foreach ($comments as $comment){
            $commentIds[] = $comment->id;
        }
        
        if (count($comments) == 0){
            return 0;
        }
        
        // sum up all the votes for the user comments found
        $votes = Doctrine_Query::create()
                    ->select("sum(vote_value) as vote_sum")
                    ->from("Vote")
                    ->whereIn("obj_id", $commentIds)
                    ->andWhere("obj_type = ?", Votable::$COMMENT)
                    ->execute();
                    
        return $votes[0]['vote_sum'];
    }
    
    public function calculateTagScore(){
        
    }

    public function preferencesAction()
    {
        
    }
    
    public function classlistAction()
    {
        $this->view->students = Doctrine::getTable("User")->findByDql("user_type = 'STUDENT' AND run_id = ".$_SESSION["run_id"]);
    }

}

