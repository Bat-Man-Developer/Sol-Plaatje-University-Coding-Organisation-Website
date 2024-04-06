<?php
include('layouts/header.php');
?>

<!------------- Website Messages----------->
<p style="color: red; font-weight: bold; text-align: center" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
<p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>

<!------------- Body Header ----------->
<div class="container">
	<div class="bodydiv1" style="margin-left: 5vw; margin-top: 10vh">
		<h1>Welcome To SPU CODERS</h1>
		<p style="font-weight: bold">Shaping the future with technology</p>
		<a href="<?php echo "https://spucoders.wuaze.com/about.php"; ?>" class="btn">Learn More &#8594;</a>
	</div>
</div>

<!------- Slideshow ----------->
<div class="categories">
   <h3 class="title">SPU CODERS</h3>
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<img src="assets/images/coding_pics1.jpeg" alt="snow" id="slideshowpic">
			</div>
			<div class="col-3">
				<img src="assets/images/coding_pics2.jpg" alt="snow" id="slideshowpic" >
			</div>
			<div class="col-3">
				<img src="assets/images/coding_pics3.jpg" alt="snow" id="slideshowpic">
			</div>
		</div>
	</div>
</div>

<!------- Club Details ----------->
<h2 class="title">What is SPUCO?</h2>
<div class="container">
	<div class="row">
		<p>The SPUCO Is Established As An Organization That Aims To Foster, Aid, Inspire And Motivate Students To Broaden Their Skill And Knowledge In Coding. The University Main Focus Is Theory Aspect Of Programming, The SPUCO Is A Platform That Aims To Improve And Focus On The Technical Aspect Of Programming, Which Is Coding. In Achieving This The Club Aims To Organize And Promote Social Activities For Students Specifically Coding Competitions.<br><br></p>
	</div>
</div>


<!----------- Programming Languages ---------->
<h3 class="title">PROGRAMMING LANGUAGES</h3>
<div class="container">
    <div class="programming_languages">
		<div class="row">
			<div class="col-5">
			  <a href="https://www.w3schools.com/html/default.asp" target="_blank" rel="noopener noreferrer"><img src="assets/images/html_pic.png" alt="snow"><div class="row">LEARN HTML</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.w3schools.com/css/default.asp" target="_blank" rel="noopener noreferrer"><img src="assets/images/css_pic.png" alt="snow"><div class="row">LEARN CSS</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.w3schools.com/js/default.asp" target="_blank" rel="noopener noreferrer"><img src="assets/images/javascript_pic.jpg" alt="snow"><div class="row">LEARN JAVASCRIPT</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.w3schools.com/php/default.asp" target="_blank" rel="noopener noreferrer"><img src="assets/images/php_pic.png" alt="snow"><div class="row">LEARN PHP</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.w3schools.com/sql/default.asp" target="_blank" rel="noopener noreferrer"><img src="assets/images/sql_pic.png" alt="snow"><div class="row">LEARN SQL</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.w3schools.com/python/default.asp" target="_blank" rel="noopener noreferrer"><img src="assets/images/python_pic.png" alt="snow"><div class="row">LEARN PYTHON</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.w3schools.com/java/default.asp" target="_blank" rel="noopener noreferrer"><img src="assets/images/java_pic.png" alt="snow"><div class="row">LEARN JAVA</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.w3schools.com/cpp/default.asp" target="_blank" rel="noopener noreferrer"><img src="assets/images/c++_pic.jpg" alt="snow"><div class="row">LEARN C++</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.w3schools.com/c#/default.asp" target="_blank" rel="noopener noreferrer"><img src="assets/images/csharp_pic.png" alt="snow"><div class="row">LEARN C#</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.tutorialspoint.com/ruby/index.htm" target="_blank" rel="noopener noreferrer"><img src="assets/images/ruby_pic.png" alt="snow"><div class="row">LEARN RUBY</a></div>
			</div>
			<div class="col-5">
			  <a href="https://www.tutorialspoint.com/swift/index.htm" target="_blank" rel="noopener noreferrer"><img src="assets/images/swift_pic.jpg" alt="snow"><div class="row">LEARN SWIFT</a></div>
			</div>
		</div>
	</div>
</div>

