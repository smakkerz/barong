<h2 style="margin-top:0px">Settings <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
	    <div class="form-group">
            <label for="varchar">Code <?php echo form_error('code') ?></label>
            <input type="text" class="form-control" name="code" id="code" placeholder="Strata" value="<?php echo $code; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Value <?php echo form_error('value') ?></label>
            <input type="text" class="form-control" name="value" id="value" placeholder="Jurusan" value="<?php echo $value; ?>" />
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('Settings') ?>" class="btn btn-default">Cancel</a>
	</form>