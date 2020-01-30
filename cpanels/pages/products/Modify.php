<?php require_once './Settings.php'; ?>
<?php require_once '../../../FileConnection/Data_connection.php'; ?>
<?php require_once '../../../FileConnection/Extra_functions.php'; ?>
<?php require_once '../../../Classes/Achieve.php'; ?>
<?php require_once '../../../Classes/Component.php'; ?>
<?php
$class = new Achieve();
$query = "select * from  products  where id = ? ";
$array_var = array();
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

$array = array($id);
$rows = $class->sql_feth($Data_communication, $query, $array);
if (count($rows) > 0) :
    foreach ($rows as $value):
        $id = $value['id'];
        $Main = $value['Main'];
        $sub = $value['sub'];
        $Producer = $value['Producer'];
        $image = $value['image'];
        $image2 = $value['image2'];
        $image3 = $value['image3'];
        $explained = $value['explained'];
        $details = $value['details'];
        $instructions = $value['instructions'];
        $Dimensions = $value['Dimensions'];
        $Meta_Details = $value['Meta_Details'];
        $Meta_Keywords = $value['Meta_Keywords'];
        $Language = $value['Language'];
    endforeach;
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Page; ?></title>
        <?php require_once '../../General_components/css.php'; ?>
        <style>
            *{box-sizing: border-box;}
            html{height: 100%;margin: 0;}
            body{min-height: 100%;font-family: 'Roboto';margin: 0;background-color: #fafafa;}
            .container { margin: 150px auto; max-width: 960px;}
            .tagsinput,.tagsinput *{box-sizing:border-box}
            .tagsinput{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;background:#fff;font-family:sans-serif;font-size:14px;line-height:20px;color:#556270;padding:5px 5px 0;border:1px solid #e6e6e6;border-radius:2px}
            .tagsinput.focus{border-color:#ccc}
            .tagsinput .tag{position:relative;background:#556270;display:block;max-width:100%;word-wrap:break-word;color:#fff;padding:5px 30px 5px 5px;border-radius:2px;margin:0 5px 5px 0}
            .tagsinput .tag .tag-remove{position:absolute;background:0 0;display:block;width:30px;height:30px;top:0;right:0;cursor:pointer;text-decoration:none;text-align:center;color:#ff6b6b;line-height:30px;padding:0;border:0}
            .tagsinput .tag .tag-remove:after,.tagsinput .tag .tag-remove:before{background:#ff6b6b;position:absolute;display:block;width:10px;height:2px;top:14px;left:10px;content:''}
            .tagsinput .tag .tag-remove:before{-webkit-transform:rotateZ(45deg);transform:rotateZ(45deg)}
            .tagsinput .tag .tag-remove:after{-webkit-transform:rotateZ(-45deg);transform:rotateZ(-45deg)}
            .tagsinput div{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1}
            .tagsinput div input{background:0 0;display:block;width:100%;font-size:14px;line-height:20px;padding:5px;border:0;margin:0 5px 5px 0}
            .tagsinput div input.error{color:#ff6b6b}
            .tagsinput div input::-ms-clear{display:none}
            .tagsinput div input::-webkit-input-placeholder{color:#ccc;opacity:1}
            .tagsinput div input:-moz-placeholder{color:#ccc;opacity:1}
            .tagsinput div input::-moz-placeholder{color:#ccc;opacity:1}
            .tagsinput div input:-ms-input-placeholder{color:#ccc;opacity:1}


            body {
                font-family: 'Open Sans', sans-serif;
                font-weight: 300;
            }
            .tabs {
                margin: 0 auto;
                padding: 0 20px;
            }
            #tab-button {
                display: table;
                table-layout: fixed;
                width: 100%;
                margin: 0;
                padding: 0;
                list-style: none;
            }
            #tab-button li {
                display: table-cell;
                width: 100%;
            }
            #tab-button li a {
                display: block;
                padding: .5em;
                background: #eee;
                border: 1px solid #ddd;
                text-align: center;
                color: #000;
                text-decoration: none;
            }
            #tab-button li:not(:first-child) a {
                border-left: none;
            }
            #tab-button li a:hover,
            #tab-button .is-active a {
                border-bottom-color: transparent;
                background: #fff;
            }
            .tab-contents {
                padding: .5em 2em 1em;
                border: 1px solid #ddd;
            }



            .tab-button-outer {
                display: none;
            }
            .tab-contents {
                margin-top: 20px;
            }
            @media screen and (min-width: 768px) {
                .tab-button-outer {
                    position: relative;
                    z-index: 2;
                    display: block;
                }
                .tab-select-outer {
                    display: none;
                }
                .tab-contents {
                    position: relative;
                    top: -1px;
                    margin-top: 0;
                }
                .content-wrapper, .right-side {
                    min-height: 100%;
                    background-color: #ffffff;
                    z-index: 800;
                }
            }
            select {
                width: 0px;
                height: 0px;
                overflow:hidden;
                outline: none;
                border: none;
                appearance:none;
                -moz-appearance: none;

            }
            label{
                display: inline-block;
                padding: 5px 10px;
                position: relative;
                width: 100px;
                height: 20px;
                background-color:#ccc;

            }
            label .selected{
                display: inline-block;
                overflow: hidden;
                width: 100%;
                height: 100%;
            }
            label span.lists{
                width: 100%;
                display: inline-block;
                position: absolute;
                top: 100%;
                left: 0px;
                box-shadow: 0px 0px 2px 0px #ccc;
                background-color:#fff;
                z-index: 9;
            }
            label span.item{
                display: inline-block;
                width: 100%;
                border-bottom: 1px solid #ccc;
            }
        </style>
        <link href="file/input-file.css" rel="stylesheet" type="text/css"/>


    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            <?php require_once '../../General_components/top_nave.php'; ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php require_once '../../General_components/nav.php'; ?>

            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">

                <div class="content">
                    <!-- Content Wrapper. Contains page content -->

                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <!--                        <h1 style="text-align: right; direction: rtl;">
                                                    Data Tables
                                                    <small>advanced tables</small>
                                                </h1>-->
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-pagelines"></i> الرئسية</a></li>
                            <li><a href="spreadsheet.php"><?php echo Page; ?></a></li>
                            <li class="active">تعديل البيانات</li>
                        </ol>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <?php require_once '../../General_files/php/ap.php'; ?>
                                    <div class="box-body">
                                        <form action="phpajax/edit.php" id="uploadImage" method="post" enctype="multipart/form-data">
                                            <div class="content">
                                                <div class="input-group margin" style="display: none">
                                                    <input type="text" class="form-control input-lg" name="id" value="<?php echo $id; ?>">
                                                    <input type="text" class="form-control input-lg" name="f1" value="<?php echo $image; ?>">
                                                    <input type="text" class="form-control input-lg" name="f2" value="<?php echo  $image2 ; ?>">
                                                    <input type="text" class="form-control input-lg" name="f3" value="<?php echo  $image3 ; ?>">


                                                    <span class="input-group-btn ">
                                                        <button class="btn btn-info btn-flat btn-lg" type="button">ID</button>
                                                    </span>
                                                </div>
                                                <div class='col-lg-offset-2 col-lg-10 '>
                                                    <div class="input-group margin">
                                                        <select class="form-control input-lg custom-select-lg" id="Language" name="Language">
                                                            <option value="English">English</option>
                                                            <option value="Arabic">Arabic</option>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary"> اللغة</span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="Producer" value="<?php echo $Producer; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">اسم المنتج</button>
                                                        </span>
                                                    </div>
                                                    <!--                                                    <div class="input-group margin">
                                                                                                            <select class="form-control input-lg custom-select-lg" id="Main" name="Main">
                                                                                                            </select>
                                                                                                            <span class="input-group-addon btn btn-primary"> الخدمات</span>
                                                                                                        </div>-->
                                                    <!--                                                    <div class="input-group margin">
                                                                                                            <select class="form-control input-lg" id="sub" name="sub">
                                                    
                                                                                                            </select>
                                                                                                            <span class="input-group-addon btn btn-primary"> الاقسام الفرعية</span>
                                                                                                        </div>-->
                                                    <div class="panel panel-default">

                                                        <div class="panel-heading" style="text-align: center;font-size: 21px;background: #222d32;color: white;font-weight: bolder;">تفاصيل المنتجات</div>
                                                        <div class="panel-body">

                                                            <fieldset class="col-md-12">
                                                                <div class="panel-body">
                                                                    <div class="form-group margin">
                                                                        <button class="btn btn-info btn-flat btn-block" type="button">الشرح</button>
                                                                        <textarea class="form-control" rows="5" id="textarea"  class="textarea" name="explained" placeholder="مواعيد العمل"><?php echo $explained; ?></textarea>
                                                                    </div>
                                                                    <div class="form-group margin">
                                                                        <button class="btn btn-info btn-flat btn-block" type="button">التفاصيل</button>
                                                                        <textarea class="form-control" rows="5" id="textarea1"  class="textarea" name="details" placeholder="مواعيد العمل"><?php echo $details; ?></textarea>
                                                                    </div>
                                                                    <div class="form-group margin">
                                                                        <button class="btn btn-info btn-flat btn-block" type="button">الأبعاد</button>
                                                                        <textarea class="form-control" rows="5" id="textarea2"  class="textarea" name="Dimensions" placeholder="مواعيد العمل"><?php echo $Dimensions; ?></textarea>
                                                                    </div>
                                                                    <div class="form-group margin">
                                                                        <button class="btn btn-info btn-flat btn-block" type="button">التعليمات</button>
                                                                        <textarea class="form-control" rows="5" id="textarea3"  class="textarea" name="instructions" placeholder="مواعيد العمل"><?php echo $instructions; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="clearfix"></div>
                                                        </div>

                                                    </div>




                                                    <hr>




                                                    <div class="panel panel-default">

                                                        <div class="panel-heading" style="text-align: center;font-size: 21px;background: #222d32;color: white;font-weight: bolder;">صور المنتجات</div>
                                                        <div class="panel-body">

                                                            <fieldset class="col-md-12">
                                                                <div class="panel-body">
                                                                    <div class="input-group margin">
                                                                        <input type="text" class="form-control input-lg" id="form-tags-1" name="Meta_Keywords" value="<?php echo $Meta_Keywords; ?>">
                                                                        <span class="input-group-btn ">
                                                                            <button class="btn btn-info btn-flat btn-lg" type="button">Meta_Keywords</button>
                                                                        </span>
                                                                    </div>
                                                                    <div class="input-group margin">
                                                                        <textarea class="form-control custom-control" rows="10" style="resize:none" name="Meta_Details"><?php echo $Meta_Details; ?></textarea>
                                                                        <span class="input-group-addon btn btn-primary">Meta_Details</span>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="clearfix"></div>
                                                        </div>

                                                    </div>





                                                    <hr>
                                                    <div class="panel panel-default">

                                                        <div class="panel-heading" style="text-align: center;font-size: 21px;background: #222d32;color: white;font-weight: bolder;">صور المنتجات</div>
                                                        <div class="panel-body">

                                                            <fieldset class="col-md-12">
                                                                <div class="panel-body col-md-12">
                                                                    <input type="file" name="image" >
                                                                    <td><img src="../../../Public/products/p1/<?php echo $image; ?>" class="img-thumbnail" width="150" alt="Cinque Terre"></td>

                                                                    <br>
                                                                    <input type="file" name="image2" >
                                                                    <td><img src="../../../Public/products/p2/<?php echo $image2; ?>" class="img-thumbnail" width="150" alt="Cinque Terre"></td>

                                                                    <br>
                                                                    <input type="file" name="image3" >
                                                                    <td><img src="../../../Public/products/p3/<?php echo $image3; ?>" class="img-thumbnail" width="150" alt="Cinque Terre"></td>


                                                                </div>


                                                            </fieldset>

                                                            <div class="clearfix"></div>
                                                        </div>

                                                    </div>



                                                    <input type="submit" class="btn btn-info btn-block btn-lg margin btn" value="اضافة موضوع جديد">

                                                </div>
                                            </div>

                                        </form>

                                    </div><!-- /.box-body -->

                                </div><!-- /.box -->

                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </section><!-- /.content -->
                    <div class="content">
                        <div id="targetLayer">

                        </div>
                    </div>
                </div>

            </div><!-- /.content-wrapper -->
            <?php require_once '../../General_components/fotter.php'; ?>

        </div><!-- ./wrapper -->
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <?php require_once '../../General_components/js.php'; ?>
        <script>
            $(function () {
                $('input[type=file]').change(function () {
                    var t = $(this).val();
                    var labelText = 'File : ' + t.substr(12, t.length);
                    $(this).prev('label').text(labelText);
                })
            });

        </script>
        <script type="text/javascript">
            tinymce.init({
                selector: "#textarea",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
        </script>
        <script src="file/input-file.min.js" type="text/javascript"></script>
        <script>
            new InputFile({
                // options
            });
        </script>
        <script>
            $(function () {
                $('input[type=file]').change(function () {
                    var t = $(this).val();
                    var labelText = 'File : ' + t.substr(12, t.length);
                    $(this).prev('label').text(labelText);
                })
            });
        </script>
        <script type="text/javascript">
            tinymce.init({
                selector: "#textarea",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
            tinymce.init({
                selector: "#textarea1",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
            tinymce.init({
                selector: "#textarea2",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
            tinymce.init({
                selector: "#textarea3",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>

            $(function () {
                $(".boxd").click(function () {
                    var text = $(this).attr('idv');
                    $.post('phpajax/dell.php', {text: text}, function (data) {
                        if (data = 1) {
                            location.reload();

                        } else {
                            return false;
                        }
                    });
                    return false;
                });
            });


            $(function () {
                $('#form-tags-1').tagsInput();

                $('#form-tags-2').tagsInput({
                    'onAddTag': function (input, value) {
                        console.log('tag added', input, value);
                    },
                    'onRemoveTag': function (input, value) {
                        console.log('tag removed', input, value);
                    },
                    'onChange': function (input, value) {
                        console.log('change triggered', input, value);
                    }
                });

                $('#form-tags-3').tagsInput({
                    'unique': true,
                    'minChars': 2,
                    'maxChars': 10,
                    'limit': 5,
                    'validationPattern': new RegExp('^[a-zA-Z]+$')
                });

                $('#form-tags-4').tagsInput({
                    'autocomplete': {
                        source: [
                            'apple',
                            'banana',
                            'orange',
                            'pizza'
                        ]
                    }
                });

                $('#form-tags-5').tagsInput({
                    'delimiter': ';'
                });

                $('#form-tags-6').tagsInput({
                    'delimiter': [',', ';']
                });
            });



            /* jQuery Tags Input Revisited Plugin
             *
             * Copyright (c) Krzysztof Rusnarczyk
             * Licensed under the MIT license */

            (function ($) {
                var delimiter = [];
                var inputSettings = [];
                var callbacks = [];

                $.fn.addTag = function (value, options) {
                    options = jQuery.extend({
                        focus: false,
                        callback: true
                    }, options);

                    this.each(function () {
                        var id = $(this).attr('id');

                        var tagslist = $(this).val().split(_getDelimiter(delimiter[id]));
                        if (tagslist[0] === '')
                            tagslist = [];

                        value = jQuery.trim(value);

                        if ((inputSettings[id].unique && $(this).tagExist(value)) || !_validateTag(value, inputSettings[id], tagslist, delimiter[id])) {
                            $('#' + id + '_tag').addClass('error');
                            return false;
                        }

                        $('<span>', {class: 'tag'}).append(
                                $('<span>', {class: 'tag-text'}).text(value),
                                $('<button>', {class: 'tag-remove'}).click(function () {
                            return $('#' + id).removeTag(encodeURI(value));
                        })
                                ).insertBefore('#' + id + '_addTag');

                        tagslist.push(value);

                        $('#' + id + '_tag').val('');
                        if (options.focus) {
                            $('#' + id + '_tag').focus();
                        } else {
                            $('#' + id + '_tag').blur();
                        }

                        $.fn.tagsInput.updateTagsField(this, tagslist);

                        if (options.callback && callbacks[id] && callbacks[id]['onAddTag']) {
                            var f = callbacks[id]['onAddTag'];
                            f.call(this, this, value);
                        }

                        if (callbacks[id] && callbacks[id]['onChange']) {
                            var i = tagslist.length;
                            var f = callbacks[id]['onChange'];
                            f.call(this, this, value);
                        }
                    });

                    return false;
                };

                $.fn.removeTag = function (value) {
                    value = decodeURI(value);

                    this.each(function () {
                        var id = $(this).attr('id');

                        var old = $(this).val().split(_getDelimiter(delimiter[id]));

                        $('#' + id + '_tagsinput .tag').remove();

                        var str = '';
                        for (i = 0; i < old.length; ++i) {
                            if (old[i] != value) {
                                str = str + _getDelimiter(delimiter[id]) + old[i];
                            }
                        }

                        $.fn.tagsInput.importTags(this, str);

                        if (callbacks[id] && callbacks[id]['onRemoveTag']) {
                            var f = callbacks[id]['onRemoveTag'];
                            f.call(this, this, value);
                        }
                    });

                    return false;
                };

                $.fn.tagExist = function (val) {
                    var id = $(this).attr('id');
                    var tagslist = $(this).val().split(_getDelimiter(delimiter[id]));
                    return (jQuery.inArray(val, tagslist) >= 0);
                };

                $.fn.importTags = function (str) {
                    var id = $(this).attr('id');
                    $('#' + id + '_tagsinput .tag').remove();
                    $.fn.tagsInput.importTags(this, str);
                };

                $.fn.tagsInput = function (options) {
                    var settings = jQuery.extend({
                        interactive: true,
                        placeholder: 'Add a tag',
                        minChars: 0,
                        maxChars: null,
                        limit: null,
                        validationPattern: null,
                        width: 'auto',
                        height: 'auto',
                        autocomplete: null,
                        hide: true,
                        delimiter: ',',
                        unique: true,
                        removeWithBackspace: true
                    }, options);

                    var uniqueIdCounter = 0;

                    this.each(function () {
                        if (typeof $(this).data('tagsinput-init') !== 'undefined')
                            return;

                        $(this).data('tagsinput-init', true);

                        if (settings.hide)
                            $(this).hide();

                        var id = $(this).attr('id');
                        if (!id || _getDelimiter(delimiter[$(this).attr('id')])) {
                            id = $(this).attr('id', 'tags' + new Date().getTime() + (++uniqueIdCounter)).attr('id');
                        }

                        var data = jQuery.extend({
                            pid: id,
                            real_input: '#' + id,
                            holder: '#' + id + '_tagsinput',
                            input_wrapper: '#' + id + '_addTag',
                            fake_input: '#' + id + '_tag'
                        }, settings);

                        delimiter[id] = data.delimiter;
                        inputSettings[id] = {
                            minChars: settings.minChars,
                            maxChars: settings.maxChars,
                            limit: settings.limit,
                            validationPattern: settings.validationPattern,
                            unique: settings.unique
                        };

                        if (settings.onAddTag || settings.onRemoveTag || settings.onChange) {
                            callbacks[id] = [];
                            callbacks[id]['onAddTag'] = settings.onAddTag;
                            callbacks[id]['onRemoveTag'] = settings.onRemoveTag;
                            callbacks[id]['onChange'] = settings.onChange;
                        }

                        var markup = $('<div>', {id: id + '_tagsinput', class: 'tagsinput'}).append(
                                $('<div>', {id: id + '_addTag'}).append(
                                settings.interactive ? $('<input>', {id: id + '_tag', class: 'tag-input', value: '', placeholder: settings.placeholder}) : null
                                )
                                );

                        $(markup).insertAfter(this);

                        $(data.holder).css('width', settings.width);
                        $(data.holder).css('min-height', settings.height);
                        $(data.holder).css('height', settings.height);

                        if ($(data.real_input).val() !== '') {
                            $.fn.tagsInput.importTags($(data.real_input), $(data.real_input).val());
                        }

                        // Stop here if interactive option is not chosen
                        if (!settings.interactive)
                            return;

                        $(data.fake_input).val('');
                        $(data.fake_input).data('pasted', false);

                        $(data.fake_input).on('focus', data, function (event) {
                            $(data.holder).addClass('focus');

                            if ($(this).val() === '') {
                                $(this).removeClass('error');
                            }
                        });

                        $(data.fake_input).on('blur', data, function (event) {
                            $(data.holder).removeClass('focus');
                        });

                        if (settings.autocomplete !== null && jQuery.ui.autocomplete !== undefined) {
                            $(data.fake_input).autocomplete(settings.autocomplete);
                            $(data.fake_input).on('autocompleteselect', data, function (event, ui) {
                                $(event.data.real_input).addTag(ui.item.value, {
                                    focus: true,
                                    unique: settings.unique
                                });

                                return false;
                            });

                            $(data.fake_input).on('keypress', data, function (event) {
                                if (_checkDelimiter(event)) {
                                    $(this).autocomplete("close");
                                }
                            });
                        } else {
                            $(data.fake_input).on('blur', data, function (event) {
                                $(event.data.real_input).addTag($(event.data.fake_input).val(), {
                                    focus: true,
                                    unique: settings.unique
                                });

                                return false;
                            });
                        }

                        // If a user types a delimiter create a new tag
                        $(data.fake_input).on('keypress', data, function (event) {
                            if (_checkDelimiter(event)) {
                                event.preventDefault();

                                $(event.data.real_input).addTag($(event.data.fake_input).val(), {
                                    focus: true,
                                    unique: settings.unique
                                });

                                return false;
                            }
                        });

                        $(data.fake_input).on('paste', function () {
                            $(this).data('pasted', true);
                        });

                        // If a user pastes the text check if it shouldn't be splitted into tags
                        $(data.fake_input).on('input', data, function (event) {
                            if (!$(this).data('pasted'))
                                return;

                            $(this).data('pasted', false);

                            var value = $(event.data.fake_input).val();

                            value = value.replace(/\n/g, '');
                            value = value.replace(/\s/g, '');

                            var tags = _splitIntoTags(event.data.delimiter, value);

                            if (tags.length > 1) {
                                for (var i = 0; i < tags.length; ++i) {
                                    $(event.data.real_input).addTag(tags[i], {
                                        focus: true,
                                        unique: settings.unique
                                    });
                                }

                                return false;
                            }
                        });

                        // Deletes last tag on backspace
                        data.removeWithBackspace && $(data.fake_input).on('keydown', function (event) {
                            if (event.keyCode == 8 && $(this).val() === '') {
                                event.preventDefault();
                                var lastTag = $(this).closest('.tagsinput').find('.tag:last > span').text();
                                var id = $(this).attr('id').replace(/_tag$/, '');
                                $('#' + id).removeTag(encodeURI(lastTag));
                                $(this).trigger('focus');
                            }
                        });

                        // Removes the error class when user changes the value of the fake input
                        $(data.fake_input).keydown(function (event) {
                            // enter, alt, shift, esc, ctrl and arrows keys are ignored
                            if (jQuery.inArray(event.keyCode, [13, 37, 38, 39, 40, 27, 16, 17, 18, 225]) === -1) {
                                $(this).removeClass('error');
                            }
                        });
                    });

                    return this;
                };

                $.fn.tagsInput.updateTagsField = function (obj, tagslist) {
                    var id = $(obj).attr('id');
                    $(obj).val(tagslist.join(_getDelimiter(delimiter[id])));
                };

                $.fn.tagsInput.importTags = function (obj, val) {
                    $(obj).val('');

                    var id = $(obj).attr('id');
                    var tags = _splitIntoTags(delimiter[id], val);

                    for (i = 0; i < tags.length; ++i) {
                        $(obj).addTag(tags[i], {
                            focus: false,
                            callback: false
                        });
                    }

                    if (callbacks[id] && callbacks[id]['onChange']) {
                        var f = callbacks[id]['onChange'];
                        f.call(obj, obj, tags);
                    }
                };

                var _getDelimiter = function (delimiter) {
                    if (typeof delimiter === 'undefined') {
                        return delimiter;
                    } else if (typeof delimiter === 'string') {
                        return delimiter;
                    } else {
                        return delimiter[0];
                    }
                };

                var _validateTag = function (value, inputSettings, tagslist, delimiter) {
                    var result = true;

                    if (value === '')
                        result = false;
                    if (value.length < inputSettings.minChars)
                        result = false;
                    if (inputSettings.maxChars !== null && value.length > inputSettings.maxChars)
                        result = false;
                    if (inputSettings.limit !== null && tagslist.length >= inputSettings.limit)
                        result = false;
                    if (inputSettings.validationPattern !== null && !inputSettings.validationPattern.test(value))
                        result = false;

                    if (typeof delimiter === 'string') {
                        if (value.indexOf(delimiter) > -1)
                            result = false;
                    } else {
                        $.each(delimiter, function (index, _delimiter) {
                            if (value.indexOf(_delimiter) > -1)
                                result = false;
                            return false;
                        });
                    }

                    return result;
                };

                var _checkDelimiter = function (event) {
                    var found = false;

                    if (event.which === 13) {
                        return true;
                    }

                    if (typeof event.data.delimiter === 'string') {
                        if (event.which === event.data.delimiter.charCodeAt(0)) {
                            found = true;
                        }
                    } else {
                        $.each(event.data.delimiter, function (index, delimiter) {
                            if (event.which === delimiter.charCodeAt(0)) {
                                found = true;
                            }
                        });
                    }

                    return found;
                };

                var _splitIntoTags = function (delimiter, value) {
                    if (value === '')
                        return [];

                    if (typeof delimiter === 'string') {
                        return value.split(delimiter);
                    } else {
                        var tmpDelimiter = '∞';
                        var text = value;

                        $.each(delimiter, function (index, _delimiter) {
                            text = text.split(_delimiter).join(tmpDelimiter);
                        });

                        return text.split(tmpDelimiter);
                    }

                    return [];
                };
            })(jQuery);
            $(function () {
                var $tabButtonItem = $('#tab-button li'),
                        $tabSelect = $('#tab-select'),
                        $tabContents = $('.tab-contents'),
                        activeClass = 'is-active';

                $tabButtonItem.first().addClass(activeClass);
                $tabContents.not(':first').hide();

                $tabButtonItem.find('a').on('click', function (e) {
                    var target = $(this).attr('href');

                    $tabButtonItem.removeClass(activeClass);
                    $(this).parent().addClass(activeClass);
                    $tabSelect.val(target);
                    $tabContents.hide();
                    $(target).show();
                    e.preventDefault();
                });

                $tabSelect.on('change', function () {
                    var target = $(this).val(),
                            targetSelectNum = $(this).prop('selectedIndex');

                    $tabButtonItem.removeClass(activeClass);
                    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
                    $tabContents.hide();
                    $(target).show();
                });
            });
        </script>
        <script>
            $(function () {
                $('#Language').on('change', function () {
                    var lang = this.value;
                    $.post('ajax/lang.php', {lang: lang}, function (data) {
                        var cart = $(data).filter('ops').html();
                        var cart1 = $(data).filter('ops1').html();

                        $('#Main').html(cart);
                        $('#sub').html(cart1);
                    });
                    return false;
                });
                $('#Main').on('change', function () {
                    var Main = this.value;
                    $.post('ajax/Main.php', {Main: Main}, function (data) {
                        var cart = $(data).filter('ops').html();
                        $('#sub').html(cart);

                    });
                    return false;
                });
            })
        </script>

    </body>
</html>
