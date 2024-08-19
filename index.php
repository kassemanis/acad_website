<?php
  require_once 'paths.php';
  require_once INCLUDE_PATH.'/includes.php';
  setupPageData($thisPage,__FILE__);
  $thisPage->title='Malcolm Reynolds';
  $thisPage->contentClass='Personal';
  $thisPage->contentId='Malcolm Reynolds';
  $thisPage->lang=en;
  /* $thisPage->customInclude='myStyle.css'; */
  require PAGE_TEMPLATE_PATH.'/pre_menu.php';
?>

<ul class="Navigation">
<li><a href="#research">Research topics</a>
</li>
<li><a href="#papers">Papers</a>
</li>
<li><a href="#download">Downloads</a>
</li>
<li><a href="#cv">CV</a>
</li>
<li><a href="#hot">Personal stuff</a>
</li>
</ul>

<?php require PAGE_TEMPLATE_PATH.'/pre_content.php'; ?>

<h1>Malcolm Reynolds</h1>

<table border="0" cellpadding="4">
<tr>
 <td rowspan="3"><a href="Malcolm.jpg"><img src="Malcolm.jpg" height="180" alt="Mal" /></a></td>
 <td>E-mail: <tt>malcolm.at.cgg.mff.cuni.cz</tt></td>
</tr>
<tr>
 <td align="left">+420-22191-XXXX (office)<br />+420-22191-4217 (secretary)<br />+420-22191-4281 (fax)</td>
</tr>
<tr>
 <td>KSVI MFF UK, Malostransk� n�m. 25, CZ-11800 Praha 1, Czech Republic</td>
</tr>
</table>

<h2 id="research">Research topics</h2>
<p>
Blabla
</p>

<h2 id="papers">Papers</h2>
<p>
Blabla
</p>

<h2 id="download">Downloads</h2>
<p>
Blabla
</p>

<h2 id="cv">My Curriculum vitae</h2>
<p>
CV...
</p>

<h2 id="hot">Personal stuff</h2>
<p>
Blabla
</p>

<hr class="h2" />
<p>Copyright (C) 2015-2016 <a href="http://cgg.mff.cuni.cz/~malcolm/">Malcolm Reynolds</a>,
<?php
  $SvnDate='$Date: 2015-11-25 17:20:29 +0100 (Wed, 25 Nov 2015) $';
  echo 'last change: '.substr($SvnDate,7,strlen($SvnDate)-9);
?>
</p>

<?php
  include PAGE_TEMPLATE_PATH.'/post_content.php';
?>