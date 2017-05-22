<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>chats/sendmessage">Send Message</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<small><?php echo $item['create_date']; ?></small>
			<hr />
			<p><?php echo $item['message']; ?></p>
                        <br/>
		</div>
	<?php endforeach; ?>
</div>
