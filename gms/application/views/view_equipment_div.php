<style>
	.img_class
	{
		width: 100px;
		height: 100px;

	}
</style>
<div class="view_equip_div">
			<label>equipments</label>
			<?php foreach ($e->result() as $value) 
        	{ 
        		
        		?>
			<ul class="image_ul">
				
        		<li><?php echo $value->equip_id ?></li>
        		<li><?php echo $value->equip_name ?></li>
        		<li><?php echo $value->equip_description ?></li>
        		<img src="<?php echo site_url('uploads/'.$value->equip_img) ?>">

			</ul>
			<?php 
			} ?>
			
</div>