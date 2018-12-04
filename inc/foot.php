<?if(defined("main")==true){?>		
	</div>	
</section><!--//mian-->
<?}?>
<?if(defined("main")==false){?>		
	</div>	
</section><!--//sub-->
<?}?>

<footer id="footer">
	<div class="inner">
		<h2>
			<img src="/images/common/logo_footer.png" alt=" <?=$config_company?> 로고">
			<a href="<?=DIR?>">메인으로</a>
		</h2>
		<div class="util">
			<a href="<?=DIR?>/etc/privacy">개인정보처리방침</a>
			<a href="<?=DIR?>/etc/terms">이용약관</a>
			<a href="<?=DIR?>/etc/email">이메일 무단수집 거부</a>
			<a href="<?=DIR?>/etc/sitemap">사이트맵</a>
		</div>
		<address>
			<p>단체명 : </p>
			<p>대표 : </p>
			<p>주소 : </p>
			<p>전화번호 : <?=str_replace("-","·",$config_tel)?> </p>
			<p>팩스 : </p>
			<p>이메일 : </p>
			<p>사업자번호 : </p>
			<p>개인정보관리책임자 : </p>
			<p>통신판매업신고 : </p>
			<p class="copy">COPYRIGHT(C) 회사이름. CO.LTD ALL RIGHT RESERVED.</p>
		</address>
		
		<div class="footer_family  __sel-box">
			<span class="sel-txt">FAMILY SITE</span>
			<select class="sel-op" onchange="if(this.value) location.href=(this.value) ">
				<option value="/">패밀리 사이트1</option>
				<option value="/">패밀리 사이2</option>
			</select>
		</div>

		<a class="gotop _gotop" href="#">맨 위로가기</a>
	</div>
</footer>

</div>
<!-- //wrap -->
</body>
</html>
