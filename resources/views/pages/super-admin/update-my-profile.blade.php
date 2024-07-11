@extends('layouts.app')

@section('title')
Admin profile
@endsection


@section('content')
    <main class="overflow-y-auto px-6 flex flex-1 flex-col grow">
                <h2 class="text-black font-semibold text-xl mt-8">Edit Profile</h2>
                @if(Session::has('success'))
                    <div class="p-4 mb-2 mt-2 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                          <span class="font-semibold">Success: </span> {{session('success')}}
                    </div>
                @endif
                <form method="post" action="{{route('user.update',['user_id'=>$user_detail->id])}}" class="flex grow flex-col bg-white w-full p-[1.875rem] mt-[1.875rem] gap-y-10 gap-x-10" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-10 w-full overflow-x-auto">


                        <div class="w-full lg:flex-row">
                            <div class="flex flex-col lg:flex-row">
                                <div class="w-full lg:w-3/6 xl:w-1/6">
                                    <div class="changeprofilesec flex gap-3">
                                        <div class="profile-pic">

                                            <?php  if($user_detail->img != ''){  ?>
                                                 <img style="margin: auto;" id="filePreviewImage" class="h-[6.25rem] w-[6.25rem] rounded-full bg-gray-50" src="{{asset('user_image')}}/{{$user_detail->img}}" alt="">
                                            <?php }else{ ?>

                                                 <img style="margin: auto;"  id="filePreviewImage" class="h-[6.25rem] w-[6.25rem] rounded-full bg-gray-50" src="{{asset('de_user.jpg')}}" alt="">
                                            
                                            <?php } ?>

                                            <div class="flex flex-col gap-2.5">
                                                <!-- <input type="file" id="profilephoto" /> -->
                                                <input type="file" name="img" id="fileUploadInput" hidden />
                                                <label for="fileUploadInput" class="inline-block text-white p-2.5 rounded-[5px] bg-[#4F46E5] mt-1 hover:bg-[#726AFC] text-sm cursor-pointer" style="text-transform: none !important;">Change your photo</label>

                                                <input type="hidden" id="is_remove" name="is_remove" value="0">

                                                <button id="remove_photo" type="button" class="text-black p-2.5 rounded border border-[#D1D5DB] hover:bg-[#EEEEEE] text-sm flex gap-1.5 focus:outline-none">
                                                    <img src="{{asset('assets/img/remove.png')}}"> Remove photo
                                                </button>
                                        </div>
                                        </div>

                                        
                                    </div>
                                </div>


                                <div class="w-full lg:w-5/6 below-md:mt-4">
                                    <h2 class="text-base font-bold text-black" style="font-size:16px !important;">General Information</h2>
                                    
                                    <div class="edit-profile-sec w-full lg:w-4/6 ">
                                        <hr class="mt-4 mb-4">
                                    <div class="flex gap-x-6 gap-y-6 flex-col lg:flex-row">
                                        <div class="w-full">
                                            <label for="full-name" class="text-base font-bold text-black">Username<small style="color: red;font-size: 12px;font-weight: 500;"> (Required)</small></label>
                                                <div class="mt-[10px]">
                                                    <input type="text" name="name" value="{{ old('name', $user_detail->name) }}" id="full-name"  class="outline-0 rounded-md border-0 py-[8.5px] text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-[#9CA3AF] px-2.5 text-sm w-full">
                                                </div>
                                                @if($errors->has('name'))
                                                    <div class="text-red-600">{{ $errors->first('name') }}</div>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="mt-2 flex gap-x-6 gap-y-6 flex-col lg:flex-row">
                                        <div class="w-full">
                                            <label for="email" class="text-base font-bold text-black">Email address<small style="color: red;font-size: 12px;font-weight: 500;"> (Required)</small></label>
                                                <div class="mt-[10px]">
                                                    <input type="email" value="{{old('email',$user_detail->email)}}" autocomplete="off" name="email" id="email"
                                                        class="outline-0 rounded-md border-0 py-[8.5px] text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-[#9CA3AF] px-2.5 text-sm w-full">
                                                </div>
                                                @if($errors->has('email'))
                                                    <div class="text-red-600">{{ $errors->first('email') }}</div>
                                                @endif
                                        </div>

                                        {{--<div class="3xl:min-w-[300px]">
                                            <label for="designation" class="text-base font-bold text-black">Your Designation</label>
                                            <div class="mt-[10px]">
                                                <input type="text" name="designation" value="{{old('designation',$user_detail->designation)}}" id="designation"  class="outline-0 rounded-md border-0 py-[8.5px] text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-[#9CA3AF] px-2.5 text-sm w-full">
                                            </div>
                                        </div>--}}
                                    </div>


                                    <div class="mt-2 flex gap-x-6 gap-y-4 flex-col lg:flex-row w-full row">
                                            <div class="w-full md:w-1/2 px-3" style="padding:0px;">
                                                 <label for="first-name" class="text-base font-bold text-black">First Name</label>
                                                    <div class="mt-[10px]">
                                                        <input type="text" value="{{old('first_name',$user_detail->first_name)}}" name="first_name" id="firstname"
                                                            class="outline-0 rounded-md border-0 py-[8.5px] text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-[#9CA3AF] px-2.5 text-sm w-full">
                                                    </div>

                                                    @if($errors->has('first_name'))
                                                        <div class="text-red-600">{{ $errors->first('first_name') }}</div>
                                                    @endif
                                            </div>
                                            <div  class="w-full md:w-1/2 px-3" style="padding:0px;">
                                                <label for="last-name" class="text-base font-bold text-black">Last Name</label>
                                                    <div class="mt-[10px]">
                                                        <input type="text" name="last_name" value="{{old('last_name',$user_detail->last_name)}}" id="last-name"
                                                            class="outline-0 rounded-md border-0 py-[8.5px] text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-[#9CA3AF] px-2.5 text-sm w-full">
                                                    </div>
                                                    @if($errors->has('last_name'))
                                                        <div class="text-red-600">{{ $errors->first('last_name') }}</div>
                                                    @endif
                                            </div>
                                    </div>

                                    <div class="mt-2 flex gap-x-6 gap-y-6 flex-col lg:flex-row">
                                        <div class="w-full">
                                            <label for="phone" class="text-base font-bold text-black">Phone</label>
                                            <div class="mt-[10px]">
                                                <input type="text" name="phone" value="{{old('phone',$user_detail->phone)}}" id="phone"
                                                    class="outline-0 rounded-md border-0 py-[8.5px] text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-[#9CA3AF] px-2.5 text-sm w-full">
                                            </div>
                                            @if($errors->has('phone'))
                                                <div class="text-red-600">{{ $errors->first('phone') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mt-2 flex gap-x-6 gap-y-6 flex-col lg:flex-row">
                                        <div class="w-full">
                                             <label for="email" class="text-base font-bold text-black">Change Password</label>
                                                <div class="mt-[10px]">
                                                    <input type="password" placeholder="Enter New Password" name="password" id="password"
                                                        class="outline-0 rounded-md border-0 py-[8.5px] text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-[#9CA3AF] px-2.5 text-sm w-full">
                                                </div>
                                                @if($errors->has('password'))
                                                    <div class="text-red-600">{{ $errors->first('password') }}</div>
                                                @endif
                                                    </div>
                                                </div>


                                                 <div class="mt-auto bg-white  py-3 text-sm tracking-wide text-black  dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800 justify-end flex gap-2.5">
                                    <!-- <button type="button" class="text-black p-2.5 rounded border border-[#D1D5DB] hover:bg-[#EEEEEE] text-sm flex gap-1.5 items- focus:outline-none">Back</button> -->
                                    <button type="submit"
                                        class="text-white p-2.5 rounded-[5px] bg-[#4F46E5] hover:bg-[#726AFC] text-sm cursor-pointer">Save Changes</button>
                                </div>

                                        </div>

                               

                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </main>
@endsection

@section('script')
<script type="text/javascript">
$("#fileUploadInput").change(function(event){
    $("#filePreviewImage").attr('src',URL.createObjectURL(event.target.files[0]));
});


$("#remove_photo").click(function(event){
    $("#filePreviewImage").attr('src','{{asset("de_user.jpg")}}');
    $('#is_remove').val(1);
});
</script>
@endsection
