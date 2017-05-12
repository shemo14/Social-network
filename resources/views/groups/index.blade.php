@extends('layouts.index')
@section('content')

    <style>
        .test:hover .friend-card .hover_cover .ops{
            background-color: rgba(255, 255, 255, 0.5);
        }
        .ops{
            overflow: hidden;
        }
        .test:hover .friend-card .hover_cover .ops .icons{
            /*visibility: visible;*/
            margin-top: 30%;
        }
    </style>

    @include('layouts.post')
    <div style="text-align: right">
        <a href="#" data-toggle="modal" data-target="#create-item"  style="border-radius: 5px;background-color: rgb(39, 170, 225);color: rgb(255, 255, 255);padding: 6px 18px;font-size: 32px;margin-bottom: 15px;display: inline-block;text-decoration: none;">+</a>
    </div>
    <!-- Friend List
            ================================================= -->
    <div class="friend-list">
        <div id="items" class="row">

        </div>
    </div>

    <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Group</h4>
                </div>
                <div class="modal-body">
                    <form data-toggle="validator" action="{{ route('groups.store') }}" id="create_group" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label" for="title">Name :</label>
                            <input type="text" placeholder="Enter Group Name ..." name="name" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Level :</label>
                            <select name="level" id="" class="form-control">
                                <option value="">--Chose Group level--</option>
                                <option value="level1">Level 1</option>
                                <option value="level2">Level 2</option>
                                <option value="level3">Level 3</option>
                                <option value="level4">Level 4</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Description :</label>
                            <textarea name="desc" placeholder="Enter Group Description ..." class="form-control" data-error="Please enter description." required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Group Cover :</label>
                            <input type="file" name="cover" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary add-group">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Group</h4>
                </div>
                <div class="modal-body" id="insert_form">
                    <form data-toggle="validator" action="" id="edit-group" enctype="multipart/form-data" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="control-label" for="title">Name :</label>
                            <input type="text" placeholder="Enter Group Name ..." name="name" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Level :</label>
                            <select name="level" id="" class="form-control">
                                <option value="">--Chose Group level--</option>
                                <option value="level1">Level 1</option>
                                <option value="level2">Level 2</option>
                                <option value="level3">Level 3</option>
                                <option value="level4">Level 4</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Description :</label>
                            <textarea name="desc" placeholder="Enter Group Description ..." class="form-control" data-error="Please enter description." required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Group Cover :</label>
                            <input type="file" name="cover" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary edit-group">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Group</h4>
                </div>
                <div class="modal-body" id="insert_form">
                        <h2>Are you sure ...??!</h2>
                        <div class="form-group">
                            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary">Close</button>
                            <button class="btn btn-danger delete-group" style="margin-left: 5px;height: 32px;border-radius: 20px;width: 90px;" >Delete</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        var url = "{{ route('groups.index') }}";
        /* Get Page Data*/
        var page = 1;
        getPageData();


        function getPageData() {
            $.ajax({
                dataType: 'json',
                url: url,
                data: {page:page}
            }).done(function(data){
                manageRow(data);
            });
        }

        /* Add new Item table row */
        function manageRow(data) {
            var	item = '';
            $.each( data, function( key, value ) {
                for (var ops in value){
                    console.log(value[ops]['desc']);
                }

               // alert(value.last_page);
                for (var element in value){
                   item = item + '<div class="col-md-6 col-sm-6 test"  id="'+ value[element]['g_id'] +'" data-id="'+ value[element]['g_id'] +'">';
                   item = item + '<div class="friend-card">';
                   item = item + '<div class="hover_cover">';
                   item = item + '<div class="ops" style="height: 158px;width: 100%;transition: 0.5s;position: absolute">';
                   item = item + '<div class="text-center icons" style="transition: 0.5s;position: relative;top: -40px;">';
                   item = item + '<a href="#" data-toggle="modal" onclick="sendData('+ value[element]['g_id'] +', \''+ value[element]['g_name'] +'\', \''+ value[element]['desc'] +'\' , \''+ value[element]['level'] +'\')" data-target="#edit-item" class="edit-item"><i style="font-size: 35px;" class="fa fa-edit"></i></a>';
                   item = item + '<a href="#" onclick="delete_group('+ value[element]['g_id'] +')" data-toggle="modal" data-target="#delete-item"><i style="font-size: 35px;color: rgb(240, 60, 60);" class="fa fa-trash"></i></a>';
                   item = item + '</div>';
                   item = item + '</div>';
                   item = item + '<img style="height: 158px;width: 100%;" src="{{ Request::root() }}/'+ value[element]['path'] + value[element]['filename'] +'" alt="profile-cover" class="img-responsive cover" />';
                   item = item + '</div>';
                   item = item + '<div class="card-info">';
                   item = item + '<div class="friend-info">';
                   item = item + '<a href="#" id="g_level" class="pull-right text-green">'+ value[element]['level'] +'</a>';
                   item = item + '<h5><a href="{{ url('groups') . '/' }}'+ value[element]['g_id'] +'" id="g_name" class="profile-link">'+ value[element]['g_name'] +'</a></h5>';
                   item = item + '<p class="desc">'+ value[element]['desc'] +'</p>';
                   item = item + '<div></div>';
                   item = item + '</div>';
                   item = item + '</div>';
                   item = item + '</div>';
                   item = item + '</div>';
                }
            });


            $("#items").html(item);
        }

        /* Create new Category */
        $(".add-group").click(function(e){
            e.preventDefault();
            var form_action = $("#create-item").find("form").attr("action");
            var data  = new FormData($("#create_group")[0]);

                $.ajax({
                    dataType: 'json',
                    type:'POST',
                    url: form_action,
                    data:data,
                    contentType: false,
                    processData: false,
                    beforesend:function () {

                    },
                    success:function (response) {
                        getPageData();
                        console.log(response);
                        $("#create_group").trigger("reset");
                        $(".modal").modal('hide');
                    },
                    error:function (error) {
                        console.log(error);
                    }
                });
        });


        // Edit Category
        function sendData(id, name, desc, level) {
            $("#edit-group").find("input[name='name']").val(name);
            $("#edit-group").find("select[name='level']").val(level);
            $("#edit-group").find("textarea[name='desc']").val(desc);
            $("#edit-group").attr("action", "group/" + id + "/update");
        }


        /* Updated Category */
        $(".edit-group").click(function(e){
            e.preventDefault();
            var form_action = $("#edit-group").attr("action");
            var data_  = new FormData($("#edit-group")[0]);

            $.ajax({
                dataType: 'json',
                type:'POST',
                url: form_action,
                data:data_,
                contentType: false,
                processData: false,
                beforesend:function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                success:function (response) {
                    getPageData();
                    console.log(response);
                    $(".modal").modal('hide');
                },
                error:function (error) {
//                    alert(form_action);
                    console.log(error);
                }
            });
        });


        /* Remove Category */
        function delete_group(id) {
//            alert(id)
            var c_obj = $("#"+ id +"");

            $(".delete-group").click(function(e) {
                e.preventDefault();
                $.ajax({
                    dataType: 'json',
                    type: 'get',
                    url: 'group/' + id,
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');
                        if (token) {
                            return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    success: function (data) {
                        c_obj.remove();
                        getPageData();
                        $(".modal").modal('hide');
                    },
                    error: function (error) {
                        console.log(error);
                    }

                });
            });
        }

    </script>
@stop