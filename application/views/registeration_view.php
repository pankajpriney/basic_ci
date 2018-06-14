<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form method="POST" action="<?php echo base_url();?>registeration/register" >
			<div class="table-responsive" >
				<table border="0" align="center" class="table" style="border:1px solid #333;">
					<tr><td>Name</td><td><input type="text" name="name" class="form-control" required/></td></tr>
					<tr><td>Email</td><td><input type="email" name="email" class="form-control" required/></td></tr>
					<tr><td>Password</td><td><input type="password" name="password" class="form-control" required/></td></tr>
					<tr><td>Mobile</td><td><input type="text" name="mobile" class="form-control" required/></td></tr>
					<tr  align='center'><td colspan="2"><input type="submit" name="register" value="Register" class="btn btn-success btn-block marginbt20"/></td></tr>
				</table>
			</div>	
			</form>
	</div>
	<div class="col-md-3"></div>
	<div align="center"><a href="<?php echo base_url();?>login">login</a></div>
    
</div>

    
</html>