<!----------- TEXT-EDITOR PLATFORMS ---------->
<h3 class="title">TEXT-EDITORS</h3>
<div class="container">
  <div class="row">
	  <div class="col-5">
			<a href="https://www.sublimetext.com/" target="_blank" rel="noopener noreferrer"><img src="assets/images/sublimetext_pic.jpeg" alt="snow"><div class="row">SUBLIME TEXT</a></div>
		</div>
		<div class="col-5">
			<a href="https://atom-editor.cc/" target="_blank" rel="noopener noreferrer" ><img src="assets/images/atom_pic.png" alt="snow"><div class="row">ATOM</a></div>
		</div>
		<div class="col-5">
			<a href="https://brackets.io/" target="_blank" rel="noopener noreferrer"><img src="assets/images/brackets_pic.png" alt="snow"><div class="row">BRACKETS</a></div>
		</div>
		<div class="col-5">
			<a href="https://notepad-plus-plus.org/" target="_blank" rel="noopener noreferrer"><img src="assets/images/notepadplusplus_pic.png" alt="snow"><div class="row">NOTEPAD++</a></div>
		</div>
		<div class="col-5">
			<a href="https://macromates.com/" target="_blank" rel="noopener noreferrer"><img src="assets/images/textmate_pic.jpeg" alt="snow"><div class="row">TEXT MATE</a></div>
		</div>
		<div class="col-5">
			<a href="https://www.activestate.com/products/komodo-edit/" target="_blank" rel="noopener noreferrer"><img src="assets/images/komodoedit_pic.png" alt="snow"><div class="row">KOMODO EDIT</a></div>
		</div>
		<div class="col-5">
		  <a href="https://www.vim.org/" target="_blank" rel="noopener noreferrer"><img src="assets/images/vim_pic.png" alt="snow"><div class="row">VIM</a></div>
		</div>
		<div class="col-5">
		  <a href="https://www.gnu.org/software/emacs/" target="_blank" rel="noopener noreferrer"><img src="assets/images/emacs_pic.png" alt="snow"><div class="row">EMACS</a></div>
		</div>
		<div class="col-5">
		  <a href="https://www.geany.org/" target="_blank" rel="noopener noreferrer"><img src="assets/images/geany_pic.jpeg" alt="snow"><div class="row">GEANY</a></div>
		</div>
	</div>
</div>

<!----------- INTERGRATED DEVELOPMENT ENVIRONMENT PLATFORMS ---------->
<h3 class="title">INTERGRATED DEVELOPMENT ENVIRONMENT</h3>
<div class="container">
  <div class="row">
	  <div class="col-5">
		  <a href="https://visualstudio.microsoft.com/" target="_blank" rel="noopener noreferrer"><img src="assets/images/visualstudio_pic.png" alt="snow"><div class="row">VISUAL STUDIO CODE</a></div>
		</div>
		<div class="col-5">
		  <a href="https://developer.android.com/studio?gad_source=1&gclid=Cj0KCQjw2PSvBhDjARIsAKc2cgOjmd1MWQAhTDshtZ206wXREz7xtEupAzVNDiixkgSRT1PfGtlMox8aAkarEALw_wcB&gclsrc=aw.ds" target="_blank" rel="noopener noreferrer"><img src="assets/images/androidstudio_pic.png" alt="snow"><div class="row">ANDROID STUDIO</a></div>
		</div>
		<div class="col-5">
		  <a href="https://netbeans.apache.org/front/main/index.html" target="_blank" rel="noopener noreferrer"><img src="assets/images/netbeans_pic.png" alt="snow"><div class="row">.NETBEANS</a></div>
		</div>
		<div class="col-5">
		  <a href="https://www.codeblocks.org/" target="_blank" rel="noopener noreferrer"><img src="assets/images/codeblocks_pic.png" alt="snow"><div class="row">CODEBLOCKS</a></div>
		</div>
		<div class="col-5">
		  <a href="https://www.qt.io/offline-installers" target="_blank" rel="noopener noreferrer"><img src="assets/images/qt_pic.png" alt="snow"><div class="row">QT CREATOR</a></div>
		</div>
		<div class="col-5">
		  <a href="https://jupyter.org/" target="_blank" rel="noopener noreferrer"><img src="assets/images/jupyter_pic.png" alt="snow"><div class="row">JUPYTER</a></div>
		</div>
		<div class="col-5">
		  <a href="https://www.jetbrains.com/pycharm/" target="_blank" rel="noopener noreferrer"><img src="assets/images/pycharm_pic.jpeg" alt="snow"><div class="row">PYCHARM</a></div>
		</div>
	</div>
