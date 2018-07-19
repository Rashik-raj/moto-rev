function showDescription()
{
	const description = document.getElementById('description');
	const specification = document.getElementById('specification');
	description.style.display = "block";
	specification.style.display = "none";
}
function showSpecification()
{
	const description = document.getElementById('description');
	const specification = document.getElementById('specification');
	description.style.display = "none";
	specification.style.display = "block";
}
function toggleType()
{
	const type = document.getElementById('type').value;
	const bike = document.getElementById('wheeler2');
	const car = document.getElementById('wheeler4');
	if(type == 'bike')
	{
		bike.style.display = "block";
		car.style.display = "none";
	}
	else
	{
		bike.style.display = "none";
		car.style.display = "block";		
	}

}