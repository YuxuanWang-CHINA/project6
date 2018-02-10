<!-- 
	YuxuanWang-CHINA 
	project6
	动态密码生成器
	
	MIT License
	Copyright (c) 2018 Yuxuan_Wang
 -->

<!-- 这是前台文件，可做登录页面 -->

<script src="http://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="http://api.map.baidu.com/api?v=2.0&ak=">/*Please input*/</script>
<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>  

<script>
	document.write("wait..");
	
	//ip地址
	$s3=returnCitySN["cip"];

	// 百度地图API功能
	var geolocation = new BMap.Geolocation();
	geolocation.getCurrentPosition(function(r){
		if(this.getStatus() == BMAP_STATUS_SUCCESS){
			//var mk = new BMap.Marker(r.point);
			//map.addOverlay(mk);
			//map.panTo(r.point);
			//alert('您的位置：'+r.point.lng+','+r.point.lat);
			
			$fs1=r.point.lng;//经度
			$fs2=r.point.lat;//纬度
			$s1 =$fs1.toFixed(0);
			$s2=$fs2.toFixed(0);
			//debugger;
			
			//此处用ajax把$s1,$s2,$s3发至后台admin.php，后台生成密码
			var xmlhttp;
			xmlhttp=new XMLHttpRequest(); 
			xmlhttp.open("POST","admin.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("s1="+$s1+"&s2="+$s2+"&s3="+$s3);
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					//document.write(xmlhttp.responseText);
					document.write("OK!");
				}
			}

		}
		else {
			alert('failed'+this.getStatus());
		}        
	},{enableHighAccuracy: true})
	//关于状态码
	//BMAP_STATUS_SUCCESS	检索成功。对应数值“0”。
	//BMAP_STATUS_CITY_LIST	城市列表。对应数值“1”。
	//BMAP_STATUS_UNKNOWN_LOCATION	位置结果未知。对应数值“2”。
	//BMAP_STATUS_UNKNOWN_ROUTE	导航结果未知。对应数值“3”。
	//BMAP_STATUS_INVALID_KEY	非法密钥。对应数值“4”。
	//BMAP_STATUS_INVALID_REQUEST	非法请求。对应数值“5”。
	//BMAP_STATUS_PERMISSION_DENIED	没有权限。对应数值“6”。(自 1.1 新增)
	//BMAP_STATUS_SERVICE_UNAVAILABLE	服务不可用。对应数值“7”。(自 1.1 新增)
	//BMAP_STATUS_TIMEOUT	超时。对应数值“8”。(自 1.1 新增)
	
</script>
