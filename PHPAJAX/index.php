<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertdata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        #successmessage{
            background: #DEF1D8;
            color:green;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;
        }
        #errormessage{
            background: #EFDCDD;
            color:red;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 35px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="display-3">All records with php and ajax</div>
        <form id="addform">
            Name:<input type="text" name="uname" id="uname">
            Email:<input type="text" name="uemail" id="uemail">
            <input type="submit" id="saveuser" value="save">
            <input type="search" id="searchname" autocomplete="off" placeholder="search name">
        </form> 
        <div>
        <table class="table table-striped"  id="tabledata">
            <tr>
                <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Operation</th>
                </tr>
        </table>
        </div>       
        <div id="errormessage"></div>
        <div id="successmessage"></div>
        <div id="message" title="Edit Form">   
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
        //    function load(){
        //     $.ajax({
        //         url:"ajaxload.php",
        //         type:"POST",
        //         success:function(data){
        //             $("#tabledata").html(data)
        //         }
        //     })
        //    }
           //load();
        //    function pagina(num){
        //     $.ajax({
        //         url:"ajaxpagination.php",
        //         type:"POST",
        //         data:{idvalue:num},
        //         success:function(data){
        //             $("#tabledata").html(data);
        //         }
        //     })
        //    }
        //    pagina();
        //    $("#saveuser").click(function(e){
        //     e.preventDefault();
        //     var username = $("#uname").val();
        //     var useremail = $("#uemail").val();
        //     if(username == "" || useremail == ""){
        //         $("#errormessage").html("please enter name and email").fadeIn().delay(1000).fadeOut();
        //     }else{
        //         $.ajax({
        //         url:"ajaxinsert.php",
        //         type:"POST",
        //         data:{
        //             name:username,
        //             email:useremail,
        //         }    
        //         ,
        //         success:function(data){
        //                 if(data == 1){
        //                     load();
        //                     $("#addform").trigger("reset");
        //                     $("#successmessage").html("data insert successful").fadeIn().delay(1000).fadeOut();
        //                 }else{
        //                    $("#errormessage").html("You cannot save!").fadeIn().delay(1000).fadeOut();
        //                 }

        //         }
        //     })
        //     }
            
        //    })
        //   $(document).on("click","#deletebtn",function(){
        //     var userid = $(this).data("id");
        //         $.ajax({
        //             url:"ajaxdelete.php",
        //             type:"POST",
        //             data:{id:userid},
        //             success:function(data){
        //                     if(data == 1){
        //                         load();
        //                          $("#successmessage").html("select user deleted.").fadeIn().delay(1000).fadeOut();
        //                     }else{
        //                         $("#errormessage").html("no delete data!").fadeIn().delay(1000).fadeOut();  
        //                     }
        //             }
        //         })
        //    })
        //    $("#message").dialog({
        //         autoOpen: false,
        //         modal: true,
        //         show: {
        //             effect: "blind",
        //             duration: 500,
        //         },
        //         hide: {
        //             effect: "blind",
        //             duration: 400,
        //         },
                
        //     });

            
        //     $(document).on("click","#editbtn",function(){
        //     var editid = $(this).data("id");
        //       $.ajax({
        //         url:"ajaxupdate.php",
        //         type:"POST",
        //         data:{id:editid},
        //         success:function(data){
        //             console.log(data);
        //             $("#message").html(data)
        //         }
        //       })
        //     $("#message").dialog("open");
            
        //    })
        //   $(document).on("click","#editsavebtn",function(){
        //    $editsaveid = $("#editid").val();
        //    $editname = $("#editname").val();
        //    $editemail = $("#editemail").val();
        //    $.ajax({
        //     url:"edituser.php",
        //     type:"POST",
        //     data:{
        //         name:$editname,
        //         email:$editemail,
        //         id:$editsaveid
        //     },
        //     success:function(data){
        //     if(data == 1){
                
        //         load();
        //     }else{
        //         alert("you cannot edit data")
        //     }
        //     }
        //    })

        //   })
        //   $("#searchname").on("keyup",function(){
        //     var searchvalue = $(this).val();
        //     $.ajax({
        //         url:"ajaxsearch.php",
        //         type:"POST",
        //         data:{
        //             searchname:searchvalue
        //         },
        //         success:function(data){
        //             console.log(data);
        //             if(data){
        //                 $("#tabledata").html(data);
        //             }else{
        //                 $("#errormessage").html("no search users").fadeIn().delay(1000).fadeOut(); 
        //             }
        //         }
        //     })
        //   })
        //   $(document).on("click","#acontainer a",function(e){
        //     e.preventDefault();
        //     var attrvalue = $(this).attr("id");
        //     pagina(attrvalue)
        //   })
        function moreload(num){
            $.ajax({
                url:"loadmorepagination.php",
                type:"POST",
                data:{
                    page_no:num,
                },
                success:function(data){
                    if(data){
                        $("#ajaxbtn").remove();
                        $("#tabledata").append(data);  
                    }else{
                        $("#loadbtn").html("finished")
                        $("#loadbtn").prop("disabled",true);
                    }
                    
                }

            })
        }
        moreload();
        $(document).on("click","#loadbtn",function(){
            var id = $(this).data("id");
            console.log(id);
            moreload(id);
        })
            
        })
    </script>
</body>
</html>