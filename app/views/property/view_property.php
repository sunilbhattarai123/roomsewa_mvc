

<style>
  

  .recommendation-loadmore {

    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 20px;

  }

  .myclass {
    box-shadow: black;
    border-radius: 10px;
    stop-color: red;
    color: hotpink;
    background-color: black;
    font-size: 2.5rem;

  }

  .myclass :hover {
    background-color: orange;
    border-radius: 10px;
    color: white;

  }

  .design {
    font-size: 40px;
    font-weight: bold;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: black;

  }
</style>


<?php
include('config/config.php');
include('review-engine.php');
include('booking-engine.php');

?>





    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">


          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

             

             

                  <div class="item active">
                    <img class="d-block img-fluid" src="/owner/<?php echo $property['p_photo'] ?>" alt="First slide" width="100%"
                      style="max-height: 600px; min-height: 600px;">
                  </div>


              

            </div>


            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
        <div class="col-sm-6">
          <center>
            <h2 class="design">
              <?php echo $property['property_type'] ?>
            </h2>
          </center>
          <div class="row">
            <div class="col-sm-6">

              <div class="row">
                <div class="col-sm-6">
                  <table>
                    <tr>
                      <td>
                        <h4 class="simple">Country:</h4>
                      </td>
                      <td>
                        <h4 class="simple">
                          <?php echo $property['country']; ?>
                        </h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4 class="simple">Province:</h4>
                      </td>
                      <td>
                        <h4 class="simple">
                          <?php echo $property['province']; ?>
                        </h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4 class="simple">Zone:</h4>
                      </td>
                      <td>
                        <h4 class="simple">
                          <?php echo $property['zone']; ?>
                        </h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4 class="simple">District:</h4>
                      </td>
                      <td>
                        <h4 class="simple">
                          <?php echo $property['district']; ?>
                        </h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4 class="simple">City:</h4>
                      </td>
                      <td>
                        <h4 class="simple">
                          <?php echo $property['city']; ?>
                        </h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4 class="simple">VDC/Municipality:</h4>
                      </td>
                      <td>
                        <h4 class="simple">
                          <?php echo $property['vdc_municipality']; ?>
                        </h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4 class="simple">Ward No.:</h4>
                      </td>
                      <td>
                        <h4 class="simple">
                          <?php echo $property['ward_no']; ?>
                        </h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4 class="simple">Tole:</h4>
                      </td>
                      <td>
                        <h4 class="simple">
                          <?php echo $property['tole']; ?>
                        </h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4 class="simple">Contact No.:</h4>
                      </td>
                      <td>
                        <h4 class="simple">
                          <?php echo $property['contact_no']; ?>
                        </h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4 class="simple">Estimated Price:</h4>
                      </td>
                      <td>
                        <h4 class="simple">Rs.
                          <?php echo $property['estimated_price']; ?>
                        </h4>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <table>
                <tr>
                  <td>
                    <h4 class="simple">Total Rooms:</h4>
                  </td>
                  <td>
                    <h4 class="simple">
                      <?php echo $property['total_rooms']; ?>
                    </h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h4 class="simple">Bedrooms:</h4>
                  </td>
                  <td>
                    <h4 class="simple">
                      <?php echo $property['bedroom']; ?>
                    </h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h4 class="simple">Living Room:</h4>
                  </td>
                  <td>
                    <h4>
                      <?php echo $property['living_room']; ?>
                    </h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h4 class="simple">Kitchen:</h4>
                  </td>
                  <td>
                    <h4 class="simple">
                      <?php echo $property['kitchen']; ?>
                    </h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h4 class="simple">Bathroom:</h4>
                  </td>
                  <td>
                    <h4>
                      <?php echo $property['bathroom']; ?>
                    </h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h4 class="simple">Booked:</h4>
                  </td>
                  <td>
                    <h4 class="simple">
                      <?php echo $property['booked']; ?>
                    </h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h4 class="simple">Description:</h4>
                  </td>
                  <td>
                    <h4 class="simple">
                      <?php echo $property['description']; ?>
                    </h4>
                  </td>
                </tr>
              </table>
            </div>
          </div>

        </div>

      </div>
      <br>

      <?php

      if ($auth) {
        ?>
        <form method="POST" action="">
          <div class="row">
            <div class="col-sm-6">
              <?php
              $booked = $property['booked'];

              if ($booked == 'No') { ?>
                <input type="hidden" name="property_id" value="<?php echo $property['property_id']; ?>">
                <input type="submit" class="btn btn-lg btn-primary" name="book_property" style="width: 100%"
                  value="Book Property">
              <?php } else { ?>
                <input type="submit" class="btn btn-lg btn-primary" style="width: 100%" value="Property Booked" disabled>
              <?php } ?>
            </div>

        </form>


        <form method="POST" action="../roomsewa/chat/index.php">
          <div class="col-sm-6">
          <input type="hidden" name="sender_id" value="<?php echo $tenant_id; ?>">
            <input type="hidden" name="receiver_id" value="<?php echo $rows['owner_id']; ?>">
            <input type="submit" class="btn btn-lg btn-success" name="send_message" style="width: 100%"
              value="Send Message">

          </div>
        </form>
      </div>

    <?php } else {
        echo "<center><p class='notification'>You should login to book property</p></center>";
      }


      ?>

    <br>

    <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AlSfV3wSTlPFqxEdS97v1d1ZK25Qg4OxZerOAjFYQPZwtY4bQqhz4jDRou_kCmbJ&callback=loadMap' async defer></script>
    <style>
        #map {
            height: 300px;
            width: 100%;
            border-radius: 10px;
            border-width: 5px;
            border-color: green;
        }
    </style>
    <!-- map here -->
    <div id="map">
    <script>
    function loadMap() {
        <?php
       
        $latitude = $property['latitude'];
        $longitude = $property['longitude'];
        ?>
        var map = new Microsoft.Maps.Map('#map', {
            credentials: 'AlSfV3wSTlPFqxEdS97v1d1ZK25Qg4OxZerOAjFYQPZwtY4bQqhz4jDRou_kCmbJ',
            center: new Microsoft.Maps.Location(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
            zoom: 5.5
        });

        // Fetch locations from the database and add markers to the map
        

        // Add marker using fetched data
        addMarker(<?php echo $latitude; ?>, <?php echo $longitude; ?>);

        function addMarker(latitude, longitude) {
            var location = new Microsoft.Maps.Location(latitude, longitude);
            var pin = new Microsoft.Maps.Pushpin(location);
            map.entities.push(pin);
        }
    }

    // Load the map after the page has fully loaded
    document.addEventListener('DOMContentLoaded', loadMap);
</script>


    </div>
    <!-- map here -->

    <br>



</div>

<div class="recommendation-loadmore">


  <div class="myclass">
    <form action="/load-more.php" method="post">
      <button type="submit" class="btn btn-outline-dark" name="load more" style="width: 300px"
        background-color="blue">Load More</button>
    </form>
  </div>
  <?php if ($auth) { ?>


    <div class="myclass">
      <form id="recommendPropertyForm" action="./recommendation.php" method="post">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
        <button type="submit" class="btn btn-outline-dark" name="recommended" style="width: 300px">Recommended</button>
      </form>
    </div>
  <?php } ?>
</div>


<div class="container-fluid">
  <h2>Review Property:</h2>
  <div class="well well-sm">
    <div class="text-right">
      <?php

      if ($auth) {
        ?>
        <a class="btn btn-success btn-info" href="#reviews-anchor" style="width: 100%" id="open-review-box">Leave a
          Review</a>
      </div>

      <div class="row" id="post-review-box" style="display:none;">
        <div class="col-md-12">
          <form accept-charset="UTF-8" method="POST">
            <input name="property_id" type="hidden" value="<?php echo $property['property_id']; ?>">
            <input id="ratings-hidden" name="rating" type="hidden">
            <textarea class="form-control animated" cols="50" id="new-review" name="comment"
              placeholder="Enter your review here..." rows="5"></textarea>

            <div class="text-right">
              <div class="stars starrr" data-rating="0"></div>
              <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                <span class="glyphicon glyphicon-remove"></span>Cancel</a>
              <button class="btn btn-success btn-lg" type="submit" name="review">Save</button>
            </div>
          </form>
        </div>
      </div>
    <?php } else {
        echo "<center>You should login to review property.</center>";
      }
      ?>


  </div>

</div>


<?php


echo '<div class="container-fluid">';
echo '<h4 class="simple">Reviews:</h4>';
echo '</div>';

  foreach($reviews as $review){
    ?>
    <div class="container-fluid">
      <ul>
        <li>
          <?php echo $review['comment']; ?> &nbsp;&nbsp;&nbsp;(<span class="glyphicon glyphicon-star-empty"
            style="size: 50px;">
            <?php echo $review['rating']; ?>
          </span>)
        </li>
      </ul>
    </div>


    <?php
  }

?>
<br><br>








<style>
.simple {
  font-size: 2.25rem;
  color: black;
  font-family: sans-serif;
}

h4 {
  font-size: 20px;
}

.notification {
  font-size: 2.5rem;
  font-family: Georgia, 'Times New Roman', Times, serif;
  background-color: rgba(255, 20, 25, 1);
  color: white;
  border-radius: 10px;
  text-transform: capitalize;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td,
th {
  text-align: left;
  padding: 1px;
}
</style>

<style>
.animated {
  -webkit-transition: height 0.2s;
  -moz-transition: height 0.2s;
  transition: height 0.2s;
}

.stars {
  margin: 20px 0;
  font-size: 24px;
  color: #d17581;
}
</style>

<script>
(function (e) {
  var t, o = {
    className: "autosizejs",
    append: "",
    callback: !1,
    resizeDelay: 10
  },
    i = '<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',
    n = ["fontFamily", "fontSize", "fontWeight", "fontStyle", "letterSpacing", "textTransform", "wordSpacing", "textIndent"],
    s = e(i).data("autosize", !0)[0];
  s.style.lineHeight = "99px", "99px" === e(s).css("lineHeight") && n.push("lineHeight"), s.style.lineHeight = "", e.fn.autosize = function (i) {
    return this.length ? (i = e.extend({}, o, i || {}), s.parentNode !== document.body && e(document.body).append(s), this.each(function () {
      function o() {
        var t, o;
        "getComputedStyle" in window ? (t = window.getComputedStyle(u, null), o = u.getBoundingClientRect().width, e.each(["paddingLeft", "paddingRight", "borderLeftWidth", "borderRightWidth"], function (e, i) {
          o -= parseInt(t[i], 10)
        }), s.style.width = o + "px") : s.style.width = Math.max(p.width(), 0) + "px"
      }

      function a() {
        var a = {};
        if (t = u, s.className = i.className, d = parseInt(p.css("maxHeight"), 10), e.each(n, function (e, t) {
          a[t] = p.css(t)
        }), e(s).css(a), o(), window.chrome) {
          var r = u.style.width;
          u.style.width = "0px", u.offsetWidth, u.style.width = r
        }
      }

      function r() {
        var e, n;
        t !== u ? a() : o(), s.value = u.value + i.append, s.style.overflowY = u.style.overflowY, n = parseInt(u.style.height, 10), s.scrollTop = 0, s.scrollTop = 9e4, e = s.scrollTop, d && e > d ? (u.style.overflowY = "scroll", e = d) : (u.style.overflowY = "hidden", c > e && (e = c)), e += w, n !== e && (u.style.height = e + "px", f && i.callback.call(u, u))
      }

      function l() {
        clearTimeout(h), h = setTimeout(function () {
          var e = p.width();
          e !== g && (g = e, r())
        }, parseInt(i.resizeDelay, 10))
      }
      var d, c, h, u = this,
        p = e(u),
        w = 0,
        f = e.isFunction(i.callback),
        z = {
          height: u.style.height,
          overflow: u.style.overflow,
          overflowY: u.style.overflowY,
          wordWrap: u.style.wordWrap,
          resize: u.style.resize
        },
        g = p.width();
      p.data("autosize") || (p.data("autosize", !0), ("border-box" === p.css("box-sizing") || "border-box" === p.css("-moz-box-sizing") || "border-box" === p.css("-webkit-box-sizing")) && (w = p.outerHeight() - p.height()), c = Math.max(parseInt(p.css("minHeight"), 10) - w || 0, p.height()), p.css({
        overflow: "hidden",
        overflowY: "hidden",
        wordWrap: "break-word",
        resize: "none" === p.css("resize") || "vertical" === p.css("resize") ? "none" : "horizontal"
      }), "onpropertychange" in u ? "oninput" in u ? p.on("input.autosize keyup.autosize", r) : p.on("propertychange.autosize", function () {
        "value" === event.propertyName && r()
      }) : p.on("input.autosize", r), i.resizeDelay !== !1 && e(window).on("resize.autosize", l), p.on("autosize.resize", r), p.on("autosize.resizeIncludeStyle", function () {
        t = null, r()
      }), p.on("autosize.destroy", function () {
        t = null, clearTimeout(h), e(window).off("resize", l), p.off("autosize").off(".autosize").css(z).removeData("autosize")
      }), r())
    })) : this
  }
})(window.jQuery || window.$);

var __slice = [].slice;
(function (e, t) {
  var n;
  n = function () {
    function t(t, n) {
      var r, i, s, o = this;
      this.options = e.extend({}, this.defaults, n);
      this.$el = t;
      s = this.defaults;
      for (r in s) {
        i = s[r];
        if (this.$el.data(r) != null) {
          this.options[r] = this.$el.data(r)
        }
      }
      this.createStars();
      this.syncRating();
      this.$el.on("mouseover.starrr", "span", function (e) {
        return o.syncRating(o.$el.find("span").index(e.currentTarget) + 1)
      });
      this.$el.on("mouseout.starrr", function () {
        return o.syncRating()
      });
      this.$el.on("click.starrr", "span", function (e) {
        return o.setRating(o.$el.find("span").index(e.currentTarget) + 1)
      });
      this.$el.on("starrr:change", this.options.change)
    }
    t.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function (e, t) { }
    };
    t.prototype.createStars = function () {
      var e, t, n;
      n = [];
      for (e = 1, t = this.options.numStars; 1 <= t ? e <= t : e >= t; 1 <= t ? e++ : e--) {
        n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))
      }
      return n
    };
    t.prototype.setRating = function (e) {
      if (this.options.rating === e) {
        e = void 0
      }
      this.options.rating = e;
      this.syncRating();
      return this.$el.trigger("starrr:change", e)
    };
    t.prototype.syncRating = function (e) {
      var t, n, r, i;
      e || (e = this.options.rating);
      if (e) {
        for (t = n = 0, i = e - 1; 0 <= i ? n <= i : n >= i; t = 0 <= i ? ++n : --n) {
          this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")
        }
      }
      if (e && e < 5) {
        for (t = r = e; e <= 4 ? r <= 4 : r >= 4; t = e <= 4 ? ++r : --r) {
          this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")
        }
      }
      if (!e) {
        return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")
      }
    };
    return t
  }();
  return e.fn.extend({
    starrr: function () {
      var t, r;
      r = arguments[0], t = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function () {
        var i;
        i = e(this).data("star-rating");
        if (!i) {
          e(this).data("star-rating", i = new n(e(this), r))
        }
        if (typeof r === "string") {
          return i[r].apply(i, t)
        }
      })
    }
  })
})(window.jQuery, window);
$(function () {
  return $(".starrr").starrr()
})

