<div id="content" class="content">
<ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Dashboard</a></li>
	<li class="active">Novel</li>
</ol>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-inverse">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Data Novel</h4>
			</div>
			<div class="panel-body">
<table id="data-table-default" class="table table-hover table-bordered table-td-valign-middle">
	    <tr><td>Title</td><td><?php echo $title; ?></td></tr>
	    <tr><td>Tgl Released</td><td><?php echo $tgl_released; ?></td></tr>
	    <tr><td>Total Chapter</td><td><?php echo $total_chapter; ?></td></tr>
	    <tr><td>Author</td><td><?php echo $author; ?></td></tr>
	    <tr><td>Sinopsis</td><td><?php echo $sinopsis; ?></td></tr>
	    <tr><td>Rating</td><td><?php echo $rating; ?></td></tr>
	    <tr><td>Thumbnail</td><td><?php echo $thumbnail; ?></td></tr>
	    <tr><td>Update On</td><td><?php echo $update_on; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('novel') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
			</div>
        </div>
    </div>
	</div>
</div>