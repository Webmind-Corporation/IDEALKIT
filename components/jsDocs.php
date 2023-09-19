<!-- <script src="<?php # echo findPath($root, "cities.js") ?>"></script> -->
<script src="<?php echo findPath($root, "default.js") ?>"></script>
<?php if ($page["pageRef"] == "home") { ?>
	<script src="<?php echo findPath($root, "home.js") ?>"></script>
<?php }
if ($page["pageRef"] == "login") { ?>
	<script src="<?php echo findPath($root, "login.js") ?>"></script>
<?php } ?>
<script src="<?php echo findPath($root, "responsive.js") ?>"></script>