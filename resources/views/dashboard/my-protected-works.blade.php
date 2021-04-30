@extends('layouts.dashboard')
@section('content')
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
        <h3 style="letter-spacing: 3px" class="mt-4 mb-3">MY PROTECTED WORKS</h3>
        <p style="font-size: 13px;">Below is a list of all your registered and protected work.</p>
        <div class="px-5 table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>REFERENCE NUMBER</th>
                    <th>TITLE</th>
                    <th>DATE</th>
                    <th>OPTIONS</th>
                    <th>RESET PASSWORD</th>
                </tr>
                </thead>
                <tbody>
                @if(count($certificates) != 0)
                    @foreach($certificates as $key => $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <a href="{{url('/delete-certificate/'.$item->id)}}">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                            <td>
                                {{--                                <a href="{{url('/delete-certificate/'.$item->id)}}">--}}
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-toggle="dropdown"
                                            style="background: #32353e;letter-spacing: 4px;width: 136px;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;text-align: center;color: #fff;text-transform: uppercase;padding: 7px 0 7px;font-family: 'futura-normalregular';font-size: 15px;border: none;cursor: pointer;">
                                        RESET
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                    </ul>
                                </div>
                                {{--                                </a>--}}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td></td>
                        <td class="text-center">No Certificate Found Yet!</td>
                        <td></td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        {{--        <form method="post" action="{{url("/saving-new-work")}}" enctype="multipart/form-data">--}}
        {{--            {{csrf_field()}}--}}
        {{--            <div class="form-group row" style="width: 600px;margin-top: 30px;margin-bottom: 30px">--}}
        {{--                <div class="col-lg-3">--}}
        {{--                    <label for="email">Title Of Work*:</label>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-9">--}}
        {{--                    <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" required>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="form-group row">--}}
        {{--                <div class="col-lg-3">--}}
        {{--                    <input style="display: none" type="file" id="fileOne" name="fileOne[]" onchange="setName('fileOne','fileOneName')">--}}
        {{--                    <button onclick="document.getElementById('fileOne').click()" type="button"--}}
        {{--                            style="background: #e67370;letter-spacing: 4px;width: 187px;float: left;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;text-align: center;color: #fff;text-transform: uppercase;padding: 7px 0 7px;font-family: 'futura-normalregular';font-size: 15px;border: none;cursor: pointer;">--}}
        {{--                        CHOOSE FILE--}}
        {{--                    </button>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-9">--}}
        {{--                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File One*"--}}
        {{--                           name="fileOneName" id="fileOneName" required>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="form-group row">--}}
        {{--                <div class="col-lg-3">--}}
        {{--                    <input style="display: none" type="file" id="fileTwo" name="fileTwo[]"  onchange="setName('fileTwo','fileTwoName')">--}}
        {{--                    <button onclick="document.getElementById('fileTwo').click()" type="button"--}}
        {{--                            style="background: #e67370;letter-spacing: 4px;width: 187px;float: left;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;text-align: center;color: #fff;text-transform: uppercase;padding: 7px 0 7px;font-family: 'futura-normalregular';font-size: 15px;border: none;cursor: pointer;">--}}
        {{--                        CHOOSE FILE--}}
        {{--                    </button>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-9">--}}
        {{--                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File Two"--}}
        {{--                           name="fileTwoName" id="fileTwoName">--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="row form-group ">--}}
        {{--                <div class="col-lg-3">--}}
        {{--                    <input style="display: none" type="file" id="fileThree" name="fileThree[]" onchange="setName('fileThree','fileThreeName')">--}}
        {{--                    <button onclick="document.getElementById('fileThree').click()" type="button"--}}
        {{--                            style="background: #e67370;letter-spacing: 4px;width: 187px;float: left;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;text-align: center;color: #fff;text-transform: uppercase;padding: 7px 0 7px;font-family: 'futura-normalregular';font-size: 15px;border: none;cursor: pointer;">--}}
        {{--                        CHOOSE FILE--}}
        {{--                    </button>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-9">--}}
        {{--                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File Three"--}}
        {{--                           name="fileThreeName" id="fileThreeName">--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="form-group row">--}}
        {{--                <div class="col-lg-3">--}}
        {{--                    <input style="display: none" type="file" id="fileFour" name="fileFour[]" onchange="setName('fileFour','fileFourName')">--}}
        {{--                    <button onclick="document.getElementById('fileFour').click()" type="button"--}}
        {{--                            style="background: #e67370;letter-spacing: 4px;width: 187px;float: left;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;text-align: center;color: #fff;text-transform: uppercase;padding: 7px 0 7px;font-family: 'futura-normalregular';font-size: 15px;border: none;cursor: pointer;">--}}
        {{--                        CHOOSE FILE--}}
        {{--                    </button>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-9">--}}
        {{--                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File Four"--}}
        {{--                           name="fileFourName" id="fileFourName">--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="form-group row">--}}
        {{--                <div class="col-lg-3">--}}
        {{--                    <input style="display: none" type="file" id="fileFive" name="fileFive[]" onchange="setName('fileFive','fileFiveName')">--}}
        {{--                    <button onclick="document.getElementById('fileFive').click()" type="button"--}}
        {{--                            style="background: #e67370;letter-spacing: 4px;width: 187px;float: left;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;text-align: center;color: #fff;text-transform: uppercase;padding: 7px 0 7px;font-family: 'futura-normalregular';font-size: 15px;border: none;cursor: pointer;">--}}
        {{--                        CHOOSE FILE--}}
        {{--                    </button>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-9">--}}
        {{--                    <input style="height: 42px!important;" type="text" class="form-control" placeholder="File Five"--}}
        {{--                           name="fileFiveName" id="fileFiveName">--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="form-group">--}}
        {{--                <button type="submit" id="btnFetch"--}}
        {{--                        style="background: #6fc3e6;letter-spacing: 4px;width: 136px;float: left;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;text-align: center;color: #fff;text-transform: uppercase;padding: 7px 0 7px;font-family: 'futura-normalregular';font-size: 15px;border: none;cursor: pointer;">--}}
        {{--                    Upload--}}
        {{--                </button>--}}
        {{--            </div>--}}
        {{--        </form>--}}
    </div>
    <script>
        function setName(fileId, inputId) {
            var files = document.getElementById(fileId).files;
            if (files.length > 0) {
                document.getElementById(inputId).value = files[0].name;
            }
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
