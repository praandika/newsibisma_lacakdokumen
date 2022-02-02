<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="{{asset('assets/css/stylemedilab.css')}}">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->


  <!-- =======================================================
  * Template Name: Medilab - v4.7.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to YAMAHA BISMA</h1>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

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
                              <input type="text" class="form-control" id="frame_no" name="frame_no" required>
                            </div>
                            <div class="mb-3" id="google" name="google" >
                              {!! htmlFormSnippet() !!}
                            </div>
                            <button type="submit" class="btn btn-primary" disabled>Submit</button>
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
                    @forelse ($data as $a)
                    <tr>
                      <th >{{$a->customer_name}}</th>
                      <th >{{$a->nik}}</th>
                      <th >{{$a->stck_status}}</th>
                      <th >{{$a->stnk_status}}</th>
                      <th >{{$a->bpkb_status}}</th>
                      <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{$a->id}}"><i class="fa fa-eye"></i>
                    </td>
                    </tr>
                    @empty
                    <tr>
                      <th colspan="6" style="text-align: center;">Kosong</th>
                    <tr>
                    @endforelse
                  </tbody>
                </table>
                <!--end table-->
              </div>
            </div>
          </div>

      </div>
    
    </section><!-- End Why Us Section -->

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
        <button type="button" class="btn btn-primary">Save changes</button>
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
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>