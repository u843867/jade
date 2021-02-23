$(function() {



    $( '#btn_init' ).click(function() {
      $( '#init_para0' ).fadeOut();
      $( '#init_para' ).fadeOut();
      $( '#init_para1' ).fadeOut();
    });

    $( '#btn_intent' ).click(function() {
      $( '#init_intent0' ).fadeOut();
    });

    $( '#btn_route' ).click(function() {
      $( '#init_para_route0' ).fadeOut();
      $( '#init_para_route1' ).fadeOut();
      $( '#init_para_route2' ).fadeOut();
    });

    $( '#btn_auth' ).click(function() {
      $( '#init_para_auth0' ).fadeOut();
      $( '#init_para_auth1' ).fadeOut();
      $( '#init_para_auth2' ).fadeOut();
    });

    $( '#init_btn2' ).click(function() {
      $( '#init_para2' ).fadeOut();
    });
  
    $(".btntoggle").click(function(){
        $("div.paratoggle").toggle('slow');
    });

    $(".linktoggle").click(function(){
        $("div.paratoggle").toggle('slow');
    });


    $(".btnRouteToggle").click(function(){
      $("div.paraRoutetoggle").toggle('slow');
  });


    $(".btnAuthToggle").click(function(){
      $("div.paraAuthtoggle").toggle('slow');
  });

    $("#btn_auth").click(function(){
      $("#paraAuth").hide(500);
  });

    $("#btn_route").click(function(){
      $("#paraRoute").hide(500);
  });

    $("#btn_init").click(function(){
      $("#paraInit").hide(500);
  });

});



function slideout() {
  return {
    open: false,
    usedKeyboard: false,
    init() {
      this.$watch('open', value => {
        value && this.$refs.closeButton.focus()
        this.toggleOverlay()
      })
      this.toggleOverlay()
    },
    toggleOverlay() {
      document.body.classList[this.open ? 'add' : 'remove']('h-screen', 'overflow-hidden')
    }
  }
}




