

  var profile_pic_file = document.getElementById('profile_pic_file');
  var profile_pic_form = document.getElementById('profile_pic_form');


  var profile_cover_image = document.getElementById('profile_cover_image');
  var profile_profile_image = document.getElementById('profile_profile_image');


  var profile_cover_form = document.getElementById('profile_cover_form');
  var profile_cover_file = document.getElementById('profile_cover_file');



  profile_cover_image.addEventListener('click', function() {
    profile_cover_file.click();
  })


  profile_cover_file.addEventListener('change', (e) =>{
    const file = e.target.files[0];
    if (file) {
      profile_cover_form.submit();
      // alert("File is ready to be uploaded");
    }
  })


  profile_profile_image.addEventListener('click', function() {
    profile_pic_file.click();
  })


  profile_pic_file.addEventListener('change', (e) =>{
    const file = e.target.files[0];
    if (file) {
      profile_pic_form.submit();
      // alert("File is ready to be uploaded");
    }
  })






