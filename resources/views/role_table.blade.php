<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<div class="modal-content">
    <div class="modal-header bg-primary">
        <h3 class="modal-title">{{$fill[0]->person_name}} : Roles</h3>
        <a href="#" class="btn" data-bs-dismiss="modal" aria-label="Close" style="font-size: 24px;">
            <i class="bi bi-x-octagon-fill"></i>
        </a>
    </div>
    <div class="modal-body">
        <div class="card">
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table id="user_roles_data" class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>{{__('State')}}</th>
                            <th>{{__('Description')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fill as $row)
                        <tr>
                            <td>
                                @if($row->state == 1)
                                <button type="button" title="Habilitado" class="btn role_button_state ena" data-state="{{$row->state}}" data-id="{{$row->id}}" value="{{$row->user_id}}">
                                    <i class="bi bi-toggle-on"></i>
                                </button>
                                @else
                                <button type="button" title="Deshabilitado" class="btn role_button_state disa" data-state="{{$row->state}}" data-id="{{$row->id}}" value="{{$row->id}}">
                                    <i class="bi bi-toggle-on"></i>
                                </button>
                                @endif
                            </td>
                            <td>{{$row->role_description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    </div>
</div>