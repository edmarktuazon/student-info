<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <div class="container-form-registration" style="width:40%" id="container">
        <h2 class="title-form">Edit Student Information</h2>
        @foreach($studentinfo as $key => $data)
        <form action="/admin/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col" id="col1" style="display:block;">
                    <div class="row">
                        <p class="form-header">Basic Information</p><hr>
                        <div class="col">
                            <input type="text" name="student_id" value="{{$data->student_id}}" style="display:none;">
                            <div class="mb-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fName" value="{{$data->fName}}" >
                            </div>
                            <div class="mb-3">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" name="mName" value="{{$data->mName}}" >
                            </div>
                            <div class="mb-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lName" value="{{$data->lName}}" >
                            </div>
                            <div class="mb-3">
                                <label>Home Address</label>
                                <input type="text" class="form-control" name="addr" value="{{$data->addr}}" >
                            </div>
                            <div class="mb-3">
                                <label>Place of Birth</label>
                                <input type="text" class="form-control" name="pBirth" value="{{$data->pBirth}}" >
                            </div>
                            
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                <label>Birthday</label>
                                <input type="date" class="form-control" name="bDate" value="{{$data->bDate}}" >
                            </div>
                            <label>Sex</label>
                            <div class="mb-4 radio" >
                                <span><input type="radio" class="form-check-input" name="sex" value="Male" {{$data->sex == 'Male' ? 'checked' : ''}}> Male</span>
                                <span><input type="radio" class="form-check-input" name="sex" value="Female" {{$data->sex == 'Female' ? 'checked' : ''}}> Female</span>
                                <span><input type="radio" class="form-check-input" name="sex" value="Not" {{$data->sex == 'Not' ? 'checked' : ''}}> Prefer not to say</span>
                            </div>
                            <div class="mb-3">
                                <label>Nationality</label>
                                <input type="text" class="form-control" name="nation" value="{{$data->nation}}" >
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{$data->email}}" >
                            </div>
                            <div class="mb-3">
                                <label>Contact No.</label>
                                <input type="text" class="form-control" name="cNum" value="{{$data->cNum}}" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="col2" style="display:none;">
                    <div class="row">
                        <p class="form-header">School Information</p><hr>
                        <div class="col">
                            <div class="mb-3">
                                <label>Learner Reference Numbe (LRN)</label>
                                <input type="text" class="form-control" name="lrn" value="{{$data->lrn}}" >
                            </div>
                            <div class="mb-3">
                                <label>Grade Level</label>
                                <select class="form-select" name="gradelvl">
                                    <option value="Grade 11" {{$data->gradelvl == 'Grade 11' ? 'selected' : ''}}>Grade 11</option>
                                    <option value="Grade 12" {{$data->gradelvl == 'Grade 12' ? 'selected' : ''}}>Grade 12</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Academic Track/Strand</label>
                                <select class="form-select" name="strand">
                                    <option value="abm" {{$data->strand == 'abm' ? 'selected' : ''}}>ABM - Accounting Business and Management</option>
                                    <option value="home" {{$data->strand == 'home' ? 'selected' : ''}}>Home Economics Strand</option>
                                    <option value="ict" {{$data->strand == 'ict' ? 'selected' : ''}}>ICT Strand - Information and Communications Technology</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>School Year</label>
                                <input type="text" class="form-control" name="sYear" value="{{$data->sYear}}" >
                            </div>
                            <div class="mb-3">
                                <label>Last School Attended</label>
                                <input type="text" class="form-control" name="lSchool" value="{{$data->lSchool}}" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label>Last School Attended Address</label>
                                <input type="text" class="form-control" name="lschoolAddr" value="{{$data->lschoolAddr}}" >
                            </div>
                            <div class="mb-3">
                                <label>Last School Year Attended</label>
                                <input type="text" class="form-control" name="lSyear" value="{{$data->lSyear}}" >
                            </div>
                            <div class="mb-3">
                                <label>Report Card</label>
                                <input type="file" class="form-control" name="rCard" value="" >
                            </div>
                            <div class="mb-3">
                                <label>Good Moral</label>
                                <input type="file" class="form-control" name="gMoral" value="" >
                            </div>
                            <div class="mb-3">
                                <label>PSA (NSO) Birth Certificate</label>
                                <input type="file" class="form-control" name="bCert" value="" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="col3" style="display:none">
                    <div class="row">
                        <div class="col">
                            <p class="form-header">Parent/Guardian</p><hr>
                            <div class="mb-3">
                                <label>Fullname</label>
                                <input type="text" class="form-control" name="parent_name" value="{{$data->parent_name}}" >
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" class="form-control" name="parent_addr" value="{{$data->parent_addr}}" >
                            </div>
                            <div class="mb-3">
                                <label>Contact No.</label>
                                <input type="text" class="form-control" name="parent_cnum" value="{{$data->parent_cnum}}" >
                            </div>
                        </div>
                        <div class="col">
                            <p class="form-header">Student Account</p><hr>
                            <div class="mb-3">
                                <label>Profile Image</label>
                                <input type="file" class="form-control" name="image" value="{{old('image')}}" >
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pass" value="{{old('pass')}}" >
                            </div>
                            <div class="mb-3">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="cPass" value="{{old('cPass')}}" >
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            @endforeach
            <div class="mb-3 btns">
                <button type="button" id="backbtn" class="btn btn-success form-control" name="submit" disabled>Back</button>
                <button type="button" id="btn1" class="btn btn-success form-control" name="submit">Next</button>
                <button type="submit" id="btn2" style="display:none;" class="btn btn-success form-control" name="submit">Update</button>
            </div>
        </form>
        <p class="form-nav">Already have an account? <a href="/login">Login Here</a></p>
    </div>
</div>
<script>
    const btn1 = document.getElementById("btn1");
    const btn2 = document.getElementById("btn2");
    const backbtn = document.getElementById("backbtn");
    const col1 = document.getElementById("col1");
    const col2 = document.getElementById("col2");
    const col3 = document.getElementById("col3");

    let clickCount = 0;

    btn1.addEventListener("click", function() {
    clickCount++;

        if (clickCount === 1) {
        col1.style.display = "none";
        col2.style.display = "block";
        backbtn.disabled = false;
        } else if (clickCount === 2) {
        col2.style.display = "none";
        col3.style.display = "block";
        btn1.style.display = "none";
        btn2.style.display = "block";
        }
    });

    backbtn.addEventListener("click", function() {
        if (clickCount === 2) {
            col3.style.display = "none";
            col2.style.display = "block";
            btn2.style.display = "none";
            btn1.style.display = "block";
            clickCount--;
        } else if (clickCount === 1) {
            col2.style.display = "none";
            col1.style.display = "block";
            backbtn.disabled = true;
            clickCount--;
        }
    });
</script>
</body>
</html>