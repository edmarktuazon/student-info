<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <h2 class="title-form">Registration</h2>
            <form action="/login" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col" id="col1" style="display:block;">
                        <div class="row">
                            <p class="form-header">Basic Information</p>
                            <hr>
                            <div class="col">
                                <div class="mb-3">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fName" value="{{old('fName')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="mName" value="{{old('mName')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lName" value="{{old('lName')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Home Address</label>
                                    <input type="text" class="form-control" name="addr" value="{{old('addr')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Place of Birth</label>
                                    <input type="text" class="form-control" name="pBirth" value="{{old('pBirth')}}"
                                        required>
                                </div>

                            </div>
                            <div class="col">
                                <div class="mb-4">
                                    <label>Birthday</label>
                                    <input type="date" class="form-control" name="bDate" value="{{old('bDate')}}"
                                        required>
                                </div>
                                <label>Sex</label>
                                <div class="mb-4 radio" required>
                                    <span><input type="radio" class="form-check-input" name="sex" value="Male"
                                            @if(old('sex')) checked @endif> Male</span>
                                    <span><input type="radio" class="form-check-input" name="sex" value="Female"
                                            @if(old('sex')) checked @endif> Female</span>
                                    <span><input type="radio" class="form-check-input" name="sex" value="Not"
                                            @if(old('sex')) checked @endif> Prefer not to say</span>
                                </div>
                                <div class="mb-3">
                                    <label>Nationality</label>
                                    <input type="text" class="form-control" name="nation" value="{{old('nation')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Contact No.</label>
                                    <input type="text" class="form-control" name="cNum" value="{{old('cNum')}}"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="col2" style="display:none;">
                        <div class="row">
                            <p class="form-header">School Information</p>
                            <hr>
                            <div class="col">
                                <div class="mb-3">
                                    <label>Learner Reference Numbe (LRN)</label>
                                    <input type="text" class="form-control" name="lrn" value="{{old('lrn')}}" required>
                                </div>
                                <div class="mb-3">
                                    <label>Grade Level</label>
                                    <select class="form-select" name="gradelvl">
                                        <option value="Grade 11">Grade 11</option>
                                        <option value="Grade 12">Grade 12</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Academic Track/Strand</label>
                                    <select class="form-select" name="strand">
                                        <option value="abm">ABM - Accounting Business and Management</option>
                                        <option value="home">Home Economics Strand</option>
                                        <option value="ict">ICT Strand - Information and Communications Technology
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>School Year</label>
                                    <input type="text" class="form-control" name="sYear" value="{{old('sYear')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Last School Attended</label>
                                    <input type="text" class="form-control" name="lSchool" value="{{old('lSchool')}}"
                                        required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label>Last School Attended Address</label>
                                    <input type="text" class="form-control" name="lschoolAddr"
                                        value="{{old('lschoolAddr')}}" required>
                                </div>
                                <div class="mb-3">
                                    <label>Last School Year Attended</label>
                                    <input type="text" class="form-control" name="lSyear" value="{{old('lSyear')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Report Card</label>
                                    <input type="file" class="form-control" name="rCard" value="{{old('rCard')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Good Moral</label>
                                    <input type="file" class="form-control" name="gMoral" value="{{old('gMoral')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>PSA (NSO) Birth Certificate</label>
                                    <input type="file" class="form-control" name="bCert" value="{{old('bCert')}}"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="col3" style="display:none">
                        <div class="row">
                            <div class="col">
                                <p class="form-header">Parent/Guardian</p>
                                <hr>
                                <div class="mb-3">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" name="parent_name"
                                        value="{{old('parent_name')}}" required>
                                </div>
                                <div class="mb-3">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="parent_addr"
                                        value="{{old('parent_addr')}}" required>
                                </div>
                                <div class="mb-3">
                                    <label>Contact No.</label>
                                    <input type="text" class="form-control" name="parent_cnum"
                                        value="{{old('parent_cnum')}}" required>
                                </div>
                            </div>
                            <div class="col">
                                <p class="form-header">Student Account</p>
                                <hr>
                                <div class="mb-3">
                                    <label>Profile Image</label>
                                    <input type="file" class="form-control" name="image" value="{{old('image')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="pass" value="{{old('pass')}}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="cPass" value="{{old('cPass')}}"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 btns">
                    <button type="button" id="backbtn" class="btn btn-success form-control" name="submit"
                        disabled>Back</button>
                    <button type="button" id="btn1" class="btn btn-success form-control" name="submit">Next</button>
                    <button type="submit" id="btn2" style="display:none;" class="btn btn-success form-control"
                        name="submit">Submit</button>
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
    con
    st col3 = document.getElementById("col3");

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