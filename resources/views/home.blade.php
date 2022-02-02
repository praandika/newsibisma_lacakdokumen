<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Bootstrap CSS -->
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('assets/css/style2.css')}}" rel="stylesheet"/>
    <title>Lacak Dokumen</title>
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
  </head>
<body style="background-image: url('{{ asset('assets/img/Fazzio-Banner.jpg')}}'); background-size:cover;">

    <div class="jumbotron col-lg-12 col-sm-12 col-md-12" >
      
      <div class="container mt-5">
        <div class="mb-2">
        <i class="fa fa-home"></i><a style="text-decoration:none; color:black;" href="http://yamahabismagroup.com"> YAMAHA BISMA GROUP</a>
        </div>
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
                            <input type="text" class="form-control" id="nik" name="nik" required>
                          </div>
                          <div class="mb-3 " id="google" name="google" required>
                            {{-- {!! htmlFormSnippet() !!} --}}
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
                            <input type="text" class="form-control" id="frame_no" name="frame_no" required>
                          </div>
                          <div class="mb-3" id="google" name="google" >
                            {{-- {!! htmlFormSnippet() !!} --}}
                          </div>
                          <button type="submit" class="btn btn-primary" >Submit</button>
                        </form>
                      </div>
                    </div>
                 
                    <!--end form-->
                    
              <!--table-->
             
              <table class="table mt-5 table-striped">
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
                  @forelse ($data as $a)
                  <tr>

                @if($a->leasing_id != '1')
                  
                    
                    <tr>
                      <th colspan="6" style="text-align: center;">Hubungi Leasing</th>
                    </tr>
                  
                  @else
                  

                    <th >{{$a->customer_name}}</th>
                    <th >{{$a->nik}}</th>

                    @if($a->stck_status != 'finished')
                    <td style="background-color:#eb343480">
                    on process
                    </td>
                    @else
                    <td style="background-color:#52eb3480">
                    {{ $a->stck_status }}
                    </td>
                    @endif
                    

                     @if($a->stnk_status != 'finished')
                    <td style="background-color:#eb343480">
                    on process
                    </td>
                    @else
                    <td style="background-color:#52eb3480">
                    {{ $a->stnk_status }}
                    </td>
                    @endif  

                    @if($a->bpkb_status != 'finished')
                    <td style="background-color:#eb343480">
                    on process
                    </td>
                    @else
                    <td style="background-color:#52eb3480">
                    {{ $a->bpkb_status }}
                    </td>
                    @endif
                    <td>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$a->id}}"><i class="fa fa-eye"></i></button>
                    </td>
                    @endif
                  </tr>
                  @empty
                  <tr>
                    <th colspan="6" style="text-align: center;">Kosong</th>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              <!--end table-->
            </div>
          </div>
        </div>
      </div>
    </div>




<!-- Modal -->
@foreach ($data as $a)
<div class="modal fade" id="exampleModal{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Customer</label>
            <input type="text" class="form-control" value="{{$a->customer_name}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIK Customer</label>
            <input type="text" class="form-control" value="{{$a->nik}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Model Name</label>
            <input type="text" class="form-control" value="{{$a->model_name}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">STCK</label>
            <input type="text" class="form-control" value="{{$a->stck}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">STCK Status</label>
            <input type="text" class="form-control" value="{{$a->stck_status}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">STCK</label>
            <input type="text" class="form-control" value="{{$a->stnk}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">STCK Status</label>
            <input type="text" class="form-control" value="{{$a->stnk_status}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">STCK</label>
            <input type="text" class="form-control" value="{{$a->bpkb}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">STCK Status</label>
            <input type="text" class="form-control" value="{{$a->bpkb_status}}">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@endforeach
<!--end modal-->
 


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