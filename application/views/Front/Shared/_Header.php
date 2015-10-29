<?php
	$this->load->helper('url');
?>
<header id="header"><!--header-->
	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4" data-bind="with: logo">
					<div class="logo pull-left">
						<a data-bind="attr: { href: logoLink }"><img data-bind="attr: { src : logoPath }" alt="" /></a>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							<li data-bind="visible: login"><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
							<li data-bind="visible: !login"><a href="<?php echo base_url('/dang-nhap'); ?>"><i class="fa fa-lock"></i> Đăng nhập</a></li>
							<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->

	<div class="header-bottom"><!--header-bottom-->
		<div data-bind="with: navigator" class="container">
			<div class="main-nav pull-left">
				<ul class="ul-main-nav" data-bind="foreach: listCategories">
					<li class="main-nav-item" data-bind="attr: { id: 'menu-item-' + Id }">
						<a data-bind="attr: { href: CategoryUrl }, css: active ? 'active' : ''">
							<span data-bind="text: Name"></span>
							<i class="fa fa-angle-down"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="sub-menu" data-bind="foreach: listCategories">
				<div class="sub-menu-box row" data-bind="attr: { id: 'sub-menu-item-' + Id, 'parent-id' : Id }">
					<div class="category col-sm-6" data-bind="foreach: groupChilds">
						<ul class="sub-menu-lv3 col-sm-6" data-bind="foreach: listItems">
							<li data-bind="css: isLv2 ? 'lv2' : 'lv3'">
								<a data-bind="attr: { href: CategoryUrl}, text: Name"></a>
								<i class="fa fa-caret-right" data-bind="visible: isLv2"></i>
							</li>
						</ul>
					</div>
					<div class="provider col-sm-6">
						<ul data-bind="foreach: providers">
							<li class="col-sm-6">
								<a data-bind="attr: { href: Link }">
									<img data-bind="attr: { src: LogoUrl, alt: Name}" />
									<p data-bind="text: '[' + Name + ']'"></p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->
<div class="clear"></div>