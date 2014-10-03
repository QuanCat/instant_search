
$('#search').keyup(function() {
  var searchterm = $('#search').val();
    //alert( searchterm );

  if (searchterm != '') {

    $.ajax({
      type: "POST",
      url: 'search.php',
      data: {
        searchterm: searchterm
      },
      success: function( data ) {
        $( "#searchresults" ).html( "<strong>" + data + "</strong>" );
      }
    });


  } else {

    $('#searchresults').html('');
  }

});
