<script src="<?php echo base_url()?>library/assets/js/jquery.easypiechart.min.js"></script>

<script src="<?php echo base_url()?>library/assets/js/jquery.flot.min.js"></script>

<script src="<?php echo base_url()?>library/assets/js/jquery.flot.resize.min.js"></script>

<script src="<?php echo base_url()?>library/assets/js/jquery.easypiechart.min.js"></script>

				<!-- ace scripts -->

<script src="<?php echo base_url()?>library/assets/js/jquery.flot.pie.min.js"></script>
<style type="text/css">
	.legendLabel {
		font-size: 14px;
		display: block;
		font-variant: inherit;
	}
	@media (max-width: 650px){
		canvas {
			padding-top: 95px;
			margin-top: 7px;
		}
	}
	@media (max-width: 480px){
		.legendLabel {
			font-size: 11px;
		}
		canvas {
			padding-top: 75px;
			margin-top: 22px;
		}
	}
</style>

<script type="text/javascript">

jQuery(function($) {

			  var placeholder = $('#piechart-placeholder').css({'width':'89%' , 'min-height':'460px'});

			  var data = [

		<?php 

		if(count($graph)>0) {
			$semua = $graph[0]->semua;
			$i = 1;
			foreach ($graph as $data) {
				if($i < 7){
					$semua = $semua - $data->hasil;
				echo "{ label:'F".$data->kode_kuis."-".$data->kode_pilihan." ".$data->pilihan." ".$data->nilai." = ".$data->hasil." Alumni', data: '" . $data->hasil."'},\n";
				$i++;
				}

			}
			if($semua > 1){
				echo "{ label:'F-".$kode." Lainnya = ".$semua." Alumni', data: '" .$semua."'},\n";
			}

		}

		?>]

			  function drawPieChart(placeholder, data, position) {

			 	  $.plot(placeholder, data, {

					series: {

						pie: {

							show: true,

							//tilt:0.8,
							//innerRadius:0.5,

							highlight: {

								opacity: 0.65

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

<?php if(count($graph)>0) { ?>

    <div class="widget-box">

        <div class="widget-header widget-header-flat widget-header-small">

            <h5 class="widget-title">

                 <i class="ace-icon fa fa-pie-chart"></i>

                     Kode Kuesioner F-<?= $kode ?> 

                     <i class="ace-icon fa fa-hand-o-left icon-animated-hand-pointer blue "></i>

             </h5>

        </div>

        <div class="widget-body">

            <div class="widget-main">

                <div id="piechart-placeholder"></div>

                     <div class="hr hr8 hr-double"></div>

                         <div class="clearfix">

                    <span class="grey">

                    <i class="ace-icon fa fa-pie-chart fa-2x blue"></i>

                    &nbsp; <b class="text-danger"><?php echo $total; ?></b> Total Jumlah Jawaban

                    <span id="hasil"></span>

                    </span>

                </div>

            </div><!-- /.widget-main -->

        </div><!-- /.widget-body -->

    </div><!-- /.widget-box -->

<?php } else { ?>

    <div class="well">

    	<h1 class="grey lighter smaller">

			<span class="blue bigger-125">

				<i class="ace-icon fa fa-pie-chart blue"></i>

					Data masih kosong

			</span>

					Mungkin Belum ada Data dari sistem

		</h1>

<hr/>

		<h3 class="lighter smaller">Sistem tidak mendapati data yang dimaksud</h3>

		<div>

		<div class="space"></div>

			<h4 class="smaller">Saran :</h4>

			<ul class="list-unstyled spaced inline bigger-110 margin-15">

				<li>

					<i class="ace-icon fa fa-hand-o-right blue"></i>

						Pilih data yang hampir sama/ mirip dengan data yang anda maksud

				</li>



				<li>

					<i class="ace-icon fa fa-hand-o-right blue"></i>

						Tunggu beberapa waktu sampai data tersedia

				</li>



				<li>

					<i class="ace-icon fa fa-hand-o-right blue"></i>

						Sistem sedang sibuk mohon menunggu beberapa saat

				</li>

			</ul>

		</div>



		<hr/>

		<div class="space"></div>

		<div class="center">

		<a href="<?= site_url('home') ?>" class="btn btn-grey">

			<i class="ace-icon fa fa-arrow-left"></i>

				Ke Beranda

		</a>



		<a href="#modal-wizard" data-toggle="modal" class="btn btn-danger">

			<i class="ace-icon fa fa-tachometer"></i>

				Cari data yang lain

		</a>

	</div>

</div>

<?php } ?>

    </div><!-- /.col -->

</div><!-- PAGE CONTENT ENDS -->