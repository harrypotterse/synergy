$(document).ready(function () {
    $('#uploadImage').submit(function (event) {
        event.preventDefault();
        $('#targetLayer').hide();
        // ======================
        $(this).ajaxSubmit({
            target: '#targetLayer',
            beforeSubmit: function () {
                $('.progress-bar').width('50%');
                $('input').attr('disabled', true);
            },
            uploadProgress: function (event, position, total, percentageComplete)
            {
                $('.progress-bar').animate({
                    width: percentageComplete + '%'
                }, {
                    duration: 1000
                });
            },
            success: function () {
                $('input').attr('disabled', false);
                $('#loader-icon').hide();
                var x = $('#targetLayer').text();   
                  if (x == 1) {
                    swal("Thank you", "تم ارسال البريد الالكتروني بنجاح", "success");
                } else {
                    swal("خطأ", "من فضلك راجع بيانات النموذج ", "error");
                }
            },
            resetForm: true
        });
        return false;
    });
});