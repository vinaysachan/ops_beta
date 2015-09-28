


<h2 class="boxHeadline">Index View</h2>




<pre>
<?php 
echo 'Admin Home Page';
        print_r($this->session->userdata('admin_user')); 
        

echo anchor(base_url('admin/other'), 'Other Page', array('title' => 'LogOut by Admin Panel'));



	echo anchor(base_url('admin/logout'), 'LogOut', array('title' => 'LogOut by Admin Panel'));


 

?>

</pre>
Page rendered in <strong>{elapsed_time}</strong> seconds