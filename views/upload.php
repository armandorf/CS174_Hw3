<?php

    include_once 'BaseView.php';

    class upload extends BaseView {

    public $upload = <<<UPLOAD
<form name="poem_data" method="post" <?php echo action= . "\"" . BASEURL . "/controllers/upload.php\"" ?> 
    <fieldset>
        <legend>
            Upload your Limerick
        </legend>
        <label>
            Author:
            <input type="text" name="author" id="author" size="30" maxlength="100" required="required">
        </label>
        <br />
        <label>
            Poem Title:
            <input type="text" name="title" size="30" maxlength="100" required="required">
        </label>
        <br />
        <label>
            Poem Contents:
            <textarea rows="15" cols="40" id="poem_contents" name="poem_contents" required="required"></textarea>
        </label>
        <input type="submit" name="submit_poem">
    </fieldset>
</form>  
UPLOAD;

        public function drawUploadView() {
            echo $this->upload;
        }
    }
?>
