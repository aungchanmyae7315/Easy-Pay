<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="{{asset('backend/css/main.css')}}" rel="stylesheet"></head>
<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css')}}" rel="stylesheet"></head>
<link href="{{asset('https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"></head>
<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
@yield('css')
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('backend.layouts.header')   
        
             <div class="app-main">
               @include('backend.layouts.sidebar')   
                <div class="app-main__outer">
                    <div class="app-main__inner">
                       @yield('content')    
                       
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <span>Copyright {{date('Y')}}. All right reserved by Magic Pay</span>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <span>Developed by Aung Chan Myae</span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    
            </div>
         
        </div>
    </div>
<script type="text/javascript" src="{{asset('backend/js/main.js')}}"></script></body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
{{-- laravel javascript validation --}}
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{{-- --Sweet alert 2-- --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function() {
        // csrf toke alway push with ajax
        let token = document.head.querySelector('meta[name="csrf-token"]')
        if(token) {
            $.ajaxSetup({
                headers: {
                    'x-CSRF_TOKEN':token.content
                }
            })
        }
        // csrf token end
        $('.back-btn').on('click',function() {
            window.history.go(-1);
            return false;
        })
    });
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })
            @if(session('create'))
            Toast.fire({
            icon: 'success',
            title: '{{session('create')}}'
            });
            @endif
            @if(session('update'))
            Toast.fire({
            icon: 'success',
            title: '{{session('update')}}'
            });
            @endif
</script>
@yield('scripts')
</body>
</html>
