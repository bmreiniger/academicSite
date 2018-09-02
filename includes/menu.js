var menu = "  <ul>"
menu += "  <li><a href='/academic'>Home</a></li>"
menu += "  <li><a href='/academic/aboutme.php'>About Me</a></li>"
menu += "  <li><a href='/'>Coding <span class='fas fa-external-link-alt'></span></a></li>"
menu += "  <li><a href='/academic/research'>Research</a></li>"
menu += "  <li><a href='/academic/teaching'>Teaching</a>"
menu += "  <li><a href='/academic/links.php'>Links</a></li>"
menu += "  </ul>"

document.getElementByID("navbar").innerHTML = menu;
