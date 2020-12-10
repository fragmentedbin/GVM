@extends('layout/templateMaster')
@section('content')
<div class="container-content">
    <div class="wrapper-content">
        <form class="form needs-validation" action="" method="GET" enctype="multipart/form-data">
            <div class="banner-c">
                <div class="d-flex justify-content-center" style="background: url('')no-repeat center center;">
                    <img src="{{asset('/img/form/warner.png')}}" alt="">
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
                <select name="genre" class="form-control form-control-lg" id="genre">
                    <option>-- Choose a genre --</option>
                    <option value="African">African</option>
                    <option value="Alternative">Alternative</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Asian">Asian</option>
                    <option value="Blues">Blues</option>
                    <option value="Brazilian">Brazilian</option>
                    <option value="Children Music">Children Music</option>
                    <option value="Christian &amp; Gospel">Christian &amp; Gospel</option>
                    <option value="Classical">Classical</option>
                    <option value="Country">Country</option>
                    <option value="Dance">Dance</option>
                    <option value="Easy Listening">Easy Listening</option>
                    <option value="Electronic">Electronic</option>
                    <option value="Folk">Folk</option>
                    <option value="Hip Hop/Rap">Hip Hop/Rap</option>
                    <option value="Indie">Indie</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Latin">Latin</option>
                    <option value="Metal">Metal</option>
                    <option value="Pop">Pop</option>
                    <option value="R&amp;B/Soul">R&amp;B/Soul</option>
                    <option value="Reggae">Reggae</option>
                    <option value="Relaxation">Relaxation</option>
                    <option value="Rock">Rock</option>
                    <option value="Various">Various</option>
                    <option value="World Music / Regional Folklore">World Music / Regional Folklore</option>
                </select>
            </div>

            {{-- <div class="form-group">
                <label for="subgenre">Sub Genre</label>
                <select name="subgenre" class="form-control form-control-lg" id="subgenre">
                    <option>-- Choose a Sub Genre --</option>
                    <option value="African">African</option>
                    <option value="Alternative">Alternative</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Asian">Asian</option>
                    <option value="Blues">Blues</option>
                    <option value="Brazilian">Brazilian</option>
                    <option value="Children Music">Children Music</option>
                    <option value="Christian &amp; Gospel">Christian &amp; Gospel</option>
                    <option value="Classical">Classical</option>
                    <option value="Country">Country</option>
                    <option value="Dance">Dance</option>
                    <option value="Easy Listening">Easy Listening</option>
                    <option value="Electronic">Electronic</option>
                    <option value="Folk">Folk</option>
                    <option value="Hip Hop/Rap">Hip Hop/Rap</option>
                    <option value="Indie">Indie</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Latin">Latin</option>
                    <option value="Metal">Metal</option>
                    <option value="Pop">Pop</option>
                    <option value="R&amp;B/Soul">R&amp;B/Soul</option>
                    <option value="Reggae">Reggae</option>
                    <option value="Relaxation">Relaxation</option>
                    <option value="Rock">Rock</option>
                    <option value="Various">Various</option>
                    <option value="World Music / Regional Folklore">World Music / Regional Folklore</option>
                </select>
            </div> --}}

            <div class="form-group">
                <label for="wav">Preview Track 16 BIT WAV 44,1 HZ (Require Link Google Drive)</label>
                <br>
                <label for="wav"><span style="color: red;">*</span>Note Expected to open request access if Google
                    Drive link given</label>
                <input type="url" class="form-control form-control-lg" id="mp3"
                    placeholder="https://drive.google.com/file/d/example/view?usp=sharing">
            </div>
            <div class="form-group">
                <label for="" class="lable-form-check">Collaboration?</label>
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
                <div class="form-row form-row-colab">
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
                <label for="" class="lable-form-check">On Roster (Project)</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="on-roaster" id="confirm-yes-roaster" value="yes">
                    <label class="form-check-label" for="confirm-yes-roaster">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="on-roaster" id="confirm-no-roaster" value="no">
                    <label class="form-check-label" for="confirm-no-roaster">
                        NO
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="lable-form-check">Explicit?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="explicit" id="confirm-yes-explicit" value="yes">
                    <label class="form-check-label" for="confirm-yes-explicit">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="explicit" id="confirm-no-explicit" value="no">
                    <label class="form-check-label" for="confirm-no-explicit">
                        NO
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="">Choose Your Logo Stage Name</label>
                <br>
                <label for=""><span style="color: red;">*</span>Note: max size 2MB</label>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" accept="image/*" name="filename">
                    <label class="custom-file-label form-control-lg" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-check agrement-check">
                <input type="checkbox" class="form-check-input" id="check-agree">
                <label class="form-check-label" for="check-agree">Agree our <a data-toggle="modal"
                        data-target="#modalTerm" href="">terms and conditions</a></label>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalTerm" tabindex="-1" role="dialog" aria-labelledby="modalTermCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="color:black;" id="modalTermLongTitle">GVM terms and
                                conditions</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body termModal">
                            <p>
                                Some things that MUST be considered, when you want to send a Demo Submission to GROW
                                VIBES MUSIC, including:
                                <ol>
                                    <li> Your tracks are NOT released under Creative Commons or similar free / open
                                        licenses
                                    </li>
                                    <li>
                                        Your track NOT contain Public Domain Cash or Public Domain Composition
                                    </li>
                                    <li>
                                        Your tracks NOT have sound from recorded video games or TV shows
                                    </li>
                                    <li>
                                        Your tracks NOT contain any existing YouTube video recordings that are not
                                        exclusively controlled by you
                                    </li>
                                    <li>
                                        You are 100% in control of your track
                                    </li>
                                    <li>
                                        Your track may NOT be under the auspices of another company, such as
                                        TuneCore, CD
                                        BABY, Ditto Music or others.
                                    </li>
                                    <li>
                                        Your track does NOT contain Content such as beats / instrumentals which are
                                        available on behalf of third parties.
                                    </li>
                                    <li>
                                        Your tracks are NOT purchased from or available for purchase on any Royalty
                                        Free
                                        Websites or music databases such as Audio Jungle, Theme Forest, Audio Micro,
                                        etc.
                                    </li>
                                </ol>
                                <br />
                                <b>* All forms of copyright responsibility that involve the intellectual property of
                                    track. Label, Distributor and Youtube Publishing are not responsible *</b>
                                <br />
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

Genre:
Explicit: Yes / No
*Choose
Metadata Language:
Duration in Minutes:
Audio Presentation:
Choose between: * CD Master, Dolby Surround 5.1, Dolby Surround 7.1, DTS Surround 5.1, Mono, MQS Mono, MQS Stereo,
Specialized Master, Stereo, Vinyl Master *
Bundled Only: Yes / No
Lyric Or No:
@endsection

{{-- <select id="type">
    <option value="item0">--Select an Item--</option>
    <option value="item1">item1</option>
    <option value="item2">item2</option>
    <option value="item3">item3</option>
</select>

<select id="size">
    <option value="">-- select one -- </option>
</select>

<script>
    $(document).ready(function () {
    $("#type").change(function () {
        var val = $(this).val();
        if (val == "item1") {
            $("#size").html("<option value='test'>item1: test 1</option><option value='test2'>item1: test 2</option>");
        } else if (val == "item2") {
            $("#size").html("<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>");
        } else if (val == "item3") {
            $("#size").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
        } else if (val == "item0") {
            $("#size").html("<option value=''>--select one--</option>");
        }
    });
});
</script> --}}