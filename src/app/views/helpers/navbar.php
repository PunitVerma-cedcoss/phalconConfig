<?php
function navBar($page)
{
    echo '
        <nav class="p-3 bg-white flex border-b flex-col sm:flex-row shadow-sm">
        <div class="logo flex justify-start items-center grow">
            <div class="icon h-10 w-10 rounded-lg text-blue-400 text-lg flex justify-center items-center bg-blue-100">
                <i class="fa fa-fire"></i>
            </div>
            <p class="ml-2 text-lg font-medium text-slate-700">SpacePark</p>
        </div>
        <div class="navSearch bg-slate-100 rounded-lg text-slate-400">
            <i class="fa fa-search ml-2"></i>
            <input type="text" class="bg-transparent border-0 rounded-lg" placeholder="search">
        </div>
        <div class="createPostBtn flex justify-center items-center bg-blue-500 px-2 text-slate-100 cursor-pointer rounded-lg ml-2">
            <i class="fa fa-plus-square mr-2"></i>
            <p>create</p>
        </div>
        <div class="profile">
            <img src="https://source.unsplash.com/40x40/?cool" alt="" class="rounded-lg ml-2 cursor-pointer">
        </div>
    </nav>

    <div style="background-color:rgba(0,0,0,0.8);" class="scale-0 popUp fixed h-screen w-screen flex justify-center items-center">
        <div class="form p-3 bg-white rounded-lg ">
        <div class="post bg-white rounded-lg shadow-lg shadow-slate-200 flex p-3 justify-center items-center">
        <img src="https://source.unsplash.com/40x40/?cool" class="rounded-lg" alt="">
        <input type="text" name="postContent" id="postInput" placeholder="whats new Punit" class="grow mx-2 rounded-lg border-0">
        <i class="fa fa-image mr-2"></i>
        <!-- <div class="cursor-pointer post-it flex justify-center items-center bg-blue-500 p-1 rounded-lg text-slate-200 px-2">
            <i class="fa fa-link mr-2"></i>
            <p class="mkPost">Post</p>
        </div> -->
        <input type="submit" name="submit" class="post bg-blue-500 text-white cursor-pointer rounded-lg shadow-lg shadow-slate-200 flex p-3 justify-center items-center" value="post">
    </div>
        </div>
    </div>
    ';
}
