@extends('layouts.master')
@section('content')
    @include('backend.dashboard.includes.header')
    <div class="wrapper wrapper-content animated fadeInRight ecommerce">
        @include('backend.dashboard.includes.search')
        @if (session('sucess'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <table
                            class="footable table table-stripped toggle-arrow-tiny default breakpoint footable-loaded"
                            data-page-size="15">
                            <thead>
                            <tr>
                                <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">
                                    Id<span class="footable-sort-indicator"></span></th>
                                <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">
                                    Name<span class="footable-sort-indicator"></span></th>
                                <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">
                                    Email<span class="footable-sort-indicator"></span></th>
                                <th data-hide="role_name" class="footable-visible footable-sortable">Role Name<span
                                        class="footable-sort-indicator"></span></th>
                                <th data-hide="phone" class="footable-visible footable-sortable">Status<span
                                        class="footable-sort-indicator"></span></th>
                                <th class="text-right footable-visible footable-last-column" data-sort-ignore="true">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($users))
                                @foreach($users as $user)
                                    <tr class="footable-even" style="">
                                        <td class="footable-visible footable-first-column"><span
                                                class="footable-toggle"></span>
                                            {{ucfirst($user->id) }}
                                        </td>
                                        <td class="footable-visible footable-first-column"><span
                                                class="footable-toggle"></span>
                                            {{ucfirst($user->name) }}
                                        </td>
                                        <td class="footable-visible">
                                            {{ucfirst($user->email)}}
                                        </td>
                                        <td class="footable-visible">
                                            {{ isset($user) && (!empty(json_decode($user->getRoleNames()))) ? implode(json_decode($user->getRoleNames()) ,' ') : 'unsigned'}}
                                        </td>
                                        <td class="footable-visible">
                                            <span class="label label-primary" id="status"
                                                  value={{isset($user) && ($user->email_verified_at !== null)? 'verify': 'unverify'}}>{{isset($user) && ($user->email_verified_at!== null )?'Enable':'Disable'}}</span>
                                        </td>
                                        <td class="text-right footable-visible footable-last-column">
                                            <div class="btn-group">
                                                <a href="{{ route('roles.edit', isset($user) && ($role = $user->id)?$role:'') }}">
                                                    <button class="btn-white btn btn-xs view">Role</button>
                                                </a>
                                                <a href="#">
                                                    <button class="btn-white btn btn-xs view" data-toggle="modal" data-target="#myModal">View</button>
                                                </a>
                                                <a href="#"
                                                   onclick="deleteRole(event);">
                                                    <button class="btn-white btn btn-xs view">Delete</button>
                                                </a>
                                                <script type="text/javascript">
                                                    function deleteRole (event)
                                                    {
                                                        event.preventDefault();
                                                        let confirmDeleteRole = confirm("Are you sure you want to delete ?")
                                                        if (confirmDeleteRole) {
                                                            document.getElementById('delete-form').submit();
                                                        }
                                                    }
                                                </script>
                                                <form id="delete-form"
                                                      action="{{ route('roles.destroy',isset($user) && ($role = $user->id)?$role:'') }}"
                                                      method="POST" style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>


                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6" class="footable-visible">
                                    {{ $users->links() }}
{{--                                    <ul class="pagination pull-right">--}}
{{--                                        <li class="footable-page-arrow disabled"><a data-page="first"--}}
{{--                                                                                    href="#first">«</a></li>--}}
{{--                                        <li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="footable-page active"><a data-page="0" href="#">1</a></li>--}}
{{--                                        <li class="footable-page"><a data-page="1" href="#">2</a></li>--}}
{{--                                        <li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li>--}}
{{--                                        <li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li>--}}
                                    </ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">View Profile</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection
