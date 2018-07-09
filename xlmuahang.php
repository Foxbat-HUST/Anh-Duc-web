<?php
	if (isset($_SESSION['user'])){
	?>
    	<script>
			window.location.href = 'home.php?action=thongtinkhachhang';
		</script>
    <?php
	}else{
		?>
        	<script>
				alert ('ban chua dang nhap');
				window.location.href = 'home.php?action=giohang';
			</script>
        <?php
	}
		
?>