<?php
include "includes/header.php";
?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<script type="text/javascript">
// starrr plugin (https://github.com/dobtco/starrr)
// This demo shows using Glyphicons for the star icons,
// but any icon can be used by setting the `emptyStarClass`
// and `fullStarClass` plugin options.
var __slice = [].slice;
(function($, window) {
var Starrr;
Starrr = (function() {
Starrr.prototype.defaults = {
rating: void 0,
emptyStarClass: 'glyphicon glyphicon-star-empty',
fullStarClass: 'glyphicon glyphicon-star',
numStars: 5,
change: function(e, value) {}
};
function Starrr($el, options) {
var i, _, _ref;
this.options = $.extend({}, this.defaults, options);
this.$el = $el;
_ref = this.defaults;
for (i in _ref) {
_ = _ref[i];
if (this.$el.data(i) != null) {
this.options[i] = this.$el.data(i);
}
}
this.createStars();
this.syncRating();
this.$el.on('mouseover.starrr', 'i', (function(_this) {
return function(e) {
return _this.syncRating(_this.$el.find('i').index(e.currentTarget) + 1);
};
})(this));
this.$el.on('mouseout.starrr', (function(_this) {
return function() {
return _this.syncRating();
};
})(this));
this.$el.on('click.starrr', 'i', (function(_this) {
return function(e) {
return _this.setRating(_this.$el.find('i').index(e.currentTarget) + 1);
};
})(this));
this.$el.on('starrr:change', this.options.change);
}
Starrr.prototype.createStars = function() {
var _i, _ref, _results;
_results = [];
for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
_results.push(this.$el.append("<i class='" + this.options.emptyStarClass + "'></i>"));
}
return _results;
};
Starrr.prototype.setRating = function(rating) {
this.options.rating = this.options.rating === rating ? void 0 : rating;
this.syncRating();
return this.$el.trigger('starrr:change', this.options.rating);
};
Starrr.prototype.syncRating = function(rating) {
var i, _i, _j, _ref;
rating || (rating = this.options.rating);
if (rating) {
for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
this.$el.find('i').eq(i).removeClass(this.options.emptyStarClass).addClass(this.options.fullStarClass);
}
}
if (rating && rating < 5) {
for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
this.$el.find('i').eq(i).removeClass(this.options.fullStarClass).addClass(this.options.emptyStarClass);
}
}
if (!rating) {
return this.$el.find('i').removeClass(this.options.fullStarClass).addClass(this.options.emptyStarClass);
}
};
return Starrr;
})();
return $.fn.extend({
starrr: function() {
var args, option;
option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
return this.each(function() {
var data;
data = $(this).data('star-rating');
if (!data) {
$(this).data('star-rating', (data = new Starrr($(this), option)));
}
if (typeof option === 'string') {
return data[option].apply(data, args);
}
});
}
});
})(window.jQuery, window);
// once the DOM is ready
$( document ).ready(function() {
// fade out alert after 3.5 seconds
$(".alert").addClass("in").fadeOut(3500);

$(".starrr").starrr();

$('#stars').on('starrr:change', function(e, value){
$('#count').html(value);
$('.alert').removeClass('hide').show().delay(1000).addClass("in").fadeOut(3500);
});

});
</script>
<div class="content_wrapper">
  <div class="col-md-12" >
    <div class="row">
      <div class="col-sm-9">
        <h3>Rating Bidorbuy Online Shopping<p class="lead">Click the stars to rate us</p></h3>
      </div>
      <div class="col-sm-3">
        <br>
        <div class="alert alert-success hide pull-right">
          <button type="button" class="close" data-dismiss="alert">×</button>
          You gave a rating of <span id="count">0</span> star(s)
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div id="stars" class="starrr"></div>
      </div>
    </div>
  </div>
</div>
<div class="space-clear-10"></div>
<?php
include "includes/footer.html";
?>