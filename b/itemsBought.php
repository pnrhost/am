<link rel="stylesheet" type="text/css" href="css/bidorbuy.css">

<?php
include "includes/header.php";
?>

<div class="container">
    <div class="col-md-11" style="margin-left: 5%">

<div class="genericheaderinclude grey_page_wrapper">
        <h1>All Items Bought or Won</h1>
        <div class="clear_break"></div>
        
        <div class="grey_page_containerWide" style="margin: 5px; width: auto; float: none;">
            <div class="container-fluid lead-top" style="padding-bottom: 10px;">
                <div class="row-fluid">
                    <div class="span12" style="font-weight: bold;">Search Filter</div>
                </div>
                
                <div class="row-fluid">
                    <div class="span5">
                        <label for="mode" style="width: 40px; display: inline-block;">Find</label>
                        <select id="mode" name="mode" onchange="modeReload(this);">
                            <option value="All" selected="selected">All Items Bought or Won</option>
                            <option value="Recent">Recent Purchases</option>
                            <option value="RecentFeedbackRequired">Purchases with Feedback Required</option>
                            <option value="PendingSNC">Purchases with Pending SNC's</option>
                            <option value="CompletedSNC">Purchases with Completed SNC's</option>
                            <option value="SellerName">Purchases from a Seller</option>
                        </select>
                    </div>
                    <div id="sellerSearch" class="span7" style="display: none">
                        <label style="width: 40px; display: inline-block;">Seller</label>
                        <input type="text" name="SellerName" value="">
                        <br>
                        <div class="go-left gray" style="margin-left: 40px;"><b>Search</b> for sellers by <b>name</b> or <b>email address</b></div>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div class="span5">
                        <label for="datepicker" style="width: 40px; display: inline-block;">From</label>
                        <input type="text" id="datepicker" name="fromDate" value="Wednesday, 29 March, 2017" style="width: 200px;" readonly="readonly" class="hasDatepicker">
                    </div>
                    <div class="span5">
                        <label for="datepicker1" style="width: 40px; display: inline-block;">To</label>
                        <input type="text" id="datepicker1" name="toDate" value="Thursday, 29 March, 2018" style="width: 200px;" readonly="readonly" class="hasDatepicker">
                    </div>
                    <div class="span2">
                        <button class="bob-btn bob-btn-blue bob-btn-sm" onclick="setAsStandard(); return isSellerEntered();">
                            <i class="fa fa-search"></i>&nbsp;Search Again
                        </button>
                    </div>
                </div>
            </div>
            </div>
        

        <div class="clear_break"></div>

        <div class="grey_page_containerWide" style="margin: 5px; width: auto; float: none;">
            <div class="container-fluid lead-top" style="padding-bottom: 10px;">
                <div class="row-fluid">
                    <div class="span12" style="font-weight: bold;">Download Purchases</div>
                </div>
                
                <div class="row-fluid">
                    <div class="span9">
                        <button class="bob-btn btn-purple bob-btn-sm" type="submit" name="SearchAgainSpreadsheetFormat" onclick="setAsSpreadSheet('1');return true;">
                            <i class="fa fa-file-excel-o"></i>&nbsp;For Microsoft Excel
                        </button>
                    </div>
                    <div class="span3">
                        <button class="bob-btn bob-btn-cyan bob-btn-sm pull-right" type="submit" name="SearchAgainSpreadsheetFormat" onclick="setAsSpreadSheet('0'); return true;">
                            <i class="fa fa-cog"></i>&nbsp;For Other Tools
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear_break15"></div>
    </div>