</div>

<!----------- VERSION CONTROL PLATFORMS---------->
<h3 class="title">VERSION CONTROL</h3>
<div class="container">
  <div class="row">
	  <div class="col-5">
		  <a href="https://github.com/" target="_blank" rel="noopener noreferrer"><img src="assets/images/github_pic.png" alt="snow"><div class="row">GITHUB</a></div>
		</div>
		<div class="col-5">
		  <a href="https://git-scm.com/" target="_blank" rel="noopener noreferrer"><img src="assets/images/git_pic.png" alt="snow"><div class="row">GIT</a></div>
		</div>
	</div>
</div>

<!----------- WEB & DATABASE SERVER APPLICATIONS ---------->
<h3 class="title">WEB & DATABASE SERVER APPLICATIONS</h3>
<div class="container">
  <div class="row">
	  <div class="col-5">
		  <a href="https://www.apachefriends.org/" target="_blank" rel="noopener noreferrer"><img src="assets/images/xampp_pic.png" alt="snow"><div class="row">XAMPP</a></div>
		</div>
	</div>
</div>

<!----------- FREE WEB-HOSTS SERVERS ---------->
<h3 class="title">FREE WEB-HOSTS SERVERS</h3>
<div class="container">
  <div class="row">
	  <div class="col-5">
		  <a href="https://www.infinityfree.com/" target="_blank" rel="noopener noreferrer"><img src="assets/images/infinityfree_pic.jpeg" alt="snow"><div class="row">INFINITY FREE</a></div>
		</div>
		<div class="col-5">
		  <a href="https://x10hosting.com/" target="_blank" rel="noopener noreferrer"><img src="assets/images/x10hosting_pic.png" alt="snow"><div class="row">X10 HOSTING</a></div>
		</div>
	</div>
</div>

<!----------- TRUSTED CERIFICATE ISSUERS ---------->
<h3 class="title">TRUSTED CERTIFICATE ISSUERS</h3>
<div class="container">
  <div class="row">
	  <div class="col-5">
		  <a href="https://www.coursera.org/certificates/computer-science-it#professional-certificates" target="_blank" rel="noopener noreferrer"><img src="assets/images/coursera_pic.png" alt="snow"><div class="row">COURSERA</a></div>
		</div>
		<div class="col-5">
		  <a href="https://www.udemy.com/courses/it-and-software/it-certification/" target="_blank" rel="noopener noreferrer"><img src="assets/images/udemy_pic.png" alt="snow"><div class="row">UDEMY</a></div>
		</div>
	</div>
</div>
	  
<!----------- WORLD-CLASS COMPUTER COMPANIES ---------->
<h3 class="title">WORLD-CLASS COMPUTER COMPANIES</h3>
<div class="container">
  <div class="row">
		<div class="col-5">
		  <a href="https://www.google.com/about/careers/applications/jobs/results#!t=jo&jid=127025001&" target="_blank" rel="noopener noreferrer"><img src="assets/images/google_pic.png" alt="snow"><div class="row">GOOGLE</a></div>
		</div>
		<div class="col-5">
		  <a href="https://jobs.careers.microsoft.com/global/en/search?lc=South%20Africa&l=en_us&pg=1&pgSz=20&o=Relevance&flt=true" target="_blank" rel="noopener noreferrer"><img src="assets/images/microsoft_pic.png" alt="snow"><div class="row">MICROSOFT</a></div>
		</div>
		<div class="col-5">
		  <a href="https://www.ibm.com/careers/search?field_keyword_05[0]=South%20Africa" target="_blank" rel="noopener noreferrer"><img src="assets/images/ibm_pic.jpg" alt="snow"><div class="row">IBM</a></div>
		</div>
		<div class="col-5">
		  <a href="https://jobs.cisco.com/jobs/SearchJobs/?21178=%5B215431%5D&21178_format=6020&listFilterMode=1" target="_blank" rel="noopener noreferrer"><img src="assets/images/cisco_Pic.png" alt="snow"><div class="row">CISCO</a></div>
		</div>
	</div>
</div>

<?php
include('layouts/footer.php');
?>