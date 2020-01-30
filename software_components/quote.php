<div class="col-md-4 col-sm-6 col-md-offset-1 bg-gray career-form xs-margin-top-ten">
    <p class="title-small text-uppercase black-text"><?php echo $form->statement6; ?></p>
    <p class="text-med margin-five"><?php echo $array_lang['form']['back']; ?></p>
    <div class="separator-line bg-black no-margin-lr margin-ten"></div>
    <!-- form -->
    <form id="uploadImage" action="Forms/quote.php" method="post">
        <div id="success" class="no-margin-lr"></div>
        <div class="form-group no-margin-bottom">
            <!-- label -->
            <label class="text-uppercase"><?php echo $array_lang['form']['NAME']; ?></label>
            <!-- end label -->
            <!-- input -->
            <input type="text" id="name" name="Name" class="input-round med-input">
            <!-- end input -->
        </div>
        <div class="form-group no-margin-bottom">
            <!-- label -->
            <label class="text-uppercase"><?php echo $array_lang['form']['PHONE']; ?></label>
            <!-- end label -->
            <!-- input -->
            <input type="text" id="phone" name="Phone" class="input-round med-input">
            <!-- end input -->
        </div>
        <div class="form-group no-margin-bottom">
            <!-- label -->
            <label class="text-uppercase"><?php echo $array_lang['form']['EMAIL']; ?></label>
            <!-- end label -->
            <!-- input -->
            <input type="text" name="Email" id="email"  class="input-round med-input">
            <!-- end input -->
        </div>
        <div class="form-group no-margin-bottom">
            <!-- label -->
            <label class="text-uppercase"><?php echo $array_lang['form']['ADDRESS']; ?></label>
            <!-- end label -->
            <!-- input -->
            <input type="text" name="adress" id="address"  class="input-round med-input">
            <!-- end input -->
        </div>
        <div class="form-group no-margin-bottom">
            <!-- label -->
            <label class="text-uppercase"><?php echo $array_lang['form']['SERVICE']; ?></label>
            <!-- end label -->
            <!-- select -->
            <div class="select-style input-round med-input">
                <select id="selectposition" name="Type">
                    <option value=""><?php echo $array_lang['form']['select']; ?></option>
                    <?php
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $queryservices, $array);
                    if (count($rows) > 0) :
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $Image = $value['Image'];
                            $Title = $value['Title'];
                            $Language = $value['Language'];
                   
                    ?>
                    <option value="<?php echo  $Title ; ?>"><?php echo  $Title ; ?></option>
                    <?php
                    endforeach;
                    endif;     
               ?>
                </select>
            </div>
            <!-- end select -->
        </div>
        <div class="form-group no-margin-bottom">
            <!-- label -->
            <label class="text-uppercase"><?php echo $array_lang['form']['MESSAGE']; ?></label>
            <!-- end label -->
            <!-- textarea -->
            <textarea id="comment" name="Message" class="input-round med-input"></textarea>
            <!-- end textarea -->
        </div>
        <div class="form-group no-margin-bottom">
            <!-- required  -->
            <span class="required margin-three"><?php echo $array_lang['form']['FIELDS']; ?></span>
            <!-- end required  -->
            <!-- button  -->
            <button id="careers-button" class="highlight-button-dark btn btn-small button xs-margin-bottom-five" type="submit"><?php echo $array_lang['form']['Submit']; ?></button>
            <!-- end button  -->
        </div>
    </form>
    <!-- end form -->
    <div id="targetLayer">

    </div>
</div>