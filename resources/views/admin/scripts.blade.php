<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){
 $('#category_id').change(function(){
var category_id=$('#category_id').val();
$.ajax({
    url:'{{route('sub_category')}}',
    method:'POST',
    data:{
        'category_id':category_id,
        '_token':'{{csrf_token()}}'
    },
    success:function(result){
        var myObj=JSON.parse(result);
       var x=$('#sub_category_id');
       x.empty();
       x.append('<option value="{{null}}">select subcategory</option>')
       for(i in myObj){
           x.append('<option value='+myObj[i].id+'>'+myObj[i].name+'</option>');
       }
    }
   });
 });
});
</script>







