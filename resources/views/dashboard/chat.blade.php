@extends('dashboard.layout.master')

@section('pagetitle', 'چت')

<!-- Page Loader -->


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">چت</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">برنامه ها</a>
                            </li>
                            <li class="breadcrumb-item active">چت</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="body">
                            <div id="plist" class="people-list">
                                <div class="form-line m-b-15">
                                    <input type="text" class="form-control" placeholder="جستجو...">
                                </div>
                                <div class="tab-content">
                                    <div id="chat_user">
                                        <ul class="chat-list list-unstyled m-b-0">
                                            <li class="clearfix active">
                                                <img src="{{asset('/images/dashboard/user1.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons offline">fiber_manual_record</i>
                                                        7 دقیقه پیش
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix ">
                                                <img src="{{asset('/images/dashboard/user2.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons offline">fiber_manual_record</i>
                                                        آنلاین
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user3.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons online">fiber_manual_record</i>
                                                        آنلاین
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user4.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons online">fiber_manual_record</i>
                                                        آنلاین
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user5.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons online">fiber_manual_record</i>
                                                        آنلاین
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user6.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons offline">fiber_manual_record</i>
                                                        30 دقیقه پیش
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user7.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons offline">fiber_manual_record</i>
                                                        30 دقیقه پیش
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user8.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons online">fiber_manual_record</i>
                                                        آنلاین
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user3.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons online">fiber_manual_record</i>
                                                        آنلاین
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user4.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons online">fiber_manual_record</i>
                                                        آنلاین
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user5.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons online">fiber_manual_record</i>
                                                        آنلاین
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <img src="{{asset('/images/dashboard/user9.jpg')}}" alt="avatar">
                                                <div class="about">
                                                    <div class="name">آرش خادملو</div>
                                                    <div class="status">
                                                        <i class="material-icons offline">fiber_manual_record</i>
                                                        از 28 اکتبر آفلاین
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <img src="{{asset('/images/dashboard/user2.jpg')}}" alt="avatar">
                                <div class="chat-about">
                                    <div class="chat-with">آرش خادملو</div>
                                    <div class="chat-num-messages">2 پیام جدید</div>
                                </div>
                            </div>
                            <div class="chat-history" id="chat-conversation">
                                <ul>
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time">10:10 صبح، امروز
                                            </span>
                                            &nbsp; &nbsp;
                                            <span class="message-data-name">آرش</span>
                                        </div>
                                        <div class="message other-message float-right"> سلام رابرت، چطور؟ کار شما چگونه پیش
                                            می رود؟ </div>
                                    </li>
                                    <li>
                                        <div class="message-data">
                                            <span class="message-data-name">رابرت </span>
                                            <span class="message-data-time">10:12 صبح، امروز</span>
                                        </div>
                                        <div class="message my-message">
                                            <p>خوبه. ما تقریبا تمام وظایف ما توسط مدیر ما تمام شده است.</p>
                                            <div class="row">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-data">
                                            <span class="message-data-name">رابرت </span>
                                            <span class="message-data-time">10:12 صبح، امروز</span>
                                        </div>
                                        <div class="message my-message">
                                            <p>چطور امروز احساس می کنید؟ درباره تعطیلات چیست؟.</p>
                                            <div class="row">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time">10:10 صبح، امروز
                                            </span>
                                            &nbsp; &nbsp;
                                            <span class="message-data-name">آرش</span>
                                        </div>
                                        <div class="message other-message float-right"> من خوب هستیم، برای آخر هفته های
                                            بعدی فکر می کنیم.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="متن را اینجا وارد کنید ..">
                                    </div>
                                </div>
                                <div class="chat-upload">
                                    <button type="button"
                                        class="btn btn-circle waves-effect waves-circle waves-float bg-deep-orange">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-circle waves-effect waves-circle waves-float bg-deep-orange">
                                        <i class="material-icons">insert_emoticon</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@push('scripts')
<script src="{{asset('/js/dashboard/app.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('/js/dashboard/admin.js')}}"></script>
    <script src="{{asset('/js/dashboard/chat.js')}}"></script>
@endpush
