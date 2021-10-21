
<?php echo form_open('users/login'); ?>
	<div class="row align-items-center">
		<div class="col-sm-4 offset-sm-4">
			<br>
			<h2 class="text-center"><?php echo $title; ?></h2>
			<br>
			<div class="form-group">
			 <span class="input-group-text" id="basic-addon1">
			 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
				  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
				  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
				</svg>		
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus  aria-describedby="basic-addon1">
				</span>
			</div>
			<br>
			<div class="form-group">
				<span class="input-group-text" id="basic-addon1">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
				  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
				  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
				</svg>
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus aria-describedby="basic-addon1">
			</span>
			</div>
			<br>
			<button type="submit" class="btn btn-info btn-block">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>