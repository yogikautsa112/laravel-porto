@extends('master')
@section('about')
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="images/pic gueh.jpg" alt="">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>My name is Yogi Kautsar Alnandeta, 15 y.o , im a student of Wikrama Vacational highSchool, my hobby is playing VolleyBall, im really interest to study Java Script and other programing language </p>

                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skilss')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skilss">
                    <ul>
                        <li><span>UI/UX</span><br>Designing Web interface</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li>Still Study</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2014-2019</span><br>SDIT Raudhlatul Jannah</li>
                        <li><span>2020-2023</span><br>SMP Negeri 1 Ciawi</li>
                        <li><span>2023-now</span><br>SMK Wikrama</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection