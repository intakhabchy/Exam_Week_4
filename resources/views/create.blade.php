<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form action="{{route('contact.store')}}" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-sm-4 div-properties" style="text-align: right">
                Name:
            </div>
            <div class="col-sm-4 div-properties">
                <input type="text" name="name" id="name">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 div-properties" style="text-align: right">
                Email:
            </div>
            <div class="col-sm-4 div-properties">
                <input type="text" name="email" id="email">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 div-properties" style="text-align: right">
                Phone:
            </div>
            <div class="col-sm-4 div-properties">
                <input type="text" name="phone" id="phone">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 div-properties" style="text-align: right">
                Address:
            </div>
            <div class="col-sm-4 div-properties">
                <input type="text" name="address" id="address">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 div-properties" style="text-align: center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>