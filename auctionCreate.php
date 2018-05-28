<?php
include "includes/header.php";
?>

<div class="content_wrapper">
    <div class="col-md-12">
        <div class="alert alert-info " >
            <div style="text-align:center; overflow:hidden;">Create/Edit Auction</div>
        </div>
        <div class="row auctioncreate">
            <div class="panel panel-default" style="border: 0">
                <div class="panel-body">
                    <form role="form" class="form-horizontal" method="post" action="#">
                        
                        <div class="form-group">
                            
                            
                            <label class="control-label col-sm-2 col-lg-2 " for="id_title">Title</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <input type="text" name="title" maxlength="200" class=" form-control" required="" id="id_title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 col-lg-2 " for="id_product_code">Product code</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <input type="text" name="product_code" maxlength="50" class=" form-control" id="id_product_code">
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            
                            <label class="control-label col-sm-2 col-lg-2 " for="id_condition">Condition</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <select name="condition" class=" form-control" id="id_condition">
                                    <option value="SECONDHAND">Second hand</option>
                                    <option value="REFURBISHED">Refurbished</option>
                                    <option value="NEW">New</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 col-lg-2 " for="id_start_price">Start price</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <input type="number" name="start_price" min="1.0" step="0.01" class=" form-control" required="" id="id_start_price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 col-lg-2 " for="id_bid_increment">Bid increment</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <input type="number" name="bid_increment" value="1.0" min="1.0" step="0.01" class=" form-control" required="" id="id_bid_increment">
                                
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            
                            <label class="control-label col-sm-2 col-lg-2 " for="id_end_date">End date</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <select name="end_date_month" required="" id="id_end_date_month" class=" form-control"><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4" selected="">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="end_date_day" required="" id="id_end_date_day" class=" form-control"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17" selected="">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select><select name="end_date_year" required="" id="id_end_date_year" class=" form-control"><option value="2018" selected="">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option></select>
                                
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            
                            <label class="control-label col-sm-2 col-lg-2 " for="id_end_time">End time</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <select name="end_time_0" class=" form-control" required="" id="id_end_time_0"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9" selected="">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select><select name="end_time_1" class=" form-control" required="" id="id_end_time_1"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27" selected="">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select><select name="end_time_2" class=" form-control" required="" id="id_end_time_2"><option value="am">AM</option><option value="pm" selected="">PM</option></select>
                                
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            
                            <label class="control-label col-sm-2 col-lg-2 " for="id_location">Location</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <input type="text" name="location" maxlength="100" class=" form-control" required="" id="id_location">
                                
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            
                            <label class="control-label col-sm-2 col-lg-2 " for="id_description">Description</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <textarea name="description" cols="40" rows="10" maxlength="2000" class=" form-control" required="" id="id_description"></textarea>
                                
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            
                            <label class="control-label col-sm-2 col-lg-2 " for="id_payment_options">Payment options</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <textarea name="payment_options" cols="40" rows="10" maxlength="1000" class=" form-control" required="" id="id_payment_options"></textarea>
                                
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            
                            <label class="control-label col-sm-2 col-lg-2 " for="id_shipping">Shipping</label>
                            
                            <div class=" col-sm-10 col-lg-10 ">
                                <textarea name="shipping" cols="40" rows="10" maxlength="1000" class=" form-control" required="" id="id_shipping"></textarea>
                                
                                
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-warning ">Auction it</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-clear-10"></div>
<?php
include "includes/footer.html";
?>