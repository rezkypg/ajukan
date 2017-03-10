@extends('default')
@section('content')
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br><br>
        <h1 class="header center blue-text">Admin Dashboard</h1>
        <div class="row center">
          <h5 class="header col s12 light">Bgst Kau!!!</h5>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <table class="responsive-table highlight">
          <thead>
            <tr>
                <th data-field="id">No.</th>
                <th data-field="id">Nama</th>
                <th data-field="email">Email</th>
                <th data-field="nomo">Nomo</th>
                <th data-field="status">Status</th>
            </tr>
          </thead>
          @foreach($data as $index => $datanya)
            <tbody>
              <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $datanya->nama }}</td>
                <td>{{ $datanya->email }}</td>
                <td>{{ $datanya->nomo }}</td>
                <td>{{ $datanya->status }}</td>
                <td style="width: 90%;">
                  <form method="post" action="{{ url('user-detail') }}" class="input_fields_wrap" style="display: inline-block;">
                    <input type="hidden" name="id_pesanan" value="{{ $datanya->id }}">
                    <input type="hidden" name="id_pengaju" value="{{ $datanya->id_pengaju }}">
                    <input type="hidden" name="status" value="{{ $datanya->status }}">
                    <button class="waves-effect waves-light btn" type="submit" name="action">Detail</button>
                    <button class="waves-effect waves-light btn" formaction="{{ url('change-status') }}" type="submit" name="action">Change</button>
                  </form>
                  <form method="post" action="{{ url('delete-user') }}" class="input_fields_wrap" style="display: inline-block;" id="delete_{{ $index }}">
                    <input type="hidden" name="id_pengaju" value="{{ $datanya->id_pengaju }}">
                    <input type="hidden" name="index" value="{{ $index }}">
                    <button class="waves-effect waves-light btn removeButton" formaction="{{ url('delete-user') }}" type="submit" name="action">Delete</button>
                  </form>
                </td>
<!--                 <td>
                  <form method="post" action="{{ url('user-detail') }}">
                    <input type="hidden" name="id_pengaju" value="{{ $datanya->id_pengaju }}">
                    <button class="waves-effect waves-light btn" formaction="{{ url('delete-user') }}" type="submit" name="action">Delete</button>
                  </form>
                </td> -->
              </tr>
            </tbody>
          @endforeach
        </table>
      </div>
    </div>
@stop
@section('script')
<script type="text/javascript">
  $(document).ready(function() {
    var wrapper = $(".input_fields_wrap"); //Fields wrapper    
            
    $(wrapper).on("click",".removeButton", function(e){ //user click on remove text

      e.preventDefault();

      var index = $(this).parent().find("input[name='index']").val();
      var id_form = 'delete_' + index;
      // alert(id_form);
      swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then(function () {
        swal({
          title: "Delete Success!",   
          text: "This user has gone",   
          type: "success",   
          confirmButtonText: "OK!"  
        })
      }).then(function () {
          setTimeout(function(){
            document.getElementById(id_form).submit(); 
          }, 2000); 
        })
      // document.getElementById(id_form).submit();
    })
  });
</script>
@stop