jQuery( document ).ready( function( $ ){
  var calcdata = [];
  var postdata = {
    'action':	'seg_fetch_calc_settings'
  };
  if( $( '#seg-web-cost-calculator' ).length === 1 ){
    $.ajax( {
      url: seg_ajaxobject.ajax_url,
      type:'POST',
      dataType: 'json',
      data: postdata,
      error: function(jqXHR, textStatus, errorThrown){
        console.log( JSON.stringify( errorThrown, null, 4 ) );
      },
      success: function(data, textStatus, jqXHR){
        calcdata = JSON.parse( data );
        calc_init();
      }
    } );
  }

  $( '.seg-calc-field' ).on( 'change', function(){
    render_calculator();
  } );

  function calc_init(){
    render_calculator();
  }

  function render_calculator(){
    var base = conditional_mult( calcdata.rate, calcdata.time.base, $( 'input[name="seg-refreshing"]:checked').val() );
    var templates = tri_mult( calcdata.rate, calcdata.time.temp, parseInt( $( '#seg-calc-templates' ).val() ) );
    var pages = tri_mult( calcdata.rate, calcdata.time.page, parseInt( $( '#seg-calc-pages' ).val() ) );
    var images = straight_mult( calcdata.image, parseInt( $( '#seg-calc-images' ).val() ) );
    var content = tri_mult( calcdata.rate, calcdata.time.content, parseInt( $( '#seg-calc-content' ).val() ) );
    var social = conditional_mult( calcdata.rate, calcdata.time.social, $( 'input[name="seg-social"]:checked').val() );
    var analytics = conditional_mult( calcdata.rate, calcdata.time.ga, $( 'input[name="seg-analytics"]:checked').val() );
    var newsletter = conditional_mult( calcdata.rate, calcdata.time.news, $( 'input[name="seg-newsletter"]:checked').val() );
    var store = conditional_mult( calcdata.rate, calcdata.time.store, $( 'input[name="seg-store"]:checked').val() );
    var sitems = conditional_tri_mult( calcdata.rate, calcdata.time.item, $( 'input[name="seg-store"]:checked').val(), parseInt( $( '#seg-calc-storeitems' ).val() ) );
    var project = money_format( base + templates + pages + images + content + social + analytics + newsletter + store + sitems );
    $( '#seg-calc-total-wrapper .calc-display' ).text( project );
  }

  function straight_mult( a, b ){
    var result = a*b;
    return result;
  }

  function tri_mult( a, b, c ){
    var result = (a*b)*c;
    return result;
  }

  function conditional_mult( a, b, c ){
    var result = ( c == "Y" )? a*b : 0 ;
    return result;
  }

  function conditional_tri_mult( a, b, c, d ){
    var result = ( c == "Y" )? (a*b)*d : 0 ;
    return result;
  }

  function money_format( a ){
    var formatter = new Intl.NumberFormat( 'en-US', {
      style: 'currency',
      currency: 'USD',
    } );
    var result = formatter.format( a );
    return result;
  }
} );
