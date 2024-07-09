<p>You should be logged in any moment. If not, click the button below:</p>
<form id="complete-form" action="<?php echo $_['redirect_uri'] ?>" method="POST">
	<input type="hidden" name="challenge" value="<?php echo $_['complete_token'] ?>" />
	<button type="submit">Complete Login</button>
</form>
<script><?php echo $_['complete_script']; ?></script>
