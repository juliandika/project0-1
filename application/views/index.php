

<html>
<head>
	<title>Printing Online</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap.min.css">
	<style type="text/css">
		body{
			background: url(<?= base_url()?>/images/imageLogin.jpg) fixed;
			-webkit-background-size:cover;
			-moz-background-size: cover;
			-o-background-size: cover;
		}

		.panel-default {
            opacity: 0.9;
            }
            .form-group.last { margin-bottom:0px; }
            .vcenter {
                vertical-align: middle;
                float: none;
                margin-top:40px;
            }
	</style>
</head>
<body>
			<?=form_open('auth/cek_login', ['class'=>'form-horizontal'])?>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="username">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox"> Remember me
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Sign in</button>
			    </div>
			  </div>
			</form>

</body>
</html>
