function so(){
	  var key = $("#k").val();
	  if (key=="")
       {
		$("#k").attr('placeholder','������ؼ��ʣ�֧�ּ�ƴŶ��');
        return false;
      }   
}
function CheckForm()
{
	if(document.form1.username.value=="")
	{
		$(".errhtml").html("����д��½�˺ţ�")
		$(".login_err").show();$("#username").focus();
		return false;
	}

	if(document.form1.password.value=="")
	{
		$(".errhtml").html("����д��½���룡")
		$(".login_err").show();$("#password").focus();
		return false;
	}
}
  function checkbox()
{
if (! document.form1.addbox.checked){
		   $(".ck").html("�´��Զ���¼��")
	}
	else{
	      $(".ck").html("���𹫹�����ѡ��")
	}
}