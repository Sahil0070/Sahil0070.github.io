function setcategory(cat) {
    var categories = `<option value=${cat}>${cat}</option>`;
    return categories;
}
function getcategoryupdate(productname) {
    // console.log(productname);
    $.ajax({
        url: "/Sleek-v-1-0/Stock history/ajax.php",
        type: "GET",
        dataType: "json",
        data: { proname: productname, action: "addcategorytoupdate" },
        beforeSend: function () {
            //Addcategory();
        },

        success: function (cat) {

            // if (category) {
            // let a = $('#category').val(category.category_Name).attr("selected", "selected");
            // console.log("here");
            // console.log(a);
            $.each(cat, function (index, catname) {
                console.log(catname.category_Name);

                $('#category').val(catname.category_Name).attr("selected", "selected");
            });
            // }
            Addsubcategory();
            getsubupdate(productname);
            // $('#overlay').fadeOut();
        },
        error: function () {

        },
    });
}
function getsubupdate(productname) {
    // console.log(productname);
    $.ajax({
        url: "/Sleek-v-1-0/Stock history/ajax.php",
        type: "GET",
        dataType: "json",
        data: { proname: productname, action: "addsubtoupdate" },
        beforeSend: function () {
            //Addcategory();
        },

        success: function (subcat) {

            // if (category) {
            // let a = $('#category').val(category.category_Name).attr("selected", "selected");
            // console.log("here");
            // console.log(a);
            $.each(subcat, function (index, subcatname) {
                console.log(catname.category_Name);

                $('#subcat').val(subcatname.subcategory_Name).attr("selected", "selected");
            });
            // }
            Addproduct();

            // $('#overlay').fadeOut();
        },
        error: function () {

        },
    });
}

function Addsubcategory() {
    const subText = $("#category").val();
    console.log("This is stock");
    if (subText.length > 1) {
        $.ajax({
            url: "/Sleek-v-1-0/Stock history/ajax.php",
            type: "GET",
            dataType: "json",
            data: { subQuery: subText, action: "findsub" },


            success: function (subCategoryName) {
                if (subCategoryName) {
                    var Subcategorylist = "";
                    $.each(subCategoryName, function (index, subcategory) {
                        Subcategorylist += setcategory(subcategory.sub_Category_Name);
                    });
                    $('#subcat').html(Subcategorylist);
                    Addproduct();
                    $("#overlay").fadeOut();
                }
            },
            error: function () {
                var product_list = "";
                var cat = '';
                product_list = `<option value=${cat}>${cat}</option>`;
                $('#subcat').html(product_list);
                $("#overlay").fadeOut();
            },

        });
    }

}

function Addproduct() {
    const proText = $("#subcat").val();
    console.log("This is product");
    if (proText.length > 1) {
        $.ajax({
            url: "/Sleek-v-1-0/Stock history/ajax.php",
            type: "GET",
            dataType: "json",
            data: { proQuery: proText, action: "findpro" },


            success: function (productname) {
                // console.log("this is boy tshirt or shirt")
                // var product_list = "";
                // var cat = '';
                // product_list = `<option value=${cat}>${cat}</option>`;
                // $('#proname').html(product_list);
                // $("#overlay").fadeOut();
                // console.log(productname)
                if (productname) {
                    console.log("this is boy_wear")
                    var product_list = "";
                    $.each(productname, function (index, product) {
                        product_list += setcategory(product.product_Name);
                    });
                    $('#proname').html(product_list);
                    $("#overlay").fadeOut();
                }
            },
            error: function () {
                var product_list = "";
                var cat = '';
                product_list = `<option value=${cat}>${cat}</option>`;
                $('#proname').html(product_list);
                $("#overlay").fadeOut();
            },
        });
    }

}
function Addcategory() {

    //var subid = $(this).data("id");
    console.log("Hello World");
    $.ajax({
        url: "/Sleek-v-1-0/Stock history/ajax.php",
        type: "GET",
        dataType: "json",
        data: { action: "addCategory" },
        beforeSend: function () {

        },

        success: function (category) {

            if (category) {
                var categorylist = "";
                $.each(category, function (index, cat) {
                    categorylist += setcategory(cat.category_Name);
                });
            }
            $('#category').html(categorylist)
            Addsubcategory();
            $('#overlay').fadeOut();
        },
        error: function () {
            var product_list = "";
            var cat = '';
            product_list = `<option value=${cat}>${cat}</option>`;
            $('#category').html(product_list);
            $("#overlay").fadeOut();
        },

    });

}


