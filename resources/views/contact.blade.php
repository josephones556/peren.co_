@extends('layout/master')

@section('title')
Contant Us
@endsection

@push('style')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>tinymce.init({selector:'textarea'});</script> --}}
@endpush

@section('content')
    <div class="main-content  type- " id="main-content">
            
        <div id="block-perencocontentheader">
            <div title="" class="page-hero perenco-pageheroheaderimg print-fix">
                <div class="container">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>

        <div class="container print-only">
            Contact
        </div>
        
        <style>
            .perenco-pageheroheaderimg{
                background-image:url('https://www.perenco.com/sites/default/files/2019-01/contact_desktop.jpg');
            }
            /* mobile */
            @media(max-width:767px) {
                .perenco-pageheroheaderimg{
                    background-image:url('https://www.perenco.com/sites/default/files/2019-01/contact_mobile.jpg');
                }
            }
        </style>
    </div>
    
    <div id="block-perenco-theme-breadcrumbs">
        <div class="site-breadcrumb">  
            <div class="container">  <a href="/">Home</a>  
                <span class="current-page">Contact</span>  
            </div>
        </div>
    </div>

        <div class="contact-detail">
            <div class="container">
                <div class="row">
                    <div class="contact-detail-right col-md-6 mt-3 mt-md-0 mb-md-4">
                        <div class="contact-block eq-height">
                            <span class="d-block">FOR ENQUIRIES</span>
                        </div>
                        <div class="contact-detail-block eq-height">
                            <div class="contact-detail-block-inner">
                                <p>info@peren.co </p>
                                <p>sales@peren.co </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>

    <div class="container">
        <div class="mb-5">
            <form action="javascript:void(0)">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
                </div>

                <div class="input-group mb-2">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                </div>

                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject" required>
                </div>

                <div class="input-group mb-2">
                    <textarea class="form-control" name="message" rows="7" id="message"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block" style="background: #1c5479" onclick="submit_form()">Submit</button>
                        
            </form>
        </div>
    </div>
@endsection

@push('javascript')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>

    function submit_form() {
		var name = encodeURIComponent(document.getElementById('name').value);
		var email = encodeURIComponent(document.getElementById('email').value);
        var subject = encodeURIComponent(document.getElementById('subject').value);
		var message = encodeURIComponent(document.getElementById('message').value);

        if(name.length < 1 || email.length < 1 || subject.length < 1 || message.length < 1)
        {
            alert('All fields are required.');
        }
        else 
        {
            // Parameters to send to PHP script. The bits in the "quotes" are the POST indexes to be sent to the PHP script.
	        var params = "_token=" + "{{ csrf_token() }}" + "&name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message;

            var http = new XMLHttpRequest();
            http.open("POST", "contact-us", true);

            // Set headers
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.setRequestHeader("Content-length", params.length);
            http.setRequestHeader("Connection", "close");

            http.onreadystatechange = function(){
                if(http.readyState == 4 && http.status == 200){
                    alert(http.responseText)
                    //document.getElementById("response").innerHTML = http.responseText;
                }
            }

            http.send(params);
            formsubmission.preventDefault();
        }
	}

</script>
@endpush