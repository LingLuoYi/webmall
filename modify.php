<?php
$user = $_POST['user'];
$pass = $_POST["pass"];
if($user == 'admin' && $pass == "sdfjsakdkfsdhfkjsajdkglsdajdfhaskjfjlksajdfjkashlkfjaskljhglkjdfkajdsfowietr"){
header("Cache-Control: no-cache, must-revalidate");
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>mmp</title>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
echo "<meta name='viewport' content='width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;' />";
echo "<meta name='apple-mobile-web-app-capable' content='yes' />";
echo "<meta name='apple-mobile-web-app-status-bar-style' content='black' />";
echo "<meta name='format-detection' content='telephone=no'' />";
echo '<meta   http-equiv="Expires"   CONTENT="0">';
echo '<meta   http-equiv="Cache-Control"   CONTENT="no-cache">';
echo '<meta   http-equiv="Pragma"   CONTENT="no-cache">';
echo "<meta charset='utf-8' />";
echo "<script src='http://libs.baidu.com/jquery/2.1.1/jquery.min.js'></script>";
echo "<link rel='stylesheet' type'test/css' href='//layui.hcwl520.com.cn/layui-v2.4.3/css/layui.css?v=201809030202'></link>";
echo "<script src='//layui.hcwl520.com.cn/layui-v2.4.3/layui.js?v=201809030202'></script>";
echo "<style type='text/css'>";
echo "    html, body { color:#222; font-family:Microsoft YaHei, Helvitica, Verdana, Tohoma, Arial, san-serif; margin:0; padding: 0; text-decoration: none; }";
echo "    img { border:0; }";
echo "   ul { list-style: none outside none; margin:0; padding: 0; }";
echo "   body {";
echo "        background-color:#eee;";
echo "    }";
echo "    body .mainmenu:after { clear: both; content: ' '; display: block; }";
echo "";
echo "    body .mainmenu li{";
echo "        float:left;";
echo "        margin-left: 2.5%;";
echo "        margin-top: 2.5%;";
echo "        width: 30%;";
echo "        border-radius:3px;";
echo "        overflow:hidden;";
echo "    }";
echo "";
echo "    body .mainmenu li a{ display:block;  color:#FFF;   text-align:center }";
echo "    body .mainmenu li a b{";
echo "        display:block; height:80px;";
echo "    }";
echo "    body .mainmenu li a img{";
echo "        margin: 15px auto 15px;";
echo "        width: 50px;";
echo "        height: 50px;";
echo "    }";
echo "";
echo "    body .mainmenu li a span{ display:block; height:30px; line-height:30px;background-color:#FFF; color: #999; font-size:14px; }";
echo "";
echo "    body .mainmenu li:nth-child(8n+1) {background-color:#36A1DB}";
echo "    body .mainmenu li:nth-child(8n+2) {background-color:#678ce1}";
echo "    body .mainmenu li:nth-child(8n+3) {background-color:#8c67df}";
echo "    body .mainmenu li:nth-child(8n+4) {background-color:#84d018}";
echo "    body .mainmenu li:nth-child(8n+5) {background-color:#14c760}";
echo "    body .mainmenu li:nth-child(8n+6) {background-color:#f3b613}";
echo "    body .mainmenu li:nth-child(8n+7) {background-color:#ff8a4a}";
 echo "   body .mainmenu li:nth-child(8n+8) {background-color:#fc5366}";
echo "</style>";
echo "</head>";
echo "";
echo "<body>";
//echo "<a href = 'javascript:' onclick = 'method()'>sssssssssssssssssssssssssssss</a>";
echo "    <ul class='mainmenu'>";
        $handler = opendir($_SERVER['QUERY_STRING']);//当前目录中的文件夹下的文件夹
        while( ($filename = readdir($handler)) !== false ) {
           $temp = $_SERVER['QUERY_STRING'].DIRECTORY_SEPARATOR.$filename;
              if(!is_dir($temp)&&$filename != "." && $filename != ".."){
                      $img_url = str_replace("/var/www/html","",$_SERVER['QUERY_STRING']).'/'.$filename;
                  echo '<li><a href="javascript:" id = "'.$img_url.'" onclick="method(this.id)"><img src="'.$img_url.'" data-action="zoom" /><span>'.$filename.'</span></a></li>';
              }
        }
echo "    </ul>";
echo "</body>";
echo "<script>";
echo "layui.use('layer', function(){";
echo " var layer = layui.layer;";
echo "}); ";
echo "function method(id){";
echo "console.log(id);";
$html = '<div style = "text-align:center;" class="layui-upload"><button type="button" class="layui-btn" id="test1">上传图片</button>    <button type="button" class="layui-btn" id="test9">开始上传</button><div class="layui-upload-list"><img class="layui-upload-img" id="demo1"><p id="demoText"></p></div></div><script>layui.use("upload", function(){var $ = layui.jquery,upload = layui.upload;var uploadInst = upload.render({elem: "#test1",url: "/shangchuan.php",data: {filePath: "\'+id+\'" },auto: false,bindAction: "#test9",before: function(obj){obj.preview(function(index, file, result){$("#demo1").attr("src", result); }); } ,done: function(res){console.log(res);if(res.code > 0){return layer.msg("上传失败");}},error: function(){var demoText = $("#demoText");demoText.html("<a>重试</a>");demoText.find(".demo-reload").on("click", function(){uploadInst.upload();});}});})<\/script>';
echo "var html = '<html><head></head><body><p style = \"text-align:center;\"><img src = \"'+id+'\" /></p><br /><br />".$html."</body></html>';";
echo " layer.open({";
echo "      type: 1,";
echo "      title: '修改图片',";
echo "      shadeClose: true,";
echo "      shade: false,";
echo "      maxmin: true,";
echo "      area: ['893px', '600px'],";
echo "      content: html";
echo "    });";
echo "    }";
echo "</script>";
echo "</html>";
        closedir($handler);
        }else{
        echo "呵呵呵呵！！！！！！！！！！！！";
        }
?>
