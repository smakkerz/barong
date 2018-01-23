
        <h2 style="margin-top:0px">Programstudi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
	    <div class="form-group">
            <label for="varchar">Strata <?php echo form_error('strata') ?></label>
            <input type="text" class="form-control" name="strata" id="strata" placeholder="Strata" value="<?php echo $strata; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jurusan <?php echo form_error('jurusan') ?></label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="<?php echo $jurusan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gelar <?php echo form_error('gelar') ?></label>
            <input type="text" class="form-control" name="gelar" id="gelar" placeholder="Gelar" value="<?php echo $gelar; ?>" />
        </div>
	    <input type="hidden" name="id_progdi" value="<?php echo $id_progdi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('programstudi') ?>" class="btn btn-default">Cancel</a>
	</form>