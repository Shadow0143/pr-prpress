@extends('layouts.frontend.app')

@section('title')
<title>A Source For Every Brand Story | PR And Press | prandpress</title>
@endsection

@section('content')
<!--------------banner------------------>
<div class="banner" id="banner_box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="banner_text">
                    <h1>A Source for Every Brand Story</h1>
                    <p>We strengthen communication between PR agencies, organizations and the Media</p>
                    <div class="banner_btn">
                        <a href="#" class="journalist_btn">I'm A Journalist</a>
                        <a href="#" class="professional_btn ml-2">I'm A PR Professional</a>
                    </div>
                </div>
                <div class="banner_img">
                    <img src="{{asset('assets/image/banner.png')}}" alt="banner">
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------text_section------------------>
<div class="container">
    <div class="row mt-5">
        <div class="text_section col-md-6 col-sm-6">
            <h3>SIMPLE, CLEAN AND MODERN DESIGN.</h3>
            <p>Lorem ipsum dolor sit amet, ea eum labitur scripserit, illum complectitur deterruisset at pro. Odio
                quaeque reformidans est eu, expetendis intellegebat has ut, viderer invenire ut his. Has molestie
                percipit an. Falli volumus efficiantur
                sed id, ad vel noster propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea. No soleat
                fabulas prodesset vel, ut quo solum dicunt. Nec et amet vidisse mentitum. Cibo mutat nulla ei eam.
            </p>
        </div>
        <div class="text_img col-md-6 col-sm-6">
            <img src="{{asset('assets/image/img.png')}}" alt="img">
        </div>
    </div>
    <div class="row mt-5">
        <div class="text_section col-md-6 col-sm-6">
            <h3>FULLY RESPONSIVE.</h3>
            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi enim tellus
                ultrices elit, amet consequat enim elit noneas sit amet luctu. Quis nostrum exercitationem ullam
                corporis suscipit laboriosam.Our library
                is continually refreshed with the latest on web technology so you'll never fall behind. Quis nostrum
                exercitationem ullam corporis suscipit laboriosam.</p>
        </div>
        <div class="text_img col-md-6 col-sm-6">
            <img src="{{asset('assets/image/img2.png')}}" alt="img2">
        </div>
    </div>
    <div class="row mt-5">
        <div class="text_section col-md-6 col-sm-6">
            <h3>CROSS-BROWSER COMPATIBLE.</h3>
            <p>Lorem ipsum dolor sit amet, ea eum labitur scripserit, illum complectitur deterruisset at pro. Odio
                quaeque reformidans est eu, expetendis intellegebat has ut, viderer invenire ut his. Has molestie
                percipit an. Falli volumus efficiantur
                sed id, ad vel noster propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea. No soleat
                fabulas prodesset vel, ut quo solum dicunt. Nec et amet vidisse mentitum. Cibo mutat nulla ei eam.
            </p>
        </div>
        <div class="text_img col-md-6 col-sm-6">
            <img src="{{asset('assets/image/img3.png')}}" alt="img3">
        </div>
    </div>
    <div class="row mt-5">
        <div class="text_section col-md-6 col-sm-6">
            <h3>VIDEO SUPPORT.</h3>
            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi enim tellus
                ultrices elit, amet consequat enim elit noneas sit amet luctu. Quis nostrum exercitationem ullam
                corporis suscipit laboriosam. No soleat
                fabulas prodesset vel, ut quo solum dicunt. Nec et amet vidisse mentitum. Cibo mutat nulla ei eam.
            </p>
        </div>
        <div class="text_img text_video col-md-6 col-sm-6">
            <iframe src="https://player.vimeo.com/video/14592941?h=7622fea906&color=7bd2fc&title=0&byline=0&portrait=0"
                width="550" height="250" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection