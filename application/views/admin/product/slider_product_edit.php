<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>Form Input Home Slider Product
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="panel-body">
			<table class="table">
				<?php
					echo form_open_multipart('admin/product_slider/edit');
					echo form_hidden('slider_id', $product_slider['slider_id']);
				?>
					<tr>
						<td align='right' width='20%'>
							<label class="col-sm-12 control-label" for="form-field-1">SLIDER NAME :</label>
						</td>
						<td>
							<div class="col-sm-12">
								<input type="text" value="<?php echo $product_slider['nama_slider'];?>" class="form-control" id="form-field-1" placeholder="*" name="nama_slider" required />
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' width='20%'>
							<label class="col-sm-12 control-label" for="form-field-2">LINK :</label>
						</td>
						<td>
							<div class="col-sm-12">
								<input type="text" value="<?php echo $product_slider['link'];?>" class="form-control" id="form-field-2" placeholder="* (Ex. http://hyundaimobil.co.id)" name="link" required />
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' width='20%'>
							<label class="col-sm-12 control-label" for="form-field-3">DESCRIPTION :</label>
						</td>
						<td>
							<div class="col-sm-12">
								<textarea class="ckeditor form-control" name="keterangan" id="form-field-3" placeholder="* Slider Description" required><?php echo $product_slider['keterangan'];?></textarea>
								
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' width='20%'>
							<label class="col-sm-12 control-label" for="form-field-4">IMAGE SLIDER :</label>
						</td>
						<td>
							<div class="col-sm-12">
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="input-group">
										<div class="form-control uneditable-input">
											<i class="fa fa-file fileupload-exists"></i>
											<span class="fileupload-preview"></span>
										</div>
										<div class="input-group-btn">
											<div class="btn btn-light-grey btn-file">
												<span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Select file</span>
												<span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Change</span>
												<input type="file" id="form-field-4" name="userfile" class="file-input"/>
											</div>
											<a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
												<i class="fa fa-times"></i> Remove
											</a>
										</div>
									</div>
								</div>
								<?php
									if(empty($product_slider['image'])){
										echo "<img title='No Image Available' width='200' src='".base_url()."/uploads/noimage.jpg'>";
									}else{
										echo "<img title='".$product_slider['nama_slider']."' width='200' src='".base_url()."/uploads/slider/".$product_slider['image']."'>";
									}
								?>
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' width='20%'>
							<label class="col-sm-12 control-label" for="form-field-5">BACKGROUND SLIDER :</label>
						</td>
						<td>
							<div class="col-sm-12">
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="input-group">
										<div class="form-control uneditable-input">
											<i class="fa fa-file fileupload-exists"></i>
											<span class="fileupload-preview"></span>
										</div>
										<div class="input-group-btn">
											<div class="btn btn-light-grey btn-file">
												<span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Select file</span>
												<span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Change</span>
												<input type="file" id="form-field-5" name="userfile_bg" class="file-input"/>
											</div>
											<a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
												<i class="fa fa-times"></i> Remove
											</a>
										</div>
									</div>
								</div>
								<?php
									if(empty($product_slider['background'])){
										echo "<img title='No Image Available' width='200' src='".base_url()."/uploads/noimage.jpg'>";
									}else{
										echo "<img title='".$product_slider['nama_slider']."' width='200' src='".base_url()."/uploads/slider/bg/".$product_slider['background']."'>";
									}
								?>
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' width='20%'></td>
						<td>
							<div class="col-sm-12">
								<button type="submit" name="submit" class="btn btn-success btn-sm"><i class='fa fa-save'></i> SAVE</button>
								<?php
									echo anchor('admin/product_slider', "<i class='fa fa-arrow-left'></i> BACK",array('class'=>'btn btn-info btn-sm'));
								?>
							</div>
						</td>
					</tr>
				</form>
			</table>
		</div>
	</div>
	<!-- end: TEXT FIELDS PANEL -->
</div>