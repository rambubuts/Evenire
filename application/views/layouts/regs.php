<html>

<head>
    <base href="/demos/angular-admin-templates/monster-angular/main/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Carousel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link rel="stylesheet" href="styles.2666fa5fda542043fc1a.css">
    <style></style>
    <script charset="utf-8" src="4.056657d3a2adc7868d88.js"></script>
    <script charset="utf-8" src="common.b44b59e9468a30e820ad.js"></script>
    <script charset="utf-8" src="13.46f660867791499e23fe.js"></script>
    <style>
        .main-container[_ngcontent-c1] {
            margin-top: 60px;
            margin-left: 235px;
            padding: 15px;
            -ms-overflow-x: hidden;
            overflow-x: hidden;
            overflow-y: scroll;
            position: relative;
            overflow: hidden
        }
        
        @media screen and (max-width:992px) {
            .main-container[_ngcontent-c1] {
                margin-left: 0!important
            }
        }
    </style>
    <style>
        [_nghost-c2] {
            font-size: 1rem
        }
        
        [_nghost-c2] * {
            box-sizing: border-box
        }
        
        [_nghost-c2] button,
        [_nghost-c2] input,
        [_nghost-c2] optgroup,
        [_nghost-c2] select,
        [_nghost-c2] textarea {
            color: inherit;
            font: inherit;
            margin: 0
        }
        
        [_nghost-c2] table {
            line-height: 1.5em;
            border-collapse: collapse;
            border-spacing: 0;
            display: table;
            width: 100%;
            max-width: 100%;
            overflow: auto;
            word-break: normal;
            word-break: keep-all
        }
        
        [_nghost-c2] table tr th {
            font-weight: 700
        }
        
        [_nghost-c2] table tr section {
            font-size: .75em;
            font-weight: 700
        }
        
        [_nghost-c2] table tr td,
        [_nghost-c2] table tr th {
            font-size: .875em;
            margin: 0;
            padding: .5em 1em
        }
        
        [_nghost-c2] a {
            color: #1e6bb8;
            text-decoration: none
        }
        
        [_nghost-c2] a:hover {
            text-decoration: underline
        }
    </style>
    <style>
        [_nghost-c3] .ng2-smart-row.selected[_ngcontent-c3] {
            background: rgba(0, 0, 0, .05)
        }
        
        [_nghost-c3] .ng2-smart-row[_ngcontent-c3] .ng2-smart-actions.ng2-smart-action-multiple-select[_ngcontent-c3] {
            text-align: center
        }
    </style>
    <style>
        .ng2-smart-pagination[_ngcontent-c4] {
            display: inline-flex;
            font-size: .875em;
            padding: 0
        }
        
        .ng2-smart-pagination[_ngcontent-c4] .sr-only[_ngcontent-c4] {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }
        
        .ng2-smart-pagination[_ngcontent-c4] .ng2-smart-page-item[_ngcontent-c4] {
            display: inline
        }
        
        .ng2-smart-pagination[_ngcontent-c4] .page-link-next[_ngcontent-c4],
        .ng2-smart-pagination[_ngcontent-c4] .page-link-prev[_ngcontent-c4] {
            font-size: 10px
        }
        
        [_nghost-c4] {
            display: flex;
            justify-content: space-between
        }
        
        [_nghost-c4] select[_ngcontent-c4] {
            margin: 1rem 0 1rem 1rem
        }
        
        [_nghost-c4] label[_ngcontent-c4] {
            margin: 1rem 0 1rem 1rem;
            line-height: 2.5rem
        }
    </style>
    <style>
        a.sort.asc[_ngcontent-c6],
        a.sort.desc[_ngcontent-c6] {
            font-weight: 700
        }
        
        a.sort.asc[_ngcontent-c6]::after,
        a.sort.desc[_ngcontent-c6]::after {
            content: '';
            display: inline-block;
            width: 0;
            height: 0;
            border-bottom: 4px solid rgba(0, 0, 0, .3);
            border-top: 4px solid transparent;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            margin-bottom: 2px
        }
        
        a.sort.desc[_ngcontent-c6]::after {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
            margin-bottom: -2px
        }
    </style>
    <style>
        [_nghost-c5] .ng2-smart-filter[_ngcontent-c5] input,
        [_nghost-c5] .ng2-smart-filter[_ngcontent-c5] select {
            width: 100%;
            line-height: normal;
            padding: .375em .75em;
            font-weight: 400
        }
        
        [_nghost-c5] .ng2-smart-filter[_ngcontent-c5] input[type=search] {
            box-sizing: inherit
        }
        
        [_nghost-c5] .ng2-smart-filter[_ngcontent-c5] .completer-dropdown-holder {
            font-weight: 400
        }
        
        [_nghost-c5] .ng2-smart-filter[_ngcontent-c5] a {
            font-weight: 400
        }
    </style>
    <script charset="utf-8" src="10.d2c2bf45d596223b5f54.js"></script>
    <style>
        .custom-day[_ngcontent-c7] {
            text-align: center;
            padding: 0.185rem 0.25rem;
            display: inline-block;
            height: 2rem;
            width: 2rem;
        }
        
        .custom-day.focused[_ngcontent-c7] {
            background-color: #e6e6e6;
        }
        
        .custom-day.range[_ngcontent-c7],
        .custom-day[_ngcontent-c7]:hover {
            background-color: #0275d8;
            color: white;
        }
        
        .faded[_ngcontent-c7] {
            opacity: 0.5;
        }
        
        .weekend[_ngcontent-c7] {
            background-color: #242a33;
            border-radius: 1rem;
            color: white;
        }
        
        .hidden[_ngcontent-c7] {
            display: none;
        }
    </style>
    <style>
        ngb-datepicker {
            border: 1px solid #dfdfdf;
            border-radius: .25rem;
            display: inline-block
        }
        
        .ngb-dp-month {
            pointer-events: none
        }
        
        .ngb-dp-header {
            border-bottom: 0;
            border-radius: .25rem .25rem 0 0;
            padding-top: .25rem
        }
        
        ngb-datepicker-month-view {
            pointer-events: auto
        }
        
        .ngb-dp-month-name {
            font-size: larger;
            height: 2rem;
            line-height: 2rem;
            text-align: center
        }
        
        .ngb-dp-month+.ngb-dp-month>.ngb-dp-month-name,
        .ngb-dp-month+.ngb-dp-month>ngb-datepicker-month-view>.ngb-dp-week {
            padding-left: 1rem
        }
        
        .ngb-dp-month:last-child .ngb-dp-week {
            padding-right: .25rem
        }
        
        .ngb-dp-month:first-child .ngb-dp-week {
            padding-left: .25rem
        }
        
        .ngb-dp-month>ngb-datepicker-month-view>.ngb-dp-week:last-child {
            padding-bottom: .25rem
        }
        
        .ngb-dp-months {
            display: -ms-flexbox;
            display: flex
        }
    </style>
    <style>
        ngb-datepicker-navigation {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }
        
        .ngb-dp-navigation-chevron {
            border-style: solid;
            border-width: .2em .2em 0 0;
            display: inline-block;
            width: .75em;
            height: .75em;
            margin-left: .25em;
            margin-right: .15em;
            -webkit-transform: rotate(-135deg);
            transform: rotate(-135deg)
        }
        
        .right .ngb-dp-navigation-chevron {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            margin-left: .15em;
            margin-right: .25em
        }
        
        .ngb-dp-arrow {
            display: -ms-flexbox;
            display: flex;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding-right: 0;
            padding-left: 0;
            margin: 0;
            width: 2rem;
            height: 2rem
        }
        
        .ngb-dp-arrow.right {
            -ms-flex-pack: end;
            justify-content: flex-end
        }
        
        .ngb-dp-arrow-btn {
            padding: 0 .25rem;
            margin: 0 .5rem;
            border: none;
            background-color: transparent;
            z-index: 1
        }
        
        .ngb-dp-arrow-btn:focus {
            outline: auto 1px
        }
        
        .ngb-dp-month-name {
            font-size: larger;
            height: 2rem;
            line-height: 2rem;
            text-align: center
        }
        
        .ngb-dp-navigation-select {
            display: -ms-flexbox;
            display: flex;
            -ms-flex: 1 1 9rem;
            flex: 1 1 9rem
        }
    </style>
    <style>
        ngb-datepicker-month-view {
            display: block
        }
        
        .ngb-dp-week-number,
        .ngb-dp-weekday {
            line-height: 2rem;
            text-align: center;
            font-style: italic
        }
        
        .ngb-dp-weekday {
            color: #5bc0de;
            color: var(--info)
        }
        
        .ngb-dp-week {
            border-radius: .25rem;
            display: -ms-flexbox;
            display: flex
        }
        
        .ngb-dp-weekdays {
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0
        }
        
        .ngb-dp-day,
        .ngb-dp-week-number,
        .ngb-dp-weekday {
            width: 2rem;
            height: 2rem
        }
        
        .ngb-dp-day {
            cursor: pointer
        }
        
        .ngb-dp-day.disabled,
        .ngb-dp-day.hidden {
            cursor: default
        }
    </style>
    <style>
        ngb-datepicker-navigation-select>.custom-select {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 0 .5rem;
            font-size: .875rem;
            height: 1.85rem
        }
    </style>
    <style>
        [ngbDatepickerDayView] {
            text-align: center;
            width: 2rem;
            height: 2rem;
            line-height: 2rem;
            border-radius: .25rem;
            background: 0 0
        }
        
        [ngbDatepickerDayView].outside {
            opacity: .5
        }
    </style>
    <script charset="utf-8" src="12.edd1c98e2619a2702a9b.js"></script>
    <style>
        .form-control[_ngcontent-c14] {
            width: 300px;
            display: inline;
        }
    </style>
    <script charset="utf-8" src="3.32b83c4c3a5826c8e76c.js"></script>
    <script charset="utf-8" src="16.6227214a1440f8d754cb.js"></script>
    <style>
        .star[_ngcontent-c15] {
            font-size: 1.5rem;
            color: #b0c4de;
        }
        
        .filled[_ngcontent-c15] {
            color: #1e90ff;
        }
        
        .heart[_ngcontent-c15] {
            position: relative;
            display: inline-block;
            font-size: 3rem;
            color: #d3d3d3;
        }
        
        .full[_ngcontent-c15] {
            color: red;
        }
        
        .half[_ngcontent-c15] {
            position: absolute;
            display: inline-block;
            overflow: hidden;
            color: red;
        }
    </style>
    <script charset="utf-8" src="20.b3d698193b482ce64b82.js"></script>
