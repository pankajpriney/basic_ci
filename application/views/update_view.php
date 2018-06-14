<html>
<link href="http://www.discussdesk.com/view/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<div class="row">

 <div class="col-md-3"></div>

 <div class="col-md-6">
    <form method="POST" action="<?php echo base_url();?>manage/updated_data" >
	<div class="table-responsive" >
    <table border="0" align="center" class="table" style="border:1px solid #333;">
    <caption>Registration Form</caption>
        <tr><td>Name</td><td><input type="text" value="<?php if($res){echo $res[0]->name;}?>" name="name"/></td></tr><br/>
		<tr><td>Email</td><td><input type="email" value="<?php if($res){echo $res[0]->email;}?>" name="email"/></td></tr><br/>
        <tr><td>Password</td><td><input type="password" value="<?php if($res){echo $res[0]->password;}?>" name="password"/></td></tr><br/>
        <tr><td>Mobile</td><td><input type="text" value="<?php if($res){echo $res[0]->mobile;}?>" name="mobile"/></td></tr><br/>
		<tr align='center'><td colspan="2"><input type="submit" name="update" value="Update" class="btn btn-success btn-block marginbt20"/></td></tr>
    </table>
        <input type="hidden" name="upid" value="<?php if($res){echo $res[0]->id;}?>"/>
       <!-- <div align='center'><a href="<?php echo base_url()?>index.php/admin/admin/manage">Cancel</a></div>-->
		</div>
</form>
</div>
<div class="col-md-3"></div>
	</div>

</html>
