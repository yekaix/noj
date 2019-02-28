<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="<?php echo $OJ_CDN_URL.$path_fix."template/$OJ_TEMPLATE/"?>jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo $OJ_CDN_URL.$path_fix."template/$OJ_TEMPLATE/"?>bootstrap.min.js"></script>

<?php
if(file_exists("./admin/msg.txt"))
$view_marquee_msg=file_get_contents($OJ_SAE?"saestor://web/msg.txt":"./admin/msg.txt");
if(file_exists("../admin/msg.txt"))
$view_marquee_msg=file_get_contents($OJ_SAE?"saestor://web/msg.txt":"../admin/msg.txt");


?>
<!--  to enable mathjax in hustoj:
svn export http://github.com/mathjax/MathJax/trunk /home/judge/src/web/mathjax
<script type="text/javascript"
  src="mathjax/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
or
<script type="text/javascript"
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>

-->
<script>
$(document).ready(function(){

$(".hint pre").each(function(){
	var plus="<span class='glyphicon glyphicon-plus'>Click</span>";
	var content=$(this);
	$(this).before(plus);
	$(this).prev().click(function(){
		content.toggle();
	});
	
});

  console.log("If you want to change the appearance of the web pages, make a copy of bs3 under template directory.\nRename it to whatever you like, and change the $OJ_TEMPLATE value in db_info.inc.php\nAfter that modify files under your own directory .\n");
  console.log("To enable mathjax in hustoj, check line 15 in /home/judge/src/web/template/bs3/js.php");

</script>

