$(function() {
  


  $( '#init_btn' ).click(function() {
    $( '#init_para0' ).fadeOut();
    $( '#init_para' ).fadeOut();
    $( '#init_para1' ).fadeOut();
  });

  $( '#init_btn_route' ).click(function() {
    $( '#init_para_route0' ).fadeOut();
    $( '#init_para_route1' ).fadeOut();
    $( '#init_para_route2' ).fadeOut();
  });

  $( '#init_btn_auth' ).click(function() {
    $( '#init_para_auth0' ).fadeOut();
    $( '#init_para_auth1' ).fadeOut();
    $( '#init_para_auth2' ).fadeOut();
  });

  $( '#init_btn2' ).click(function() {
    $( '#init_para2' ).fadeOut();
  });

  $(document).ready(function(){
    $("#btntoggle").click(function(){
        $("div.paratoggle").toggle('slow');
    });

    $("#btnRouteToggle").click(function(){
      $("div.paraRoutetoggle").toggle('slow');
  });

    $("#btnAuthToggle").click(function(){
      $("div.paraAuthtoggle").toggle('slow');
  });

});


  });