$(function () {

  $('#new-review').autosize({
    append: "\n"
  });

  var reviewBox = $('#post-review-box');
  var newReview = $('#new-review');
  var openReviewBtn = $('#open-review-box');
  var closeReviewBtn = $('#close-review-box');
  var ratingsField = $('#ratings-hidden');

  openReviewBtn.click(function (e) {
    reviewBox.slideDown(400, function () {
      $('#new-review').trigger('autosize.resize');
      newReview.focus();
    });
    openReviewBtn.fadeOut(100);
    closeReviewBtn.show();
  });

  closeReviewBtn.click(function (e) {
    e.preventDefault();
    reviewBox.slideUp(300, function () {
      newReview.focus();
      openReviewBtn.fadeIn(200);
    });
    closeReviewBtn.hide();

  });

  $('.starrr').on('starrr:change', function (e, value) {
    ratingsField.val(value);
  });
});
</script>
<script>
$(document).ready(function () {
  // Get the PHP variable value and use it in the AJAX call
  var property_id = '<?php echo $property_id; ?>';

  // Make an AJAX call using jQuery
  $.ajax({
    url: 'booking-success.php',
    type: 'GET',
    data: {
      property_id: property_id
    },
    dataType: 'json',
    success: function (data) {
      // Handle the response data as needed
      console.log(data);
    },
    error: function (error) {
      // Handle errors
      console.error('There was a problem with the AJAX call:', error);
    }
  });
});
</script>