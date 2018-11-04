@extends('layouts.app')

@section('content')
    <body>
      <div class="container">
         <div class="alert alert-success" style="display:none"></div>
         <form id="myForm">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" id="type">
            </div>
            <div class="form-group">
               <label for="price">Price:</label>
               <input type="text" class="form-control" id="price">
             </div>
            <button class="btn btn-primary" id="ajaxSubmit">Submit</button>
          </form>
	  </div>
	  
      <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
	  </script>
	  
      <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/groceries/post') }}",
                  method: 'post',
                  data: {
                     name: jQuery('#name').val(),
                     type: jQuery('#type').val(),
                     price: jQuery('#price').val()
                  },
                  success: function(result){
                     jQuery('.alert').show();
                     jQuery('.alert').html(result.success);
                  }});
               });
            });
      </script>
	</body>
@endsection