<script src="<?php echo base_url()?>library/assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url()?>library/assets/js/jquery.flot.min.js"></script>
<script src="<?php echo base_url()?>library/assets/js/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url()?>library/assets/js/jquery.easypiechart.min.js"></script>
				<!-- ace scripts -->
<script src="<?php echo base_url()?>library/assets/js/jquery.flot.pie.min.js"></script>
<script type="text/javascript">
	jQuery(function($) {
			  var placeholder = $('#piechart-placeholder-1').css({'width':'88%' , 'min-height':'450px'});
			  var data = [<?php
								// data yang diambil dari database
								if(count($graph)>0)
								{
								   foreach ($graph as $data) {
								   echo "{ label:'".$data->strata." ".$data->jurusan. "', data: '" . $data->hasil ."'},\n";
								   }
								}
								?>]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.6
							},
							stroke: {
								color: '#fff',
								width: 4
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					},
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 20});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
								
			})
</script>
	<div class='row'>
		<div class="col-xs-12">
			<h4 class="lighter">
			<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i> 
				<a href="#modal-wizard" data-toggle="modal" class="pink"> 
						Lihat data Kuesioner <i class="menu-icon fa fa-pie-chart"></i>
				</a>
			</h4>
			<!-- Modal-->
			<div id="modal-wizard" class="modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="modal-wizard-container">
							<div class="modal-body step-content">
								<h3><i class="ace-icon fa fa-pie-chart blue"></i> Pilih kode kuis</h3>
								<form action="<?= $action ?>"  method="GET">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
								<select id="state" name="kode" class="form-control" required="required">
									<option value="">&nbsp; -- Silahkan pilih kode kuis -- &nbsp;</option>
										<?php 
											foreach ($list_kode->result() as $key) {
												if(strlen($key->kuis) >= 32){ 
														$soal = substr($key->kuis,0,30)."..."; 
													} else { $soal= $key->kuis; }
											echo "<option value='".$key->kode_kuis."'>F".$key->kode_kuis." ".$soal."</option>";
											foreach ($list_kode_pilihan->result() as $value) {
													if($value->kode_kuis == $key->kode_kuis){

													if(strlen($value->pilihan) >= 32){ 
														$kuis = substr($value->pilihan,0,30)."..."; 
													} else { $kuis= $value->pilihan; }
												echo "<option value='".$value->kode_kuis."-".$value->kode_pilihan."'> &nbsp; &emsp; F".$value->kode_kuis."-".$value->kode_pilihan." ".$kuis."</option>";
													}
												}
											}
										?>
								</select>
							</div>
						</div>
				<div class="modal-footer wizard-actions">
					<button  type="submit" class="btn btn-success btn-sm btn-next" data-last="Finish">
						<i class="ace-icon fa fa-pie-chart"></i> 
							Lihat Grafik
						<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
					</button>
					<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
						<i class="ace-icon fa fa-fire orange"></i>
							Batalkan
					</button>
				</form>
			</div>
		</div>
	</div>
</div><!-- PAGE CONTENT ENDS -->
<div class="hr hr-18 hr-double dotted"></div>
    <div class="widget-box">
        <div class="widget-header widget-header-flat widget-header-small">
            <h5 class="widget-title">
                <i class="ace-icon fa fa-pie-chart"></i>
                    Jumlah Alumni berdasarkan Jurusan
                <i class="ace-icon fa fa-users blue "></i>
            </h5>
		<div class="widget-toolbar no-border"></div>
        </div>
        <div class="widget-body">
            <div class="widget-main">
                <div id="piechart-placeholder-1"></div>
					<div class="hr hr8 hr-double"></div>
                    <div class="clearfix">
                        <span class="grey">
                            <i class="ace-icon fa fa-users fa-2x blue"></i>
                            &nbsp; <b style="font-size: 15px;" class="text-danger">
                            <?php echo $total; ?></b> Alumni yang terdaftar
                        </span>
                    </div>
             </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->
    </div><!-- /.widget-box -->
</div><!-- /.col -->
</div>