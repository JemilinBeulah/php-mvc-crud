<?php
class Chats extends Controller{ 
    protected function Index(){
		$viewmodel = new ChatModel();
		$this->returnView($viewmodel->Index(), true);
	}

   protected function sendmessage(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'chats');
		}
		$viewmodel = new ChatModel();
		$this->returnView($viewmodel->sendmessage(), true);
	}
}

