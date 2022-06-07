//get pagination
function pagination(totalpages, currentpage) {
    var pagelist = '';
    if (totalpages > 1) {

        currentpage = parseInt(currentpage);
        pagelist += `<ul class="pagination justify-content-center">`;
        const prevClass = currentpage == 1 ? "disabled" : "";
        pagelist += `<li class="page-item ${prevClass}"><a class="page-link" href="#" data-page="${currentpage - 1}">Previous</a></li>`;
        for (let p = 1; p <= totalpages; p++) {
            const activeClass = currentpage == p ? "active" : "";
            pagelist += `<li class="page-item ${activeClass}"><a class="page-link" href="#" data-page="${p}">${p}</a></li>`;
        }
        const nextClass = currentpage == totalpages ? "disabled" : "";
        pagelist += `<li class="page-item ${nextClass}"><a class="page-link" href="#" data-page="${currentpage + 1}">Next</a></li>`;
        pagelist += `</ul>`;
    }
    $("#pagination").html(pagelist);
}

//get player row
function getplayerrow(player) {
    var playerRow = "";
    if (player) {

        playerRow = `<tr>
        <td class="align-middle"></td>
        <td class="align-middle">${player.category_Id}</td>
        <td class="align-middle">${player.category_Name}</td>
       
        <td class="align-middle">
        
        <a href="#" class="btn btn-warning mr-3 edituser"  data-target="#userModal" title="Edit" data-backdrop="false" data-id="${player.category_Id}"><i class="fa fa-pencil-square-o fa-lg"></i></a>
        <a href="#" class="btn btn-danger deleteuser" data-userid="14" title="Delete"  data-id="${player.category_Id}"><i class="fa fa-trash-o fa-lg"></i></a>
        </td>
        </tr><tr>`
    }
    return playerRow;
}
//get player list
function getplayers() {
    var pageno = $("#currentpage").val();

    $.ajax({
        url: "/Sleek-v-1-0/category/ajax.php",
        type: "GET",
        dataType: "json",
        data: { page: pageno, action: "getusers" },
        beforeSend: function () {
            $("#overlay").fadeIn();
        },
        success: function (rows) {
            if (rows.players) {
                var playerlist = "";
                $.each(rows.players, function (index, player) {

                    playerlist += getplayerrow(player);
                });
                $("#userstable tbody").html(playerlist);

                let totalPlayers = rows.count;
                let totalpages = Math.ceil(parseInt(totalPlayers) / 4);
                const currentpage = $("#currentpage").val();
                console.log("playersss");
                pagination(totalpages, currentpage)
                $("#overlay").fadeOut();
                console.log("doneeeee");
            }
        },
        error: function () {

            console.log("something Went Wrong");
        },
    });
}
function popup() {
  
    $('[id*="userModal"]').modal('show');
    let a = $('[id*="userModal"]');
}
$(document).ready(function () {
    //add/edit user 

    $(document).on("submit", "#addform", function (event) {
        event.preventDefault();
        $.ajax({
            url: "category/ajax.php",
            type: "POST",
            dataType: "json",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#overlay").fadeIn();
            },
            success: function (response) {
                // console.log("success");
                console.log(response);
                if (response) {
                    $("#userModal").modal('hide');
                    // $("#userModal").remove();
                    $("#addform")[0].reset();
                    getplayers();
                    $("#overlay").fadeOut();

                }
            },
            error: function () {
                // console.log("Oops Something Went Wrong!!");
            },
        });

    });
    $(document).on('click', 'ul.pagination li a', function (e) {
        e.preventDefault();
        var $this = $(this);
        const pagenum = $this.data("page");
        $("#currentpage").val(pagenum);
        getplayers();
        $this.parent().siblings().removeClass('active');
        $this.parent().addClass('active');
    });

    //form reset on new button 
    $("#addnewbtn").on("click", function () {
        $("#addform")[0].reset();
        $("#userid").val("");
    })

    // get user for update
    $(document).on("click", "a.edituser", function () {
        
        popup();
        var pid = $(this).data('id');
        $.ajax({
            url: "/Sleek-v-1-0/category/ajax.php",
            type: "GET",
            dataType: "json",
            data: { id: pid, action: "getuser" },
            beforeSend: function () {
                $("#overlay").fadeIn();
            },
            success: function (player) {
                if (player) {
                    $("#category").val(player.category_Name);
                    $("#userid").val(player.category_Id);

                }
                $("#overlay").fadeOut();
            },
            error: function () {
                console.log("something Went Wrong");
            },
        });
    });

    // Delete User
    $(document).on("click", "a.deleteuser", function (e) {
        e.preventDefault();
        var pid = $(this).data('id');
        // console.log("this is id");
        // // console.log(pid);
        if (confirm("Are You Sure You Want To Delete?")) {
            $.ajax({
                url: "/Sleek-v-1-0/category/ajax.php",
                type: "GET",
                dataType: "json",
                data: { id: pid, action: "deleteuser" },
                beforeSend: function () {
                    $("#overlay").fadeIn();
                },
                success: function (res) {
                    if (res.deleted == 1) {
                        getplayers();
                        $("#overlay").fadeOut();
                    }
                },
                error: function () {
                    console.log("something Went Wrong");
                },
            });
        }
    });

    //Get Profile
    // $(document).on("click","a.profile",function(){
    //     var pid = $(this).data('id');

    //     $.ajax({
    //         url:"/crudAjax/ajax.php",
    //         type:"GET",
    //         dataType:"json",
    //         data :{id: pid, action:"getuser"},

    //         success: function(player){
    //             if(player)
    //             {
    //                 const userphoto = player.photo ? player.photo : "Default.png";
    //                const profile = `  <div class="row">
    //                <div class="col-sm-6 col-md-4">
    //                    <img src="uploads/${userphoto}"  class="rounded responsive" />
    //                </div>
    //                <div class="col-sm-6 col-md-8">
    //                    <h4 class="text-primary">${player.pname}</h4>
    //                    <p class="text-secondary">
    //                    <i class="fa fa-envelope-o" aria-hidden="true"></i>${player.email}
    //                    <br />
    //                    <i class="fa fa-phone" aria-hidden="true"></i>${player.phone}
    //                    </p>
    //                </div>
    //            </div>`;
    //            $("#profile").html(profile);
    //             }

    //         },
    //         error: function(){
    //             console.log("something Went Wrong");
    //         },
    //       });
    // });

    //Searching 
    $("#searchinput").on("keyup", function () {
        const searchText = $(this).val();
        if (searchText.length > 1) {
            $.ajax({
                url: "/Sleek-v-1-0/category/ajax.php",
                type: "GET",
                dataType: "json",
                data: { searchQuery: searchText, action: "search" },

                success: function (players) {
                    if (players) {
                        var playerlist = "";
                        $.each(players, function (index, player) {

                            playerlist += getplayerrow(player);

                        });
                        $("#userstable tbody").html(playerlist);
                        $("#pagination").hide();
                        $("#overlay").fadeOut();
                    }


                },
                error: function () {
                    console.log("something Went Wrong");
                },
            });
        }
        else {
            getplayers();
            $("#pagination").show();

        }


    });
    //Load Players
    getplayers();
});