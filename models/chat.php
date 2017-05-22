<?php
class ChatModel extends Model{
    public function Index(){
		$this->query('SELECT * FROM chats ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
    }
    
    public function sendmessage(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['message'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO chats (message, user_id) VALUES(:message, :user_id)');
			$this->bind(':message', $post['message']);
			$this->bind(':user_id', 1);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'chats');
			}
		}
		return;
	}
}


