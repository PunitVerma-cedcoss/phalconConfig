$(".mkPost").click(function (e) {
    e.preventDefault();
    var x = $("#postInput").val().trim()
    if (x != '') {
        // sendPost(x)
        var m = `
        <div class="post capitalize bg-white p-3 rounded-lg shadow-lg shadow-slate-200 mt-3">
                <div class="post-profile flex">
                    <img src="https://source.unsplash.com/40x40/?colors" class="rounded-lg" alt="">
                    <div class="post-profile-title ml-2">
                        <p class="text-sm font-medium text-slate-500">qwerty Name</p>
                        <p class="text-xs text-slate-400">${getDate()}</p>
                    </div>
                </div>
                <p class="text-slate-700 text-sm p-2">${x}</p>
                <div class="post-options">
                    <div class="option flex text-pink-500 justify-center items-center">
                        <i class="fa fa-heart mr-2"></i>
                        <p class="text-sm">23,42</p>
                    </div>
                </div>
            </div>
        `
        $(".posts").prepend(m)
        $("#postInput").val('')
    }
});

function sendPost(t) {
    $.ajax({
        type: "POST",
        url: "home/post",
        data: { title: t },
        success: function (response) {
            alert(response)
        }
    });
}

function getDate(ts = '') {
    var d = new Date()
    return `${d.getHours()}:${d.getHours()}:${d.getSeconds()}`
}

$(".fa-heart").click(function (e) {
    $(this).next().text(parseInt($(this).next().text()) + 1)
    console.log(parseInt($(this).next().text()) + 1)
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "home/likePostById",
        data: { action: "like post", id: $(this).attr("data") },
        success: function (response) {
            console.log(response)
            // $(this).next().text(parseInt($(this).next().text()) + 1)
        }
    });
});

$(".createPostBtn").click(function (e) {
    e.preventDefault();
    $(".popUp").toggleClass("scale-0")
});

$(".popUp").click(function (e) {
    e.preventDefault();
    $(".popUp").toggleClass("scale-0")
});

$(".fa-trash").click(function (e) {
    e.preventDefault();
    var id = $(this).attr("data").trim()
    if (id) {
        alert("deleting post " + id)
    }
});