<html>
    <link href="http://www.discussdesk.com/view/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<div class="row">

 <div class="col-md-3"></div>

 <div class="col-md-6">
    <h2 align="center">HOME</h2>
    <h4 align="center">Welcome 
    <?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; echo '<a href=logout>logout</a>'; } else { echo "User"; }  ?>
    </h4>
    <form>
	<div class="table-responsive" >
    <table border="0" align="center" class="table" style="border:1px solid #333;"> 
        
        <tbody>
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Action</th>
        </tr>
        </tbody>  
           
    <?php
        $i=1;
    foreach($res as $row)
    {   ?>
         <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $row->name;?></td>
     <td><?php echo $row->email;?></td>
         <td><?php echo $row->password     ;?></td>
         <td><?php echo $row->mobile;?></td>
         <td><a href="<?php echo base_url();?>manage/update?editid=<?php echo $row->id; ?> ">Edit</a> | <a href="<?php echo base_url();?>manage/delete?deleteid=<?php echo $row->id;?>">Delete</a></td>
         </tr>
   <?php  $i++;} ?>
         <td colspan="6">
             <div align="center"><a href="<?php echo base_url();?>Registeration/">ADD</a></div></td>
  </table>
  </div>
  </form>
	<div align="center">
		<?php if(isset($_SESSION['username'])) { ?> 
			<a href="<?php echo base_url();?>logout">Logout</a>
		<?php } else { ?> 
			<a href="<?php echo base_url();?>login">login</a>
		<?php  }  ?>	
	</div>
	</div>
<div class="col-md-3"></div>
	</div>
    
</html>
