

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$(function () {
  $('select[multiple]').multiselect({
      columns  : 1,
      search   : true,
      texts    : {
          placeholder: 'Select Emotions (max 3)',
          search     : 'Search Emotions'
      },
      onOptionClick: function( element, option ) {
          var maxSelect = 3;

          // too many selected, deselect this option
          if( $(element).val().length > maxSelect ) {
              if( $(option).is(':checked') ) {
                  var thisVals = $(element).val();

                  thisVals.splice(
                      thisVals.indexOf( $(option).val() ), 1
                  );

                  $(element).val( thisVals );

                  $(option).prop( 'checked', false ).closest('li')
                      .toggleClass('selected');
              }
          }
          // max select reached, disable non-checked checkboxes
          else if( $(element).val().length == maxSelect ) {
              $(element).next('.ms-options-wrap')
                  .find('li:not(.selected)').addClass('disabled')
                  .find('input[type="checkbox"]')
                      .attr( 'disabled', 'disabled' );
          }
          // max select not reached, make sure any disabled
          // checkboxes are available
          else {
              $(element).next('.ms-options-wrap')
                  .find('li.disabled').removeClass('disabled')
                  .find('input[type="checkbox"]')
                      .removeAttr( 'disabled' );
          }
      }
  });
});
