var menu = "  <ul>"
menu += "  <li><a href='/academicSite'>Home</a></li>"
menu += "  <li><a href='/academicSite/aboutme.html'>About Me</a></li>"
menu += "  <li><a href='/'>Coding <span class='fas fa-external-link-alt'></span></a></li>"
menu += "  <li><a href='/academicSite/research/index.html'>Research</a></li>"
menu += "  <li><a href='/academicSite/teaching'>Teaching</a>"
menu += "  <li><a href='/academicSite/links.html'>Links</a></li>"
menu += "  </ul>"

var headerstuff = `
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="/academicSite/css/style.css" />
<link rel="icon" type="image/ico" href="/academicSite/images/favicon.ico" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['//(','//)']]}});
</script>
<script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
<!-- Google Analytics -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125133600-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-125133600-2');
</script>
`;

headerstuff += menu;

document.getElementById("navbar").innerHTML = headerstuff;
