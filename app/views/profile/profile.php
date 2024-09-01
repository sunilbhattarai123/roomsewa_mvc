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
    <h3><?php echo $profile['full_name']; ?></h3>
  </div>

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


<script src="/public/js/upload_profiles.js" ></script>