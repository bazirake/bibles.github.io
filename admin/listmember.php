

<?php include('./include/header.php');
include('./include/navbar.php');
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      <!-- Topbar -->
      <?php include('./include/topBar.php'); ?>
       <!-- End of Topbar -->
       <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="h5 mb-2 text-gray-800">Members</h5>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="float-left">
                      <i class="fa fa-list"></i>
                        Members <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#registrationmodel">
                            <i class="fa fa-plus-circle"></i> Add Member</button>
                        <a style="background-color: #8c6c44; border-color: #8c6c44; margin-left: 6px;" href="javascript:;" class="btn btn-warning btn-sm" id="trefresh">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>Reflesh table</a>
                    </div>
                  <div class="float-right">
                      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                          <div class="input-group">
                              <input type="text" class="form-control  border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                  <button class="btn btn-primary" type="button">
                                      <i class="fas fa-search fa-sm"></i>
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>N<sup>o</sup></th>
                                <th>Fname</th>
                                <th>Lname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="mcontent">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- Registration Model -->
    <div class="modal fade  " id="registrationmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">
                        New Member registration Form</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                 </button>
                </div>
                <div class="modal-body">
                    <div class="card  px-4 w-100 ">
                        <h4 class="text-center p-4">Register your Personal Information </h4>
                        <form id="member-form" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Firstname</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Firstname" name="fname" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Lastname</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Lastname" name="lname" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">DateOfBirth</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="dates" class="form-control" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label ">LocalCommunity</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="locmunity" class="form-control" placeholder="Rusizi"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">CurrentCommunity</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="curcomunity" placeholder="Kigali" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Phone</label>
                                        <div class="col-sm-8">
                                            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Eg:0787124101" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Country</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="country" placeholder="Eg:Rwanda" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Province</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="province" class="form-control" placeholder="Eg:West" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">District</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="district" placeholder="Eg:Rusizi" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Sector</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="sector" class="form-control" placeholder="Eg:Gitambi" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Cell</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="cell" placeholder="Eg:Mashesha" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Village</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="village" placeholder="karama" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 r">
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="feedback">
                                                <span id="data-show"></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="float-right mb-2">
                                                <button type="button"  color="accent" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                                <button  id=save-id color="primary" type="submit" class="btn btn-primary  ml-4">
                                                    Save
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End of Main Content -->
    <!-- End of Content Wrapper -->
    <?php
    include('./include/scripts.php');
    include('./include/footer.php');
    ?>

<script type="text/x-handlebars-template" id="mid">
     {{#if pushdata.length}}
         {{#each pushdata}}
             <tr>
                 <td>{{id}}</td>
                 <td>{{fname}}</td>
                 <td>{{lname}}</td>
                 <td>{{email}}</td>
                 <td>{{phone}}</td>
                 <td>{{dates}}</td>
                 <td>
                   <a class="add" title="View Details"><i class="far fa-eye"></i></a>
                   <a class="add" title="Edit member"><i class="fas fa-edit"></i></a>
                   <a class="add" title="Delete member"><i class="far fa-trash-alt"></i></a>
                 </td>
             </tr>
         {{/each}}
     {{else}}
      <p style="position: absolute;left:470px;">  No record is Found</p>
     {{/if}}

</script>
    <script type="text/javascript">
        var t1=$("#mid").html();
        var tc=Handlebars.compile(t1);
        $("#trefresh").click(function(){
           loadMdata();
        });

        async function loadMdata()
         {
        var loader='<div class="py-1" style="position: absolute;left:470px;">Loading data..<span class="text-success spinner-border"></span></div>';
           $("#mcontent").html(loader);
             var path='../database/api/getmember.php';
            await  axios.get(path)
             .then(function(response){
                $("#mcontent").html(tc(response.data));
                 console.log(response.data);
                })
               .catch(function(error){
                 console.log(error);
              });
             //$("p").html(template(data));
           }

           //feedback information
        $("#feedback").css({'display':'none'});
        $('#member-form').submit(function(e){
            var loader='<span class="spinner-grow " role="status"></span>' +
                '<span>Saving...</span>';
            $("#save-id").html(loader);
            var path='../database/api/member.php';
            e.preventDefault();
            var fdata= $(this).serialize();
            $.ajax({
                type: "POST",
                data:fdata,
                dataType:'json',
                url:path,
                success:function(response){
                    if(response.status===200)
                    {
                      $("#feedback").css({'display':'block'});
                      $('#data-show').html(response.mess);
                      document.getElementById("member-form").reset();
                      $("#registrationmodel").modal('hide');
                       loadMdata();
                      $("#save-id").html('Save');
                    }
                    else if(response.status===404){
                        $("#feedback").css({'display':'block'});
                        $('#data-show').html(response.me);
                        $("#save-id").html('Save');
                    }
                }
            });
        });


     (function(){
      loadMdata();
      })();
    </script>






