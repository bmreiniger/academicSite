var menu = "  <ul>"
menu += "  <li><a href='/academic'>Home</a></li>"
menu += "  <li><a href='/academic/aboutme.php'>About Me</a></li>"
menu += "  <li><a href='/'>Coding <span class='fas fa-external-link-alt'></span></a></li>"
menu += "  <li><a href='/academic/research'>Research</a></li>"
menu += "  <li><a href='/academic/teaching'>Teaching</a>"
menu += "  <li><a href='/academic/links.php'>Links</a></li>"
menu += "  </ul>"

var headerstuff = `
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="/academic/css/style.css" />
<link rel="icon" type="image/ico" href="academic/images/favicon.ico" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['//(','//)']]}});
</script>
<script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
<!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-90850830-1', 'auto');
    ga('send', 'pageview');
  </script>
`;

headerstuff += menu;

document.getElementById("navbar").innerHTML = headerstuff;
