<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href="/contacts/create" class="btn btn-success">Create</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <select name="sort_by" id="sort_by" onchange="sort_list()">
                <option value="">Sort By</option>
                <option value="name">Name</option>
                <option value="date">Date</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <input type="text" name="search_by" id="search_by">
        </div>
        <div class="col-sm-6">
            <button class="btn btn-primary" name="btn_search" id="btn_search" onclick="search_list()">Search</button>
        </div>
    </div>
    <br>        
    <div class="row">            
        <div class="col-sm-12">
            <table width="100%">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                @foreach ($contacts as $contact)
                <tr>
                    <td class="td-properties">{{ $contact['name'] }}</td>
                    <td class="td-properties">{{ $contact['email'] }}</td>
                    <td class="td-properties">{{ $contact['phone'] }}</td>
                    <td class="td-properties">{{ $contact['address'] }}</td>
                    <td class="td-properties">
                        <a href="/contacts/{{ $contact['id'] }}" class="btn btn-primary">View</a>
                        <a href="/contacts/{{ $contact['id'] }}/edit" class="btn btn-warning">Edit</a>
                        <form action="{{ route('contact.delete', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?');">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>        
</div>
<script>
    function sort_list(){
        sort_by = document.getElementById('sort_by').value;
        window.location.href = `/contacts?sort_by=${sort_by}`;
    }

    function search_list(){
        search_by = document.getElementById('search_by').value;
        window.location.href = `/contacts?search_by=${search_by}`;
    }
</script>