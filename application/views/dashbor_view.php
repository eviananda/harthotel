	<header>Hai 
	<a href="<?php echo base_url('profil') ?>" title="Update profil">
    <?php echo ucfirst($this->session->userdata('username')); ?>
    </a> | 
    <a href="<?php echo base_url('index.php/Login/logout') ?>" title="Logout">Logout</a>
    </header>