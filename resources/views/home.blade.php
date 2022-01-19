<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lacak Dokumen</title>
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
  </head>
  <body>
     
    


<div class="container mt-5">
  <div class="row">

    <div class="card">
      <div class="card-body">
        <!--form-->
        <div class="form-check mt-3">
          <input type="radio" class="form-check-input" id="nik" name="radio-stacked" value="nik" required>
          <label class="form-check-label" for="flexRadioDefault1">
            Menggunakan Nomor NIK
          </label>
        </div>
              <div id="form-input">
                <form action="{{route('document.search')}}" method="get">
                  @csrf
    
                    <div class="mb-3 " id="form-nik">
                      <input type="text" class="form-control" id="nik" name="nik" >
                    </div>
                    <div class="mb-3 " id="form-frame">
                      {!! htmlFormSnippet() !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
    
        <div class="form-check mt-3">
          <input type="radio" class="form-check-input" id="frame_no" name="radio-stacked" value="frame_no" required>
          <label class="form-check-label" for="flexRadioDefault1">
            Menggunakan Nomor rangka Kendaraan
          </label>
        </div> 
              <div id="form-input2" >
                <form action="{{route('document.search')}}" method="get">
                  @csrf
                    <div class="mb-3 " id="form-frame">
                      <input type="text" class="form-control" id="frame_no" name="frame_no" >
                    </div>
                    <div class="mb-3 " id="form-frame">
                      {!! htmlFormSnippet() !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              <!--end form-->
        <!--table-->
        <table class="table mt-5">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">NIK</th>
              <th scope="col">STCK</th>
              <th scope="col">STNK</th>
              <th scope="col">BPKB</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $a)
            <tr>
              <th >{{$a->customer_name}}</th>
              <th >{{$a->nik}}</th>
              <th >{{$a->stck_status}}</th>
              <th >{{$a->stnk_status}}</th>
              <th >{{$a->bpkb_status}}</th>
              <td>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i>
            </td>
            </tr>
            
          </tbody>
        </table>
        <!--end table-->

      </div>
    </div>
     
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endforeach
 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--hide/show form-->
<script>
$(document).ready(function(){
$("#form-input").css("display","none");
$(".form-check-input").click(function(){ 

if ($("input[name='radio-stacked']:checked").val() == "nik" ) { 
$("#form-input").slideDown("fast"); 
    }else{
  $("#form-input").slideUp("fast"); 
}
});
});
</script>

<script>
  $(document).ready(function(){
  $("#form-input2").css("display","none");
  $(".form-check-input").click(function(){ 
  
  if ($("input[name='radio-stacked']:checked").val() == "frame_no" ) { 
  $("#form-input2").slideDown("fast"); 
      }else{
    $("#form-input2").slideUp("fast");  
  }
  });
  });
  </script>
  <!--end hide/show form-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>