<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'required' => true]) !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'required' => true]) !!}
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {{-- {!! Form::text('password', null, ['class' => 'form-control', 'id' => 'password', 'type' => 'password']) !!} --}}
    <input type="password" name="password" id="password" class="form-control" placeholder="請輸入密碼，最少6碼" minlength="6">
    @if (Request::is('admin/adminUsers/edit*'))
    <span class="help-block text-danger">★若欲變更密碼，才需輸入密碼，最少6碼</span>
    @endif

</div>
