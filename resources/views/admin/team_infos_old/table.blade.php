<div class="table-responsive">
    <table class="table" id="teamInfos-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Role</th>
        <th>Introduce</th>
        <th>Degree</th>
        <th>Expertise</th>
        <th>Certificate License</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teamInfos as $teamInfo)
            <tr>
                <td>{{ $teamInfo->name }}</td>
            <td>{{ $teamInfo->role }}</td>
            <td>{{ $teamInfo->introduce }}</td>
            <td>{{ $teamInfo->degree }}</td>
            <td>{{ $teamInfo->expertise }}</td>
            <td>{{ $teamInfo->certificate_license }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['teamInfos.destroy', $teamInfo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teamInfos.show', [$teamInfo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('teamInfos.edit', [$teamInfo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
