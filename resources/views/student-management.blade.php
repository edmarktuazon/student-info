<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Student Management</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light">
  <div class="nav-container">
    <img src="{{ asset('images/logo.png') }}" height="75">
    <h1>International Electronics and Technological Institute</h1>
  </div>
</nav>
<div class="container-body">
    <div class="table-container">
        <div class="table-header">
          <div></div>
          <h1 class="text-center">Student Management</h1>
          <a href="/login"><button type="button" class="btn btn-danger">Logout</button></a>
        </div><hr>
        <table class="table table-bordered table-hover" id="stuTable">
            <thead>
                <tr>
                    <th>LRN</th>
                    <th>Student Name</th>
                    <th>Grade Level</th>
                    <th>Strand</th>
                    <th>Documents</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stu_table as $fetch)
                <tr>
                    <td>{{$fetch->lrn}}</td>
                    <td>{{$fetch->fName}} {{$fetch->mName}} {{$fetch->lName}}</td>
                    <td>{{$fetch->gradelvl}}</td>
                    <td>{{$fetch->strand == 'abm' ? 'ABM' : ($fetch->strand == 'ict' ? 'ICT' : 'Home Economics')}}</td>
                    <td style="text-align:center;">
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bcModal" data-bcerturl="{{ asset('images/' . $fetch->bCerturl) }}">Birth Certificate</button>
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#gmModal" data-gmoralurl="{{ asset('images/' . $fetch->gMoralurl) }}">Good Moral</button>
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rcModal" data-rcardurl="{{ asset('images/' . $fetch->rCardurl) }}">Report Card</button>
                    </td>
                    <td style="text-align:center;"><a href="/admin/edit/{{$fetch->lrn}}" target="_blank"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- BIRTH CERTIFICATE MODAL -->
<div class="modal fade" id="bcModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Birth Certificate</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="bcImg" src="">
      </div>
    </div>
  </div>
</div>

<!-- GOOD MORAL MODAL -->
<div class="modal fade" id="gmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Good Moral</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="gmImg" src="">
      </div>
    </div>
  </div>
</div>

<!-- REPORT CARD MODAL -->
<div class="modal fade" id="rcModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Report Card</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="rcImg" src="">
      </div>
    </div>
  </div>
</div>
                    
<script>
    $(document).ready(function() {
        $('#stuTable').DataTable({
        });
    });

    $(document).ready(function() {
        $('#bcModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var bCerturl = button.data('bcerturl') 
            var modal = $(this)
            modal.find('.modal-body #bcImg').attr('src', bCerturl) 
        })
    });

    $(document).ready(function() {
        $('#gmModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var gMoralurl = button.data('gmoralurl') 
            var modal = $(this)
            modal.find('.modal-body #gmImg').attr('src', gMoralurl) 
        })
    });

    $(document).ready(function() {
        $('#rcModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var rCardurl = button.data('rcardurl') 
            var modal = $(this)
            modal.find('.modal-body #rcImg').attr('src', rCardurl) 
        })
    });
</script>
</body>
</html>