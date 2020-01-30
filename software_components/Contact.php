<section>
    <div class="container">
        <div class="col-md-12 text-center">
            <h3 class="section-title"><?php echo $index->statement14; ?></h3>
        </div>
        <div class="row">
            <div class="col-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.8421624824973!2d46.69103708500035!3d24.697951984130853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03f3f38f1c41%3A0xe37b94c2bbd6d3f3!2sCOMEANDDO!5e0!3m2!1sar!2seg!4v1572450595863!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-md-6 col-sm-6  col-md-offset-1">
                <form id="uploadImage" action="Forms/Contact.php" method="post">
                    <div id="success" class="no-margin-lr" style="display: none;"></div>
                    <input name="Name" type="text" placeholder="<?php echo $array_lang['index']['CONTACT ']['Name']; ?>">
                    <input name="Mobil" type="text" placeholder="<?php echo $array_lang['index']['CONTACT ']['phone']; ?>">
                    <input name="Mail" type="text" placeholder="<?php echo $array_lang['index']['CONTACT ']['Email']; ?>">
                    <textarea placeholder="<?php echo $array_lang['index']['CONTACT ']['Message']; ?>" name="message"></textarea>
                    <button id="contact-us-button" type="submit" class="highlight-button-dark btn btn-small button xs-margin-bottom-five"><?php echo $array_lang['index']['CONTACT ']['send']; ?></button>
                </form>
                <div id="targetLayer">
                </div>
            </div>
        </div>
    </div>
</section>
