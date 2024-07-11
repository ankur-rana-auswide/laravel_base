<!DOCTYPE html>

<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{asset('assets/portal_img/fav.png')}}">
    <title>Supreme Kitchens | @yield('title')</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/all.min.css')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.output.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/custom_style.css')}}">
    <link href="{{asset('assets/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('tailwind_cdn.js')}}"></script>
    <!-- <script src="https://tailwindcss.com/docs/installation"></script> -->
    <script src="{{asset('assets/js/init-alpine.js')}}"></script>
    <script src="{{asset('assets/js/alpine.min.js')}}"></script>
    <script src="{{asset('assets/js/focus-trap.js')}}"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    width: {
                        '295': '18.438rem',
                    },
                    colors: {
                        '#808080': '#000000;',
                        '#1D1D1D': '#1D1D1D',
                        '#888888': '#888888',
                        '#D1D5DB': '#D1D5DB',
                        '#F8F6F6': '#F8F6F6',
                        '#4F46E5': '#4F46E5',
                        '#9CA3AF': '#9CA3AF',
                        '#726AFC': '#726AFC',
                        '#EEEEEE': '#EEEEEE',
                        '#F3F3F3': '#F3F3F3',
                        '#9BA0A8': '#9BA0A8',
                        '#00B406': '#00B406',
                        '#125EF6': '#125EF6',
                        '#FF3939': '#FF3939',
                        '#E7E7E9': '#E7E7E9',
                        '#4338CA': '#4338CA',
                        '#E0E7FF': '#E0E7FF',
                        '#F9FAFB': '#F9FAFB',
                        '#959595': '#959595',
                    },
                    fontSize: {
                        '13px': '13px',
                    },
                    fontFamily: {
                        poppins: ['Poppins'],
                    },
                    margin: {
                        '4.5rem': '4.5rem',
                        '30px': '1.875rem',
                        '10px': '10px',
                        '5px': '5px',
                        '50px': '50px',
                    },
                    borderRadius: {
                        '5px': '5px',
                    },
                    borderWidth:{
                        '20px': '20px',
                    },
                    padding: {
                        '5px': '5px',
                        '10px': '10px',
                        '30px': '1.875rem',
                        '8.5px': '8.5px',
                        '25px': '25px',
                    },
                    width: {
                        '100px': '6.25rem',
                        '228px': '228px',
                    },
                    height: {
                        '100px': '6.25rem',
                    },
                    minWidth: {
                        '300px': '300px',
                        '200px': '200px',
                    },
                    gridAutoColumns: {
                        '2fr': 'minmax(0, 300px)',
                    },
                    screens: {
                        '3xl': '1600px',
                        'sm': '640px',
                        'md': '768px',
                        'lg': '1024px',
                        'below-md': { 'max': '767px' },
                    },
                    lineHeight: {
                        '1.2em': '1.2em',
                    }
                }
            }
        }
    </script>
   
    <link rel="stylesheet" href="{{asset('assets/custom_css.css')}}">
    
    <style>
        body {
            font-family: Open Sans !important;
        }
        
        ::placeholder {
            color: #141515 !important;
        }
        
         button[type=submit], label[for=fileUploadInput]{
             /*font: normal normal medium 14px/12px Open Sans !important;*/
             font-family: Open Sans !important;
         }
         
         .cus_font,.cus_mob_li {
             font-family: Open Sans !important;
             /*color:#000000 !important;*/
             font-weight: 600 !important;
             font: normal normal 600 16px/22px Open Sans;
         }

         .cus_mob_li:hover {
             color: #d4a848 !important;
             
         }
         .cus_mob_li {
            
             font-weight: 500 !important;
         }
         
         .ul_cust > li > a {
             //background: white !important;
             color:#fff;
         }
         
         li.hover_li > a.hover\:bg-gray-100:hover {
            background: #d4a8485e;
            
        }
        
        .hover_li > a > span {
             font-family: Open Sans !important;
             /*color:#000000 !important;*/
             font-weight: 600 !important;
             font: normal normal 600 16px/22px Open Sans;
             font-size: 14px;
        }
        
       
    </style>