<div class="wishlist_full_left" style="margin-top: 3%">
        <div id="table_buyeritemsboughorwon_wrapper" class="dataTables_wrapper" role="grid"><div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-tl ui-corner-tr ui-helper-clearfix"><div id="table_buyeritemsboughorwon_length" class="dataTables_length"><label>Show <select size="1" name="table_buyeritemsboughorwon_length" aria-controls="table_buyeritemsboughorwon"><option value="10">10</option><option value="25" selected="selected">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers" id="table_buyeritemsboughorwon_paginate"><a tabindex="0" class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default ui-state-disabled" id="table_buyeritemsboughorwon_first">First</a><a tabindex="0" class="previous fg-button ui-button ui-state-default ui-state-disabled" id="table_buyeritemsboughorwon_previous">Previous</a><span></span><a tabindex="0" class="next fg-button ui-button ui-state-default ui-state-disabled" id="table_buyeritemsboughorwon_next">Next</a><a tabindex="0" class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default ui-state-disabled" id="table_buyeritemsboughorwon_last">Last</a></div><div id="table_buyeritemsboughorwon_processing" class="dataTables_processing" style="visibility: hidden;">Processing...</div></div><table class="display dataTable" id="table_buyeritemsboughorwon" aria-describedby="table_buyeritemsboughorwon_info">
          <thead>
            <tr role="row"><th style="text-align:center;" class="watchlist_align_left_top ui-state-default" role="columnheader" tabindex="0" aria-controls="table_buyeritemsboughorwon" rowspan="1" colspan="1" aria-label="Purchase: activate to sort column ascending"><div class="DataTables_sort_wrapper">Purchase<span class="DataTables_sort_icon css_right ui-icon ui-icon-triangle-1-s"></span></div></th><th style="text-align:center;" class="watchlist_align_left_top ui-state-default" role="columnheader" tabindex="0" aria-controls="table_buyeritemsboughorwon" rowspan="1" colspan="1" aria-label="Qty: activate to sort column ascending"><div class="DataTables_sort_wrapper">Qty<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th><th style="text-align:center;" class="watchlist_align_left_top ui-state-default" role="columnheader" tabindex="0" aria-controls="table_buyeritemsboughorwon" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending"><div class="DataTables_sort_wrapper">Amount<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th><th style="text-align:center;" class="watchlist_align_left_top ui-state-default" role="columnheader" tabindex="0" aria-controls="table_buyeritemsboughorwon" rowspan="1" colspan="1" aria-label="Seller: activate to sort column ascending"><div class="DataTables_sort_wrapper">Seller<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th><th style="text-align:center;" class="watchlist_align_left_top ui-state-default" role="columnheader" tabindex="0" aria-controls="table_buyeritemsboughorwon" rowspan="1" colspan="1" aria-label="Order &amp;amp; Payment: activate to sort column ascending"><div class="DataTables_sort_wrapper">Order &amp; Payment<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th><th style="text-align:center;" class="watchlist_align_left_top ui-state-default" role="columnheader" tabindex="0" aria-controls="table_buyeritemsboughorwon" rowspan="1" colspan="1" aria-label="You Rating Seller: activate to sort column ascending"><div class="DataTables_sort_wrapper">You Rating Seller<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th><th style="text-align:center;" class="watchlist_align_left_top ui-state-default" role="columnheader" tabindex="0" aria-controls="table_buyeritemsboughorwon" rowspan="1" colspan="1" aria-label="Seller Rating You: activate to sort column ascending"><div class="DataTables_sort_wrapper">Seller Rating You<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th><th style="text-align:center;" class="watchlist_align_left_top ui-state-default" role="columnheader" tabindex="0" aria-controls="table_buyeritemsboughorwon" rowspan="1" colspan="1" aria-label="SNC Status: activate to sort column ascending"><div class="DataTables_sort_wrapper">SNC Status<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th></tr>
          </thead>
          
        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No Items Found</td></tr></tbody></table><div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix"><div class="dataTables_info" id="table_buyeritemsboughorwon_info">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers"><a tabindex="0" class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default ui-state-disabled">First</a><a tabindex="0" class="previous fg-button ui-button ui-state-default ui-state-disabled">Previous</a><span></span><a tabindex="0" class="next fg-button ui-button ui-state-default ui-state-disabled">Next</a><a tabindex="0" class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default ui-state-disabled">Last</a></div></div></div>
    </div>


    </div>
    </div>
<?php
include "includes/footer.html";
?>
