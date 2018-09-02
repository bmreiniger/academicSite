<!DOCTYPE HTML>
<html>
<head>
<title>Research - Ben Reiniger</title>
<?php include '../includes/headerdetails.php'; ?>
  <!--customizations for bibtexbrowser css styling-->
  <style>
   .authorlink{white-space:nowrap;}
  </style>
  <!--SageMath inclusion-->
  <script src="https://sagecell.sagemath.org/static/embedded_sagecell.js"></script>
  <script>sagecell.makeSagecell({"inputLocation": ".sage"});</script>
</head>
<body lang="EN-US">

<div id="navmaincontainer">
<!-- THE MENU -->
<?php include '../includes/menu.php'; ?>


<!-- THE BODY COLUMN --> 
<div id="main">
<h1>Research</h1>
<p><b><a href="researchstatement.pdf">Research Statement</a></b></p>

<p>My research is in combinatorics; more specifically but still 
broadly speaking, I like graph theory, graph colorings, hypergraphs, 
competitive optimization, and partially ordered sets.<br>
At Illinois Tech and Ryerson, I have also been working on more applied
 combinatorial problems, including hypergraph algorithms, pursuit-evasion
 games, and complex networks.</p>

<?php
$_GET['library']=1;
require_once('../includes/bibtexbrowser.php');
global $dbpub;
$db = new BibDataBase();
$db->load('publications.bib');
$querypub = array('title'=>'.*');
$entriespub = $db->multisearch($querypub);
$db->load('submitted.bib');
$querysub = array('note'=>'submitted');
$entriessub = $db->multisearch($querysub);
$queryetc = array('note'=>'In preparation|project');
$entriesetc = $db->multisearch($queryetc);
uasort($entriespub, 'compare_bib_entries');
uasort($entriessub, 'compare_bib_entries');
uasort($entriesetc, 'compare_bib_entries');

//instead of using authorIndex() at the end, I'm going to pick out authors as I process the bibentries.
// Also, will get the homepage links as I go, since the function is in the BibEntry class.
$authorsList = array();
?>

<hr>
<h2>Publications (and accepted articles)</h2>
<ul>
<?php
foreach ($entriespub as $bibentry) {
  echo "<li>". $bibentry->toHTML()."\n";
  foreach ($bibentry->getArrayOfCommaSeparatedAuthors() as $author) {
    if (!array_key_exists($author,$authorsList)) {
      $authorString = preg_replace('/&#322;?/','&#322;',$bibentry->formatAuthor($author));
      $homepageKey = strtolower(simplifyChars('hp_'.str_replace(' ', '', $bibentry->formatAuthorCanonical(latex2html($author)))));
      if (isset($db->stringdb[$homepageKey])) {
        $authorString = '<a href="' .preg_replace('~\x{00a0}~siu','~',$db->stringdb[$homepageKey]->value). '">' .$authorString. '</a>';
      }
      $authorsList[$author] = $authorString;
    }
  }
}
?>
</ul>

<h2>Submitted</h2>
<ul>
<?php
foreach ($entriessub as $bibentry) {
  echo "<li>".$bibentry->toHTML()."\n";
  foreach ($bibentry->getArrayOfCommaSeparatedAuthors() as $author) {
    if (!array_key_exists($author,$authorsList)) {
      $authorString = $bibentry->formatAuthor($author);
      $homepageKey = strtolower(simplifyChars('hp_'.str_replace(' ', '', $bibentry->formatAuthorCanonical(latex2html($author)))));
      if (isset($db->stringdb[$homepageKey])) {
        $authorString = '<a href="' .preg_replace('~\x{00a0}~siu','~',$db->stringdb[$homepageKey]->value). '">' .$authorString. '</a>';
      }
      $authorsList[$author] = $authorString;
    }
  }
}
?>
</ul>

