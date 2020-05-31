    function addApaManager() {
        $("#addSpaManages").modal("show");
    }

    function editApaManager() {
        $("#editSpaManages").modal("show");

    }

    function customerSms() {
        $("#smsTemPopup").modal("show");

    }
function addTemplate() {
        $("#addTemplate").modal("show");

    }

    
  

    $(function() {
        if ($('.date').html()) {
            $('.date').datetimepicker({
                showTodayButton: false,
                format: "DD-MM-YYYY",
            });
        }
    });

    $(".date").focusin(function() {
        $(this).addClass("avtiveArea");
    });
    $(".date").focusout(function() {
        $(this).removeClass("avtiveArea");
    })