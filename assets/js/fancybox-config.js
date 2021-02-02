$(document).ready(function() {
  $(".enlarge").fancybox();
});

// mengubah nama file input
$('.custom-file-input').on('change', function() {
  let photo = $(this).val().split('\\').pop();
  $(this).next('.custom-file-label').addClass("selected").html(photo);
});

function readPhoto(input) {
 if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#check_photo').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

function enlargePhoto(a) {
 if (a.files && a.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#check_enlarge_photo').attr('href', e.target.result);
    }

    reader.readAsDataURL(a.files[0]);
  }
}

$("#img_galeri").change(function(){
  readPhoto(this);
});

$("#img_galeri").change(function(){
  enlargePhoto(this);
});

$("#img_favicon").change(function(){
  readPhoto(this);
});

$("#img_favicon").change(function(){
  enlargePhoto(this);
});

$("#img_navbar_brand").change(function(){
  readPhoto(this);
});

$("#img_navbar_brand").change(function(){
  enlargePhoto(this);
});

$("#img_profile").change(function(){
  readPhoto(this);
});

$("#img_profile").change(function(){
  enlargePhoto(this);
});

$("#img_jumbotron").change(function(){
  readPhoto(this);
});

$("#img_jumbotron").change(function(){
  enlargePhoto(this);
});
