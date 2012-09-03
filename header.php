<?php
$root_url = "http://localhost/website";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Manoj Mardithaya | CSE, UCSD</title>

<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700|Vollkorn:400italic, 400' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="<?= $root_url ?>/css/style.css" />
<script type="text/javascript">
	// Cross-browser implementation of element.addEventListener()
	// Source: http://stackoverflow.com/questions/559150/best-practice-for-using-window-onload
	function listen(evnt, elem, func) {
		if (elem.addEventListener)  // W3C DOM
			elem.addEventListener(evnt,func,false);
		else if (elem.attachEvent) { // IE DOM
			var r = elem.attachEvent("on"+evnt, func);
			return r;
		}
	}
	listen("load", window, function(){
		var emails = document.getElementsByClassName('email');
		for(i=0; i<emails.length; i++) {
			emails[i].innerHTML = "m" + "mardith" + "@cs.ucsd" + ".edu";
		}
	});
</script>
</head>
<body>
	<ul class='nav'>
		<li class='navitem'><a href='<?= $root_url ?>/projects/'>Projects</a></li>
		<li class='navitem'><a href='<?= $root_url ?>/education/'>Academics</a></li>
		<li class='navitem'><a href='<?= $root_url ?>/misc/'>Misc.</a></li>
	</ul>
	<div class='box'>
		<div class="right-header" style="width: 225px">
			<img src="<?= $root_url ?>/img/profile.jpg" width="225px" height="300px"/><br />
			<span class="size-super">Manoj Mardithaya</span><br />
			<span class='emph size-nm email'>"m"+lname.substr(0,7) at csDOTucsd</span>
		</div>
		<div class="left-header">
			<span class="size-big">Masters Student @ UCSD since Fall 2011</span>
			<br />
			<p class="size-nm emph quote">
				I'm a 'systems-y' person, so exploring design 
				spaces is what I love to do. This applies to
				both the code and the fiction I write. My [coding] 
				side projects all tend to be about interaction
				design spaces, from development frameworks and
				OS internal APIs to UI across devices and inter-application
				interactions. A few are being actively worked on,
				but most are unfortunately in various states 
				of disarray.
			</p>
			<p class="size-nm emph quote">
				Currently, I'm working under 
				<a href="http://cseweb.ucsd.edu/users/swanson/">Prof. Steve Swanson</a>,
				trying to come up with a better filesystem layer for
				fast non-volatile memory.
			</p>
			<p class="size-nm emph quote">
				I like to mentor, and I'm always willing to talk about
				mentoring programs &amp; opportunities. As an undergrad senior, I taught 
				part of a Computer Graphics course for sophomores. I TA'd an
				upper div course @ UCSD. Since June 2012, I am running a research 
				mentoring program peering NITK alumni to undergrads.
			</p>
		</div>
		<div class='content'>