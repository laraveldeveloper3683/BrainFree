@extends('layouts.master')
@section('content')

@include('backend.admin.dashboard.includes.header')

<div class="wrapper wrapper-content animated fadeInRight ecommerce">


@include('backend.admin.dashboard.includes.search')
            @if (session('sucess'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny default breakpoint footable-loaded" data-page-size="15">
                                <thead>
                                <tr>

                                    <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">Name<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Email<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="all" class="footable-sortable">Phone Number<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Status<span class="footable-sort-indicator"></span></th>
                                    <th class="text-right footable-visible footable-last-column" data-sort-ignore="true">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                  @if(isset($vendors))
                                  @foreach($vendors as $vendor)
                                  <tr class="footable-even" style="">
                                      <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                         {{ucfirst($vendor->f_name)}} {{ucfirst($vendor->l_name)}}
                                      </td>
                                      <td class="footable-visible">
                                          {{ucfirst($vendor->email)}}
                                      </td>
                                      <td class="footable-visible">
                                          {{ucfirst($vendor->phone)}}
                                      </td>
                                      <td class="footable-visible">
                                          <span class="label label-primary" id ="status" value={{isset($vendor) && ($vendor->status == 1)? 1 : 2}}>{{isset($vendor) && ($vendor->status== 1)?'Enable':'Disable'}}</span>
                                      </td>
                                      <td class="text-right footable-visible footable-last-column">
                                          <div class="btn-group">
                                              <button class="btn-white btn btn-xs view" value="{{isset($vendor) && $vendor->id ? $vendor->id : ''}}">View</button>
                                              <button class="btn-white btn btn-xs edit" value="{{isset($vendor) && $vendor->id ? $vendor->id : ''}}">Edit</button>
                                              <button class="btn-white btn btn-xs block" value ="{{isset($vendor) && $vendor->id ? $vendor->id : ''}}">{{isset($vendor) && ($vendor->status==1) ? 'Block' : 'UnBlock'  }}</button>
                                              <button class="btn-white btn btn-xs delete" value ="{{isset($vendor) && $vendor->id ? $vendor->id : ''}}">Delete</button>
                                          </div>
                                      </td>
                                  </tr>
                                  @endforeach
                                  @endif
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6" class="footable-visible">
                                        <ul class="pagination pull-right"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


        </div>

@endsection
@section('script')
<script>
$(document).ready(function(){
  $(document).on('click','.delete',function() {
    var t = $(this);
    var value = $(this).attr('value');
    var ask = window.confirm("Are you sure you want to delete this post?");
    if( ask){
     $.ajax({
     url: 'vendor/delete',
     type: "GET",
     data: {id:value},
     success: function(response){ // What to do if we succeed
                  alert(response.message);
                    t.parent().parent().parent().css('display','none');
    }
   });
    }
  });

  $(document).on('click','.block',function() {
  var id = $(this).val();
  var status = $('#status').val();
  alert(status);
  var ask = window.confirm("Are you sure you want to block this post?");
  if(ask){
    $.ajax({
      url:'vendor/block',
      type : 'GET',
      data : {id: id,status:status},
      success: function(response){ // What to do if we succeed
                   alert(response.data.data);

     }
    });


  }
});


$(document).on('click','.edit',function() {
var id = $(this).val();
var ask = window.confirm("Are you sure you want to Edit this Post?");
if(ask && id)
{
  window.location.href = "/admin/vendor/edit/"+id

}

});

$(document).on('click','.view',function() {
var id = $(this).val();
var ask = window.confirm("Are you sure you want to View this Profile?");
if(ask && id)
{
  window.location.href = "/admin/vendor/view"
}

});


});
</script>
@endsection
