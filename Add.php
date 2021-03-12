<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="card card-info">
        <script>

        </script>
        <div class="card-header">
            <h3 class="card-title">Add Media</h3>
           <!-- <button class="btn btn-default btn-sm btns" style="float: right" type="button" id="plus">Add New Row
            </button>-->
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal frm" action="{{route('credit.store')}}" enctype="multipart/form-data"
              method="post">
            @csrf

            <div class="card-body" id="card-body">
                <div class="row " id="base-row">
                    <div class="form-group col-lg-3">

                        <div class="">
                            <lable>Users</lable>
                           <select class="form-control dynamic" name="user" id="user" data-dependent="location">
                     <option value="0">Select User</option>
                     @foreach($users as $user)
                     <option value="{{$user->id}}">{{$user->f_name}}</option>
                     @endforeach
                     </select>
                        </div>
                    </div>

                    <div class="form-group col-lg-3">
                        <lable>User Location</lable>
                        <div class="">
                           <select class="form-control dynamic" name="location" id="location" data-dependent="remark">
                     
                    
                     <option value="">Select Location</option>
                   
                     </select>
                        </div>
                    </div>
                    <div class="form-group col-lg-3">
                         <lable>Screen Name</lable>
                        <div class="">
                              <select class="form-control dynamic" name="remark" id="remark" data-dependent="city">
                     
                    
                     <option value="">Select Screen</option>
                   
                     </select>
                        </div>
                    </div>
               
                    <div class="form-group col-lg-3">
                        <lable>Upload Image</lable>
                        <div class="">
                            <input type="file" name="image_0" class="form-control" placeholder="Add Image" required>
                        </div>
                    </div>
                </div>

            </div>
            
            
            
            
            
            
            
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info form-control">Add</button>

            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





<script>

$(document).ready(function(){

 $('.dynamic').change(function(){
    
  if($(this).val() != '')
  {
   var select = $(this).val();
  
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('UserScreenController.fetchh') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
      var location = '';
      var remark = '';
        $('#location').empty()
        $('#remark').empty()                 
    $.each(result,function(i,result){
        
        location += '<option value="'+result.screen_id+'">"'+result.screen_location+'"</option>'
        remark += '<option value="'+result.id+'">"'+result.name+'"</option>'
        $('#location').html(location)
        $('#remark').html(remark)
        
    })
    }

   })
  }
 });

 $('#user').change(function(){
  $('#location').val('');
  $('#remark').val('');
 });

 $('#location').change(function(){
  $('#remark').val('');
 });
 

});
</script>




    <script>
        $(document).ready(function () {
            var rowId = 1;
            $('#plus').click(function () {
                var textarea_append = $('#card-body')
                var row =  '<div class="row " id="base-row-' + rowId + '">' +
                    '<div class="form-group col-lg-3">' +

                        '<div class="">' +
                           '<select class="form-control dynamicc" name="user" id="userr" data-dependent="locationn">' +
                     '<option value="0">Select User</option>' +
                     '@foreach($users as $user)' +
                     '<option value="{{$user->id}}">{{$user->f_name}}</option>' +
                     '@endforeach' +
                     '</select>' +
                        '</div>' +
                    '</div>' +

                    '<div class="form-group col-lg-3">' +
                        '<div class="">' +
                           '<select class="form-control dynamicc" name="location" id="locationn" data-dependent="remarkk">' +
                     
                    
                     '<option value="">Select Location</option>' +
                   
                     '</select>' +
                        '</div>' +
                    '</div>' +
                    '<div class="form-group col-lg-3">' +

                        '<div class="">' +
                              '<select class="form-control dynamicc" name="remark" id="remarkk" data-dependent="city">' +
                     
                    
                     '<option value="">Select Remark</option>' +
                   
                     '</select>' +
                        '</div>' +
                    '</div>' +
               
                    '<div class="form-group col-lg-3">' +
                        '<div class="">' +
                            '<input type="file" name="image_0" class="form-control" placeholder="Add Image" required>' +
                        '</div>' +
                    '</div>' +
                '</div>' 

                textarea_append.append(row);
                rowId += 1;
            })
            $('#card-body').on('click', '#butt', function (e) {
                e.preventDefault();

                $(this).parent().remove();
            });
            //the above method will remove the user_data div

        })


    </script>
    
    
    
    <script>

$(document).ready(function(){

 $('.dynamicc').change(function(){
    
  if($(this).val() != '')
  {
   var select = $(this).val();
  
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('UserScreenController.fetchh') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
      var locationn = '';
      var remarkk = '';
        $('#locationn').empty()
        $('#remarkk').empty()                 
    $.each(result,function(i,result){
        
        locationn += '<option value="'+result.screen_id+'">"'+result.screen_location+'"</option>'
        remarkk += '<option value="'+result.id+'">"'+result.name+'"</option>'
        $('#locationn').html(locationn)
        $('#remarkk').html(remarkk)
        
    })
    }

   })
  }
 });

 $('#userr').change(function(){
  $('#locationn').val('');
  $('#remarkk').val('');
 });

 $('#locationn').change(function(){
  $('#remarkk').val('');
 });
 

});
</script>
    
    
    
    <style>
        .txts {
            width: 200px;
        }

        #butt {

            height: 30px;
            margin-top: 8px;
        }
    </style>
    
</body>
</html>