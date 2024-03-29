<div class="table-responsive">
    <table class="table" id="aboutUsers-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($adminUsers as $adminUser)
            <tr>
                <td>{{ $adminUser->name }}</td>
                <td>{{ $adminUser->email }}</td>
                <td width="120">

                    {!! Form::open(['route' => ['admin.adminUsers.destroy', $adminUser->id], 'method' => 'delete']) !!}

                    <div class='btn-group {{ $adminUser->id == 1 && Auth::user()->id != 1 ? 'd-none' : '' }}'>
                        {{-- <a href="{{ route('admin.adminUsers.show', [$adminUser->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a> --}}
                        <a href="{{ route('admin.adminUsers.edit', [$adminUser->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @if (Auth::user()->id <= 2)
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endif
                    </div>

                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
