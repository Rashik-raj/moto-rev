window.addEventListener("scroll",function() {
	const header = document.getElementById('header');
	const brand = document.getElementById('brand');
	const brandLogo = document.getElementById('brandLogo');
	const content = document.getElementById('content');
	const navExpand = document.getElementById('nav-expand');
	const goUp = document.getElementById('goUp');
	if(window.pageYOffset>55)
	{
        header.style.height="80px";
        header.style.background="#74b9ff";
        brand.style.width="30%";
        brandLogo.src="../logo/Logo2.png";
        content.style.marginTop="80px";
        navExpand.style.marginTop="80px";
        goUp.style.display="block";
   	}
   	else
   	{
        header.style.height="120px";
        header.style.background="#ecf0f1";
        brand.style.width="35%";
        brandLogo.src="../logo/Logo1.png";
        content.style.marginTop="120px"; 
        navExpand.style.marginTop="120px"; 		
        goUp.style.display="none";
   	}
});
document.getElementById("nav-collapse").onclick = function() {hideNav()};
document.getElementById("nav-return").onclick = function() {showNav()};

function hideNav()
{
	const contentItem = document.getElementById('content-item');
	document.getElementById("nav-box").style.display = "none";
	document.getElementById("nav-expand").style.display = "block";
	document.getElementById("footer2").style.display = "block";
	$("#content-item").removeClass("col-sm-9");
	$("#content-item").addClass("col-sm-12");
	contentItem.style.paddingLeft="4%";
}
function showNav()
{
	const contentItem = document.getElementById('content-item');
	document.getElementById("nav-box").style.display = "block";
	document.getElementById("nav-expand").style.display = "none";
	document.getElementById("footer2").style.display = "none";
	$("#content-item").removeClass("col-sm-12");
	$("#content-item").addClass("col-sm-9");
	contentItem.style.paddingLeft="15px";
}

//smooth scroll effect
$('a[href*="#"]').on('click', function (e) {
	e.preventDefault();

	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
	}, 500, 'linear');
});