<h2>In preparation</h2>
<ul>
<?php
foreach ($entriesetc as $bibentry) {
   echo "<li>".$bibentry->toHTML()."\n";
   foreach ($bibentry->getArrayOfCommaSeparatedAuthors() as $author) {
     if (!array_key_exists($author,$authorsList)) {
       $authorString = $bibentry->formatAuthor($author);
       $homepageKey = strtolower(simplifyChars('hp_'.str_replace(' ', '', $bibentry->formatAuthorCanonical(latex2html($author)))));
       if (isset($db->stringdb[$homepageKey])) {
         $authorString = '<a href="' .preg_replace('~\x{00a0}~siu','~',$db->stringdb[$homepageKey]->value). '">' .$authorString. '</a>';
       }
       $authorsList[$author] = $authorString;
    }
  }
}
?>
</ul>
<p><small>&dagger; undergraduate student, &Dagger; graduate student</small></p>

<h2>Coauthors</h2>
<span>
<?php
ksort($authorsList);
foreach ($authorsList as $author=>$text) {
  if ($author!='Reiniger, Benjamin') echo '<span class="authorlink">' .$text. '</span>&emsp;&emsp;' . "\n";
}
//easier version, but less flexible:
//$authorTable = $db->authorIndex();
//foreach ($authorTable as $author) {
//  echo '<span class="authorlink">' .$author. '</span>&emsp;&emsp;';
//}
?>
</span>

<p><small>The above content is automatically generated from BibTeX files,
 using the <a href="http://www.monperrus.net/martin/bibtexbrowser/" target="_blank">bibtexbrowser</a> library.</small></p>

<hr>
<p>As an undergraduate I did some research in combinatorics,
 particularly Rosa-type graph labelings.  
I worked with the combinatorics REGS group at UIUC each summer,
 and in the 2010 summer I also worked on a REGS project concerning periodic
 points of Hamiltonian diffeomorphisms of the two-sphere.
In the summer of 2014 I worked with the Rocky Mountains-Great Plains Graduate
 Research Workshop in Combinatorics.</p>

<p>I am broadly interested in most areas of mathematics.  Areas that have 
attracted me most include combinatorics, geometric group theory, 
some category theory, cohomology of spaces and groups, and number theory.
</p>

<!-- Last updated section
no longer updated manually
<p class="lastupdate">Last modified 7 May 2017.</p>
-->


<hr>

<p>SageMath widget test:</p>
<div class="sage">
<script type="text/x-sage">
P=graphs.PetersenGraph()
H=P.coloring(hex_colors=True)
P.plot(vertex_colors=H)
</script>
</div>




<!-- old, hardcoded versions
<h2>Publications (and accepted articles):</h2>
<ul>
<li>The game of Overprescribed Cops and Robbers played on graphs.
  <i>Graphs Combin.</i>, to appear.
  With A.&nbsp;Bonato, X.&nbsp;Pérez-Giménez, P.&nbsp;Prałat.
  [<a href="https://arxiv.org/abs/1611.07592">arXiv</a>]
<li>Subgraphs in non-uniform random hypergraphs.
  Submitted to <i>Internet Mathematics</i>.
  Conference version appears in 
  <i>Proceedings of the 13th Workshop on Algorithms and Models for the Web Graph (WAW 2016)</i>,
   Lecture Notes in Computer Science 10088, Springer, 2016, 140-151. 
  With M.&nbsp;Dewar, J.&nbsp;Healy, X.&nbsp;Pérez-Giménez, P.&nbsp;Prałat, J.&nbsp;Proos, K.&nbsp;Ternovsky.
  [<a href="http://arxiv.org/abs/1703.07686">arXiv</a>]
<li>The game saturation number of a graph.
  <i>J. Graph Theory</i>, 85(2):481-495, 2017.
  With J.&nbsp;Carraher, W.&nbsp;Kinnersley, D.B.&nbsp;West.
  [<a href="http://arxiv.org/abs/1405.2834">arXiv</a>;
   <a href="http://onlinelibrary.wiley.com/doi/10.1002/jgt.22074/abstract">web</a>]
