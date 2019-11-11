
	@extends('backend.master')	
	@section('title', 'Category')
	@section('main')
		
	<div>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<div class="panel-body">
							<form method="post" accept-charset="utf-8">
								@csrf
								<div class="form-group">
									@include('errors.note')
								    <label>Tên danh mục:</label>
    							    <input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
							    </div>
							    <div class="form-group">
    							    <input type="submit" name="submit" class="form-control btn btn-primary">
							    </div>
							</form>							
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered display" id="category">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên danh mục</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		@foreach($cateList as $cate)
								<tr>
									<td>{{$cate->cate_name}}</td>
									<td>
			                    		<a href="{{asset('admin/category/edit/'.$cate->cate_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset('admin/category/delete/'.$cate->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr>
			                  	    @endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
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
                table = $('#category').DataTable();
            });

            </script>
            @endpush