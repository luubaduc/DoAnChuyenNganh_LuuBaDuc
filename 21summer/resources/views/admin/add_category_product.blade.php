@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
<div class="card">

    <form class="form-horizontal">
        <div class="card-body ">
            <h4 class="card-title text-center">Thêm danh mục sản phẩm</h4>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên danh mục </label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="fname" placeholder="Nhập tên danh mục đeeeeeee">
                </div>
            </div>
           
            
            <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mô tả danh mục </label>

                <div class="col-sm-7">
                    <textarea style="resize: none" rows="5" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Hiển thị</label>
                <div class="col-sm-7">
                    <select class="form-control input-sm m-bot15">
							<option>Ẩn</option>
							<option>Hiển thị</option>
					</select>
                </div>
            </div>

        </div>
        <div class="border-top text-center">
            <div class="card-body">
                <button type="button" name="add_category_product" class="btn btn-danger">Nhập</button>
            </div>
        </div>
    </form>
</div>
</div>




@endsection