</head>

<body class="fix-header card-no-border fix-sidebar pace-done mini-sidebar">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <app-root _nghost-c0="" ng-version="7.1.4">
        <router-outlet _ngcontent-c0="">
            <app-spinner _ngcontent-c0="">
                <!---->
            </app-spinner>
        </router-outlet>
        <app-blank-layout>
            <router-outlet></router-outlet>
            <app-signup _nghost-c16="">
                <div _ngcontent-c16="" class="login-register" style="background-image:url(assets/images/background/login-register.jpg);">
                    <div _ngcontent-c16="" class="login-box card">
                        <div _ngcontent-c16="" class="card-body">
                            <form _ngcontent-c16="" class="form-horizontal form-material" id="loginform">
                                <h3 _ngcontent-c16="" class="box-title m-b-20">Sign Up</h3>
                                <div _ngcontent-c16="" class="form-group">
                                    <div _ngcontent-c16="" class="col-xs-12">
                                        <input _ngcontent-c16="" class="form-control" placeholder="Name" required="" type="text">
                                    </div>
                                </div>
                                <div _ngcontent-c16="" class="form-group ">
                                    <div _ngcontent-c16="" class="col-xs-12">
                                        <input _ngcontent-c16="" class="form-control" placeholder="Email" required="" type="text">
                                    </div>
                                </div>
                                <div _ngcontent-c16="" class="form-group ">
                                    <div _ngcontent-c16="" class="col-xs-12">
                                        <input _ngcontent-c16="" class="form-control" placeholder="Password" required="" type="password">
                                    </div>
                                </div>
                                <div _ngcontent-c16="" class="form-group">
                                    <div _ngcontent-c16="" class="col-xs-12">
                                        <input _ngcontent-c16="" class="form-control" placeholder="Confirm Password" required="" type="password">
                                    </div>
                                </div>
                                <div _ngcontent-c16="" class="form-group row">
                                    <div _ngcontent-c16="" class="col-md-12">
                                        <div _ngcontent-c16="" class="checkbox checkbox-success p-t-0">
                                            <input _ngcontent-c16="" class="filled-in chk-col-light-blue" id="checkbox-signup" required="" type="checkbox">
                                            <label _ngcontent-c16="" for="checkbox-signup"> I agree to all <a _ngcontent-c16="" href="javascript:void(0)">Terms</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div _ngcontent-c16="" class="form-group text-center p-b-20">
                                    <div _ngcontent-c16="" class="col-xs-12"><a _ngcontent-c16="" class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" href="/demos/angular-admin-templates/monster-angular/main/authentication/login">Sign Up</a></div>
                                </div>
                                <div _ngcontent-c16="" class="form-group m-b-0">
                                    <div _ngcontent-c16="" class="col-sm-12 text-center"> Already have an account? <a _ngcontent-c16="" class="text-info m-l-5" href="/demos/angular-admin-templates/monster-angular/main/authentication/login"><b _ngcontent-c16="">Sign In</b></a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </app-signup>
        </app-blank-layout>
    </app-root>

    <script type="text/javascript" src="runtime.b7b98b7f0f122919001d.js"></script>
    <script type="text/javascript" src="polyfills.153031e5bf3321471ff3.js"></script>
    <script type="text/javascript" src="scripts.18eb172250c034e8b17e.js"></script>
    <script type="text/javascript" src="main.e0928c43f0b40369f5fd.js"></script>

</body>

</html>