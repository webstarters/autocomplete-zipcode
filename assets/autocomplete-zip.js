jQuery(document).ready(function(){
  jQuery('#billing_postcode').change(function(){
      var my_field = jQuery(this);
      jQuery.ajax({
          url: 'https://dawa.aws.dk/postnumre?nr='+my_field.val()+'',
          success:function(data) {
              jQuery('#billing_city').val(jQuery.parseJSON(JSON.stringify(data))[0]['navn']);
          }

      });
  });
});