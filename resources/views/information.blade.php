<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet"><span>
</head>
<body>
<nav class="navbar navbar-light">
  <div class="nav-container">
    <img src="{{ asset('images/logo.png') }}" height="75">
    <h1>International Electronics and Technological Institute</h1>
  </div>
</nav>
<div class="container-student">
    <div class="row-1">
        @foreach($studentinfo as $key => $data)
            <div class="img-row">
                <div class="img">
                    <img src="{{ asset('images/' . $data->imgurl) }}">
                </div>
            </div>
    </div>
    <div class="row-2">
        <div class="left-col">
            <div class="title-header">
                <p class="title">Basic Information</p>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bcModal">View Birth Certificate</button>
            </div><hr>
            <span class="text-body"><p class="body">Name: </p><p>{{$data->fName}} {{$data->mName}} {{$data->lName}}</p></span>
            <span class="text-body"><p class="body">Age: </p><p id="age"></p></span>
            <span class="text-body"><p class="body">Birthday: </p>{{$data->bDate}}</span>
            <span class="text-body"><p class="body">Place of Birth: </p>{{$data->pBirth}}</span>
            <span class="text-body"><p class="body">Home Address: </p>{{$data->addr}}</span>
            <span class="text-body"><p class="body">Sex: </p>{{$data->sex}}</span>
            <span class="text-body"><p class="body">Nationality: </p>{{$data->nation}}</span>
            <p class="title">Contact Information</p><hr>
            <span class="text-body"><p class="body">Email: </p>{{$data->email}}</span>
            <span class="text-body"><p class="body">Contact Number: </p>{{$data->cNum}}</span>
        </div>
        <div class="right-col">
            <div class="title-header">
                <p class="title">School Information</p>
                <div>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rcModal">View Report Card</button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#gmModal">View Good Moral</button>
                </div>
            </div><hr>
            <span class="text-body"><p class="body">LRN: </p>{{$data->lrn}}</span>
            <span class="text-body"><p class="body">Grade Level: </p>{{$data->gradelvl}}</span>
            <span class="text-body"><p class="body">Academic Track/Strand: </p>{{$data->strand == 'abm' ? 'ABM' : ($data->strand == 'ict' ? 'ICT' : 'Home Economics')}}</span>
            <span class="text-body"><p class="body">School Year: </p>{{$data->sYear}}</span>
            <span class="text-body"><p class="body">Last School Attended: </p>{{$data->lSchool}}</span>
            <span class="text-body"><p class="body">Last School Attended Address: </p>{{$data->lschoolAddr}}</span>
            <span class="text-body"><p class="body">Last School Year Attended: </p>{{$data->lSyear}}</span>
            <div class="school-docs">
            </div>
            <p class="title">Parent/Guardian</p><hr>
            <span class="text-body"><p class="body">Name: </p>{{$data->parent_name}}</span>
            <span class="text-body"><p class="body">Address: </p>{{$data->parent_addr}}</span>
            <span class="text-body"><p class="body">Contact Number: </p>{{$data->parent_cnum}}</span>
            <div class="btn-row">
                <a href="/login"><button type="button" class="btn btn-danger">Logout</button></a>
            </div>
        </div
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
        <img src="{{ asset('images/' . $data->bCerturl) }}">
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
        <img src="{{ asset('images/' . $data->gMoralurl) }}">
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
        <img src="{{ asset('images/' . $data->rCardurl) }}">
      </div>
    </div>
  </div>
</div>

        @endforeach
<script>
const bDate = new Date('{{$data->bDate}}'); 
const now = new Date(); 
let age = now.getFullYear() - bDate.getFullYear(); 
if (now.getMonth() < bDate.getMonth() || (now.getMonth() === bDate.getMonth() && now.getDate() < bDate.getDate())) {
  age--; 
}
const ageElem = document.getElementById("age"); 
ageElem.textContent = age; 
</script>
</body>
</html>