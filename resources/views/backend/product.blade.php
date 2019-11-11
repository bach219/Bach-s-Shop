@extends('backend.master')
@section('title', 'Product')	
@section('main')	
	<div >
		<!-- <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div>/.row -->
		
		<div>
			<div >
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
						@csrf
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/product/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
								<br><br>
								<table id="product" class="table table-bordered display" >				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="20%">Ảnh sản phẩm</th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($prodList as $prod)														
										<tr>
											<td>{{$prod->prod_id}}</td>
											<td>{{$prod->prod_name}}</td>
											<td>{{number_format($prod->prod_price,0,',','.')}} VND</td>
											<td>
												<img width="200px" src="{{asset('/../storage/app/avatar/'.$prod->prod_img)}}" class="thumbnail">
											</td>
											<td>{{$prod->cate_name}}</td>
											<td>
												<a href="{{asset('admin/product/edit/'.$prod->prod_id)}}" class="btn btn-warning"><i class="fa fa-pencil glyphicon glyphicon-edit" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/product/delete/'.$prod->prod_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash glyphicon glyphicon-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	@stop
	        @push('scripts')
            <script>
            var table = {};
            $(document).ready(function () {
                table = $('#product').DataTable();
            });

            </script>
            @endpush