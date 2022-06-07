function setsubcategory(_subcat) {
    // var subcategories = `<option value="hello"</option>`;
    var subcategories = `<option value=${_subcat}>${_subcat}</option>`;
    return subcategories;
}

function Addsubcategory() {

    //var subid = $(this).data("id");
    // console.log("Hello World");
    $.ajax({
        url: "/Sleek-v-1-0/product/ajax.php",
        type: "GET",
        dataType: "json",
        data: { action: "addsubCategory" },
        beforeSend: function () {

        },

        success: function (subcategory) {

            if (subcategory) {
                var subcategorylist = "";
                $.each(subcategory, function (index, _subcat) {
                    subcategorylist += setsubcategory(_subcat.sub_Category_Name);
                });
            }
            $('#subcategory').html(subcategorylist)
            $('#overlay').fadeOut();
        },
        error: function () {

        },

    });

}

$("#discount").change(function () {
    var valper = $("#discount").val();
    var price = $("#price").val();
    console.log(price);
    var a = (price * valper) / 100;
    // console.log(valper);
    price = price - a;
    // console.log(price);
    $("#discount_price").val(price);

});


function pagination(totalpages, currentpage) {
    // console.log(totalpages + " " + currentpage);
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


function getplayerrow(product) {
    var ProductRow = "";
    if (product) {
        // console.log(product);
        const userphoto = product.photo ? product.photo : "Default.png";

        ProductRow = `<tr>  
         
       
         <td class="align-middle"></td>
         <td class="align-middle"><img src="product/uploads/${userphoto}" class="img-thumbnail rounded float-left"></td>
         <td class="align-middle">${product.sub_Category_Name}</td>
         <td class="align-middle">${product.product_Name}</td>
         <td class="align-middle">${product.price}</td>
         <td class="align-middle">${product.discount}</td>
         <td class="align-middle">${product.discount_Price}</td>
         <td class="align-middle">${product.description}</td>
       
        
         <td class="align-middle">  
        <a href="#" class="btn btn-warning mr-3 edituser"  data-target="#userModal" title="Edit"  data-id="${product.product_Id}"><i class="fa fa-pencil-square-o fa-lg"></i></a>
        <a href="#" class="btn btn-danger deleteuser" data-userid="14" title="Delete"  data-id="${product.product_Id}"><i class="fa fa-trash-o fa-lg"></i></a>
        </td>
        </tr>`;

    }
    return ProductRow;
}



function getplayers() {
    Addsubcategory();
    var pageno = $("#currentpage").val();
    $.ajax({
        url: "/Sleek-v-1-0/product/ajax.php",
        type: "GET",
        dataType: "json",
        data: { page: pageno, action: "getproductslist" },
        beforeSend: function () {
            $('#overlay').fadeIn();
        },
        success: function (rows) {
            if (rows.Products) {
                var Productlist = "";
                $.each(rows.Products, function (index, product) {
                    Productlist += getplayerrow(product);
                });
                $('#userstable tbody').html(Productlist);

                let totalproducts = rows.count;
                let totalpages = Math.ceil(parseInt(totalproducts) / 4);
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

$(document).ready(function () {
    //add/edit user

    Addsubcategory();
    $("#addnewbtn").on("click", function () {
        $("#addform")[0].reset();
        $("#prodid").val("");
    });
    $(document).on("submit", "#addform", function (event) {
        event.preventDefault();
        $.ajax({
            url: "/Sleek-v-1-0/product/ajax.php",
            type: "POST",
            dataType: "json",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: function () {
                // $('#overlay').fadeIn();
            },
            success: function (response) {

                if (response) {
                    console.log('submitting');
                    $('#userModal').modal('hide');
                    $("#addform")[0].reset();
                    getplayers();
                    // $('#overlay').fadeOut();
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
        var prodId = $(this).data("id");

        $.ajax({
            url: "/Sleek-v-1-0/product/ajax.php",
            type: "GET",
            dataType: "json",
            data: { pid: prodId, action: "getproduct" },
            beforeSend: function () {
                $("#overlay").fadeIn();
            },

            success: function (product) {
                // console.log(subcategory.sub_Category_Id);
                // console.log(subcategory.sub_Category_Name);
                // console.log(subcategory.category_Name);

                $('#subcategory').val(product.sub_Category_Name).attr("selected", "selected");
                $('#pname').val(product.product_Name);
                $('#price').val(product.price);
                $('#discount').val(product.discount);
                $('#discount_price').val(product.discount_Price);
                $('#description').val(product.description);
                // $('#photo').val(product.photo);
                $("#prodid").val(product.product_Id);

                $('#overlay').fadeOut();
            },
            error: function () {
                console.log("Something went wrong");
            },
        });
    });

    $(document).on("click", "a.deleteuser", function (e) {
        e.preventDefault();
        var prodId = $(this).data("id");
        if (confirm("Are you sure want to delete this?")) {
            $.ajax({
                url: "/Sleek-v-1-0/product/ajax.php",
                type: "GET",
                dataType: "json",
                data: { pid: prodId, action: "deleteproduct" },
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

        if (searchText.length > 1) {
            $.ajax({
                url: "/Sleek-v-1-0/product/ajax.php",
                type: "GET",
                dataType: "json",
                data: { searchQuery: searchText, action: "search" },


                success: function (subCategoryName) {
                    if (subCategoryName) {
                        var Subcategorylist = "";
                        $.each(subCategoryName, function (index, subcategory) {
                            Subcategorylist += getplayerrow(subcategory);
                        });
                        $('#userstable tbody').html(Subcategorylist);
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



    getplayers();

});