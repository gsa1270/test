function num_only(){
  if((event.keyCode<48) || (event.keyCode>57)) {
    event.returnValue=false;
  }
}

// 삭제 검사 확인
function del(href){
	if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
		document.location.href = encodeURI(href);
	}
}

//지역선택
function getLocation(ID,sido,gugun) {
	if(sido) {
		$.ajax({
			url:"/program/company/getLocation.php?SIDO="+encodeURI(sido)+"&GUGUN=" + encodeURI(gugun) + "&ID=" + ID,
			success:function(data) {
				$("#" + ID).html(data);
			}
		});
	}
}

//숫자만 입력
function onlyNumber(e) {
	if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		// Allow: Ctrl+A
			(e.keyCode == 65 && e.ctrlKey === true) ||
		// Allow: home, end, left, right
			(e.keyCode >= 35 && e.keyCode <= 39)) {
		// let it happen, don't do anything
		return;
	}
	// Ensure that it is a number and stop the keypress
	if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		e.preventDefault();
	}
}

//게시판 카테고리 연결
function category_link(val){
	location.href="?category="+encodeURI(val);
}

// 아이디/비번 찾기
function member_find(){
	window.open('/member/find.php', 'popup', 'width=450, height=300, status=no, toolbar=no, menubar=no, directories=no, location=no');
}