    function addCustomer() {
        $("#addcustomerpopup").modal("show");

    }

    function customerNotServed() {
        $("#customernotServedpopup").modal("show");

    }

    function customerSms() {
        $("#smsTemPopup").modal("show");

    }
    //customerSms();

    // function customSelect() {
    //     if ($('.sel').html()) {
    //         $('.sel').jqTransform();
    //     }
    // }

    customSelect();

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