</head>

<body class="font-poppins" style="overflow: hidden;">
   
    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('includes.nav')
        <div class="flex flex-col flex-1 w-full bg-[#F3F3F3]">
            @include('includes.header')

            @yield('content')

            <input type="hidden" id="refresh" value="no">
        </div>
    </div>


    <script src="{{asset('assets/jquery.min.js')}}"></script>
    <script src="{{asset('assets/select2.min.js')}}"></script>
    <script src="{{asset('assets/html2canvas.js')}}"></script>
    <script src="{{asset('assets/html2canvas.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Initialize select2
            $(".filter_top").select2();
        });
        
        $(document).on('keyup','#search-field',function(){
            var search_val = $(this).val();
            search_all(search_val)
        });

        const searchField = document.getElementById('search-field');
        searchField.addEventListener('input', function () {
            if (this.value === '') {
                $('#all_search').html('');
            }
        });

        function search_all(search_val){
            if(search_val == ''){
                $('#all_search').html('No Search');
                return false;
            }
        }

        var openButton = document.getElementById('open_all_search');
        var dialog = document.getElementById('dialog_all_search');
        var closeButton = document.getElementById('close');
        var overlay = document.getElementById('overlay');

        // show the overlay and the dialog
        openButton.addEventListener('click', function () {
            dialog.classList.remove('hidden');
            overlay.classList.remove('hidden');
            $('#search-field').val('');
            $('#all_search').html('No Search');
            $('#search-field').focus();
        });

        // hide the overlay and the dialog
        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });

        $(document).mouseup(function(e) {
              var modal = $("#dialog_all_search");

              // If the target of the click isn't the modal nor a descendant of the modal
              if (!modal.is(e.target) && modal.has(e.target).length === 0) {
                    modal.addClass('hidden');
                    $('#overlay').addClass('hidden');
                }
        });


        $(document).on('click', function (event) {
            var filterElement = $('#filter_style_ktype');
            if (!filterElement.is(event.target) && filterElement.has(event.target).length === 0) {
                // Clicked outside the filterElement, hide it
                $(this).css('display','none');
            }

        });

    $('#select-all').change(function(){
        // $('.select_or_not').prop('checked', $(this).prop('checked'));

        $('.select_or_not:not(:disabled)').prop('checked', $(this).prop('checked'));
    });
    
    /*************************Hide search POPUP ***********************************/
    $(document.body).on('click', function(event) {
        if (!$(event.target).closest('#filter_style_ktype').length) {  
            var elementId = event.target.id;
            var className = event.target.className;
            var parentElementId = $(event.target).closest('[id]').attr('id'); 
            if(elementId=='filter_now' || parentElementId=='filter_now' || className=='select2-search__field'){}else{
                if($('#filter_style_ktype').is(':visible'))
                 {
                    $('#filter_style_ktype').hide('slow');
                 }
            }
        } 
    });
    
document.querySelectorAll('[data-modal-hide]').forEach(function(element) {
    element.addEventListener('click', function() {
        var modalToHide = this.getAttribute('data-modal-hide');
        var modal = document.getElementById(modalToHide);
        modal.classList.add('hidden');
    });
});


