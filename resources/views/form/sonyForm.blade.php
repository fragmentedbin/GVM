@extends('layout/templateMaster')
@section('content')
<div class="container-content">
    <div class="wrapper-content">
        <form class="form needs-validation" action="" method="GET" enctype="multipart/form-data">
            <div class="banner-c">
                <div class="d-flex justify-content-center" style="background: url('')no-repeat center center;">
                    <img src="{{asset('/img/form/sony.png')}}" alt="">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="firstnNme">First Name</label>
                    <input type="text" id="firstName" class="form-control form-control-lg" placeholder="First name">
                </div>
                <div class="col">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" class="form-control form-control-lg" placeholder="Last name">
                </div>
            </div>
            <div class="form-group">
                <label for="nameStage">Name Stage</label>
                <input type="text" class="form-control form-control-lg" id="nameStage" placeholder="Name Stage">
            </div>
            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control form-control-lg" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="tittleSong">Tittle Song</label>
                <input type="text" class="form-control form-control-lg" id="tittleSong" placeholder="Tittle Song">
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control form-control-lg" id="genre" placeholder="Genre">
            </div>
            <div class="form-group">
                <label for="wav">Preview Track WAV 16 BIT 44,1 HZ (Require Google Drive / Sound Cloud Private
                    link)</label>
                <br>
                <label for="wav"><span style="color: red;">*</span>Note Expected to open request access if Google
                    Drive link given</label>
                <input type="url" class="form-control form-control-lg" id="mp3"
                    placeholder="https://drive.google.com/file/d/example/view?usp=sharing">
            </div>
            <div class="form-group">
                <label for="" class="lable-form-check">Colaboration?</label>
                <div class="form-check">
                    <input class="form-check-input colab-input" type="radio" name="colaboration" id="yes" value="yes">
                    <label class="form-check-label" for="yes">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input colab-input" type="radio" name="colaboration" id="no" value="no">
                    <label class="form-check-label" for="no">
                        NO
                    </label>
                </div>
            </div>
            <div class="form-group colab-yes" hidden>
                <label for="">Fill this field if you did collaboration for this song </label>
                <div class="form-row">
                    <br>
                    <div class="col">
                        <label for="firstnNme">First Name collaborator</label>
                        <input type="text" id="firstName" class="form-control form-control-lg" placeholder="First name">
                    </div>
                    <div class="col">
                        <label for="lastName">Last Name collaborator</label>
                        <input type="text" id="lastName" class="form-control form-control-lg" placeholder="Last name">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="lable-form-check">Confirm that The Composer Name filled contains full legal of
                    all the name composers involved in this release</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="confirm-legal-composer" id="confirm-yes"
                        value="yes">
                    <label class="form-check-label" for="confirm-yes">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="confirm-legal-composer" id="confirm-no"
                        value="no">
                    <label class="form-check-label" for="confirm-no">
                        NO
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Choose you're photo profile</label>
                <br>
                <label for=""><span style="color: red;">*</span>Note: max size 2MB</label>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" accept="image/*" name="filename">
                    <label class="custom-file-label form-control-lg" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check-agree">
                <label class="form-check-label" for="check-agree">Agree our <a data-toggle="modal"
                        data-target="#exampleModalCenter" href="">terms and conditions</a></label>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="color:black;" id="exampleModalLongTitle">GVM terms and
                                conditions</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="color: black">
                                Some things that MUST be considered, when you want to send a Demo Submission to GROW
                                VIBES MUSIC, including:
                                <br />
                                1) Your tracks are NOT released under Creative Commons or similar free / open
                                licenses
                                <br />
                                2) Your track NOT contain Public Domain Cash or Public Domain Composition
                                <br />
                                3)Your tracks NOT have sound from recorded video games or TV shows
                                <br />
                                4)Your tracks NOT contain any existing YouTube video recordings that are not
                                exclusively controlled by you
                                <br />
                                5)You are 100% in control of your track
                                <br />
                                6)Your track may NOT be under the auspices of another company, such as TuneCore, CD
                                BABY, Ditto Music or others.
                                <br />
                                7)Your track does NOT contain Content such as beats / instrumentals which are
                                available on behalf of third parties.
                                <br />
                                8)Your tracks are NOT purchased from or available for purchase on any Royalty Free
                                Websites or music databases such as Audio Jungle, Theme Forest, Audio Micro, etc.
                                <br />
                                <b>* All forms of copyright responsibility that involve the intellectual property of
                                    track. Label, Distributor and Youtube Publishing are not responsible *</b>
                                <br />
                                Note: We understand how difficult this is, and we apologize for what we have to tell
                                you. We have to follow requests from Youtube Publishing and Sony Music. This is not
                                a GROW VIBES MUSIC requirement, it is a requirement of Youtube Publishing, and Sony
                                Music.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary modal-accept"
                                data-dismiss="modal">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="ml-auto p-2">
                    <button type="reset" class="btn btn-danger" onClick="window.location.reload();">Reset <i
                            class="fal fa-sync"></i></button>
                    <button type="submit" id="form-submit" class="btn btn-primary sony" disabled>Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection