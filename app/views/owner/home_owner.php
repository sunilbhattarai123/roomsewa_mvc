<link rel="stylesheet" href="/public/css/profile.css">

<link rel="stylesheet" type="text/css" href="/public/css/owner_style.css">



<div class="container-fluid">
    <ul class="nav nav-pills nav-justified">
        <li class="active" style="background-color: #FFF8DC"><a data-toggle="pill" href="#home">Profile</a></li>
        <li style="background-color: #FAC0E6"><a href="/messages">Messages</a></li>
        <li style="background-color: #FAF0E6"><a data-toggle="pill" href="#menu1">Add Property</a></li>
        <li style="background-color: #FFFACD"><a data-toggle="pill" href="#menu2">View Property</a></li>
        <!-- <li style="background-color: #FFFAF0"><a data-toggle="pill" href="#menu3">Update Property</a></li> -->
        <li style="background-color: #FAFAF0"><a data-toggle="pill" href="#menu6">Booked Property</a></li>
    </ul>
    <br>


    <form style="display:none" enctype="multipart/form-data" id="profile_pic_form" action="/update_profile_images"
        method="POST">
        <input id="profile_pic_file" type="file" accept="image/*" name="profile_pic">

    </form>

    <form style="display:none" enctype="multipart/form-data" id="profile_cover_form" action="/update_profile_images"
        method="POST">
        <input id="profile_cover_file" type="file" accept="image/*" name="cover_pic">

    </form>



    <div class="tab-content">

        <div id="home" class="tab-pane fade in active">
            <div class="container">


                <!-- //profile -->
                <div class="container">



                    <div class="profile-header">

                        <img id="profile_cover_image" src="/public/uploads/<?php echo $profile['cover_pic'] ?>"
                            class="cover-photo" alt="Cover Photo">
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


                            <div class="col-lg-12" id="length">
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

                    <?php if ($user->id == $profile['id']) { ?>
                        <!-- Trigger the modal with a button -->
                        <center><button type="button" class="btn btn-lg btn-primary" data-toggle="modal"
                                data-target="#myModal">Update
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
                                                <input type="text" class="form-control" id="full_name"
                                                    value="<?php echo $profile['full_name']; ?>" name="full_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" id="email"
                                                    value="<?php echo $profile['email']; ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone_no">Phone No.:</label>
                                                <input type="text" class="form-control" id="phone_no"
                                                    value="<?php echo $profile['phone_no']; ?>" name="phone_no">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address:</label>
                                                <input type="text" class="form-control" id="address"
                                                    value="<?php echo $profile['address']; ?>" name="address">
                                            </div>
                                            <div class="form-group">
                                                <label for="id_type">Type of ID:</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $profile['id_type']; ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Your Id:</label><br>
                                                <img src="/public/uploads/<?php echo $profile['id_photo']; ?>"
                                                    id="output_image" height="100px" readonly>
                                            </div>
                                            <hr>
                                            <center><button type="submit" class="btn btn-primary btn-block">Update</button>
                                            </center><br>
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

                <!-- ////profile  -->
            </div>
        </div>

        <script src="/public/js/upload_profiles.js"></script>




        <div id="menu1" class="add_property tab-pane fade">
                    <center>
                        <h3>Add Property</h3>
                    </center>
                    <div class="container">
        
        
                        <div id="map_canvas"></div>
                        <form method="POST" action="/add_property" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="country">Country:</label>
                                        <select class="form-control" name="country" required="required">
                                            <option value="">--Select Country--</option>
                                            <option value="Nepal">Nepal</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="province">Province/State:</label>
                                        <select class="form-control" name="province" required="required">
                                            <option value="">--Select Province/State--</option>
                                            <option value="Koshi Pradesh">Koshi Pradesh</option>
                                            <option value="Madhesh Pradesh">Madhesh Pradesh</option>
                                            <option value="Bagmati Pradesh">Bagmati Pradesh</option>
                                            <option value="Gandaki Pradesh">Gandaki Pradesh</option>
                                            <option value="Lumbini Pradesh">Lumbini Pradesh</option>
                                            <option value="Karnali Pradesh">Karnali Pradesh</option>
                                            <option value="Sudurpaschim Pradesh">Sudurpaschim Pradesh</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="zone">Zone:</label>
                                        <select class="form-control" name="zone" id="zoneSelect1" required="required"
                                            onchange="updateDistricts1()">
                                            <option value="">--Select Zone--</option>
                                            <option value="Mechi">Mechi</option>
                                            <option value="Koshi">Koshi</option>
                                            <option value="Sagarmatha">Sagarmatha</option>
                                            <option value="Janakpur">Janakpur</option>
                                            <option value="Bagmati">Bagmati</option>
                                            <option value="Gandaki">Gandaki</option>
                                            <option value="Dhawalagiri">Dhawalagiri</option>
                                            <option value="Karnali">Karnali</option>
                                            <option value="Mahakali">Mahakali</option>
                                            <option value="Seti">Seti</option>
                                            <option value="Bheri">Bheri</option>
                                            <option value="Rapti">Rapti</option>
                                            <option value="Lumbini">Lumbini</option>
                                            <option value="Narayani">Narayani</option>
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="district">District:</label>
                                        <select class="form-control" name="district" id="districtSelect1" required="required">
                                            <option value="">--Select District--</option>
                                            <!-- District options will be dynamically populated here based on the selected zone -->
                                        </select>
                                    </div>
                                    <script>
                                        function updateDistricts1() {
                                            // Get the selected zone
                                            var selectedZone1 = document.getElementById("zoneSelect1").value;
        
                                            // Get the district dropdown
                                            var districtDropdown1 = document.getElementById("districtSelect1");
        
                                            // Clear existing options
                                            districtDropdown1.innerHTML = '<option value="">--Select District--</option>';
        
                                            // Add new options based on the selected zone
                                            switch (selectedZone1) {
                                                case "Mechi":
                                                    addDistrictOption1("Taplejung", "Taplejung");
                                                    addDistrictOption1("Panchthar", "Panchthar");
                                                    addDistrictOption1("Ilam", "Ilam");
                                                    addDistrictOption1("Jhapa", "Jhapa");
                                                    break;
        
                                                case "Koshi":
                                                    addDistrictOption1("Morang", "Morang");
                                                    addDistrictOption1("Sunsari", "Sunsari");
                                                    addDistrictOption1("Dhankutta", "Dhankutta");
                                                    addDistrictOption1("Sankhuwasabha", "Sankhuwasabha");
                                                    addDistrictOption1("Bhojpur", "Bhojpur");
                                                    addDistrictOption1("Terhathum", "Terhathum");
                                                    break;
                                                case "Sagarmatha":
                                                    addDistrictOption1("Okhaldunga", "Okhaldunga");
                                                    addDistrictOption1("Khotang", "Khotang");
                                                    addDistrictOption1("Solukhumbu", "Solukhumbu");
                                                    addDistrictOption1("Udaypurpa", "Udaypur");
                                                    addDistrictOption1("Saptari", "Saptari");
                                                    addDistrictOption1("Siraha", "Siraha");
                                                    break;
                                                case "Janakpur":
                                                    addDistrictOption1("Dhanusa", "Dhanusa");
                                                    addDistrictOption1("Mahottari", "Mahottari");
                                                    addDistrictOption1("Sarlahi", "Sarlahi");
                                                    addDistrictOption1("Sindhuli", "Sindhuli");
                                                    addDistrictOption1("Ramechhap", "Ramechhap");
                                                    addDistrictOption1("Dolkha", "Dolkha");
                                                    break;
                                                case "Bagmati":
                                                    addDistrictOption1("Sindhupalchauk", "Sindhupalchauk");
                                                    addDistrictOption1("Kavreplanchauk", "Kavreplanchauk");
                                                    addDistrictOption1("Lalitpur", "Lalitpur");
                                                    addDistrictOption1("Bhaktapur", "Bhaktapur");
                                                    addDistrictOption1("Kathmandu", "Kathmandu");
                                                    addDistrictOption1("Nuwakot", "Nuwakot");
                                                    addDistrictOption1("Rasuwa", "Rasuwa");
                                                    addDistrictOption1("Dhading", "Dhading");
                                                    break;
                                                case "Gandaki":
                                                    addDistrictOption1("Gorkha", "Gorkha");
                                                    addDistrictOption1("Lamjung", "Lamjung");
                                                    addDistrictOption1("Tanahun", "Tanahun");
                                                    addDistrictOption1("Syangja", "Syangja");
                                                    addDistrictOption1("Kaski", "Kaski");
                                                    addDistrictOption1("Manag", "Manag");
                                                    break;
                                                case "Dhawalagiri":
                                                    addDistrictOption1("Mustang", "Mustang");
                                                    addDistrictOption1("Parwat", "Parwat");
                                                    addDistrictOption1("Myagdi", "Myagdi");
                                                    addDistrictOption1("Baglung", "Baglung");
                                                    break;
                                                case "Karnali":
                                                    addDistrictOption1("Dolpa", "Dolpa");
                                                    addDistrictOption1("Humla", "Humla");
                                                    addDistrictOption1("Kalikot", "Kalikot");
                                                    addDistrictOption1("Mugu", "Mugu");
                                                    addDistrictOption1("Jumla", "Jumla");
                                                    break;
        
                                                case "Mahakali":
                                                    addDistrictOption1("Kanchanpur", "Kanchanpur");
                                                    addDistrictOption1("Dadeldhura", "Dadeldhura");
                                                    addDistrictOption1("Baitadi", "Baitadi");
                                                    addDistrictOption1("Darchula", "Darchula");
                                                    break;
                                                case "Seti":
                                                    addDistrictOption1("Bajura", "Bajura");
                                                    addDistrictOption1("Bajhang", "Bajhang");
                                                    addDistrictOption1("Achham", "Achham");
                                                    addDistrictOption1("Doti", "Doti");
                                                    addDistrictOption1("Kailali", "Kailali");
                                                    break;
                                                case "Bheri":
                                                    addDistrictOption1("Bardiya", "Bardiya");
                                                    addDistrictOption1("Surkhet", "Surkhet");
                                                    addDistrictOption1("Dailekh", "Dailekh");
                                                    addDistrictOption1("Banke", "Banke");
                                                    addDistrictOption1("Jajarkot", "Jajarkot");
                                                    break;
                                                case "Rapti":
                                                    addDistrictOption1("Pyuthan", "Pyuthan");
                                                    addDistrictOption1("Rolpa", "Rolpa");
                                                    addDistrictOption1("Rukum", "Rukum");
                                                    addDistrictOption1("Salyan", "Salyan");
                                                    addDistrictOption1("Dang", "Dang");
                                                    break;
                                                case "Lumbini":
                                                    addDistrictOption1("Gulmi", "Gulmi");
                                                    addDistrictOption1("Palpa", "Palpa");
                                                    addDistrictOption1("Nawalparasi", "Nawalparasi");
                                                    addDistrictOption1("Rupandehi", "Rupandehi");
                                                    addDistrictOption1("Arghakhanchi", "Arghakhanchi");
                                                    addDistrictOption1("Kapilvastu", "Kapilvastu");
                                                    break;
                                                case "Narayani":
                                                    addDistrictOption1("Makwanpur", "Makwanpur");
                                                    addDistrictOption1("Rauthat", "Rauthat");
                                                    addDistrictOption1("Bara", "Bara");
                                                    addDistrictOption1("Parsa", "Parsa");
                                                    addDistrictOption1("Chitwan", "Chitwan");
                                                    break;
                                                default:
                                                    // Handle the default case or unexpected values
                                                    break;
                                            }
                                        }
        
                                        // Helper function to add options to the district dropdown
                                        function addDistrictOption1(value, text) {
                                            var option = document.createElement("option");
                                            option.value = value;
                                            option.text = text;
                                            document.getElementById("districtSelect1").add(option);
                                        }
                                    </script>
                                    <div class="form-group">
                                        <label for="city">City:</label>
                                        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
                                    </div>
                                    <div class="form-group">
                                        <label for="vdc/municipality">VDC/Municipality:</label>
                                        <select class="form-control" name="vdc_municipality">
                                            <option value="">--Select VDC/Municipality--</option>
                                            <option value="VDC">VDC</option>
                                            <option value="Municipality">Municipality</option>
                                        </select>
        
                                    </div>
                                    <div class="form-group">
                                        <label for="ward_no">Ward No.:</label>
                                        <input type="text" class="form-control" id="ward_no" placeholder="Enter Ward No."
                                            name="ward_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="tole">Tole:</label>
                                        <input type="text" class="form-control" id="tole" placeholder="Enter Tole" name="tole">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_no">Contact No.:</label>
                                        <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No."
                                            name="contact_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="property_type">Property Type:</label>
                                        <select class="form-control" name="property_type">
                                            <option value="">--Select Property Type--</option>
                                            <option value="Full House Rent">Full House Rent</option>
                                            <option value="Flat Rent">Flat Rent</option>
                                            <option value="Room Rent">Room Rent</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="estimated_price">Estimated Price:</label>
                                        <input type="estimated_price" class="form-control" id="estimated_price"
                                            placeholder="Enter Estimated Price" name="estimated_price">
                                    </div>
                                </div>
        
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="total_rooms">Total No. of Rooms:</label>
                                        <input type="number" class="form-control" id="total_rooms"
                                            placeholder="Enter Total No. of Rooms" name="total_rooms">
                                    </div>
                                    <div class="form-group">
                                        <label for="bedroom">No. of Bedroom:</label>
                                        <input type="number" class="form-control" id="bedroom"
                                            placeholder="Enter No. of Bedroom" name="bedroom">
                                    </div>
                                    <div class="form-group">
                                        <label for="living_room">No. of Living Room:</label>
                                        <input type="number" class="form-control" id="living_room"
                                            placeholder="Enter No. of Living Room" name="living_room">
                                    </div>
                                    <div class="form-group">
                                        <label for="kitchen">No. of Kitchen:</label>
                                        <input type="number" class="form-control" id="kitchen"
                                            placeholder="Enter No. of Kitchen" name="kitchen">
                                    </div>
                                    <div class="form-group">
                                        <label for="bathroom">No. of Bathroom/Washroom:</label>
                                        <input type="number" class="form-control" id="bathroom"
                                            placeholder="Enter No. of Bathroom/Washroom" name="bathroom">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Full Description:</label>
                                        <textarea type="comment" class="form-control" id="description"
                                            placeholder="Enter Property Description" name="description"></textarea>
                                    </div>
                                    <table class="table table-bordered" border="0">
                                        <tr>
                                            <div class="form-group">
                                                <label><b>Latitude/Longitude:</b><span
                                                        style="color:red; font-size: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Click
                                                        on
                                                        Button</span></label>
                                                <td><input type="text" name="latitude" placeholder="Latitude" id="latitude"
                                                        class="form-control name_list" required /></td>
                                                <td><input type="text" name="longitude" placeholder="Longitude" id="longitude"
                                                        class="form-control name_list" required /></td>
                                                <td><input type="button" value="Get Latitude and Longitude"
                                                        onclick="getLocation()" class="btn btn-success col-lg-12"></td>
                                            </div>
                                        </tr>
                                    </table>
                                    <table class="table" id="dynamic_field">
                                        <tr>
                                            <div class="form-group">
                                                <label><b>Photos:</b></label>
                                                <td><input type="file" name="p_photo" placeholder="Photos"
                                                        class="form-control name_list" required accept="image/*" /></td>
                                                <td>
        
                                                </td>
                                            </div>
                                        </tr>
                                    </table>
                                    <!-- <input name="lat" type="text" id="lat" hidden>
                                    <input name="lng" type="text" id="lng" hidden> -->
                                    <hr>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Add Property">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br><br>
        
                    </div>
                </div>


     





        <!-- //started here -->


        <div id="menu6" class="booked_property tab-pane fade">
            <center>
                <h3>Booked Property</h3>
            </center>
            <div class="container">
                <!-- <input type="text" id="myInput" onkeyup="bookedProperty()" placeholder="Search..." title="Type in a name"> -->

                <table id="myTable">
                    <tr class="header">
                        <th>Booked By</th>
                        <th>Booker Address</th>
                        <th>Property Province</th>
                        <th>Property District</th>
                        <th>Property Zone</th>
                        <th>Property Ward No</th>
                        <th>Property Tole</th>
                    </tr>

                    <?php foreach ($bookedProperties as $bookedProperty) { ?>
                        <tr>
                            <td>
                                <?php echo $bookedProperty['full_name']; ?>
                            </td>
                            <td>
                                <?php echo $bookedProperty['address']; ?>
                            </td>
                            <td>
                                <?php echo $bookedProperty['province']; ?>
                            </td>
                            <td>
                                <?php echo $bookedProperty['district']; ?>
                            </td>
                            <td>
                                <?php echo $bookedProperty['zone']; ?>
                            </td>
                            <td>
                                <?php echo $bookedProperty['ward_no']; ?>
                            </td>
                            <td>
                                <?php echo $bookedProperty['tole']; ?>
                            </td>
                        </tr>

                    <?php } ?>


                </table>

            </div>
        </div>
        <!-- //end here  -->


        
               






        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <script src="/public/js/property.js"></script>



        <div id="menu2" class="view_property tab-pane fade">
            <h3 id="h3">View Property </h3>
            <div class="container-fluid">
                <div class="row">


                    <!-- list started from here -->
                    <?php foreach ($properties as $property) { ?>
                        <div class="col-md-6" style="height:600px;  ">
                            <div class="card-a" style="height:100%; border-radius: 10px;">



                                <img class="image-a" style="height:70%;border-radius:10px" src="/public/uploads/<?php echo $property['p_photo'] ?>"  />


                                <div class="xutai">
                                    <h4><b>
                                            <?php echo $property['property_type']; ?>
                                        </b></h4>
                                    <p>
                                        <?php echo $property['city'] . ', ' . $property['district'] ?>
                                    </p>
                                    
                                </div>






        

                                <a href="/property/<?php echo $property['id'] ?>"
                                    class="btn-a btn-lg btn-primary btn-block">
                                    View Property </a>

                                <!-- <form method="POST">
                                    <td>
                                        <input type="hidden" name="property_id" value="<?php echo $property['id']; ?>">
                                        <a data-toggle="pill" class="btn btn-success" name="edit_property"
                                            href="#menu5">Edit</a>
                                        <button type="submit" class="btn btn-danger" name="delete_property">Delete</button>
                                    </td>
                                    </tr>
                                </form> -->


                                <!-- <a data-toggle="pill" href="#menu5"
                                    class="btn-a btn-lg btn-primary btn-block"> Edit Property </a>
                                    
                                    <a href="/property/<?php echo $property['id'] ?>"
                                    class="btn-a btn-lg btn-primary btn-block"> Delete Property </a>  -->

                                <br>
                                
                            </div>
                        </div>

                    <?php } ?>

                    <!-- //end hrere    -->

                </div>
            </div>
        </div>







 

        
        <div id="menu3" class="tab-pane fade">
            <center>
                <h3>Update Property</h3>
            </center>
            <div class="container-fluid">
                <input type="text" id="myInput" onkeyup="updateProperty()" placeholder="Search..."
                    title="Type in a name">
                <div style="overflow-x:auto;">
                    <table id="myTable">
                        <tr class="header">
                            <th>Id.</th>
                            <th>Country</th>
                            <th>Province/State</th>
                            <th>Zone</th>
                            <th>District</th>
                            <th>City</th>
                            <th>VDC/Municipality</th>
                            <th>Ward No.</th>
                            <th>Tole</th>
                            <th>Contact No.</th>
                            <th>Property Type</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Estmated Price</th>
                            <th>Total Rooms</th>
                            <th>Bedroom </th>
                            <th>Living Room</th>
                            <th>Kitchen</th>
                            <th>Bathroom</th>
                            <th>Description</th>
                            <th>Control</th>
                          

                            <?php foreach ($properties as $property) { ?>

                         
                                <tr>
                                    <td>
                                        <?php echo $property['id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['country'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['province'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['zone'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['district'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['city'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['vdc_municipality'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['ward_no'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['tole'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['contact_no'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['property_type'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['latitude'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['longitude'] ?>
                                    </td>
                                    <td>Rs.
                                        <?php echo $property['estimated_price'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['total_rooms'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['bedroom'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['living_room'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['kitchen'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['bathroom'] ?>
                                    </td>
                                    <td>
                                        <?php echo $property['description'] ?>
                                    </td>
                                   
                                    <form method="POST">
                                        <td>
                                            <input type="hidden" name="property_id" value="<?php echo $property['id']; ?>">
                                            <a data-toggle="pill" class="btn btn-success" name="edit_property"
                                                href="#menu5">Edit</a>
                                            <button type="submit" class="btn btn-danger" name="delete_property">Delete</button>
                                        </td>
                                </tr>
                                </form>
                            
                    </table>

                    <?php } ?>
                </div>
            </div>
        </div>
 




        <div id="menu5" class="update_property tab-pane fade">
            <center>
                <h3>Edit Property Details</h3>
            </center>


           

         
                
                <div class="container">


                    <div id="map_canvas"></div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <select class="form-control" name="country" required="required">
                                        <option value="">--Select Country--</option>
                                        <option value="Nepal" selected>Nepal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="province">Province/State:</label>
                                    <select class="form-control" name="province" required="required">
                                        <option value="<?php echo $property['province']; ?>">
                                            <?php echo $property['province']; ?>
                                        </option>
                                        <option value="Koshi Pradesh">Koshi Pradesh</option>
                                        <option value="Madhesh Pradesh">Madhesh Pradesh</option>
                                        <option value="Bagmati Pradesh">Bagmati Pradesh</option>
                                        <option value="Gandaki Pradesh">Gandaki Pradesh</option>
                                        <option value="Lumbini Pradesh">Lumbini Pradesh</option>
                                        <option value="Karnali Pradesh">Karnali Pradesh</option>
                                        <option value="Sudurpaschim Pradesh">Sudurpaschim Pradesh</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="zone">Zone:</label>
                                    <select class="form-control" name="zone" id="zoneSelect" required="required"
                                        onchange="updateDistricts()">
                                        <option value="<?php  $property['zone']; ?>">
                                            <?php echo $property['zone']; ?>
                                        </option>
                                        <option value="Mechi">Mechi</option>
                                        <option value="Koshi">Koshi</option>
                                        <option value="Sagarmatha">Sagarmatha</option>
                                        <option value="Janakpur">Janakpur</option>
                                        <option value="Bagmati">Bagmati</option>
                                        <option value="Gandaki">Gandaki</option>
                                        <option value="Dhawalagiri">Dhawalagiri</option>
                                        <option value="Karnali">Karnali</option>
                                        <option value="Mahakali">Mahakali</option>
                                        <option value="Seti">Seti</option>
                                        <option value="Bheri">Bheri</option>
                                        <option value="Rapti">Rapti</option>
                                        <option value="Lumbini">Lumbini</option>
                                        <option value="Narayani">Narayani</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="district">District:</label>
                                    <select class="form-control" name="district" id="districtSelect" required="required">
                                        <option value="<?php echo $property['district']; ?>">
                                            <?php echo $property['district']; ?>
                                        </option>
                                        <!-- District options will be dynamically populated here based on the selected zone -->
                                    </select>
                                </div>
                                <script>
                                    function updateDistricts() {
                                        // Get the selected zone
                                        var selectedZone = document.getElementById("zoneSelect").value;

                                        // Get the district dropdown
                                        var districtDropdown = document.getElementById("districtSelect");

                                        // Clear existing options
                                        districtDropdown.innerHTML = '<option value="">--Select District--</option>';

                                        // Add new options based on the selected zone
                                        switch (selectedZone) {
                                            case "Mechi":
                                                addDistrictOption("Taplejung", "Taplejung");
                                                addDistrictOption("Panchthar", "Panchthar");
                                                addDistrictOption("Ilam", "Ilam");
                                                addDistrictOption("Jhapa", "Jhapa");
                                                break;

                                            case "Koshi":
                                                addDistrictOption("Morang", "Morang");
                                                addDistrictOption("Sunsari", "Sunsari");
                                                addDistrictOption("Dhankutta", "Dhankutta");
                                                addDistrictOption("Sankhuwasabha", "Sankhuwasabha");
                                                addDistrictOption("Bhojpur", "Bhojpur");
                                                addDistrictOption("Terhathum", "Terhathum");
                                                break;
                                            case "Sagarmatha":
                                                addDistrictOption("Okhaldunga", "Okhaldunga");
                                                addDistrictOption("Khotang", "Khotang");
                                                addDistrictOption("Solukhumbu", "Solukhumbu");
                                                addDistrictOption("Udaypurpa", "Udaypur");
                                                addDistrictOption("Saptari", "Saptari");
                                                addDistrictOption("Siraha", "Siraha");
                                                break;
                                            case "Janakpur":
                                                addDistrictOption("Dhanusa", "Dhanusa");
                                                addDistrictOption("Mahottari", "Mahottari");
                                                addDistrictOption("Sarlahi", "Sarlahi");
                                                addDistrictOption("Sindhuli", "Sindhuli");
                                                addDistrictOption("Ramechhap", "Ramechhap");
                                                addDistrictOption("Dolkha", "Dolkha");
                                                break;
                                            case "Bagmati":
                                                addDistrictOption("Sindhupalchauk", "Sindhupalchauk");
                                                addDistrictOption("Kavreplanchauk", "Kavreplanchauk");
                                                addDistrictOption("Lalitpur", "Lalitpur");
                                                addDistrictOption("Bhaktapur", "Bhaktapur");
                                                addDistrictOption("Kathmandu", "Kathmandu");
                                                addDistrictOption("Nuwakot", "Nuwakot");
                                                addDistrictOption("Rasuwa", "Rasuwa");
                                                addDistrictOption("Dhading", "Dhading");
                                                break;
                                            case "Gandaki":
                                                addDistrictOption("Gorkha", "Gorkha");
                                                addDistrictOption("Lamjung", "Lamjung");
                                                addDistrictOption("Tanahun", "Tanahun");
                                                addDistrictOption("Syangja", "Syangja");
                                                addDistrictOption("Kaski", "Kaski");
                                                addDistrictOption("Manag", "Manag");
                                                break;
                                            case "Dhawalagiri":
                                                addDistrictOption("Mustang", "Mustang");
                                                addDistrictOption("Parwat", "Parwat");
                                                addDistrictOption("Myagdi", "Myagdi");
                                                addDistrictOption("Baglung", "Baglung");
                                                break;
                                            case "Karnali":
                                                addDistrictOption("Dolpa", "Dolpa");
                                                addDistrictOption("Humla", "Humla");
                                                addDistrictOption("Kalikot", "Kalikot");
                                                addDistrictOption("Mugu", "Mugu");
                                                addDistrictOption("Jumla", "Jumla");
                                                break;

                                            case "Mahakali":
                                                addDistrictOption("Kanchanpur", "Kanchanpur");
                                                addDistrictOption("Dadeldhura", "Dadeldhura");
                                                addDistrictOption("Baitadi", "Baitadi");
                                                addDistrictOption("Darchula", "Darchula");
                                                break;
                                            case "Seti":
                                                addDistrictOption("Bajura", "Bajura");
                                                addDistrictOption("Bajhang", "Bajhang");
                                                addDistrictOption("Achham", "Achham");
                                                addDistrictOption("Doti", "Doti");
                                                addDistrictOption("Kailali", "Kailali");
                                                break;
                                            case "Bheri":
                                                addDistrictOption("Bardiya", "Bardiya");
                                                addDistrictOption("Surkhet", "Surkhet");
                                                addDistrictOption("Dailekh", "Dailekh");
                                                addDistrictOption("Banke", "Banke");
                                                addDistrictOption("Jajarkot", "Jajarkot");
                                                break;
                                            case "Rapti":
                                                addDistrictOption("Pyuthan", "Pyuthan");
                                                addDistrictOption("Rolpa", "Rolpa");
                                                addDistrictOption("Rukum", "Rukum");
                                                addDistrictOption("Salyan", "Salyan");
                                                addDistrictOption("Dang", "Dang");
                                                break;
                                            case "Lumbini":
                                                addDistrictOption("Gulmi", "Gulmi");
                                                addDistrictOption("Palpa", "Palpa");
                                                addDistrictOption("Nawalparasi", "Nawalparasi");
                                                addDistrictOption("Rupandehi", "Rupandehi");
                                                addDistrictOption("Arghakhanchi", "Arghakhanchi");
                                                addDistrictOption("Kapilvastu", "Kapilvastu");
                                                break;
                                            case "Narayani":
                                                addDistrictOption("Makwanpur", "Makwanpur");
                                                addDistrictOption("Rauthat", "Rauthat");
                                                addDistrictOption("Bara", "Bara");
                                                addDistrictOption("Parsa", "Parsa");
                                                addDistrictOption("Chitwan", "Chitwan");
                                                break;
                                            default:
                                                // Handle the default case or unexpected values
                                                break;
                                        }
                                    }

                                    // Helper function to add options to the district dropdown
                                    function addDistrictOption(value, text) {
                                        var option = document.createElement("option");
                                        option.value = value;
                                        option.text = text;
                                        document.getElementById("districtSelect").add(option);
                                    }
                                </script>
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city"
                                        value="<?php echo $property['city']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="vdc/municipality">VDC/Municipality:</label>
                                    <select class="form-control" name="vdc_municipality">
                                        <option value="<?php echo $property['vdc_municipality'] ?>">
                                            <?php echo $property['vdc_municipality'] ?>
                                        </option>
                                        <option value="VDC">VDC</option>
                                        <option value="Municipality">Municipality</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="ward_no">Ward No.:</label>
                                    <input type="text" class="form-control" id="ward_no" placeholder="Enter Ward No."
                                        name="ward_no" value="<?php echo $property['ward_no'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tole">Tole:</label>
                                    <input type="text" class="form-control" id="tole" placeholder="Enter Tole" name="tole"
                                        value="<?php echo $property['tole']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="contact_no">Contact No.:</label>
                                    <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No."
                                        name="contact_no" value="<?php echo $property['contact_no']; ?>">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="property_type">Property Type:</label>
                                    <select class="form-control" name="property_type">
                                        <option value="<?php echo $property['property_type'] ?>">
                                            <?php echo $property['property_type'] ?>
                                        </option>
                                        <option value="Full House Rent">Full House Rent</option>
                                        <option value="Flat Rent">Flat Rent</option>
                                        <option value="Room Rent">Room Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="estimated_price">Estimated Price:</label>
                                    <input type="estimated_price" class="form-control" id="estimated_price"
                                        placeholder="Enter Estimated Price" name="estimated_price"
                                        value="<?php echo $property['estimated_price']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="total_rooms">Total No. of Rooms:</label>
                                    <input type="number" class="form-control" id="total_rooms"
                                        placeholder="Enter Total No. of Rooms" name="total_rooms"
                                        value="<?php echo $property['total_rooms']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="bedroom">No. of Bedroom:</label>
                                    <input type="number" class="form-control" id="bedroom"
                                        placeholder="Enter No. of Bedroom" name="bedroom"
                                        value="<?php echo $property['bedroom']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="living_room">No. of Living Room:</label>
                                    <input type="number" class="form-control" id="living_room"
                                        placeholder="Enter No. of Living Room" name="living_room"
                                        value="<?php echo $property['living_room']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kitchen">No. of Kitchen:</label>
                                    <input type="number" class="form-control" id="kitchen"
                                        placeholder="Enter No. of Kitchen" name="kitchen"
                                        value="<?php echo $property['kitchen']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="bathroom">No. of Bathroom/Washroom:</label>
                                    <input type="number" class="form-control" id="bathroom"
                                        placeholder="Enter No. of Bathroom/Washroom" name="bathroom"
                                        value="<?php echo $property['bathroom']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="description">Full Description:</label>
                                    <textarea type="comment" class="form-control" id="description"
                                        name="description"><?php echo $property['description']; ?></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="hidden" name="property_id" value="<?php echo $id; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Update Property"
                                        name="update_property">
                                </div>
                            </div>
                        </div>
                    </form>
                    <br><br>

                </div>
          
        </div> 













    </div>

</div>

<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->