
@extends('user.layouts.mainLayout')
@section('content')
    <div onload="UploadingView()">
        <div id="waitForUploading" class="row pb-5">
            <div class="col-md-8 mx-auto text-center upload-video pt-5 pb-5">
                <h1><i class="fas fa-file-upload text-primary"></i></h1>
                <h5 class="mt-5">ویدیوی آپلودی خود را انتخاب کنید.</h5>
                <div class="mt-4">
                    <input type="file" class="custom-file-input" id="inputFile" onchange="UploadingView()"
                        accept=".mp4,.mv,.mov,.qt,.ts,.3gp,.3gpp,.3g2,.3gp2,.mpg,.mpeg,.mp1,.mp2,.m1v,.m1a,.m2a,.mpa,.mpv,.mpv2,.mpe,.m4a,.m4p,.m4b,.m4r,.m4v,.avi,.flv,.f4v,.f4p,.f4a,.f4b,.vob,.lsf,.lsx,.asf,.asr,.asx,.webm,.mkv,.wmv,.y4m" />
                    <label class="btn btn-primary rounded-pill" for="inputFile">
                        انتخاب فایل <input type="file" style="display: none;">
                    </label>
                </div>

            </div>
        </div>
        <div id="Uploading" class="container-fluid upload-details" style="display:none">
            <form method="POST" action="{{ route('store.video') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <h6>Upload Details</h6>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="imgplace"></div>
                    </div>
                    <div class="col-lg-10">

                        <div class="progress">
                            <div class="bar"></div>
                            <div class="percent">0%</div>
                        </div>
                        <div class="osahan-desc">Your Video is still uploading, please keep this page open until it's done.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="osahan-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="e1">عنوان ویدیو</label>
                                        <input type="text"
                                            placeholder="Contrary to popular belief, Lorem Ipsum (2019) is not." id="e1"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="e2">توضیحات ویدیو</label>
                                        <textarea rows="3" id="e2" name="e2" class="form-control">Description</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="e3">Orientation</label>
                                        <select id="e3" class="custom-select">
                                            <option>Straight</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="e4">Privacy Settings</label>
                                        <select id="e4" class="custom-select">
                                            <option>Public</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="e5">Monetize</label>
                                        <select id="e5" class="custom-select">
                                            <option>Yes</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="e6">License</label>
                                        <select id="e6" class="custom-select">
                                            <option>Standard</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="e7">Tags (13 Tags Remaining)</label>
                                        <input type="text" placeholder="Gaming, PS4" id="e7" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="e8">Cast (Optional)</label>
                                        <input type="text" placeholder="Nathan Drake," id="e8" class="form-control">
                                    </div>
                                </div>
                                <!--iiiiiiiiiiiiinjooo -->
                            </div>
                            <div class="row ">
                                <div class="col-lg-12">
                                    <div class="main-title">
                                        <h6>دسته‌بندی آپارات</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row category-checkbox">
                                <!-- checkbox 1col -->
                                <div class="col-lg-2 col-xs-6 col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Abaft</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Brick</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Purpose</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">Shallow</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Spray</label>
                                    </div>
                                </div>
                                <!-- checkbox 2col -->
                                <div class="col-lg-2 col-xs-6 col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck1">
                                        <label class="custom-control-label" for="zcustomCheck1">Cemetery</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck2">
                                        <label class="custom-control-label" for="zcustomCheck2">Trouble</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck3">
                                        <label class="custom-control-label" for="zcustomCheck3">Pin</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck4">
                                        <label class="custom-control-label" for="zcustomCheck4">Fall</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck5">
                                        <label class="custom-control-label" for="zcustomCheck5">Leg</label>
                                    </div>
                                </div>
                                <!-- checkbox 3col -->
                                <div class="col-lg-2 col-xs-6 col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck1">
                                        <label class="custom-control-label" for="czcustomCheck1">Scissors</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck2">
                                        <label class="custom-control-label" for="czcustomCheck2">Stitch</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck3">
                                        <label class="custom-control-label" for="czcustomCheck3">Agonizing</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck4">
                                        <label class="custom-control-label" for="czcustomCheck4">Rescue</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck5">
                                        <label class="custom-control-label" for="czcustomCheck5">Quiet</label>
                                    </div>
                                </div>
                                <!-- checkbox 1col -->
                                <div class="col-lg-2 col-xs-6 col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Abaft</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Brick</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Purpose</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">Shallow</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Spray</label>
                                    </div>
                                </div>
                                <!-- checkbox 2col -->
                                <div class="col-lg-2 col-xs-6 col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck1">
                                        <label class="custom-control-label" for="zcustomCheck1">Cemetery</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck2">
                                        <label class="custom-control-label" for="zcustomCheck2">Trouble</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck3">
                                        <label class="custom-control-label" for="zcustomCheck3">Pin</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck4">
                                        <label class="custom-control-label" for="zcustomCheck4">Fall</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zcustomCheck5">
                                        <label class="custom-control-label" for="zcustomCheck5">Leg</label>
                                    </div>
                                </div>
                                <!-- checkbox 3col -->
                                <div class="col-lg-2 col-xs-6 col-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck1">
                                        <label class="custom-control-label" for="czcustomCheck1">Vessel</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck2">
                                        <label class="custom-control-label" for="czcustomCheck2">Stitch</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck3">
                                        <label class="custom-control-label" for="czcustomCheck3">Agonizing</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck4">
                                        <label class="custom-control-label" for="czcustomCheck4">Rescue</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="czcustomCheck5">
                                        <label class="custom-control-label" for="czcustomCheck5">Quiet</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="osahan-area text-center mt-3">
                            <button class="btn btn-outline-primary">ثبت تغییرات</button>
                        </div>
                        <hr>
                        <div class="terms text-center">
                            <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority
                                <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.
                            </p>
                            <p class="hidden-xs mb-0">Ipsum is therefore always free from repetition, injected humour, or
                                non</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function UploadingView() {
            document.getElementById("waitForUploading").style.display = "none";
            document.getElementById("Uploading").style.display = "block";
        }

    </script>
    <script type="text/javascript">
        function validate(formData, jqForm, options) {
            var form = jqForm[0];
            if (!form.file.value) {
                alert('File not found');
                return false;
            }
        }

        (function() {

            var bar = $('.bar');
            var percent = $('.percent');
            var status = $('#status');

            $('form').ajaxForm({
                beforeSubmit: validate,
                beforeSend: function() {
                    status.empty();
                    var percentVal = '0%';
                    var posterValue = $('input[name=file]').fieldValue();
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                success: function() {
                    var percentVal = 'Wait, Saving';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    status.html(xhr.responseText);
                    alert('Uploaded Successfully');
                    window.location.href = "/file-upload";
                }
            });

        })();

    </script>
@endsection