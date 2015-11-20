$(document).ready(function(){
//   $( "#view" ).click(function() {
// // Set up a click function that connects to view.php to access the MySQL customer table
//     $.ajax({
//       url:'view.php',
//       type: 'GET',
//       data: })
//   console.log("Is this working?");
//   }
 
//   });
// Fix up the add click function to bridge between the Index.html and the view.php
  $( "#add" ).click(function() {
    var customername = $('input#customername').val();
    var contactname = $('input#contactname').val();
    var address = $('input#address').val();
    var city = $('input#city').val();
    var postalcode = $('input#postalcode').val();
    var country = $('input#country').val();

    if ($.trim(customername) != '' && $.trim(contactname) != '' && $.trim(address) != '' && $.trim(city) != '' && $.trim(postalcode) != '' && $.trim(country) != '') {
      alert(2);
      $.ajax({
        url:'add.php',
        type:'POST',
        data: {
        customername: customername,
        contactname: contactname,
        address: address,
        city: city,
        postalcode: postalcode,
        country: country
        },
        success: function(data) {
          $('#customer-table').html(data);
        },
        error: function(e) {
          console.log(e);

        }
      });
      // , function(data) {
      //   alert(data);

      // });
    };
  });

});