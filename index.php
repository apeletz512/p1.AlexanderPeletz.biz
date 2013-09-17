<!DOCTYPE html>
<html>
<head>

<!--This is a comment-->
<title>
Welcome to AlexanderPeletz.biz
</title>
<link rel="stylesheet" type="text/css" href="index.css">
<script type="text/javascript">

function changeColor(id1,id2,newcolor)
	{
		if(!newcolor) {return};
		
		if(!id1) {return};
		var oMenu = document.getElementById(id1);
		oMenu.style.border = '10px solid' + newcolor;
		
		if (!id2) {return};
		var oHeader = document.getElementById(id2);
		oHeader.style.border= '10px solid' + newcolor;
	}

function changeContent(display)
	{	
		if(!display) {return};

		var oAllcontent=document.getElementsByClassName('contentitem');
		for (var i = oAllcontent.length - 1; i >= 0; i--) 
			{
				oAllcontent[i].style.display = 'none';
			}
		var oShowcontent=document.getElementById(display);
		oShowcontent.style.display = 'block';
	}
</script>
</head>
<body>
<div id="headercontainer">
	<div id="header">
		<h3 style="margin-top: 1em;">P1</h3>
		<p style="text-align: right; font-size: x-small;">Created for CSCI E-15, Fall 2013<br>Harvard University Extension School</p>

	</div>
	<div id="header2">
	</div>
	<div id="header3">
	</div>
	<div id="header4">
	</div>
</div>

<div id="maincontainer">
	<div id="toc" >
		<table border="0">
			<tr>
					<td id="welcomemenu" class="menuitem" onMouseOver='changeColor("welcomemenu","header2","#2C5D3F");'>
						<a href="#" onClick='changeContent("welcomecontent");'>Welcome</a>									
					</td>																				
			</tr>
			<tr>
					<td id="aboutmenu" class="menuitem" onMouseOver='changeColor("aboutmenu","header3","#34925E");'>
						<a href="#" onClick='changeContent("aboutcontent");'>About Me</a>
					</td>
			</tr>
			<tr>
					<td id="designmenu" class="menuitem" onMouseOver='changeColor("designmenu","header4","#5EDA9E");'>
						<a href="#" onClick='changeContent("designcontent");'>Design Tools</a>
					</td>
			</tr>
		</table>
	</div>
	<div="contents">
		<div id="welcomecontent" class="contentitem" style="display: true;">
			<p>Welcome to the first public website designed and maintained by Alexander Peletz. This site was created as part of my enrollment in a dynamic web applications course at the Harvard school of extension studies. </p>
			<p>Use the links to the menu to the left to navigate this site. </p>
		</div>
		<div id="aboutcontent" class="contentitem" style="display: none;">
			<p>My name is Alexander Peletz. I am 24 years old and live in Andover, MA. I just started a new job as a software developer for Putnam Investments' Analytical Services department. My team is responsible for maintaining databases and generating reports and tools to assist other employees at Putnam manage their day-to-day tasks. Before moving to Andover, I spent two years working as a Technical Coordinator for Epic Systems in Madison, WI. As a Technical Coordinator I managed large-scale healthcare software implementation projects, developed tools for internal and external audiences, and provided technical support for a range of applications.</p>
			<p>Before entering the information sciences industry, I attended Emory University where I studied Economics, Middle Eastern Studies, and the Arabic language. I still love all things liberal arts and am interested in revisiting my international interests in the not-too-distant future.</p>
		</div>
		<div id="designcontent" class="contentitem" style="display: none;">
			<p>To create my project I primarily used Sublime Text. It has many of the great color-coding qualities of Notepad++ (which I relied on for years) but seems a bit more interactive in terms of automatic formatting and text completion capabilities.</p>
		</div>
	</div>	

</div>

<div id="footercontainer">
	<div id="footer">
		<p>www.AlexanderPeletz.biz | 2013</p>
	</div>
</div>
</body>
</html>