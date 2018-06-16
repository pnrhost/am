<?php
include "includes/head.php";
include "includes/top-menu.php";
?>
<!-- Mobile Top -->
<!-- <div class="mobile-top  visible-sm-* visible-xs"> -->
  <div class="mobile-top" style="display: none;">
 <div class="container">
    <div class="row">    
        <div class="col-xs-12" style="padding: 0">
        <div class="input-group">
                <div class="input-group-btn search-panel">
                   <img src="https://m.bidorbuy.co.za/mobilejquery/images/site/bidorbuy.png"  width="40">
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input style="height: 40px; line-height: 60px; background: #ffffff; border-right: none;border-left: none;" type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button style="height: 40px; border-left: none; border-right: none; border-top-right-radius: 0; border-bottom-right-radius: 0;" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
  </div>
</div>
  <!-- /row -->
</div>
<!-- /Mobile top -->

<div class="row hidden-sm hidden-xs" style="margin: 0;">
  <div class="content_wrapper">
    <div id="page_header">
      <div class="clearfix"></div>
      <!-- Site logo -->
      <div class="site-top  hidden-xs hidden-sm">
        <div id="site_logo">
          <a href="https://www.bidorbuy.co.za/" title="bidorbuy.co.za ~ Shop online on South Africa's safe and simple marketplace"><img src="https://www.bidorbuy.co.za/images/core/bidorbuy-logo.png" width="226" height="60" alt="bidorbuy.co.za ~ Shop online on South Africa's safe and simple marketplace"></a>
        </div>
        <!-- /Site Logo -->
        
        <!-- Search box -->
        <div id="search_bar">
          <form id="HeaderTradeSearchForm" method="post" action="https://www.bidorbuy.co.za/jsp/tradesearch/TradeSearch.jsp">
            <div id="headerTradeSearchInputWrapper">
              <input type="hidden" name="mode" value="execute">
              <input type="hidden" name="isInteractive" value="true">
              <input type="hidden" name="CategoryId" value="0">
              <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;"><input type="text" class="headerTradeSearchInput tt-hint" accesskey="4" value="" title="Search for anything" size="30" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input type="text" class="headerTradeSearchInput tt-input" id="headerTradeSearchInput" accesskey="4" name="IncludedKeywords" value="" title="Search for anything" placeholder="Search for anything" size="30" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: rgba(0, 0, 0, 0);"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Arial; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-tradeSearchSuggestions"></div></span></span>
            </div>
          </form>
          
          <div class="search_button_wrapper">
            <div class="bob-btn-group">
              <button onclick="javascript:$('#HeaderTradeSearchForm').submit();" class="bob-btn bob-btn-blue bob-btn-sm" style="font-size: 14px; margin-right: 0; padding: 2px 12px 4px 12px; border-right: 1px solid #0277BD;" title="Search bidorbuy">
              <i class="fa fa-search"></i>&nbsp;Search
              </button>
              <button class="bob-btn bob-btn-blue bob-btn-sm dropdown-toggle" style="font-size: 14px; margin-right: 0; padding: 2px 10px 4px 10px;" data-toggle="dropdown"><span class="caret"></span></button>
              <div class="search_advanced_wrapper dropdown-menu">
                
                <ul>
                  <li><a href="https://www.bidorbuy.co.za/jsp/tradesearch/TradeSearch.jsp" rel="nofollow,noindex">Advanced Search</a></li>
                  <li><a href="https://www.bidorbuy.co.za/jsp/usersearch/UserNameSearch.jsp" rel="nofollow,noindex">Search for Sellers</a></li>
                  <li><a href="https://www.bidorbuy.co.za/jsp/tradesearch/PopularSearches.jsp">Popular Searches</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- /Search box -->
        <!-- cart -->
        <div id="site_basket">
          <div id="cart" style="position:absolute;float:right;width:204px;z-index:7500;">
            <div class="quick_cart_wrapper">
              <div class="quick_cart_header"><a href="https://www.bidorbuy.co.za/jsp/cart/Cart.jsp" rel="nofollow, noindex" title="View your cart"><span class="fa fa-shopping-cart" style="margin-right: 10px;"></span>Cart<span class="itemcount"><script type="text/javascript">document.write(getCartCookieCount());</script>0</span></a></div>
              <div class="quick_cart_block">
                <div class="cart_no_item" style="display: none; padding: 0 15px;">Oh no! Your cart is currently empty...</div>
                <div class="cart_loading_image" style="display: none;">Retrieving cart details...</div>
                <ul><li></li></ul>
              </div>
            </div>
            <!-- /cart -->
            <!-- watchlist -->
            <div class="watchlist_wrapper">
              <div class="watchlist_header"><a href="https://www.bidorbuy.co.za/jsp/buyer/WatchList.jsp" rel="nofollow, noindex" title="View your watchlist"><span class="fa fa-eye" style="margin-right: 10px;"></span>Watchlist</a></div>
            </div>
            <!-- watchlist -->
            
          </div>
        </div>
      </div>
      </div> <!-- /page header -->
      <div class="clearfix"></div>
      <!-- category menu -->
      <nav id="myNavbar" class="navbar navbar-default hidden-xs hidden-sm " role="navigation" style="background-color:#ffba00">
        <!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav upper">
            <li class="dropdown" title="display all categories">
              <a data-hover="dropdown" data-toggle="dropdown"  class="dropdown-toggle " href="#">All Categories<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <div class="row megaMenu" style="width: 800px;margin-left: 0px">
                  <span class="col-lg-4">
                    <li><a href="#">Antiques &amp; Collectables</a></li>
                    <li><a href="#">Art</a></li>
                    <li><a href="#">Baby</a></li>
                    <li><a href="#">Bikes, Boats &amp; Other Vehicles</a></li>
                    <li><a href="#">Books &amp; Education</a></li>
                    <li><a href="#">Business, Farming &amp; Industry</a></li>
                    <li><a href="#">Car Parts &amp; Accessories</a></li>
                    <li><a href="#">Cell Phones &amp; Accessories</a></li>
                    <li><a href="#">Cars</a></li>
                    <li><a href="#">Clothing, Shoes &amp; Accessories</a></li>
                    <li><a href="#">Coins &amp; Notes</a></li>
                  </span>
                  <span class="col-lg-4">
                    <li><a href="#">Computers &amp; Networking</a></li>
                    <li><a href="#">Crafts</a></li>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Gaming</a></li>
                    <li><a href="#">Garden, Outdoor Living &amp; Pets</a></li>
                    <li><a href="#">Gemstones &amp; Rocks</a></li>
                    <li><a href="#">Gift Vouchers &amp; Coupons</a></li>
                    <li><a href="#">Health &amp; Beauty</a></li>
                    <li><a href="#">Holistic &amp; Esoteric</a></li>
                    <li><a href="#">Home&amp; Living</a></li>
                    <li><a href="#">Jewellery &amp; Watches</a></li>
                  </span>
                  <span class="col-lg-4">
                    <li><a href="#">Militaria</a></li>
                    <li><a href="#">Movies &amp; Television</a></li>
                    <li><a href="#">Music &amp; Instruments</a></li>
                    <li><a href="#">Photo &amp; Video</a></li>
                    <li><a href="#">Property</a></li>
                    <li><a href="#">Sport &amp; Leisure</a></li>
                    <li><a href="#">Stamps</a></li>
                    <li><a href="#">Toys &amp; Hobbies</a></li>
                    <li><a href="#">Travel &amp; Entertainment</a></li>
                    <li><a href="#">Unusual</a></li>
                    <li><a href="#">Articles</a></li>
                  </span>
                </div>
              </ul>
            </li>
            <li class="dropdown" title="new and used car for sell">
              <a data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle " href="#">Vehicles<b class="caret"></b></a>
              <ul class="dropdown-menu" style="left: 0%;">
                <div class="row megaMenu" style="width: 800px;margin-left: 0px;">
                  <span class="col-lg-4">
                    <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                  </span>
                  <span class="col-lg-4">
                    <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                  </span>
                  <span class="col-lg-4">
                    <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                  </span>
                </div>
              </ul>
            </li>
            <li class="dropdown" title="travel and entertainment related items for sell">
              <a data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle " href="#">Travel<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <div class="row megaMenu" style="width: 800px;margin-left: 0px">
                  <span class="col-lg-4">
                    <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                  </span>
                  <span class="col-lg-4">
                    <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                  </span>
                  <span class="col-lg-4">
                    <li><a href="#"><p>Your text message here</p></a></li>
                  </span>
                </div>                        </ul>
              </li>
              <li class="dropdown" title="shop online | only the best deals for ladies,Men and kids fashion">
                <a data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle " href="#">Fashion<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <div class="row megaMenu" style="width:780px;margin-left: 0px">
                    <span class="col-lg-4">
                      <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                    </span>
                    <span class="col-lg-4">
                      <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                    </span>
                    <span class="col-lg-4">
                      <li><a href="#"><p>Your text message here</p></a></li>
                    </span>
                  </div>
                </ul>
              </li>
              <li class="dropdown" title="Home and Living | Furniture, Decor,Appliances and Groceries">
                <a data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle " href="#">Life Style<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <div class="row megaMenu" style="width: 700px;margin-left: 0px">
                    <span class="col-lg-4">
                      <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                    </span>
                    <span class="col-lg-4">
                      <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                    </span>
                    <span class="col-lg-4">
                      <li><a href="#"><p>Your text message here</p></a></li>
                    </span>
                  </div>
                </ul>
              </li>
              <li class="dropdown" title="Electronics for sell | Electronics shop">
                <a href="#" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle ">Digital <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <div class="row megaMenu" style="width: 600px;margin-left: 0px">
                    <span class="col-lg-6">
                      <li><a href="#"><img src="http://via.placeholder.com/225x200"></a></li>
                    </span>
                    <span class="col-lg-4">
                      <li><a href="#"><p>Your text message here</p></a></li>
                    </span>
                  </div>
                </ul>
              </li>
              <li title="Best daily deals on bidorbuy Deal of the week"><a href="#" class="dropdown">Deal of the week</a></li>
              <li title="Start selling online now - bidorbuy Stores"><a href="#" class="dropdown">Stores</a></li>
              <li class="dropdown" title="All public pages">
                <a href="#" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle ">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="404.php">404 Page</a></li>
                  <li><a href="category.php">Category</a></li>
                  <li><a href="notifications.php">Notifications</a></li>
                  <li><a href="travel.php">Travel</a></li>
                  <li><a href="products.php">Products</a></li>
                  <li><a href="complaint.php">Complaint</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="UserLogin.php">Sign In</a></li>
                  <li><a href="UserRegistration.php">Register</a></li>
                  <li><a href="UserPasswordReset.php">Password Reset</a></li>
                  <li><a href="itemSell.php">Sell an Item</a></li>
                  <li><a href="individual_auction.php">Individual Auction</a></li>
                  <li><a href="auctionCreate.php">Create/Edit Auction</a></li>
                  <li><a href="composeMessage.php">Compose Message</a></li>
                  <li><a href="messageInbox.php">Inbox Messages</a></li>
                  <li><a href="seller_profile.php">Seller Profile</a></li>
                  <li><a href="ratings.php">Ratings</a></li>
                  <li><a href="userProducts.php">User Products</a></li>
                  <li><a href="bids.php">List of bids</a></li>
                  <li><a href="settings.php">Settings</a></li>
                </ul>
              </li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right upper">
              <li class="dropdown">
                <a href="#" data-hover="dropdown" data-toggle="dropdown" >Promotions <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Crazy Wednesday</a></li>
                  <li><a href="#">Snap Friday</a></li>
                  <li><a href="#">Weekend Specials</a></li>
                  <li><a href="#">Crazy Austion</a></li>
                  <li><a href="#">Charity Listings</a></li>
                  <li><a href="#">Discovery Miles</a></li>
                  <li><a href="#">Subscribe!</a></li>
                  <li><a href="#">Make an Offer</a></li>
                  <li><a href="#">Shop on Credit</a></li>
                  <li><a href="#">Book Flights</a></li>
                  <li><a href="#">Book Holidays</a></li>
                </ul>
              </li>
            </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
          <!-- category menu -->
          </div> <!-- page wrapper -->
        </div>