$(document).ready(function () {
        var collapseButton = $('#collapseButton');
        // var sidebar = $('.cus_cs');
        var sidebar = $('.lg\\:collapsed-sidebar');
        var collapseIcon = $('#collapseIcon');
        var mainLogo = $('.main-logo');

        // Function to check and add active class to menu item
        function checkActiveMenuItem() {
            // Get the current URL
            var currentUrl = window.location.href;

            // Remove active class from all menu items
            $(".menu-item").removeClass("active");

            // Iterate through each menu item
            $(".menu-item").each(function () {
                // Get the href of the menu item
                var menuItemUrl = $(this).attr("href");

                // Check if the current URL contains the href of the menu item
                if (currentUrl.indexOf(menuItemUrl) !== -1) {
                    // If it matches, add 'active' class
                    $(this).addClass("active");

                    // Check if the sidebar is collapsed
                    if (!sidebar.hasClass('collapsed-width')) {
                        // If not collapsed, add 'open' class
                        $(this).removeClass("close");
                        $(this).addClass("open");
                    } else {
                        // If collapsed, add 'close' class
                        $(this).removeClass("open");
                        $(this).addClass("close");
                    }
                }
            });
        }

        collapseButton.on('click', function () {
            
            // Toggle the collapsed-width class on the sidebar
            sidebar.toggleClass('collapsed-width');
            
            if (sidebar.hasClass('collapsed-width')) {
                var windowWidth = $(window).width();
                // Collapse sidebar
                var opened='No';
                sidebar.css({ width: '0 !important'});
                // $('.cus_cs').css({ width: '13.438rem !important' });
                $('.cus_cs').removeClass('w-[15.438rem]');
                $('.cus_cs').addClass('w-[13.438rem]');
                
                $('.logo_img').attr("src", "{{ asset('assets/portal_img/mob_users.png') }}");
                $('.logo_img').css("height", "40px");

                $('#collapseIcon').css('top', '88px' );

                if (windowWidth >= 768 && windowWidth < 1024) {
                    $('#collapseIcon').css('left', '80px' );
                }else if ($(window).width() == 1024) {
                    console.log("cw"+$(window).width());
                    $('#collapseIcon').css('left', '49px' );
                } else {
                    $('#collapseIcon').css('left', '45px' );
                }

                $('.ul_cust').css('display','none'); 
                // $('.ul_cust').addClass('hidden'); 

            } else {
                var windowWidth = $(window).width();
                var opened='Yes';
                // Expand sidebar

                $('.cus_cs').removeClass('w-[13.438rem]');
                $('.cus_cs').addClass('w-[15.438rem]');
                
                // $('#collapseIcon').css('left', '20%' );
                $('.logo_img').attr("src", "{{ asset('assets/portal_img/Logo.png') }}");
                $('.logo_img').css("height", "100%");
                $('#collapseIcon').css('top', '71px' );

                if (windowWidth >= 768 && windowWidth < 1024) {
                    $('#collapseIcon').css('left', '230px' );
                }else if (windowWidth == 1024) {
                    console.log("ncw"+$(window).width());
                    $('#collapseIcon').css('left', '41px' );
                } else {
                    $('#collapseIcon').css('left', '20%' );
                }


                var currentUrl ="{{ url()->current()}}";
                $('a[href="javascript:void(0)"]').closest('li').find('ul').css('display','block');

            }

            
            // Toggle the icon rotation class
            collapseIcon.toggleClass('rotate-180');
            
            checkActiveMenuItem();
            
            $.ajax({
                url: "{{route('user.update_user_menu')}}",
                method: "post",
                data : {opened : opened,"_token": "{{ csrf_token() }}"},
                success: function(data) {  }
            });
        });

        checkActiveMenuItem();

        if ($(window).width() >= 768 && $(window).width() < 1024) {
            if (sidebar.hasClass('collapsed-width')) {
                $('#collapseIcon').css('left', '80px' );
                
            }else{
                $('#collapseIcon').css('left', '230px' );
            }
        } else if($(window).width() == 1024){
            if (sidebar.hasClass('collapsed-width')) {
                $('#collapseIcon').css('left', '49px' );
                
            }else{
                $('#collapseIcon').css('left', '41px' );
            }
        }
    });

   

    $('.drop_col').click(function() {
        // Rotate arrow and toggle dropdown
        $(this).find('svg[sidebar-toggle-item]').toggleClass('rotate-180 rotate-0');
        $(this).next('ul').toggleClass('hidden');

        // Add background to button
        $('.drop_col').removeClass('active-button');
        $(this).toggleClass('active-button');

        // Close other dropdowns
        $('.drop_col').not(this).next('ul').addClass('hidden');
        $('.drop_col').not(this).find('svg[sidebar-toggle-item]').removeClass('rotate-180').addClass('rotate-0');
    });

    $(document).on('hover','.log_hover',function(){
        $('#Path_28').css('fill','white');
        $('#Path_29').css('fill','white');
    });
    
    
    
</script>
@yield('script')
</body>
</html>
