<link rel="stylesheet" href="/public/css/profile.css">


<form style="display:none" enctype="multipart/form-data" id="profile_pic_form" action="/update_profile_images" method="POST">
  <input id="profile_pic_file" type="file" accept="image/*" name="profile_pic">

</form>

<form style="display:none" enctype="multipart/form-data" id="profile_cover_form" action="/update_profile_images" method="POST">
  <input id="profile_cover_file" type="file" accept="image/*" name="cover_pic">

</form>
<!-- profile_cover_image
profile_profile_image

profile_pic_file
profile_pic_form

profile_cover_form
profile_cover_file -->

<div class="container">

  <div class="profile-header">

    <img id="profile_cover_image" src="/public/uploads/<?php echo $profile['cover_pic'] ?>" class="cover-photo"
      alt="Cover Photo">
    <div id="profile_profile_image" class="profile-img">
      <img id="" src="/public/uploads/<?php echo $profile['profile_pic'] ?>" class="profile-photo"
        alt="Profile Picture">
    </div>
    <h3><?php echo $profile['full_name']." (". $rating ;?>&#9733)</h3>
  </div> 
<br>
  <div class="profile-content">
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <div class="row">


      <div class="col-lg-12">
        <div class="card shadow-sm">
          <div class="card-header">
            Profile Details
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Full Name</th>
                <td width="2%">:</td>
                <td><?php echo $profile['full_name']; ?></td>
              </tr>
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo $profile['email']; ?></td>
              </tr>
              <tr>
                <th width="30%">Phone No</th>
                <td width="2%">:</td>
                <td><?php echo $profile['phone_no']; ?></td>
              </tr>
              <tr>
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?php echo $profile['address']; ?></td>
              </tr>
              <tr>
                <th width="30%">Id Type</th>
                <td width="2%">:</td>
                <td><?php echo $profile['id_type']; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php if($user->id == $profile['id']){ ?>
  <!-- Trigger the modal with a button -->
  <center><button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Update
      Profile</button></center>

     
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title ">Update Profile</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="/update_profile">
            <div class="form-group">
              <label for="full_name">Full Name:</label>
              <!-- <input type="hidden" value="<?php echo $profile['id']; ?>" name="id"> -->
              <input type="text" class="form-control" id="full_name" value="<?php echo $profile['full_name']; ?>"
                name="full_name">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" value="<?php echo $profile['email']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="phone_no">Phone No.:</label>
              <input type="text" class="form-control" id="phone_no" value="<?php echo $profile['phone_no']; ?>"
                name="phone_no">
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" id="address" value="<?php echo $profile['address']; ?>"
                name="address">
            </div>
            <div class="form-group">
              <label for="id_type">Type of ID:</label>
              <input type="text" class="form-control" value="<?php echo $profile['id_type']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Your Id:</label><br>
              <img src="/public/uploads/<?php echo $profile['id_photo']; ?>" id="output_image" height="100px" readonly>
            </div>
            <hr>
            <center><button id="submit" type="submit" class="btn btn-primary btn-block">Update</button></center><br>
          </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <?php } ?>

</div>


<!-- rating -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<?php if($isRatingAllow) { ?>
<div class=" flex items-center justify-center">
    <div class="bg-white p-20 rounded-lg shadow-md">
        <form action="/rating" method="POST" class="rating-form">
            <input type="hidden" name="id" value="<?php echo $profile['id'] ?>"> <!-- Replace with dynamic book ID -->
            <div class="stars flex flex-row-reverse justify-center space-x-reverse space-x-2 mb-4">
                <input type="radio" id="star5" name="rating" value="5" class="hidden" />
                <label for="star5" class="text-7xl text-gray-400 cursor-pointer hover:text-yellow-500 transition">&#9733;</label>
                
                <input type="radio" id="star4" name="rating" value="4" class="hidden" />
                <label for="star4" class="text-7xl text-gray-400 cursor-pointer hover:text-yellow-500 transition">&#9733;</label>
                
                <input type="radio" id="star3" name="rating" value="3" class="hidden" />
                <label for="star3" class="text-7xl text-gray-400 cursor-pointer hover:text-yellow-500 transition">&#9733;</label>
                
                <input type="radio" id="star2" name="rating" value="2" class="hidden" />
                <label for="star2" class="text-7xl text-gray-400 cursor-pointer hover:text-yellow-500 transition">&#9733;</label>
                
                <input type="radio" id="star1" name="rating" value="1" class="hidden" />
                <label for="star1" class="text-7xl text-gray-400 cursor-pointer hover:text-yellow-500 transition">&#9733;</label>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition">Submit Rating</button>
        </form>
        <div id="feedback" class="mt-4 text-center"></div> <!-- Feedback message container -->
    </div>

   
</div>




<?php } ?>


<script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.rating-form');
            const stars = document.querySelectorAll('.stars input');
            const labels = document.querySelectorAll('.stars label');
            const feedback = document.getElementById('feedback'); // Feedback element

            // Highlight stars based on selection
            stars.forEach(input => {
                input.addEventListener('change', function() {
                    // Highlight selected stars
                    labels.forEach(label => {
                        label.classList.toggle('text-yellow-500', label.htmlFor <= 'star' + this.value);
                        label.classList.toggle('text-gray-400', label.htmlFor > 'star' + this.value);
                    });
                });
            });
        });
    </script>


<script src="/public/js/upload_profiles.js" ></script>