function pagination(totalpages, currentpage) {
    console.log(totalpages + " " + currentpage);
    var pagelist = "";
    if (totalpages > 1) {
        currentpage = parseInt(currentpage);
        pagelist += `<ul class="pagination justify-content-center">`;
        const prevClass = currentpage == 1 ? " disabled" : "";
        pagelist += `<li class="page-item${prevClass}"><a class="page-link" href="#" data-page="${currentpage - 1}">Previous</a></li>`;
        for (let p = 1; p <= totalpages; p++) {
            const activeClass = currentpage == p ? " active" : "";
            pagelist += `<li class="page-item${activeClass}"><a class="page-link" href="#" data-page="${p}">${p}</a></li>`;
        }
        const nextClass = currentpage == totalpages ? " disabled" : "";
        pagelist += `<li class="page-item${nextClass}"><a class="page-link" href="#" data-page="${currentpage + 1}">Next</a></li>`;
        pagelist += `</ul>`;
    }
    $("#pagination").html(pagelist);


}


function getplayerrow(stocks) {
    var stockRow = "";
    if (stocks) {

        stockRow = `<tr>  
         <td class="align-middle"></td>
          <td class="align-middle"></td>
        <td class="align-middle">${stocks.product_Name}</td>
        <td class="align-middle">${stocks.stock_qty}</td>
        <td class="align-middle">${stocks.added_Date}</td>
        <td class="align-middle">
        
        <a href="#" class="btn btn-warning mr-3 edituser"  data-target="#userModal" title="Edit"  data-id="${stocks.stock_Id}"><i class="fa fa-pencil-square-o fa-lg"></i></a>
        <a href="#" class="btn btn-danger deleteuser" data-userid="14" title="Delete"  data-id="${stocks.stock_Id}"><i class="fa fa-trash-o fa-lg"></i></a>
        </td>
        </tr>`;

    }
    return stockRow;
}



function getplayers() {
    Addcategory();
    var pageno = $("#currentpage").val();
    $.ajax({
        url: "/Sleek-v-1-0/Stock history/ajax.php",
        type: "GET",
        dataType: "json",
        data: { page: pageno, action: "getstock" },
        beforeSend: function () {
            $('#overlay').fadeIn();
        },
        success: function (rows) {
            if (rows.stock) {
                var stocklist = "";
                $.each(rows.stock, function (index, stocks) {
                    stocklist += getplayerrow(stocks);
                });
                $('#userstable tbody').html(stocklist);

                let totalstocks = rows.count;
                let totalpages = Math.ceil(parseInt(totalstocks) / 4);
                const currentpage = $("#currentpage").val();
                pagination(totalpages, currentpage);
                $("#overlay").fadeOut();
            }
        },
        error: function () {
            console.log('Something went wrong');

        }
    });
}
function getDate() {

    var d = new Date();
    console.log(d);
    // Get today's date
    var day = d.getDate();
    var month = d.getMonth() + 1; // The months are 0-based
    var year = d.getFullYear();
    // console.log(day);
    // console.log(month);
    // console.log(year);

    // Set the date field to the current date
    // document.getElementById("todayDate").value = ;
    $("#todayDate").val(year + "/" + month + "/" + day);
    console.log($("#todayDate").val());
    // Set the value of the "date" field
    // document.getElementById("todayDate").value = d.toDateString();

    // Set the value of the "time" field
    // var hours = d.getHours();
    // var mins = d.getMinutes();
    // var seconds = d.getSeconds();
    // document.getElementById("time").value = hours + ":" + mins + ":" + seconds;
}


