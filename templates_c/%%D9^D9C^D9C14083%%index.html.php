<?php /* Smarty version 2.6.18, created on 2016-07-27 18:03:58
         compiled from default/default/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $this->_tpl_vars['setting']['keywords']; ?>
-<?php echo $this->_tpl_vars['setting']['sitename']; ?>
</title>
		<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
" name="keywords" />
		<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description" />
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/css/page_index.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.textRemindAuto-1.0.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/lhgcalendar/lhgcalendar.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/default/<?php echo $this->_tpl_vars['setting']['templates']; ?>
/js/jcarousellite_1.0.1.min.js"></script>
		<script language="JavaScript">
			$(function() {
				$(".flashpic").jCarouselLite({
					btnNext: ".premenu",
					btnPrev: ".nextmenu",
					scroll: 1,
					visible: 1,
					auto: 5000
				});
				$('.leftmenubox').hover(function(){
					$(this).addClass("leftmenubox_hover");
					$(this).children("div").show();
				},function(){
					$(this).removeClass("leftmenubox_hover");
					$(this).children("div").hide();
				});
				$('.product_tab ul li').hover(function(){
					var obj = $('.product_tab ul');
					var lis = obj.find('li');
					$.each(lis,function(i,li){
						$(li).removeClass("on");
						$("[data-cate$='"+$(li).text()+"']").hide();
					});
					$(this).addClass("on");
					$("[data-cate$='"+$(this).text()+"']").fadeIn();
				},function(){

				});

				//签证
				var $visa_li = $("ul.visa_tab li");
				$visa_li.hover(function() {
				   $(this).addClass("here").siblings().removeClass("here"); //去掉其它同辈<li>元素的高亮
				   var index = $visa_li.index(this); // 获取当前点击的<li>元素 在 全部li元素中的索引。
				   $("div.visabox > div").eq(index).show().siblings().hide(); //隐藏其它几个同辈的<div>元素
				});

				//搜索
				var $search_li = $("ul.indexsearch_tab li");
				$search_li.click(function() {
				   $(this).addClass("here").siblings().removeClass("here"); //去掉其它同辈<li>元素的高亮
				   var index = $search_li.index(this); // 获取当前点击的<li>元素 在 全部li元素中的索引。
				   $("div.searchboxbox > p").eq(index).show().siblings().hide(); //隐藏其它几个同辈的<div>元素
				});
				
				//城市选择
				$("input[name='departure_city']").click(function(event){
					event.stopPropagation();
					$(".citylist01").show();
				});

				$('.city01').click(function() {
					$("input[name='departure_city']").val($(this).text());
					$(".citylist01").hide();
				});

				$("input[name='arrival_city']").click(function(event) {
					event.stopPropagation();
					$(".citylist02").show();
				});
				$('.city02').click(function() {
					$("input[name='arrival_city']").val($(this).text());
					$(".citylist02").hide();
				});

				$("input[name='arrival_city_en']").click(function(event) {
					event.stopPropagation();
					$(".citylist03").show();
				});
				$('.city03').click(function() {
					$("input[name='arrival_city_en']").val($(this).text());
					$(".citylist03").hide();
				});

				$(document).click(function(event){
					$(".citylist01").hide();
					$(".citylist02").hide();
					$(".citylist03").hide();
					$(".pricelist").hide();
				});  

				$('.close').click(function() {
					$(".citylist01").hide();
					$(".citylist02").hide();
					$(".citylist03").hide();
					$(".pricelist").hide();
				});
				
				//价格区间
				$("input[name='price']").click(function(event){
					event.stopPropagation();
					$(".pricelist").show();
				});

				$('.price_span').click(function() {
					$("input[name='price']").val($(this).text());
					$(".pricelist").hide();
				});

				//日期选择
				$('#demo_inp1').calendar();
				
				//输入框提示
				$(".remindAuto").textRemindAuto();
				$(".borderChange").textRemindAuto({chgClass: "border"});
				$("#textColorChg").textRemindAuto({
					focusColor: "red"							  
				});
			})
		</script>
		</head>
	<body>
<!--内容--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="main clearfix">
	<div class="main_left">
		<div class="leftmenu">
			<?php $_from = $this->_tpl_vars['common_cache']['leftmenulist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['leftmenu']):
?>
			<div class="leftmenubox">
				<div class="leftmenubigbox hide">
					<?php $_from = $this->_tpl_vars['leftmenu']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subleftmenu']):
?>
						<div class="subleftmenu clearfix">
							<h4 class="fl"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?mod=search&ac=search&keywords=<?php echo $this->_tpl_vars['subleftmenu']['keywords']; ?>
"><?php echo $this->_tpl_vars['subleftmenu']['catname']; ?>
</a></h4>
							<div class="fl">
							<?php $_from = $this->_tpl_vars['subleftmenu']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subsubleftmenu']):
?>
								<span class="fl"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?mod=search&ac=search&keywords=<?php echo $this->_tpl_vars['subsubleftmenu']['keywords']; ?>
"><?php echo $this->_tpl_vars['subsubleftmenu']['catname']; ?>
</a></span>
							<?php endforeach; endif; unset($_from); ?>
							</div>
						</div>
					<?php endforeach; endif; unset($_from); ?>
				</div>
				<h3><?php echo $this->_tpl_vars['leftmenu']['catname']; ?>
</h3>
				<p class="com"><?php $_from = $this->_tpl_vars['leftmenu']['recommend']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['recommendmenu']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?mod=search&ac=search&keywords=<?php echo $this->_tpl_vars['recommendmenu']['keywords']; ?>
"><?php echo $this->_tpl_vars['recommendmenu']['catname']; ?>
</a>&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></p>
			</div>
			<?php endforeach; endif; unset($_from); ?>
		</div>

	</div>
	<div class="main_right">
		<div class="clearfix mt10">
			<!--幻灯片-->
			<div class="flashpicbox">
				<div class="premenu"> <a href="#"> </a> </div>
				<div class="nextmenu"> <a href="#"> </a> </div>
				<div class="flashpic">
					<ul>
						<?php $_from = $this->_tpl_vars['filmlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['film']):
?>
						<li> <img src="<?php echo $this->_tpl_vars['weburl']; ?>
/upload/common/<?php echo $this->_tpl_vars['film']['pic']; ?>
"> </li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
			</div>
			<!--幻灯片-->
			<div class="rightsearch">
				<div class="rightregister">
					<a href="#" class="a01">游览注册</a>
					<a href="#" class="a02 ml5">旅行社入驻</a>
				</div>
				<!--搜索-->
				<div class="indexsearchbox mt10">
					<h3></h3>
					<ul class="indexsearch_tab clearfix">
						<li class="here">出境游</li>
						<li>国内游</li>	
					</ul>
					<div class="box">
						<div class="citylist citylist03 hide">
							<h3><span class="close"></span>请从以下列表中选择</h3>
							<div class="box">
								<?php $_from = $this->_tpl_vars['citylist_en']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['city_en']):
?>
									<span class="city03"><?php echo $this->_tpl_vars['city_en']; ?>
</span>
								<?php endforeach; endif; unset($_from); ?>
							</div>
						</div>
						<div class="pricelist hide">
							<h3><span class="close"></span>请从以下列表中选择</h3>
							<div class="box">
								<span class="price_span">2000以内</span> <span class="price_span">2001-5000</span> <span class="price_span">5001-9999</span> <span class="price_span">10000-20000</span> <span class="price_span">20000以上</span>
							</div>
						</div>
						<div class="citylist citylist01 hide">
							<h3><span class="close"></span>请从以下列表中选择</h3>
							<div class="box">
								<?php $_from = $this->_tpl_vars['citylist_zh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['city_zh']):
?>
									<span class="city01"><?php echo $this->_tpl_vars['city_zh']; ?>
</span>
								<?php endforeach; endif; unset($_from); ?>
							</div>
						</div>
						<div class="citylist citylist02 hide">
							<h3><span class="close"></span>请从以下列表中选择</h3>
							<div class="box">
								<?php $_from = $this->_tpl_vars['citylist_zh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['city_zh']):
?>
									<span class="city02"><?php echo $this->_tpl_vars['city_zh']; ?>
</span>
								<?php endforeach; endif; unset($_from); ?>
							</div>
						</div>
						<form method="get" action="<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?mod=search">
							<div class="searchboxbox">
								<p class="clearfix"><span class="fl"><input type="text" value="出发地" name="departure_city" class="inp01 remindAuto"></span><span class="fl pl10"><input type="text" value="目的地" value="" name="arrival_city_en" class="inp01 remindAuto"></span></p>
								<p class="clearfix hide"><span class="fl"><input type="text" name="departure_city" value="出发地" class="inp01 remindAuto"></span><span class="fl pl10"><input type="text" value="目的地" name="arrival_city" class="inp01 remindAuto"></span></p>
							</div>
							<p><input id="demo_inp1" type="text" name="departure_date" value="出发日期" class="inp02 remindAuto"></p>
							<p><input type="text" name="price" value="价格区间" class="inp03 remindAuto" readonly="readonly"></p>
							<p><input type="text" name="keywords" value="关键词" class="inp04 remindAuto"></p>
							<p><input type="submit" value="搜 索" class="searchbut"/></p>
							<input type="hidden" name="mod" value="search"/>
							<input type="hidden" name="ac" value="search"/>
						</form>
					</div>
				</div>
				<!--搜索-->
			</div>
		</div>
	</div>
</div>

<div class="main_body products j_product_row">
	<div class="head">
		<img class="ico" src="http://i1.cctcdn.com/up/i/1605/06/8a12eb1e0c12.png" title="出境游" alt="康辉旅游网出境游">
		<span class="title">
                                            出境游                                    </span>
	</div>
	<div id="recommendLocations" class="product_sugest_dest j_dest">
		<div class="j_group">
			<div class="title j_title" data-cate="出境游">热门国家</div>
			<div class="content">
				<a target="_blank" href="http://www.cct.cn/bourne/taiguo/all/">泰国</a>
				<a target="_blank" href="http://www.cct.cn/bourne/hanguo/all/">韩国</a>
				<a target="_blank" href="http://www.cct.cn/bourne/riben/all/">日本</a>
				<a target="_blank" href="http://www.cct.cn/bourne/meiguo/all/">美国</a>
				<a target="_blank" href="http://www.cct.cn/bourne/xinjiapo/all/">新加坡</a>
				<a target="_blank" href="http://www.cct.cn/bourne/faguo/all/">法国</a>
				<a target="_blank" href="http://www.cct.cn/bourne/ruishi/all/">瑞士</a>
				<a target="_blank" href="http://www.cct.cn/bourne/maerdaifu/all/">马尔代夫</a>
				<a target="_blank" href="http://www.cct.cn/bourne/deguo/all/">德国</a>
				<a target="_blank" href="http://www.cct.cn/bourne/eluosi/all/">俄罗斯</a>
				<a target="_blank" href="http://www.cct.cn/bourne/yidali/all/">意大利</a>
			</div>
		</div>
		<div class="j_group">
			<div class="title j_title" data-cate="出境游">热门城市</div>
			<div class="content">
				<a target="_blank" href="http://www.cct.cn/bourne/xianggang/all/">香港</a>
				<a target="_blank" href="http://www.cct.cn/bourne/dongjing/all/">东京</a>
				<a target="_blank" href="http://www.cct.cn/bourne/shouer/all/">首尔</a>
				<a target="_blank" href="http://www.cct.cn/bourne/luoma/all/">罗马</a>
				<a target="_blank" href="http://www.cct.cn/bourne/pujidao/all/">普吉岛</a>
				<a target="_blank" href="http://www.cct.cn/bourne/okinawa-nahachongsheng-naba/all/">冲绳</a>
				<a target="_blank" href="http://www.cct.cn/bourne/shaba/all/">沙巴</a>
				<a target="_blank" href="http://www.cct.cn/bourne/taibei/all/">台北</a>
				<a target="_blank" href="http://www.cct.cn/bourne/balidao/all/">巴厘岛</a>
				<a target="_blank" href="http://www.cct.cn/bourne/da/all/">大阪</a>
				<a target="_blank" href="http://www.cct.cn/bourne/sumeidao/all/">苏梅岛</a>
				<a target="_blank" href="http://www.cct.cn/bourne/jingdu/all/">京都</a>
				<a target="_blank" href="http://www.cct.cn/bourne/jizhoudao/all/">济州岛</a>
				<a target="_blank" href="http://www.cct.cn/bourne/qingmai/all/">清迈</a>
				<a target="_blank" href="http://www.cct.cn/bourne/basailuona/all/">巴塞罗那</a>
				<a target="_blank" href="http://www.cct.cn/bourne/changtandao/all/">长滩岛</a>
				<a target="_blank" href="http://www.cct.cn/bourne/saibandao/all/">塞班</a>
				<a target="_blank" href="http://www.cct.cn/bourne/xini/all/">悉尼</a>
			</div>
		</div>
	</div>
	<div class="product_tab">
		<ul id="chujing_tab">
			<li class="on"><a href="javascript:void(0);">东南亚</a></li>
			<li class=""><a href="javascript:void(0);">韩国</a></li>
			<li class=""><a href="javascript:void(0);">泰国</a></li>
			<li class=""><a href="javascript:void(0);">日本</a></li>
			<li class=""><a href="javascript:void(0);">欧洲</a></li>
		</ul>
		<a target="_blank" href="http://www.cct.cn/bourne/chujinglvyou/all/" class="product_more">全部出境游线路</a>
	</div>
	<div class="product_area j_product_list" id="chujing_products">
		<div class="product_left j_group on" data-cate="出境游-东南亚" style="display: block;">
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10088.html" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游(华美威斯汀)">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1603/23/efd2fed8f81379bc87d63d94f437330c.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1603/23/efd2fed8f81379bc87d63d94f437330c.jpg_366x244q80.jpg" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游(华美威斯汀)" alt="康辉旅游网北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游(华美威斯汀)" style="display: inline;">
					<div class="title">北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游(华美威斯汀)</div>
					<div class="product_price">
						<span>￥2680起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10089.html" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游（华美威斯汀），泰航直飞">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1604/19/cd667e6f6b5f.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1604/19/cd667e6f6b5f.jpg_366x244q80.jpg" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游（华美威斯汀），泰航直飞" alt="康辉旅游网北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游（华美威斯汀），泰航直飞" style="display: inline;">
					<div class="title">北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游（华美威斯汀），泰航直飞</div>
					<div class="product_price">
						<span>￥3499起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10031.html" title="北京出发吉隆坡+波德申5晚7天跟团游">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1604/13/46649ecc7b7e6c8a104c83f0058249b9.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1604/13/46649ecc7b7e6c8a104c83f0058249b9.jpg_366x244q80.jpg" title="北京出发吉隆坡+波德申5晚7天跟团游" alt="康辉旅游网北京出发吉隆坡+波德申5晚7天跟团游" style="display: inline;">
					<div class="title">北京出发吉隆坡+波德申5晚7天跟团游</div>
					<div class="product_price">
						<span>￥3999起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12484.html" title="北京出发曼谷+沙美岛+芭堤雅5晚7天跟团游（轻奢泰国），芭堤雅自由活动，泰航直飞，无强制自费">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1604/19/61394057655c.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1604/19/61394057655c.jpg_366x244q80.jpg" title="北京出发曼谷+沙美岛+芭堤雅5晚7天跟团游（轻奢泰国），芭堤雅自由活动，泰航直飞，无强制自费" alt="康辉旅游网北京出发曼谷+沙美岛+芭堤雅5晚7天跟团游（轻奢泰国），芭堤雅自由活动，泰航直飞，无强制自费" style="display: inline;">
					<div class="title">北京出发曼谷+沙美岛+芭堤雅5晚7天跟团游（轻奢泰国），芭堤雅自由活动，泰航直飞，无强制自费</div>
					<div class="product_price">
						<span>￥4499起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10087.html" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游，泰航直飞">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1606/12/90d2384e6e1a.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1606/12/90d2384e6e1a.jpg_366x244q80.jpg" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游，泰航直飞" alt="康辉旅游网北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游，泰航直飞" style="display: inline;">
					<div class="title">北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游，泰航直飞</div>
					<div class="product_price">
						<span>￥3499起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/11308.html" title="北京出发苏梅+曼谷5晚6天跟团游，全程0自费 苏梅3晚海边酒店 曼谷2晚市区国际五星 全程免费移动WI-FI">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/13/36985291259e2abcdfd59231507d2856.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/13/36985291259e2abcdfd59231507d2856.jpg_366x244q80.jpg" title="北京出发苏梅+曼谷5晚6天跟团游，全程0自费 苏梅3晚海边酒店 曼谷2晚市区国际五星 全程免费移动WI-FI" alt="康辉旅游网北京出发苏梅+曼谷5晚6天跟团游，全程0自费 苏梅3晚海边酒店 曼谷2晚市区国际五星 全程免费移动WI-FI" style="display: inline;">
					<div class="title">北京出发苏梅+曼谷5晚6天跟团游，全程0自费 苏梅3晚海边酒店 曼谷2晚市区国际五星 全程免费移动WI-FI</div>
					<div class="product_price">
						<span>￥5699起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/15960.html" title="北京出发国航直飞新加坡6天往返机票（含税）">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1604/13/97e4377f64b94abe5917a41780a611f8.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1604/13/97e4377f64b94abe5917a41780a611f8.jpg_366x244q80.jpg" title="北京出发国航直飞新加坡6天往返机票（含税）" alt="康辉旅游网北京出发国航直飞新加坡6天往返机票（含税）" style="display: inline;">
					<div class="title">北京出发国航直飞新加坡6天往返机票（含税）</div>
					<div class="product_price">
						<span>￥2999起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10035.html" title="北京出发清迈+清莱5晚7天跟团游，国航直飞，泰北全景白庙+黑庙">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1605/30/efa1a6834e9a.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1605/30/efa1a6834e9a.jpg_366x244q80.jpg" title="北京出发清迈+清莱5晚7天跟团游，国航直飞，泰北全景白庙+黑庙" alt="康辉旅游网北京出发清迈+清莱5晚7天跟团游，国航直飞，泰北全景白庙+黑庙" style="display: inline;">
					<div class="title">北京出发清迈+清莱5晚7天跟团游，国航直飞，泰北全景白庙+黑庙</div>
					<div class="product_price">
						<span>￥4999起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/13314.html" title="北京出发吉隆坡5晚7天自由行国航直飞">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1604/13/5b7d529c4ae85165b9efa0dc9bae79c2.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1604/13/5b7d529c4ae85165b9efa0dc9bae79c2.jpg_366x244q80.jpg" title="北京出发吉隆坡5晚7天自由行国航直飞" alt="康辉旅游网北京出发吉隆坡5晚7天自由行国航直飞" style="display: inline;">
					<div class="title">北京出发吉隆坡5晚7天自由行国航直飞</div>
					<div class="product_price">
						<span>￥3300起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/13472.html" title="北京出发泰航直飞曼谷6天往返机票（含税）">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/13/f7c75b9a93a708240ea200439aab9677.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/13/f7c75b9a93a708240ea200439aab9677.jpg_366x244q80.jpg" title="北京出发泰航直飞曼谷6天往返机票（含税）" alt="康辉旅游网北京出发泰航直飞曼谷6天往返机票（含税）" style="display: inline;">
					<div class="title">北京出发泰航直飞曼谷6天往返机票（含税）</div>
					<div class="product_price">
						<span>￥3399起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
		</div>
		<div class="product_left j_group " data-cate="出境游-韩国" style="display: none;">
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12463.html" title="北京出发跟团游，暑期韩国亲子游，济州岛一地4日">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1606/16/89d4475fcbc2.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1606/16/89d4475fcbc2.jpg_366x244q80.jpg" title="北京出发跟团游，暑期韩国亲子游，济州岛一地4日" alt="康辉旅游网北京出发跟团游，暑期韩国亲子游，济州岛一地4日" style="display: inline;">
					<div class="title">北京出发跟团游，暑期韩国亲子游，济州岛一地4日</div>
					<div class="product_price">
						<span>￥3380起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12432.html" title="北京出发跟团游，暑期韩国首尔一地5日半自助游">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1606/16/94d55d6fd744.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1606/16/94d55d6fd744.jpg_366x244q80.jpg" title="北京出发跟团游，暑期韩国首尔一地5日半自助游" alt="康辉旅游网北京出发跟团游，暑期韩国首尔一地5日半自助游" style="display: inline;">
					<div class="title">北京出发跟团游，暑期韩国首尔一地5日半自助游</div>
					<div class="product_price">
						<span>￥3180起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12441.html" title="北京出发韩国首尔一地4晚5日跟团游 畅享一天自由活动">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1606/16/e20e786d22c8.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1606/16/e20e786d22c8.jpg_366x244q80.jpg" title="北京出发韩国首尔一地4晚5日跟团游 畅享一天自由活动" alt="康辉旅游网北京出发韩国首尔一地4晚5日跟团游 畅享一天自由活动" style="display: inline;">
					<div class="title">北京出发韩国首尔一地4晚5日跟团游 畅享一天自由活动</div>
					<div class="product_price">
						<span>￥4099起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12417.html" title="北京出发  韩国首尔济州暑期亲子游 三飞五日">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/15/710faca2040a.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/15/710faca2040a.jpg_366x244q80.jpg" title="北京出发  韩国首尔济州暑期亲子游 三飞五日" alt="康辉旅游网北京出发  韩国首尔济州暑期亲子游 三飞五日" style="display: inline;">
					<div class="title">北京出发  韩国首尔济州暑期亲子游 三飞五日</div>
					<div class="product_price">
						<span>￥4280起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10904.html" title="9月11日 歌诗达大西洋号邮轮 天津-仁川（首尔）-天津4晚5日游">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/o/1604/15/0ce0324a472b6dc5da55c8dd420f7c7e.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/o/1604/15/0ce0324a472b6dc5da55c8dd420f7c7e.jpg_366x244q80.jpg" title="9月11日 歌诗达大西洋号邮轮 天津-仁川（首尔）-天津4晚5日游" alt="康辉旅游网9月11日 歌诗达大西洋号邮轮 天津-仁川（首尔）-天津4晚5日游" style="display: inline;">
					<div class="title">9月11日 歌诗达大西洋号邮轮 天津-仁川（首尔）-天津4晚5日游</div>
					<div class="product_price">
						<span>￥2499起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/13823.html" title="北京出发跟团游，暑期韩国首尔一地4晚5天，1天自由活动，半自助游">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1606/16/3b3fd449b66b.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1606/16/3b3fd449b66b.jpg_366x244q80.jpg" title="北京出发跟团游，暑期韩国首尔一地4晚5天，1天自由活动，半自助游" alt="康辉旅游网北京出发跟团游，暑期韩国首尔一地4晚5天，1天自由活动，半自助游" style="display: inline;">
					<div class="title">北京出发跟团游，暑期韩国首尔一地4晚5天，1天自由活动，半自助游</div>
					<div class="product_price">
						<span>￥3580起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/16932.html" title="北京出发 炫彩韩国--首尔济州三飞五日">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1607/01/6d77433a40ed.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1607/01/6d77433a40ed.jpg_366x244q80.jpg" title="北京出发 炫彩韩国--首尔济州三飞五日" alt="康辉旅游网北京出发 炫彩韩国--首尔济州三飞五日" style="display: inline;">
					<div class="title">北京出发 炫彩韩国--首尔济州三飞五日</div>
					<div class="product_price">
						<span>￥4380起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/16332.html" title="北京出发 韩国首尔济州四飞五日">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1607/01/b0d9bbf5b358.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1607/01/b0d9bbf5b358.jpg_366x244q80.jpg" title="北京出发 韩国首尔济州四飞五日" alt="康辉旅游网北京出发 韩国首尔济州四飞五日" style="display: inline;">
					<div class="title">北京出发 韩国首尔济州四飞五日</div>
					<div class="product_price">
						<span>￥4480起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/16370.html" title="北京出发 首济三飞五日双园乐享升级版--济州进">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1606/16/3b3fd449b66b.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1606/16/3b3fd449b66b.jpg_366x244q80.jpg" title="北京出发 首济三飞五日双园乐享升级版--济州进" alt="康辉旅游网北京出发 首济三飞五日双园乐享升级版--济州进" style="display: inline;">
					<div class="title">北京出发 首济三飞五日双园乐享升级版--济州进</div>
					<div class="product_price">
						<span>￥4980起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/16543.html" title="西安往返首尔，畅游亚洲室内最大游乐场乐天世界6天5晚跟团游，2天自由活动">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1607/01/7c70a605fb00.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1607/01/7c70a605fb00.jpg_366x244q80.jpg" title="西安往返首尔，畅游亚洲室内最大游乐场乐天世界6天5晚跟团游，2天自由活动" alt="康辉旅游网西安往返首尔，畅游亚洲室内最大游乐场乐天世界6天5晚跟团游，2天自由活动" style="display: inline;">
					<div class="title">西安往返首尔，畅游亚洲室内最大游乐场乐天世界6天5晚跟团游，2天自由活动</div>
					<div class="product_price">
						<span>￥2980起</span>
						<span class="product_origin">西安出发</span>
					</div>
				</a>
			</div>
		</div>
		<div class="product_left j_group " data-cate="出境游-泰国" style="display: none;">
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10088.html" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游(华美威斯汀)">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1603/23/efd2fed8f81379bc87d63d94f437330c.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1603/23/efd2fed8f81379bc87d63d94f437330c.jpg_366x244q80.jpg" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游(华美威斯汀)" alt="康辉旅游网北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游(华美威斯汀)" style="display: inline;">
					<div class="title">北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游(华美威斯汀)</div>
					<div class="product_price">
						<span>￥2680起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10089.html" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游（华美威斯汀），泰航直飞">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1604/19/cd667e6f6b5f.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1604/19/cd667e6f6b5f.jpg_366x244q80.jpg" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游（华美威斯汀），泰航直飞" alt="康辉旅游网北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游（华美威斯汀），泰航直飞" style="display: inline;">
					<div class="title">北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游（华美威斯汀），泰航直飞</div>
					<div class="product_price">
						<span>￥3499起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12484.html" title="北京出发曼谷+沙美岛+芭堤雅5晚7天跟团游（轻奢泰国），芭堤雅自由活动，泰航直飞，无强制自费">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1604/19/61394057655c.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1604/19/61394057655c.jpg_366x244q80.jpg" title="北京出发曼谷+沙美岛+芭堤雅5晚7天跟团游（轻奢泰国），芭堤雅自由活动，泰航直飞，无强制自费" alt="康辉旅游网北京出发曼谷+沙美岛+芭堤雅5晚7天跟团游（轻奢泰国），芭堤雅自由活动，泰航直飞，无强制自费" style="display: inline;">
					<div class="title">北京出发曼谷+沙美岛+芭堤雅5晚7天跟团游（轻奢泰国），芭堤雅自由活动，泰航直飞，无强制自费</div>
					<div class="product_price">
						<span>￥4499起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10087.html" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游，泰航直飞">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1606/12/90d2384e6e1a.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1606/12/90d2384e6e1a.jpg_366x244q80.jpg" title="北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游，泰航直飞" alt="康辉旅游网北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游，泰航直飞" style="display: inline;">
					<div class="title">北京出发曼谷+芭堤雅+沙美岛5晚7天跟团游，泰航直飞</div>
					<div class="product_price">
						<span>￥3499起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/11308.html" title="北京出发苏梅+曼谷5晚6天跟团游，全程0自费 苏梅3晚海边酒店 曼谷2晚市区国际五星 全程免费移动WI-FI">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/13/36985291259e2abcdfd59231507d2856.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/13/36985291259e2abcdfd59231507d2856.jpg_366x244q80.jpg" title="北京出发苏梅+曼谷5晚6天跟团游，全程0自费 苏梅3晚海边酒店 曼谷2晚市区国际五星 全程免费移动WI-FI" alt="康辉旅游网北京出发苏梅+曼谷5晚6天跟团游，全程0自费 苏梅3晚海边酒店 曼谷2晚市区国际五星 全程免费移动WI-FI" style="display: inline;">
					<div class="title">北京出发苏梅+曼谷5晚6天跟团游，全程0自费 苏梅3晚海边酒店 曼谷2晚市区国际五星 全程免费移动WI-FI</div>
					<div class="product_price">
						<span>￥5699起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10035.html" title="北京出发清迈+清莱5晚7天跟团游，国航直飞，泰北全景白庙+黑庙">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1605/30/efa1a6834e9a.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1605/30/efa1a6834e9a.jpg_366x244q80.jpg" title="北京出发清迈+清莱5晚7天跟团游，国航直飞，泰北全景白庙+黑庙" alt="康辉旅游网北京出发清迈+清莱5晚7天跟团游，国航直飞，泰北全景白庙+黑庙" style="display: inline;">
					<div class="title">北京出发清迈+清莱5晚7天跟团游，国航直飞，泰北全景白庙+黑庙</div>
					<div class="product_price">
						<span>￥4999起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/13472.html" title="北京出发泰航直飞曼谷6天往返机票（含税）">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/13/f7c75b9a93a708240ea200439aab9677.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/13/f7c75b9a93a708240ea200439aab9677.jpg_366x244q80.jpg" title="北京出发泰航直飞曼谷6天往返机票（含税）" alt="康辉旅游网北京出发泰航直飞曼谷6天往返机票（含税）" style="display: inline;">
					<div class="title">北京出发泰航直飞曼谷6天往返机票（含税）</div>
					<div class="product_price">
						<span>￥3399起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/11981.html" title="北京出发新加坡+普吉岛6晚8日跟团游，新加坡城市观光，普吉岛赠送幻多奇！">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/13/b0c67eb7d5c439931e7fa51ff32b0842.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/13/b0c67eb7d5c439931e7fa51ff32b0842.jpg_366x244q80.jpg" title="北京出发新加坡+普吉岛6晚8日跟团游，新加坡城市观光，普吉岛赠送幻多奇！" alt="康辉旅游网北京出发新加坡+普吉岛6晚8日跟团游，新加坡城市观光，普吉岛赠送幻多奇！" style="display: inline;">
					<div class="title">北京出发新加坡+普吉岛6晚8日跟团游，新加坡城市观光，普吉岛赠送幻多奇！</div>
					<div class="product_price">
						<span>￥5390起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/11904.html" title="亲子游-北京出发新加坡+普吉岛6晚8日跟团游， 热带风暴水上乐园无限畅玩">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1604/01/9943a0ea4610b456093a57ba0735b10a.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1604/01/9943a0ea4610b456093a57ba0735b10a.jpg_366x244q80.jpg" title="亲子游-北京出发新加坡+普吉岛6晚8日跟团游， 热带风暴水上乐园无限畅玩" alt="康辉旅游网亲子游-北京出发新加坡+普吉岛6晚8日跟团游， 热带风暴水上乐园无限畅玩" style="display: inline;">
					<div class="title">亲子游-北京出发新加坡+普吉岛6晚8日跟团游， 热带风暴水上乐园无限畅玩</div>
					<div class="product_price">
						<span>￥6390起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12738.html" title="北京出发苏梅曼谷5晚7天自由行，泰航+曼航">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1606/17/c7cefaf6ca47.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1606/17/c7cefaf6ca47.jpg_366x244q80.jpg" title="北京出发苏梅曼谷5晚7天自由行，泰航+曼航" alt="康辉旅游网北京出发苏梅曼谷5晚7天自由行，泰航+曼航" style="display: inline;">
					<div class="title">北京出发苏梅曼谷5晚7天自由行，泰航+曼航</div>
					<div class="product_price">
						<span>￥7180起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
		</div>
		<div class="product_left j_group " data-cate="出境游-日本" style="display: none;">
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/13690.html" title="北京往返日本东京5日4晚自由行">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1606/15/0a9872798714.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1606/15/0a9872798714.jpg_366x244q80.jpg" title="北京往返日本东京5日4晚自由行" alt="康辉旅游网北京往返日本东京5日4晚自由行" style="display: inline;">
					<div class="title">北京往返日本东京5日4晚自由行</div>
					<div class="product_price">
						<span>￥6090起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12195.html" title="北京往返日本大阪+京都+富士山+东京6日5晚全景亲子游">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1604/13/d0a7a914101b00ab7c6a36d5517a06d3.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1604/13/d0a7a914101b00ab7c6a36d5517a06d3.jpg_366x244q80.jpg" title="北京往返日本大阪+京都+富士山+东京6日5晚全景亲子游" alt="康辉旅游网北京往返日本大阪+京都+富士山+东京6日5晚全景亲子游" style="display: inline;">
					<div class="title">北京往返日本大阪+京都+富士山+东京6日5晚全景亲子游</div>
					<div class="product_price">
						<span>￥9080起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/13194.html" title="7月31号 歌诗达幸运号 上海-济州-釜山-福冈-上海5晚6日">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1606/20/85d870fa9966.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1606/20/85d870fa9966.jpg_366x244q80.jpg" title="7月31号 歌诗达幸运号 上海-济州-釜山-福冈-上海5晚6日" alt="康辉旅游网7月31号 歌诗达幸运号 上海-济州-釜山-福冈-上海5晚6日" style="display: inline;">
					<div class="title">7月31号 歌诗达幸运号 上海-济州-釜山-福冈-上海5晚6日</div>
					<div class="product_price">
						<span>￥3999起</span>
						<span class="product_origin">上海出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/11896.html" title="成都出发日本本州全景7日双古都之旅，新增DIY寿司">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1606/15/ed9f58029c79.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1606/15/ed9f58029c79.jpg_366x244q80.jpg" title="成都出发日本本州全景7日双古都之旅，新增DIY寿司" alt="康辉旅游网成都出发日本本州全景7日双古都之旅，新增DIY寿司" style="display: inline;">
					<div class="title">成都出发日本本州全景7日双古都之旅，新增DIY寿司</div>
					<div class="product_price">
						<span>￥6480起</span>
						<span class="product_origin">成都出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12560.html" title="10月1日皇家邮轮海洋量子号上海-熊本-宫崎（油津）-上海5晚6日游（国庆假期）">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/13/79f53c2744acca1198d6acd764436b08.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/13/79f53c2744acca1198d6acd764436b08.jpg_366x244q80.jpg" title="10月1日皇家邮轮海洋量子号上海-熊本-宫崎（油津）-上海5晚6日游（国庆假期）" alt="康辉旅游网10月1日皇家邮轮海洋量子号上海-熊本-宫崎（油津）-上海5晚6日游（国庆假期）" style="display: inline;">
					<div class="title">10月1日皇家邮轮海洋量子号上海-熊本-宫崎（油津）-上海5晚6日游（国庆假期）</div>
					<div class="product_price">
						<span>￥7299起</span>
						<span class="product_origin">上海出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/14294.html" title="逢周日出发|丽星邮轮-处女星号广州南沙港-日本冲绳-日本本部町-广州南沙港 6天5晚">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1607/14/d7949182b206.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1607/14/d7949182b206.jpg_366x244q80.jpg" title="逢周日出发|丽星邮轮-处女星号广州南沙港-日本冲绳-日本本部町-广州南沙港 6天5晚" alt="康辉旅游网逢周日出发|丽星邮轮-处女星号广州南沙港-日本冲绳-日本本部町-广州南沙港 6天5晚" style="display: inline;">
					<div class="title">逢周日出发|丽星邮轮-处女星号广州南沙港-日本冲绳-日本本部町-广州南沙港 6天5晚</div>
					<div class="product_price">
						<span>￥1750起</span>
						<span class="product_origin">广州出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/16528.html" title="武汉直飞日本六天自由行(机票+签证)">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1606/30/c3870e566477.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1606/30/c3870e566477.jpg_366x244q80.jpg" title="武汉直飞日本六天自由行(机票+签证)" alt="康辉旅游网武汉直飞日本六天自由行(机票+签证)" style="display: inline;">
					<div class="title">武汉直飞日本六天自由行(机票+签证)</div>
					<div class="product_price">
						<span>￥2780起</span>
						<span class="product_origin">武汉出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/14749.html" title="08月26日 海洋神话号 厦门-冲绳-鹿儿岛-厦门 6天5晚">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1606/14/8b5fb7213368.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1606/14/8b5fb7213368.jpg_366x244q80.jpg" title="08月26日 海洋神话号 厦门-冲绳-鹿儿岛-厦门 6天5晚" alt="康辉旅游网08月26日 海洋神话号 厦门-冲绳-鹿儿岛-厦门 6天5晚" style="display: inline;">
					<div class="title">08月26日 海洋神话号 厦门-冲绳-鹿儿岛-厦门 6天5晚</div>
					<div class="product_price">
						<span>￥2999起</span>
						<span class="product_origin">厦门出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/14843.html" title="＜逸路邮轮＞7月31日歌诗达幸运号-上海-济州-釜山-福冈-上海5晚6天">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1606/20/85d870fa9966.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1606/20/85d870fa9966.jpg_366x244q80.jpg" title="＜逸路邮轮＞7月31日歌诗达幸运号-上海-济州-釜山-福冈-上海5晚6天" alt="康辉旅游网＜逸路邮轮＞7月31日歌诗达幸运号-上海-济州-釜山-福冈-上海5晚6天" style="display: inline;">
					<div class="title">＜逸路邮轮＞7月31日歌诗达幸运号-上海-济州-釜山-福冈-上海5晚6天</div>
					<div class="product_price">
						<span>￥4399起</span>
						<span class="product_origin">长沙出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12577.html" title="重庆直飞日本本州纯玩无自费全包6日跟团游，双选三乐园三古都">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/13/7ed7df5ba9b7810ddca47f58083d5c18.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/13/7ed7df5ba9b7810ddca47f58083d5c18.jpg_366x244q80.jpg" title="重庆直飞日本本州纯玩无自费全包6日跟团游，双选三乐园三古都" alt="康辉旅游网重庆直飞日本本州纯玩无自费全包6日跟团游，双选三乐园三古都" style="display: inline;">
					<div class="title">重庆直飞日本本州纯玩无自费全包6日跟团游，双选三乐园三古都</div>
					<div class="product_price">
						<span>￥5790起</span>
						<span class="product_origin">重庆出发</span>
					</div>
				</a>
			</div>
		</div>
		<div class="product_left j_group " data-cate="出境游-欧洲" style="display: none;">
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10958.html" title="北京往返德法意瑞12天9晚跟团游，国泰航空，全程三-四星级酒店">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1604/13/ef383d61c82d8e04da6a9f1f352f5d47.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1604/13/ef383d61c82d8e04da6a9f1f352f5d47.jpg_366x244q80.jpg" title="北京往返德法意瑞12天9晚跟团游，国泰航空，全程三-四星级酒店" alt="康辉旅游网北京往返德法意瑞12天9晚跟团游，国泰航空，全程三-四星级酒店" style="display: inline;">
					<div class="title">北京往返德法意瑞12天9晚跟团游，国泰航空，全程三-四星级酒店</div>
					<div class="product_price">
						<span>￥8999起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/11940.html" title="北京往返德法意瑞11天9晚跟团游，芬兰航空，三-四星级酒店">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/13/3716e800780bac7014984c9c57aea283.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/13/3716e800780bac7014984c9c57aea283.jpg_366x244q80.jpg" title="北京往返德法意瑞11天9晚跟团游，芬兰航空，三-四星级酒店" alt="康辉旅游网北京往返德法意瑞11天9晚跟团游，芬兰航空，三-四星级酒店" style="display: inline;">
					<div class="title">北京往返德法意瑞11天9晚跟团游，芬兰航空，三-四星级酒店</div>
					<div class="product_price">
						<span>￥9999起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10177.html" title="北京往返法意瑞11天9晚跟团游，阿联酋航空，全程三-四星级酒店">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1604/13/efe58ea1d6b1e0a68529a0a515ad8448.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1604/13/efe58ea1d6b1e0a68529a0a515ad8448.jpg_366x244q80.jpg" title="北京往返法意瑞11天9晚跟团游，阿联酋航空，全程三-四星级酒店" alt="康辉旅游网北京往返法意瑞11天9晚跟团游，阿联酋航空，全程三-四星级酒店" style="display: inline;">
					<div class="title">北京往返法意瑞11天9晚跟团游，阿联酋航空，全程三-四星级酒店</div>
					<div class="product_price">
						<span>￥12400起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10352.html" title="北京往返法意瑞14日11晚跟团游，阿提哈德航空，意大利深度">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1604/13/28a809e6be7fbbb940e30c63a2e6b834.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1604/13/28a809e6be7fbbb940e30c63a2e6b834.jpg_366x244q80.jpg" title="北京往返法意瑞14日11晚跟团游，阿提哈德航空，意大利深度" alt="康辉旅游网北京往返法意瑞14日11晚跟团游，阿提哈德航空，意大利深度" style="display: inline;">
					<div class="title">北京往返法意瑞14日11晚跟团游，阿提哈德航空，意大利深度</div>
					<div class="product_price">
						<span>￥12900起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10157.html" title="北京往返德法意瑞12天9晚跟团游，一价全含，阿提哈德航空">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1604/13/04011e62f6ec829d098befc9740069e4.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1604/13/04011e62f6ec829d098befc9740069e4.jpg_366x244q80.jpg" title="北京往返德法意瑞12天9晚跟团游，一价全含，阿提哈德航空" alt="康辉旅游网北京往返德法意瑞12天9晚跟团游，一价全含，阿提哈德航空" style="display: inline;">
					<div class="title">北京往返德法意瑞12天9晚跟团游，一价全含，阿提哈德航空</div>
					<div class="product_price">
						<span>￥13900起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/11028.html" title="北京往返法意瑞13天10晚跟团游，国航直飞，乐享迪士尼">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1604/13/dcad49be43f060cd8f477b62c1e86457.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1604/13/dcad49be43f060cd8f477b62c1e86457.jpg_366x244q80.jpg" title="北京往返法意瑞13天10晚跟团游，国航直飞，乐享迪士尼" alt="康辉旅游网北京往返法意瑞13天10晚跟团游，国航直飞，乐享迪士尼" style="display: inline;">
					<div class="title">北京往返法意瑞13天10晚跟团游，国航直飞，乐享迪士尼</div>
					<div class="product_price">
						<span>￥15400起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10166.html" title="北京往返德法意瑞12天10晚跟团游，一价全含，汉莎航空">
					<img class="lazy_img j_lazyImg" src="http://i4.cctcdn.com/up/i/1604/13/3716e800780bac7014984c9c57aea283.jpg_366x244q80.jpg" data-original="http://i4.cctcdn.com/up/i/1604/13/3716e800780bac7014984c9c57aea283.jpg_366x244q80.jpg" title="北京往返德法意瑞12天10晚跟团游，一价全含，汉莎航空" alt="康辉旅游网北京往返德法意瑞12天10晚跟团游，一价全含，汉莎航空" style="display: inline;">
					<div class="title">北京往返德法意瑞12天10晚跟团游，一价全含，汉莎航空</div>
					<div class="product_price">
						<span>￥17400起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/10341.html" title="北京往返德法意瑞13天11晚跟团游，一价全含，国航直飞, 四-五星级酒店">
					<img class="lazy_img j_lazyImg" src="http://i1.cctcdn.com/up/i/1604/13/04011e62f6ec829d098befc9740069e4.jpg_366x244q80.jpg" data-original="http://i1.cctcdn.com/up/i/1604/13/04011e62f6ec829d098befc9740069e4.jpg_366x244q80.jpg" title="北京往返德法意瑞13天11晚跟团游，一价全含，国航直飞, 四-五星级酒店" alt="康辉旅游网北京往返德法意瑞13天11晚跟团游，一价全含，国航直飞, 四-五星级酒店" style="display: inline;">
					<div class="title">北京往返德法意瑞13天11晚跟团游，一价全含，国航直飞, 四-五星级酒店</div>
					<div class="product_price">
						<span>￥20400起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/11431.html" title="皇家加勒比海洋和悦号 北京往返 地中海+西班牙双城记11晚12天邮轮之旅">
					<img class="lazy_img j_lazyImg" src="http://i3.cctcdn.com/up/i/1604/13/2adf90612ffc25f4b3472a80ded3d24d.jpg_366x244q80.jpg" data-original="http://i3.cctcdn.com/up/i/1604/13/2adf90612ffc25f4b3472a80ded3d24d.jpg_366x244q80.jpg" title="皇家加勒比海洋和悦号 北京往返 地中海+西班牙双城记11晚12天邮轮之旅" alt="康辉旅游网皇家加勒比海洋和悦号 北京往返 地中海+西班牙双城记11晚12天邮轮之旅" style="display: inline;">
					<div class="title">皇家加勒比海洋和悦号 北京往返 地中海+西班牙双城记11晚12天邮轮之旅</div>
					<div class="product_price">
						<span>￥29800起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
			<div class="product j_item">
				<a target="_blank" href="http://www.cct.cn/dujia/12399.html" title="北京往返德法瑞意+布拉格+维也纳13天10晚跟团游，海南航空8月团期">
					<img class="lazy_img j_lazyImg" src="http://i2.cctcdn.com/up/i/1604/13/dcad49be43f060cd8f477b62c1e86457.jpg_366x244q80.jpg" data-original="http://i2.cctcdn.com/up/i/1604/13/dcad49be43f060cd8f477b62c1e86457.jpg_366x244q80.jpg" title="北京往返德法瑞意+布拉格+维也纳13天10晚跟团游，海南航空8月团期" alt="康辉旅游网北京往返德法瑞意+布拉格+维也纳13天10晚跟团游，海南航空8月团期" style="display: inline;">
					<div class="title">北京往返德法瑞意+布拉格+维也纳13天10晚跟团游，海南航空8月团期</div>
					<div class="product_price">
						<span>￥14200起</span>
						<span class="product_origin">北京出发</span>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<!--友情链接-->
<div class="main mt10">
	<div class="flinkbox">
		<h3>友情链接</h3>
		<div class="box">
			<ul class="flinklist clearfix">
				<?php $_from = $this->_tpl_vars['flinklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['flink']):
?>
				<li><a href="<?php echo $this->_tpl_vars['flink']['l_address']; ?>
" target="_blank"><?php echo $this->_tpl_vars['flink']['l_name']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	</div>
</div>
<!--友情链接-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/block_service.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>