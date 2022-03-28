<form action="{{route('login')}}" method="post">
    @csrf

    <div class="form-group row mt-3">
        <label for="" class="col-md-4 col-form-label">Email</label>
        <div class="col-md-8">
            <input type="email" class="form-control" name="email">
        </div>
    </div>
    <div class="form-group row mt-3">
        <label for="" class="col-md-4 col-form-label">Password</label>
        <div class="col-md-8">
            <input type="password" class="form-control" name="password">
        </div>
    </div>
    <div class="form-group row mt-3">
        <div class="d-grid">
            <input type="submit" class="btn col-12 btn-success " value="Register" >
        </div>
    </div>
</form>
