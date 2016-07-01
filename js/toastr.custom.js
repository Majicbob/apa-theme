jQuery(function(){
  if (jQuery('body').is('.front')) {
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-bottom-right",
      "preventDuplicates": true,
      "showDuration": "0",
      "hideDuration": "0",
      "timeOut": "0",
      "extendedTimeOut": "0",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    toastr["warning"]('<strong>Important Zika virus information from Dr. Berry</strong>');

    jQuery('.toast-warning').click(function() {
      window.location.replace("http://www.austinperinatal.com/education/general-information/zika-virus-and-pregnancy");
    });
  }
});