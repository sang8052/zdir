<?php
	error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
	include_once("zdir/config.php");
	//载入zdir类
	include_once("zdir/functions/zdir.class.php");
	@$del = $_GET['del'];
	//缓存文件夹路径
	$cachefile = "zdir/functions/caches/indexes.html";
	//获取文件修改时间
	@$ftime = filemtime($cachefile);
	@$cachetime = date('Y-m-d H:i:s',$ftime);
	(int)@$ftime = date('YmdH',$ftime);
	(int)$thetime = date('YmdH',time());

	//计算时差
	$diff = $thetime - $ftime;
	//删除缓存文件
	if($del == 'cache') {
		unlink($cachefile);
		header("location:zdir/index.php?c=cache");
		exit;
	}
	//判断缓存文件是否存在
	if((!file_exists($cachefile)) || ($diff > 24)){
		$url = get_url();
		$url = $url."/zdir/functions/indexes.php";
		$url = str_replace("\\","/",$url);
		$curl = curl_init($url);

		//echo $url;

	    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36");
	    curl_setopt($curl, CURLOPT_FAILONERROR, true);
	    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	    #设置超时时间，最小为1s（可选）
	    #curl_setopt($curl , CURLOPT_TIMEOUT, 1);

	    $html = curl_exec($curl);
	    curl_close($curl);
	    
		
		$myfile = fopen($cachefile,"w") or die("Unable to open file!");
		fwrite($myfile, $html);
		fclose($myfile);

		$cache = file_get_contents($cachefile);
	}
	else{
		$cache = file_get_contents($cachefile);
	}


	//获取页面URL
	function get_url(){
		$port = $_SERVER["SERVER_PORT"];
		//对端口进行判断
		switch ( $port )
		{
			case 80:
				$protocol = "http://";
				$port = '';
				break;	
			case 443:
				$protocol = "https://";
				$port = '';
				break;
			default:
				$protocol = "http://";
				$port = ":".$port;
				break;
		}
		
		//或如URI
		$uri =  $_SERVER["REQUEST_URI"];
		$uri = dirname($uri);
		$uri = str_replace("\\",'/',$uri);
		//二级目录
		if($uri != '/'){
			$uri = $uri.'/';
		}
		
		//$uri = str_replace("cache.php","",$uri);
		//组合为完整的URL
		$domain = $protocol.$_SERVER['SERVER_NAME'].$port.$uri;
		return $domain;
	}
?>

<!--载入页头-->
<?php include_once( 'zdir/template/header.php' ); ?>

<!--中间内容部分-->
<div class="layui-container">
	<div class="layui-row">
		<div class="layui-col-lg10 layui-col-md-offset1">
			<div id="cache">
				
			
			<?php
				echo "<h1>文件索引 - 该数据缓存于$cachetime</h1><br />";
				echo $cache;
			?>
			</div>
		</div>
	</div>
</div>
<!--中间内容部分END-->

<!--载入页脚-->
<?php include_once( 'zdir/template/footer.php' ); ?>