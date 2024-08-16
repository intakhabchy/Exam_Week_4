<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table>
                <table width="100%">
                    <tr>
                        <td>Name</td>
                        <td>{{$contactInfo['name']}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$contactInfo['email']}}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{$contactInfo['phone']}}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{$contactInfo['address']}}</td>
                    </tr>
                </table>
            </table>
        </div>
    </div>
</div>