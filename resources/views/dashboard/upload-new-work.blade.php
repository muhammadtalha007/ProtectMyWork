@extends('layouts.dashboard')
@section('content')
    <style>
        .btnhoverchooseFile{
            background: white;letter-spacing: 4px;width: 187px;float: left;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;text-align: center;color: #6b9ce8;text-transform: uppercase;padding: 7px 0 7px;font-family: 'futura-normalregular';font-size: 15px;border: none;cursor: pointer;border: 2px solid #6b9ce8;
        }
        .btnhoverchooseFile:hover{
            background: #6b9ce8!important;
            color: white!important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    {{--    <div>--}}
    <div class="container" style="max-width: 900px;margin-top: 30px;margin-bottom: 50px">
        @if($errors->any())
            <div class="alert alert-danger">
                <h4 style="color: black;font-size: 14px">{{$errors->first()}}</h4>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('msg'))
            <div class="alert alert-success" style="margin-bottom: 0px!important;">
                <h4 style="color: black">{{\Illuminate\Support\Facades\Session::get("msg")}}</h4>
            </div>
        @endif
        <h3 style="letter-spacing: 3px" class="mt-4 mb-3">UPLOAD NEW WORK</h3>
        <p style="font-size: 13px;"><strong>Please do not use any symbols</strong> like the ampersand
            '<strong>&</strong>' , or forward slash '/' or any currency signs (e.g <strong>$</strong>,
            <strong>£</strong>) or apostrophes ( ' ) or speech marks ( " ) in any file names or work titles as these are
            not allowed by the system. There is a 60MB upload limit. If your files total more than 60MB, please try and
            use compression techniques to reduce this.</p>
        <p style="font-size: 13px;">It is to your benefit to upload all connected material, not just the final version
            of your work. (ie, previous designs, documents outlining an idea etc.). This can be very useful evidence
            should you have to prove you are the author. {{env('APP_NAME')}} allows you to upload up to 5 attachments
            with one token, making this possible at no extra cost to you.</p>
            <p>
                <span style="font-weight: bold"> New:</span> You can drag and drop files on below buttons also.
            </p>

        <form method="post" action="{{url("/saving-new-work")}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group row" style="width: 600px;margin-top: 30px;margin-bottom: 30px">
                <div class="col-lg-3">
                    <label for="email">Title Of Work*:</label>
                </div>
                <div class="col-lg-9">
                    <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-3" id="drop-area-1">
                    <input style="display: none" type="file" id="fileOne" name="fileOne[]" onchange="setName('fileOne','fileOneName')">
                    <button onclick="document.getElementById('fileOne').click()" type="button"
                           class="btnhoverchooseFile">
                        CHOOSE FILE
                    </button>
                </div>
                <div class="col-lg-9">
                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File One"
                           name="fileOneName" id="fileOneName" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-3" id="drop-area-2">
                    <input style="display: none" type="file" id="fileTwo" name="fileTwo[]"  onchange="setName('fileTwo','fileTwoName')">
                    <button onclick="document.getElementById('fileTwo').click()" type="button"
                            class="btnhoverchooseFile">
                        CHOOSE FILE
                    </button>
                </div>
                <div class="col-lg-9">
                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File Two"
                           name="fileTwoName" id="fileTwoName">
                </div>
            </div>
            <div class="row form-group ">
                <div class="col-lg-3" id="drop-area-3">
                    <input style="display: none" type="file" id="fileThree" name="fileThree[]" onchange="setName('fileThree','fileThreeName')">
                    <button onclick="document.getElementById('fileThree').click()" type="button"
                            class="btnhoverchooseFile">
                        CHOOSE FILE
                    </button>
                </div>
                <div class="col-lg-9">
                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File Three"
                           name="fileThreeName" id="fileThreeName">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-3" id="drop-area-4">
                    <input style="display: none" type="file" id="fileFour" name="fileFour[]" onchange="setName('fileFour','fileFourName')">
                    <button onclick="document.getElementById('fileFour').click()" type="button"
                            class="btnhoverchooseFile">
                        CHOOSE FILE
                    </button>
                </div>
                <div class="col-lg-9">
                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File Four"
                           name="fileFourName" id="fileFourName">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-3" id="drop-area-5">
                    <input style="display: none" type="file" id="fileFive" name="fileFive[]" onchange="setName('fileFive','fileFiveName')">
                    <button onclick="document.getElementById('fileFive').click()" type="button"
                            class="btnhoverchooseFile">
                        CHOOSE FILE
                    </button>
                </div>
                <div class="col-lg-9">
                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File Five"
                           name="fileFiveName" id="fileFiveName">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" id="btnFetch"
                        style="background: #6b9ce8;letter-spacing: 4px;width: 136px;float: left;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;text-align: center;color: #fff;text-transform: uppercase;padding: 7px 0 7px;font-family: 'futura-normalregular';font-size: 15px;border: none;cursor: pointer;">
                    Upload
                </button>
            </div>
        </form>
    </div>
    <script>
        function setName(fileId, inputId) {
            var files = document.getElementById(fileId).files;
            if (files.length> 0 )
            {
                document.getElementById(inputId).value = files[0].name;
            }
        }
        let dropArea1 = document.getElementById('drop-area-1');
        let dropArea2 = document.getElementById('drop-area-2');
        let dropArea3 = document.getElementById('drop-area-3');
        let dropArea4 = document.getElementById('drop-area-4');
        let dropArea5 = document.getElementById('drop-area-5');
        ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea1.addEventListener(eventName, preventDefaults1, false)
            dropArea2.addEventListener(eventName, preventDefaults2, false)
            dropArea3.addEventListener(eventName, preventDefaults3, false)
            dropArea4.addEventListener(eventName, preventDefaults4, false)
            dropArea5.addEventListener(eventName, preventDefaults5, false)
        })

        function preventDefaults1 (e) {
            e.preventDefault()
            e.stopPropagation()
        }
        function preventDefaults2 (e) {
            e.preventDefault()
            e.stopPropagation()
        }
        function preventDefaults3 (e) {
            e.preventDefault()
            e.stopPropagation()
        }
        function preventDefaults4 (e) {
            e.preventDefault()
            e.stopPropagation()
        }
        function preventDefaults5 (e) {
            e.preventDefault()
            e.stopPropagation()
        }
        dropArea1.addEventListener('drop', handleDrop1, false);
        dropArea2.addEventListener('drop', handleDrop2, false)
        dropArea3.addEventListener('drop', handleDrop3, false)
        dropArea4.addEventListener('drop', handleDrop4, false)
        dropArea5.addEventListener('drop', handleDrop5, false)

        function handleDrop1(e) {
            let dt = e.dataTransfer
            let files = dt.files;
            document.getElementById('fileOne').files = files;
            setName('fileOne', 'fileOneName');
        }
        function handleDrop2(e) {
            let dt = e.dataTransfer
            let files = dt.files;
            document.getElementById('fileTwo').files = files;
            setName('fileTwo', 'fileTwoName');
        }
        function handleDrop3(e) {
            let dt = e.dataTransfer
            let files = dt.files;
            document.getElementById('fileThree').files = files;
            setName('fileThree', 'fileThreeName');
        }
        function handleDrop4(e) {
            let dt = e.dataTransfer
            let files = dt.files;
            document.getElementById('fileFour').files = files;
            setName('fileFour', 'fileFourName');
        }
        function handleDrop5(e) {
            let dt = e.dataTransfer
            let files = dt.files;
            document.getElementById('fileFive').files = files;
            setName('fileFive', 'fileFiveName');
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
// Prepare the preview for profile picture
            $("#photo").change(function () {
                readURL(this);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photopreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
