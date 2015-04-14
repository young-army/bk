<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                 Activities
                   </h3>
                   
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
			<hr>
            <!-- END PAGE HEADER-->
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="">
                <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget black">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Activities</h4>
                            
                    </div>
                    <div class="widget-body">
					<a href="<?php echo base_url();?>dashboard/add_activities"><button class="btn btn-success"><i class="icon-plus icon-white" ></i> Tambah Data</button></a><br><br></style>
					
                        <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
							
                            <tr>
                                <th>No</th>
                                <th class="hidden-phone">Judul</th>
                                <th class="hidden-phone">Lokasi</th>
                                <th class="hidden-phone">Event</th>
                                <th class="hidden-phone">Tanggal</th>
                                <th class="hidden-phone">Ringkasan</th>
                                <th class="hidden-phone">Keterangan</th>
                                <th class="hidden-phone">Image</th>
                                <th class="hidden-phone">Status</th>
                                <th class="hidden-phone">Kontrol</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php $no=1;
							foreach ($activities as $row){?>
                            <tr class="odd gradeX">
                                <td><?php echo $no;?></td>
                                <td><?php echo $row->judul;?></td>
                                <td><?php echo $row->lokasi;?></td>
                                <td><?php echo $row->event;?></td>
                                <td><?php echo $row->tanggal;?></td>
                                <td><?php echo $row->ringkasan;?></td>
                                <td><?php echo $row->uraian;?></td>
                                <td><?php echo $row->file;?></td>
                                <td><?php echo $row->status;?></td>
                                <td>
								<a href="<?php echo base_url();?>dashboard/edit_activities/<?php echo $row->id;?>"><button class="btn btn-small btn-primary"><i class="icon-pencil icon-white"></i> Edit</button></a>
                               <a href="<?php echo base_url();?>dashboard/delete_activities/<?php echo $row->id;?>"onclick="return confirm('Apakah Anda Yakin?')"><button class="btn btn-small btn-danger"><i class="icon-remove icon-white"></i> Delete</button></a></td>
                            </tr>
							<?php $no++;}?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>