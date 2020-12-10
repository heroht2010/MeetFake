@extends('home.layouts.app')

@section('title','VKU-meet Nền tảng dành riêng cho nhà trường')

@section('content')

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/fontani.css">
    <body class="tQj5Y ghyPEc IqBfM ecJEib EWZcud EIlDfe cjGgHb d8Etdd LcUz9d uOat3d" style="bottom: auto; right: auto; width: auto; height: 100%; min-height: 625px;background: white">
        <div class="pGxpHc">
            <header class="gb_ta gb_1a gb_4e gb_3d" ng-non-bindable="" id="gb" role="banner" style="background-color:rgba(255,255,255,1)">
                <div class="gb_Vd gb_fe gb_5d gb_4d">
                    <div class="gb_Ud gb_2c">
                        <div class="gb_sc">
                            <div class="gb_tc">
                                <a class="gb_we gb_uc gb_ue" aria-label="Meet" href="?authuser=0" title="Google Meet" id="sdgBod">
                                    <img class="gb_va" src="https://www.gstatic.com/meet/google_meet_horizontal_wordmark_2020q4_1x_icon_124_40_2373e79660dabbf194273d27aa7ee1f5.png" srcset="https://www.gstatic.com/meet/google_meet_horizontal_wordmark_2020q4_1x_icon_124_40_2373e79660dabbf194273d27aa7ee1f5.png 1x, https://www.gstatic.com/meet/google_meet_horizontal_wordmark_2020q4_2x_icon_124_40_292e71bcb52a56e2a9005164118f183b.png 2x " alt="" aria-hidden="true" style="width:124px;height:40px" data-iml="482.4899999948684" data-atf="true">
                                    <span class="gb_he gb_1c">Meet</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="gb_Ud gb_8d gb_4d gb_1e gb_Qe gb_We">
                        <div class="gb_De gb_Be">
                            <div class="gb_Ie gb_He gb_Ke">
                                <div class="ja6eZd" jsname="GUMDyc">
                                    <div role="button" class="U26fgb JRtysb WzwrXb LAtdzd" jscontroller="iSvg6e" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;;keydown:I481le;mouseover:.CLIENT" jsshadow="" aria-label="Hỗ trợ" aria-disabled="false" tabindex="0" aria-haspopup="true" aria-expanded="false" data-alignright="true" data-google-tooltip="Hỗ trợ">
                                        <div class="NWlf3e MbhUzd" jsname="ksKsZd"></div>
                                        <span jsslot="" class="MhXXcc oJeWuf">
                                            <span class="Lw7GHd snByac">
                                                <i class="google-material-icons VfPpkd-kBDsod" aria-hidden="true">help_outline</i>
                                            </span>
                                        </span>
                                    </div>
                                    <div jscontroller="ibH2Te" jsaction="JIbuQc:hy3PKd">
                                        <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mouseover:.CLIENT" aria-label="Phản hồi" data-google-tooltip="Phản hồi">
                                            <i class="google-material-icons VfPpkd-kBDsod" aria-hidden="true">feedback</i>
                                        </button>
                                    </div>
                                    <div jscontroller="yljF5" jsaction="JIbuQc:LDHNBf" jsmodel="iFpfF">
                                        <button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mouseover:.CLIENT" aria-label="Cài đặt" data-google-tooltip="Cài đặt">
                                            <i class="google-material-icons VfPpkd-kBDsod" aria-hidden="true">settings</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gb_9d gb_Xa gb_Ud gb_ae" ng-non-bindable="" data-ogsr-up="">
                        <div class="gb_5e">
                            <div class="gb_Sa gb_gd gb_Ig gb_i gb_Wf">
                                <div class="gb_Vf gb_Wa gb_Ig gb_i">

                                    @if(session('name') && session('avartar'))
                                    <a class="gb_D gb_Ra gb_i" aria-label="Tài khoản Google: {{session('name')}} ({{session('email')}})" role="button" tabindex="0" aria-expanded="false">
                                        <img class="gb_Ia gbii" src="{{session('avartar')}}" alt="" aria-hidden="true" data-noaft="">
                                    </a>
                                    @else
                                    <a href="{{route('login')}}">
                                        <button class="glue-button">
                                            <span class="cta_text">Đăng nhập</span>
                                        </button>
                                    </a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <c-wiz jsrenderer="EjWGvb" class="zQTmif SSPGKf" data-ogpc="" jsdata="deferred-i2" data-p="%.@.null,false,true]" jscontroller="zV9FOd" jsaction="rcuQ6b:npT2md;" jsname="a9kxte" data-node-index="0;0" jsmodel="hc6Ubd iFpfF" view="">
            <div class="T4LgNb" jsname="a9kxte">
                <div class="VjFXz"></div>
                <div class="S3RDod">
                    <div class="ggt41e">
                        <div class="Qcuypc">
                            <div class="YpQfNc">Cuộc họp video chất lượng. Giờ đây miễn phí cho tất cả mọi người.</div>
                            <div class="rH9mRb">Chúng tôi đã thiết kế lại Google&nbsp;Meet — dịch vụ tổ chức cuộc họp kinh doanh với độ bảo mật cao — để cung cấp miễn phí cho mọi người.</div>
                            <div class="Ez8Iud" jsname="FWIhdb" jscontroller="cleqRb" jsaction="JIbuQc:oRCNsf(r9ERUc); input:Bd1UWd(JaBLbe);AHmuwe:Bd1UWd(JaBLbe);O22p3e:U01RBb(JaBLbe);FzgWvd:eUYW1b; focusin:iR7IDc(JXzze); focusout:U01RBb(JaBLbe); keyup:peVwdb(JaBLbe);" data-is-dasher="false">
                                <div class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jscontroller="wg1P6b" jsaction="JIbuQc:JIbuQc(WjL7X); keydown:I481le(WjL7X);iFFCZc:Y0y4c;Rld2oe:gDkf4c" jsname="JXzze">
                                    <div jsname="WjL7X">
                                        <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true">

                                            @if(session('avartar') && session('name'))
                                            <a href="{{route('ConferenceRoom')}}?r={{Str::random(11)}}">
                                            @else
                                            <a href="{{route('login')}}">
                                            @endif
                                                <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe cjtUbb Dg7t5c" style="background: #3C1A5B" jscontroller="soHxf"  autofocus="autofocus">
                                                    <div class="VfPpkd-Jh9lGc"></div>
                                                    <i class="google-material-icons VfPpkd-kBDsod" aria-hidden="true">video_call</i>
                                                    <span jsname="V67aGc" class="VfPpkd-vQzf8d">Cuộc họp mới</span>
                                                    <div class="VfPpkd-RLmnJb"></div>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="KOM0mb">
                                    <div jscontroller="EF8pe" jsshadow="" class="Ufn6O FN9m1d AmoCp" jsname="JaBLbe">
                                        <label class="VfPpkd-fmcmS-yrriRe VfPpkd-fmcmS-yrriRe-OWXEXe-mWPk3d VfPpkd-ksKsZd-mWPk3d VfPpkd-fmcmS-yrriRe-OWXEXe-di8rgd-V67aGc VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c cfWmIb orScbe XfeBDf h7XSnb" jsaction="click:cOuCgd; keydown:I481le;" jsname="vhZMvf">
                                            <span jscontroller="bTi8wc" class="VfPpkd-NSFCdd-i5vt6e VfPpkd-NSFCdd-i5vt6e-OWXEXe-di8rgd-V67aGc" jsname="B9mpmd">
                                                <span class="VfPpkd-NSFCdd-Brv4Fb"></span>
                                                <span class="VfPpkd-NSFCdd-MpmGFe"></span>
                                            </span>
                                            <i class="material-icons-extended VfPpkd-fmcmS-TvZj5c VfPpkd-fmcmS-TvZj5c-OWXEXe-M1Soyc" aria-hidden="true" data-icon-position="M1Soyc">keyboard</i>
                                            <input type="text" value="" autocomplete="off" id="i3" jsname="YPqjbf" class="VfPpkd-fmcmS-wGMbrd B5oKfd" jsaction="focus:AHmuwe;blur:O22p3e;input:YPqjbf; mousedown:UX7yZ; mouseup:lbsD7e; pointerdown:QJflP; pointerup:HxTfMe; touchstart:p6p2H; touchend:yfqBxc;" aria-controls="i4" aria-describedby="i4" placeholder="Nhập mã phòng họp" spellcheck="false" maxlength="50">
                                        </label>
                                        <div class="VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc">
                                            <p id="i4" class="VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS" jscontroller="eM1C7d" jsname="xl1FBb" aria-hidden="true"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Vctqkd"></div>
                            <div class="bpZLge">
                                <span class="GNpa5c" jscontroller="flbTs" jsaction="click:ndJ4N" data-url="https://meet.google.com/about/redirect/landing-learn-more/?hl=vi" data-impression="6565">
                                    <a href="https://meet.google.com/about/redirect/landing-learn-more/?hl=vi" target="_blank" rel="noopener" class="IClWHc" style="color: #3C1A5B">Tìm hiểu thêm</a> về Google Meet</span>
                            </div>
                        </div>
                        <div class="C9bDzc">
                            <c-wiz jsrenderer="Y3jsqc" class="lpxrTc" jsshadow="" jsdata="deferred-i5" data-p="%.@.null,true]" jscontroller="EOviUb" jsaction="rcuQ6b:npT2md;vjggXe:B2BiJ;" jsname="zfELwd" data-node-index="1;0" jsmodel="hc6Ubd">
                                <c-wiz jsrenderer="nq7wmb" jsshadow="" jsdata="deferred-i6" data-p="%.@.null,true]" data-node-index="1;0" jsmodel="hc6Ubd">
                                    <div jscontroller="xNBlqd" jsaction="rcuQ6b:rcuQ6b; keydown:tk0cN;XQGNIb:b0Ch9;H4rTVe:B2BiJ;QTdcJc:ovQTub;JtBmsd:lUFH9b;" data-present-mode="false">
                                        <div class="VdLOD yUoCvf fXx9Lc" jsname="Jup3Tc">
                                            <div class=" FIvd3e">
                                                <div jsname="HKq5re" class="XdaCre">
                                                    <div class="LSNDte">
                                                        <img class="se63he" src="https://cnet1.cbsistatic.com/img/PtuqepXx_bJxG3bcJTpVsK1zXm8=/940x0/2020/04/22/a87b0552-7215-4e0e-9370-8a3b7273519d/tiled-view-4x4.png" alt="Hình ảnh mọi người tham gia cuộc họp trên Google&nbsp;Meet" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </c-wiz>
                            </c-wiz>
                        </div>
                    </div>
                </div>
            </div>
        </c-wiz>
    </body>
@endsection
