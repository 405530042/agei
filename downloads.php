<!DOCTYPE html>
<html>
<head>
	<?php include('templates/_head.php'); ?>
</head>
<body id="body">
	<?php include('templates/_nav.php'); ?>
	<div class="bw"></div>
	<div id="head_photo">
		<div id="head_img">
		</div>
	</div>
	<div id="page">
		<div id="content">
			<div id='topic'>
				<div id="recent">
					<h1>文件下載</h1>
					<ul>
						<li><a href="http://agei.ccu.edu.tw/CIRAS/uploads/files/大專校院高等教育深耕計畫經費使用原則.pdf">大專校院高等教育深耕計畫經費使用原則.pdf</a></li>
						<li><a href="http://agei.ccu.edu.tw/CIRAS/uploads/files/國立中正大學高齡跨域創新研究中心彈性薪資獎勵推薦辦法.pdf">國立中正大學高齡跨域創新研究中心彈性薪資獎勵推薦辦法.pdf</a></li>
					</ul>
					<hr>
					<ul>
						<li><a href="http://agei.ccu.edu.tw/CIRAS/uploads/files/高齡跨域創新研究中心彈性薪資獎勵推薦申請書及成果統計表.doc">高齡跨域創新研究中心彈性薪資獎勵推薦申請書及成果統計表.doc</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
<?php include("templates/_footer.php"); ?>
	</div>
</body>
<script type="text/javascript">
	/*$(function(){
		// nav 預設顯示第一個 Tab
		var _showTab = 0;
		var $defaultLi = $('#nav ul li').eq(_showTab).addClass('active');
		// 當 li 頁籤被點擊時...
		$('#nav ul li').click(function() {
			var $this = $(this),
				_clickTab = $this.find('a').attr('href');
			$this.addClass('active').siblings('.active').removeClass('active');
			return false;
		}).find('a').focus(function(){
			this.blur();
		});
	});*/
	$(document).ready(function(){
		$(".expander").click(function(){
			var $p = $(this).parent('li');
			$p.children('ul').slideToggle();

			$(this).toggleClass('exclose');
		});
	});
</script>
</html>