$(document).ready(function () {
    //add/edit user

    Addcategory();

    $("#addnewbtn").on("click", function () {
        $("#addform")[0].reset();
        $("#stockid").val("");
        getDate();
    });
    $(document).on("submit", "#addform", function (event) {
        event.preventDefault();
        $.ajax({
            url: "/Sleek-v-1-0/Stock history/ajax.php",
            type: "POST",
            dataType: "json",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: function () {
                // $('#overlay').fadeIn();
            },
            success: function (response) {
                console.log(response);
                if (response) {
                    $('#userModal').modal('hide');
                    $("#addform")[0].reset();
                    getplayers();
                    //$('#overlay').fadeOut();
                }
            },

            error: function () {

            },
        });
    });

    $(document).on("click", "ul.pagination li a", function (e) {
        e.preventDefault();
        var $this = $(this);
        const pagenum = $this.data("page");
        $("#currentpage").val(pagenum);
        getplayers();
        $this.parent().siblings().removeClass("active");
        $this.parent().addClass("active");

    });


    function popup() {
        $('[id*="userModal"]').modal('show');
    }
    $(document).on("click", "a.edituser", function () {
        popup();
        var stockid = $(this).data("id");

        $.ajax({
            url: "/Sleek-v-1-0/Stock history/ajax.php",
            type: "GET",
            dataType: "json",
            data: { sid: stockid, action: "updatedStock" },
            beforeSend: function () {
                $("#overlay").fadeIn();
            },

            success: function (Stocks) {
                // console.log(subcategory.sub_Category_Id);
                // console.log(subcategory.sub_Category_Name);
                // console.log(subcategory.category_Name);
                // console.log(Stocks.product_Id);

                getcategoryupdate(Stocks.product_Name);
                // console.log(Stocks.product_Name);
                $('#proname').val(Stocks.product_Name).attr("Selected", "Selected");
                $('#stockqty').val(Stocks.stock_qty);
                $('#todayDate').val(Stocks.add_Date);
                $('#stockid').val(Stocks.stock_Id);
                $('#pro').val(Stocks.product_Id);
                // console.log(Stocks.product_Id);
                $('#overlay').fadeOut();
            },
            error: function () {
                console.log("Something went wrong");
            },
        });
    });

    $(document).on("click", "a.deleteuser", function (e) {
        e.preventDefault();
        var stockid = $(this).data("id");
        if (confirm("Are you sure want to delete this?")) {
            $.ajax({
                url: "/Sleek-v-1-0/Stock history/ajax.php",
                type: "GET",
                dataType: "json",
                data: { sid: stockid, action: "deletestock" },
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
                    console.log("Something went wrong");
                }
            });
        }
    });

    $("#searchinput").on("keyup", function () {
        const searchText = $(this).val();

        if (searchText.length >= 1) {
            $.ajax({
                url: "/Sleek-v-1-0/Stock history/ajax.php",
                type: "GET",
                dataType: "json",
                data: { searchQuery: searchText, action: "search" },


                success: function (stockdetail) {
                    if (stockdetail) {
                        var Stocklist = "";
                        $.each(stockdetail, function (index, stock) {
                            Stocklist += getplayerrow(stock);
                        });
                        $('#userstable tbody').html(Stocklist);
                        $("#pagination").hide();
                        $("#overlay").fadeOut();
                    }
                },

            });
        } else {
            getplayers();
            $("#pagination").show();
        }

    });

    $("#category").change(function () {
        Addsubcategory();
    });
    $("#subcat").change(function () {
        Addproduct();
    });



    getplayers();

});