<li>Coloring, sparseness, and girth.
  <i>Israel J. Math.</i>, 214(1):315-331, 2016.
  With N.&nbsp;Alon, A.V.&nbsp;Kostochka, D.B.&nbsp;West, X.&nbsp;Zhu.
  [<a href="http://arxiv.org/abs/1412.8002">arXiv</a>;
   <a href="https://link.springer.com/article/10.1007/s11856-016-1361-2">web</a>]
<li>Large subposets with small dimension.
  <i>Order</i>, 33(1):81-84, 2016.
  With E.&nbsp;Yeager.
  [<a href="http://arxiv.org/abs/1404.0021">arXiv</a>;
   <a href="http://link.springer.com/article/10.1007/s11083-015-9353-0">web</a>]
<li>The minimum number of edges in a 4-critical graph that is bipartite plus 3 edges.
  <i>European J. Combin.</i>, 46:89-94, 2015.
  With A.V.&nbsp;Kostochka.
  [<a href="http://www.sciencedirect.com/science/article/pii/S019566981400211X">web</a>]
<li>A note on list-coloring powers of graphs.
  <i>Discrete Math.</i>, 332:10-14, 2014.
  With N.&nbsp;Kosar, S.&nbsp;Petrickova, E.&nbsp;Yeager.
  [<a href="http://arxiv.org/abs/1309.7705">arXiv</a>;
   <a href="http://www.sciencedirect.com/science/article/pii/S0012365X14002040">web</a>]
<li>New results on degree sequences of uniform hypergraphs.
  <i>Electron. J. Combin.</i>, 20(4):Paper 14, 2013.
  With S.&nbsp;Behrens, C.&nbsp;Erbes, M.&nbsp;Ferrara, S.G.&nbsp;Hartke, H.&nbsp;Spinoza, C.&nbsp;Tomlinson.
  [<a href="http://www.combinatorics.org/ojs/index.php/eljc/article/view/v20i4p14">web</a>]
<li>A symplectic proof of a theorem of Franks.
  <i>Compos. Math.</i>, 148(6):1969-1984, 2012.
  With B.&nbsp;Collier, E.&nbsp;Kerman, B.&nbsp;Turmunkh, A.&nbsp;Zimmer.
  [<a href="http://arxiv.org/abs/1107.1282">arXiv</a>]
</ul>

<h2>Submitted:</h2>
<ul>
<li>Perfect matchings and Hamiltonian cycles in the preferential attachment model.
  With A.&nbsp;Frieze, X.&nbsp;Pérez-Giménez, P.&nbsp;Prałat.
  [<a href="https://arxiv.org/abs/1610.07988">arXiv</a>]
<li>The saturation number of induced subposets of the Boolean lattice.
  With M.&nbsp;Ferrara, B.&nbsp;Kay, L.&nbsp;Kramer, R.R.&nbsp;Martin, H.C.&nbsp;Smith, E.&nbsp;Sullivan.
  [<a href="https://arxiv.org/abs/1701.03010">arXiv</a>]
<li>Chvátal-type results for degree sequence Ramsey numbers.
  With C.&nbsp;Cox, M.&nbsp;Ferrara, R.R.&nbsp;Martin.
  [<a href="http://math.ucdenver.edu/~mferrara/publications/potram_submit.pdf">web</a>]
<li>Dynamic coloring parameters for graphs with given genus.
  With S.&nbsp;Loeb, T.&nbsp;Mahoney, J.&nbsp;Wise.
  [<a href="http://arxiv.org/abs/1511.03983">arXiv</a>]
</ul>
-->

</div>
</div>


<!-- THE RIGHT COLUMN -->
<div id="right">
<img src="../images/conftalk.jpg" height="150" width="200" alt="">
<p>Giving a hypergraphic sequence talk, 2013.</p>
</div>

</body>
</html>
