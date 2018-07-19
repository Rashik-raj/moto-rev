<?php include 'php/layout.php' ?>

<?php startblock('article') ?>
<div class="bg-vid-div">
	<video class="bg-vid" autoplay muted loop>
		<source src="bg-vid.mp4" type="video/mp4">
	</video>
</div>
<div class="article">
	<form class="form-inline" action="">
		<div class="form-group">
			<label for="type">Search <i class="fas fa-motorcycle"></i> / <i class="fas fa-car"></i> :</label>
			<select class="form-control" id="type" name="type">
				<option>2-wheeler</option>
				<option>4-wheeler</option>
			</select>
			<select class="form-control" id="vBrand" name="vBrand">
				<option value="0">Choose brand</option>
				<option value="honda">Honda</option>
				<option value="yamaha">Yamaha</option>
				<option value="suzuki">Suzuki</option>
				<option value="bajaj">Bajaj</option>
			</select>
			<select class="form-control" id="vModel" name="vModel">
				<option value="0">Choose model</option>
				<option value="pulsar220">pulsar220</option>
				<option value="rtr200">rtr200</option>
				<option value="ns200">ns200</option>
				<option value="fz250">fz250</option>
			</select>
			<button type="submit" class="btn btn-md btn-info search-btn"><i class="fas fa-search"></i></button>
		</div>
	</form>
	<hr>
	<form class="form-inline" action="">
		<div class="form-group">
			<label for="randomSearch">Search any :</label>
			<input type="text" name="randomSearch" id="randomSearch" class="form-control" placeholder="Search">
			<label>Search criteria (if any):</label>
			<input type="text" name="price" id="price" class="form-control" placeholder="Price(Rs.)">
			<input type="text" name="milage" id="milage" class="form-control" placeholder="Milage(Kmpl)">
			<button type="submit" class="btn btn-md btn-info search-btn"><i class="fas fa-search"></i></button>
		</div>
	</form>
	<hr>
	<form class="form-inline">
		<h1 align="center">Compare <i class="fas fa-balance-scale"></i></h1>
		<div class="form-group">
			<label for="type">Search <i class="fas fa-motorcycle"></i> / <i class="fas fa-car"></i> 1:</label>
			<select class="form-control" id="type1" name="type1">
				<option>2-wheeler</option>
				<option>4-wheeler</option>
			</select>
			<select class="form-control" id="vBrand1" name="vBrand1">
				<option value="0">Choose brand</option>
				<option value="honda">Honda</option>
				<option value="yamaha">Yamaha</option>
				<option value="suzuki">Suzuki</option>
				<option value="bajaj">Bajaj</option>
			</select>
			<select class="form-control" id="vModel1" name="vModel1">
				<option value="0">Choose model</option>
				<option value="pulsar220">pulsar220</option>
				<option value="rtr200">rtr200</option>
				<option value="ns200">ns200</option>
				<option value="fz250">fz250</option>
			</select>
		</div>
		<div class="form-group">
			<label for="type">Search <i class="fas fa-motorcycle"></i> / <i class="fas fa-car"></i> 2:</label>
			<select class="form-control" id="type2" name="type2">
				<option>2-wheeler</option>
				<option>4-wheeler</option>
			</select>
			<select class="form-control" id="vBrand2" name="vBrand2">
				<option value="0">Choose brand</option>
				<option value="honda">Honda</option>
				<option value="yamaha">Yamaha</option>
				<option value="suzuki">Suzuki</option>
				<option value="bajaj">Bajaj</option>
			</select>
			<select class="form-control" id="vModel2" name="vModel2">
				<option value="0">Choose model</option>
				<option value="pulsar220">pulsar220</option>
				<option value="rtr200">rtr200</option>
				<option value="ns200">ns200</option>
				<option value="fz250">fz250</option>
			</select>
		</div>
		<br>
		<div class="cmp-btn-div">
			<button type="submit" class="btn btn-success btn-lg cmp-btn"><i class="fas fa-balance-scale"></i></button>
		</div>
	</form>
</div>
<?php endblock() ?>