<?php include '../php/admin-layout.php' ?>

<?php startblock('article') ?>
	<div class="well" >
		<a href="new.php" class="btn btn-lg" target="iframe">New Entry</a>
		<a href="edit.php" class="btn btn-lg" target="iframe">Edit/Update</a>
		<a href="delete.php" class="btn btn-lg" target="iframe">Delete</a>
		<a href="newbrand.php" class="btn btn-lg" target="iframe">New brand</a>
	</div>

   <iframe src="new.php" id="iframe" name="iframe" onload="setIframeHeight(this.id)" style="width:100%;border: 0;" scrolling="no"></iframe>
<?php endblock() ?>