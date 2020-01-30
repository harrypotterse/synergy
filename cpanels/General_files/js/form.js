$(document).ready(function () {
    $('#uploadImage').submit(function (event) {
        event.preventDefault();
        $('#loader-icon').show();
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
                $('#loader-icon').hide();
                $('#targetLayer').show();
                $('input').attr('disabled', false);
                //  location.reload();

            },
            resetForm: true
        });

        return false;
    });

    $('#uploadImage1').submit(function (event) {
        event.preventDefault();
        $('#loader-icon').show();
        $('#targetLayer1').hide();
        // ======================
        $(this).ajaxSubmit({
            target: '#targetLayer1',
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
                $('#loader-icon').hide();
                $('#targetLayer1').show();
                $('input').attr('disabled', false);
                //  location.reload();

            },
            resetForm: true
        });

        return false;
    });

    $('#uploadImage2').submit(function (event) {
        event.preventDefault();
        $('#loader-icon').show();
        $('#targetLayer2').hide();
        // ======================
        $(this).ajaxSubmit({
            target: '#targetLayer2',
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
                $('#loader-icon').hide();
                $('#targetLayer2').show();
                $('input').attr('disabled', false);
                //  location.reload();

            },
            resetForm: true
        });

        return false;
    });
});