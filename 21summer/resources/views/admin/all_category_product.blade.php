@extends('admin_layout')
@section('admin_content')
<div class="card-body">
<h5 class="card-title m-b-0">Static Table With Checkboxes</h5>
</div>
<div class="table-responsive">
    <table id="myTable" class="table">
        <thead class="thead-light">
            <tr>
                <th>
                    <label class="customcheckbox m-b-20">
                        <input type="checkbox" id="mainCheckbox" />
                        <span class="checkmark"></span>
                    </label>
                </th>
                <th scope="col">Tên danh mục </th>
                <th scope="col"></th>
                <th scope="col">Hiển thị </th>
                <th scope="col">Ngày thêm </th>
            </tr>
        </thead>
        <tbody class="customtable">
            @foreach($all_category_product as $key => $cate_pro)
            <tr>
                <th>
                    <label class="customcheckbox">
                        <input type="checkbox" class="listCheckbox" />
                        <span class="checkmark"></span>
                    </label>
                </th>
                <td>{{$cate_pro->category_name}}</td>
                <td></td>
                <td>Ẩn/Hiển thị</td>
                <td>{{$cate_pro->category_desc}}</td>
                <td>
                    <a href="" class="active" ui-toggle-class=""><i class="fas fa-pen-square text-success text-active"></i><br><i class="fa fa-times text-danger text"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!--Lưu Bá Đức-->
<!-- Start Search -->
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


@endsection