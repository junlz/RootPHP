<script>

	  /*获取url */
		function getUrlStr(name)
		{
		     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
		     var r = window.location.search.substr(1).match(reg);
		     if(r!=null)return  unescape(r[2]); return 'null';
		}

		var reurl = window.location.href;
		/*
		
		静态路径处理 

		*/
		var arr = reurl.split('?');
	    var fanhui_url = arr[0];
		var u_key = '';
		var openid = '';
		var local_key = '';
		item_id = getUrlStr("item_id");
		function getcode() {

				/* 拿到url的参 */
				var url_u_key = getUrlStr("u_key");
				var url_openid = getUrlStr("openid");


				/* 拿到本地的参数*/
			    local_key = localStorage.getItem('local_key');
			    openid = localStorage.getItem('openid');
			   /*判断本地值是否空 */
			    if(local_key == 'null' || local_key=='' || local_key == undefined){
			    /*if(!u_key){  /不同的写法
					 console.log("1本地的值是空"); 
			    	本地的值是空
			    	判断url 的是否带有参数 */
			    	if(url_u_key == 'null' || url_u_key=='' || url_u_key == undefined){
			    		/*没有值，就直接跳转 */
						/* console.log("1URL没有参数值，就直接跳转"); */
			    	}else{
						/*console.log("1有URL参数值，先把当前的值存本地"); */
			    		/*有值，先把当前的值存本地 */
				    	/* 1、把url 值存到本地 */
				    	localStorage.setItem('local_key',url_u_key);
						localStorage.setItem('openid',url_openid);

			    	}
			    	/*判断url 的是否带有参数 end */
					/* console.log("1转跳");  */
					/* 2、转跳 */

			    	window.location.href = "{{WWW_URL}}front/vote/getcodes?token=fztv110&page_url=" +fanhui_url;

			    }else{
					/* console.log("2本地的值非空");  */
			    	/*本地的值非空 */
			    	/* 判断本地的值得和url */
				    if( url_u_key  !=  local_key){
				    	/* console.log("2本地的和url的参数不一样");  */
				    	/* 本地的和url的参数不一样 */
				    	/* 1、把url 值存到本地 */
				    	
				    	localStorage.setItem('local_key',url_u_key);
						localStorage.setItem('openid',url_openid);
						/* 2、转跳 */
						/* console.log("2转跳");  */
				    	window.location.href = "{{WWW_URL}}front/vote/getcodes?token=fztv110&item_id&page_url=" +fanhui_url;

				    }else{
				    	/* console.log("2参数和本地的一致，符合条件"); */
				    	/*参数和本地的一致，符合条件*/
				    	openid = localStorage.getItem('openid');
				    	local_key = localStorage.getItem('local_key');
				    	u_key = local_key;

				    }	
				   /* 判断本地的值得和url end */

			    }
			    /* 判断本地值是否空 end */

		}


		var vote_type = "{{$vote_type}}";

		/* 类型*/
    	if(vote_type == 3){
    		local_key = '';
    		openid = '';
    		
    	}else{
    		isWeixin();
    		getcode();
    	}

		/*终端识别 */
    	function isWeixin(){
	 	    var ua = window.navigator.userAgent.toLowerCase();
		    if (ua.match(/MicroMessenger/i) == 'micromessenger') {
		    	/* 以下代码是用javascript强行关闭当前页面 */
		    	/* alert('微信端打开');exit(); */
		      
		    } else {
		    	/* alert('非微信端');exit(); */
		       
		    }   		
    	}

</script>